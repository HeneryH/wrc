<?php

namespace Drupal\cl_generator\Generators;

use Drupal\Core\Extension\ExtensionLifecycle;
use Drupal\Core\Asset\LibraryDiscoveryInterface;
use DrupalCodeGenerator\Asset\File;
use DrupalCodeGenerator\Command\DrupalGenerator;
use Symfony\Component\Console\Question\Question;

/**
 * Integration service with the drush generate framework.
 */
final class ComponentGenerator extends DrupalGenerator {

  /**
   * {@inheritdoc}
   */
  protected ?string $nameQuestion = NULL;

  /**
   * {@inheritdoc}
   */
  protected ?int $extensionType = self::EXTENSION_TYPE_THEME;

  /**
   * {@inheritdoc}
   */
  protected bool $isNewExtension = FALSE;

  /**
   * {@inheritdoc}
   */
  protected string $name = 'theme:sdc:component';

  /**
   * {@inheritdoc}
   */
  protected string $description = 'Generates an empty component.';

  /**
   * {@inheritdoc}
   */
  protected string $alias = 'sdc';

  /**
   * {@inheritdoc}
   */
  protected string $templatePath = __DIR__;

  /**
   * Illustrates how to inject a dependency into a Generator.
   *
   * @var \Drupal\Core\Asset\LibraryDiscoveryInterface
   */
  protected LibraryDiscoveryInterface $libraryDiscovery;

  /**
   * Creates a new generator object.
   *
   * @param \Drupal\Core\Asset\LibraryDiscoveryInterface $library_discovery
   *   Library discovery.
   */
  public function __construct(LibraryDiscoveryInterface $library_discovery) {
    parent::__construct($this->name);
    $this->libraryDiscovery = $library_discovery;
  }

  /**
   * {@inheritdoc}
   */
  protected function generate(&$vars): void {
    $vars = $this->askQuestions($vars);
    $this->generateAssets($vars);
  }

  /**
   * Asks the questions to the user.
   *
   * @param array $vars
   *   The answers array passed by reference.
   *
   * @return array
   *   The answers to the questions.
   */
  private function askQuestions(array &$vars): array {
    $extension_type = $this->choice('Generate component in a theme or a module?', [
      'theme' => 'theme',
      'module' => 'module',
    ], 'theme');
    $this->extensionType = $extension_type === 'module' ? self::EXTENSION_TYPE_MODULE : self::EXTENSION_TYPE_THEME;
    $this->machineNameQuestion = 'Machine name of the ' . $extension_type;
    $this->collectDefault($vars);
    $vars['directory'] = $this->ask('Components directory', 'components', '::validateRequired');
    $vars['component_machine_name'] = $this->ask('Component machine name', 'my-component', '::validateRequiredMachineName');
    $default = \ucwords(\trim(\str_replace([
      '_',
      '-',
    ], ' ', $vars['component_machine_name'])));
    $vars['component_name'] = $this->ask('Component name', $default, '::validateRequired');
    $vars['component_description'] = $this->ask('Component description (optional)');
    $choices = [
      ExtensionLifecycle::STABLE,
      ExtensionLifecycle::EXPERIMENTAL,
      ExtensionLifecycle::DEPRECATED,
      ExtensionLifecycle::OBSOLETE,
    ];
    $vars['component_status'] = $this->choice('Project type', \array_combine($choices, $choices), ExtensionLifecycle::STABLE);
    $vars['component_libraries'] = [];
    do {
      $library = $this->askLibrary();
      $vars['component_libraries'][] = $library;
    } while (!empty($library));
    $vars['component_libraries'] = \array_filter($vars['component_libraries']);
    $vars['component_has_css'] = $this->confirm('Needs CSS?');
    $vars['component_has_js'] = $this->confirm('Needs JS?');
    if ($this->confirm('Needs component props?')) {
      $vars['component_props'] = [];
      do {
        $prop = $this->askProp();
        $vars['component_props'][] = $prop;
      } while ($this->confirm('Add another prop?'));
    }
    $vars['component_props'] = \array_filter($vars['component_props'] ?? []);
    return $vars;
  }

  /**
   * Create the assets that the framework will write to disk later on.
   *
   * @param array $vars
   *   The answers to the CLI questions.
   */
  private function generateAssets(array $vars): void {
    $component_path_token = '{directory}' . DIRECTORY_SEPARATOR . '{component_machine_name}' . DIRECTORY_SEPARATOR;
    if ($vars['component_has_css']) {
      $this->addFile(
        $component_path_token . '{component_machine_name}.css',
        'main-css--template.twig'
      );
    }
    if ($vars['component_has_js']) {
      $this->addFile(
        $component_path_token . '{component_machine_name}.js',
        'main-js--template.twig'
      );
    }
    $this->addFile(
      $component_path_token . '{component_machine_name}.twig',
      'component-twig--template.twig'
    );
    $this->addFile($component_path_token . '{component_machine_name}.component.yml', 'component-yml--template.twig');
    $this->addFile($component_path_token . 'README.md', 'readme-md--template.twig');
    $contents = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'thumbnail-placeholder.png');
    $thumbnail = new File($component_path_token . 'thumbnail.png');
    $thumbnail->content($contents);
    $this->assets[] = $thumbnail;
  }

  /**
   * Prompts the user for a library.
   *
   * This helper gathers all the libraries from the system to allow autocomplete
   * and validation.
   *
   * @return string|null
   *   The library ID, if any.
   */
  private function askLibrary(): ?string {
    $library_question = new Question('Library dependencies (optional). [Example: core/once]');
    $extensions = [
      'core',
      ...\array_keys($this->drupalContext->getModules()),
      ...\array_keys($this->drupalContext->getThemes()),
    ];
    $library_ids = array_reduce(
      $extensions,
      fn(array $libs, string $extension) => \array_merge(
        $libs,
        \array_map(static fn(string $l) => sprintf('%s/%s', $extension, $l),
          \array_keys($this->libraryDiscovery->getLibrariesByExtension($extension)))
      ),
      []
    );
    $library_question->setValidator(static::libraryValidator($library_ids));
    $library_question->setAutocompleterValues($library_ids);
    return $this->io->askQuestion($library_question);
  }

  /**
   * Asks for multiple questions to define a prop and its schema.
   *
   * @return array
   *   The prop data, if any.
   */
  protected function askProp(): array {
    $prop = [];
    $prop['name'] = $this->ask('Prop machine name', NULL, '::validateRequiredMachineName');
    $default = str_replace(['-', '_'], ' ', $prop['name']);
    $default = ucwords($default);
    $prop['title'] = $this->ask('Prop human name', $default);
    $prop['description'] = $this->ask('Prop description (optional)');
    $prop['type'] = $this->choice('Prop type', [
      'string' => 'String',
      'number' => 'Number',
      'boolean' => 'Boolean',
      'array' => 'Array',
      'object' => 'Object',
      'null' => 'Always null',
    ]);
    if (!in_array($prop['type'], ['string', 'number', 'boolean'])) {
      $this->io->warning('Unable to generate full schema for ' . $prop['type'] . '. Please edit metadata.json after generation.');
      return $prop;
    }
    $prop['examples'] = [];
    if ($prop['type'] === 'string') {
      // Gather examples.
      do {
        $example = $this->ask('Give a prop example (optional)');
        $prop['examples'][] = $example;
      } while (!is_null($example));
      $prop['examples'] = \array_filter($prop['examples']);
    }
    return $prop;
  }

  /**
   * Builds the library validator based on the allowed list.
   *
   * @param array $library_ids
   *   Allowed libraries.
   *
   * @return callable
   *   The validator function.
   */
  public static function libraryValidator(array $library_ids): callable {
    return static fn($value) => is_null($value) || \in_array($value, $library_ids, TRUE) ? $value : throw new \UnexpectedValueException('Invalid library ID');
  }

  /**
   * Validates that a string is in kebab case.
   *
   * @param string|null $value
   *   The input value to validate.
   */
  public static function validateMachineName(?string $value): string {
    return static::validate(
      $value,
      '^[a-z][a-z0-9-]*[a-z0-9]$',
      'The value is not in the correct format. Ex: a-kebab-case-str1ng'
    ) ?? '';
  }

  /**
   * Validates that a string is in kebab case and it is required.
   *
   * @param string|null $value
   *   The input value to validate.
   */
  public static function validateRequiredMachineName(?string $value): string {
    $value = static::validateRequired($value);
    return static::validate(
      $value,
      '^[a-z][a-z0-9-_]*[a-z0-9]$',
      'The value is not in the correct format. Ex: a-kebab-case-str1ng'
    );
  }

}
