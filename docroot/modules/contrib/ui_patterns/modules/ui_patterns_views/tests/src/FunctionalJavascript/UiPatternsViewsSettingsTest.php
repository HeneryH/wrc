<?php

namespace Drupal\Tests\ui_patterns_views\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\WebDriverTestBase;
use Drupal\views\Entity\View;

/**
 * Test that UI Patterns Views display formatter can be properly configured.
 *
 * @group ui_patterns_views
 */
class UiPatternsViewsSettingsTest extends WebDriverTestBase {

  /**
   * Default theme.
   *
   * @var string
   */
  protected $defaultTheme = 'stark';

  /**
   * Disable schema validation when running tests.
   *
   * @var bool
   *
   * @todo Fix this by providing actual schema validation.
   */
  protected $strictConfigSchema = FALSE;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'field',
    'ui_patterns_views_test',
  ];

  /**
   * Test that pattern field group settings are correctly saved.
   */
  public function testUiPatternsViewsSettings() {
    $page = $this->getSession()->getPage();
    $assert_session = $this->assertSession();

    $user = $this->drupalCreateUser([], NULL, TRUE);
    $this->drupalLogin($user);

    // Visit Articles views setting page.
    $this->drupalGet('/admin/structure/views/view/articles');

    // Access format settings.
    $page->clickLink('Change settings for this format');
    $assert_session->assertWaitOnAjaxRequest();

    // Configure format.
    $page->selectFieldOption('style_options[variants][teaser_wrapper]', 'Highlighted');
    $page->selectFieldOption('style_options[pattern_mapping][teaser_wrapper][settings][view_style:rows][destination]', 'Title');

    // Submit format settings.
    $page->find('css', '.ui-dialog-buttonpane .form-actions')->pressButton('Apply');
    $assert_session->assertWaitOnAjaxRequest();

    // Access row settings.
    $page->clickLink('Change settings for this style');
    $assert_session->assertWaitOnAjaxRequest();

    // Configure row.
    $page->selectFieldOption('Variant', 'Highlighted');
    $page->selectFieldOption('Destination for Content: Title', 'Description');

    // Submit row settings.
    $page->find('css', '.ui-dialog-buttonpane .form-actions')->pressButton('Apply');
    $assert_session->assertWaitOnAjaxRequest();

    // Save view.
    $page->find('css', '#edit-actions')->pressButton('Save');

    $view = View::load('articles');

    $style_settings = $view->getDisplay('default')['display_options']['style']['options'];
    // Assert settings values.
    $this->assertEquals($style_settings['pattern'], 'teaser_wrapper');
    $this->assertEquals($style_settings['pattern_variant'], 'highlighted');
    // Assert mappings.
    $this->assertNotEmpty($style_settings['pattern_mapping'], "Pattern mapping is empty.");
    $mapping = $style_settings['pattern_mapping'];
    $this->assertArrayHasKey('view_style:title', $mapping, 'Mapping not found.');
    $this->assertEquals($mapping['view_style:title']['destination'], 'title', "Mapping not valid.");
    $this->assertArrayHasKey('view_style:rows', $mapping, 'Mapping not found.');
    $this->assertEquals($mapping['view_style:rows']['destination'], 'title', "Mapping not valid.");

    $row_settings = $view->getDisplay('default')['display_options']['row']['options'];
    // Assert settings values.
    $this->assertEquals($row_settings['pattern'], 'teaser');
    $this->assertEquals($row_settings['pattern_variant'], 'highlighted');
    // Assert mappings.
    $this->assertNotEmpty($row_settings['pattern_mapping'], "Pattern mapping is empty.");
    $mapping = $row_settings['pattern_mapping'];
    $this->assertArrayHasKey('views_row:title', $mapping, 'Mapping not found.');
    $this->assertEquals($mapping['views_row:title']['destination'], 'description', "Mapping not valid.");
  }

}
