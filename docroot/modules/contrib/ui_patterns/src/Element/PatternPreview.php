<?php

namespace Drupal\ui_patterns\Element;

use Drupal\Core\Render\Markup;
use Drupal\ui_patterns\UiPatterns;

/**
 * Renders a pattern preview element.
 *
 * @RenderElement("pattern_preview")
 */
class PatternPreview extends Pattern {

  /**
   * Process fields.
   *
   * @param array $element
   *   Render array.
   *
   * @return array
   *   Render array.
   */
  public static function processFields(array $element) {
    $definition = UiPatterns::getPatternDefinition($element['#id']);

    $fields = [];
    foreach ($definition->getFields() as $field) {
      $fields[$field->getName()] = $field->getPreview();
    }

    if (isset($definition['additional']['attributes'])) {
      $fields['attributes'] = $definition['extra']['attributes'];
    }
    $element['#fields'] = $fields;

    return parent::processFields($element);
  }

  /**
   * {@inheritdoc}
   */
  public static function processContext(array $element) {
    $element['#context'] = new PatternContext('preview');

    return $element;
  }

}
