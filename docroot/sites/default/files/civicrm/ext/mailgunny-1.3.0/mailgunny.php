<?php

require_once 'mailgunny.civix.php';
use CRM_Mailgunny_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function mailgunny_civicrm_config(&$config) {
  _mailgunny_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function mailgunny_civicrm_install() {
  _mailgunny_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function mailgunny_civicrm_enable() {
  _mailgunny_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function mailgunny_civicrm_entityTypes(&$entityTypes) {
  _mailgunny_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Try to embed VERP data in a way that Mailgun will provide to webhooks.
 *
 * Implements hook_civicrm_alterMailParams(&$params, $context)
 *
 * Note that this hook is NOT called when sending mail to test the SMTP credentials.
 */
function mailgunny_civicrm_alterMailParams(&$params, $context) {

  if (!isset(Civi::$statics[__FUNCTION__])) {
    Civi::$statics[__FUNCTION__] = [
      'native' => Civi::settings()->get('mailgun_native_send'),
      'list_unsubscribe' => Civi::settings()->get('mailgun_list_unsubscribe_domain'),
    ];
    // Civi::log()->info("mailgun_native_send: ". json_encode(Civi::$statics[__FUNCTION__]));
  }
  if (!empty(Civi::$statics[__FUNCTION__]['native'])) {
    // Civi::log()->info("Added x-mailgun-native-send");
    $params['headers']['x-mailgun-native-send'] = 'true';
  }

  if (isset($params['X-CiviMail-Bounce'])) {
    // Copy this header to one that will be returned by Mailgun's webhook.
    $params['headers']['X-Mailgun-Variables'] = json_encode(['civimail-bounce' => $params['X-CiviMail-Bounce']]);
  }
  elseif (isset($params['Return-Path'])) {
    // Copy this header to one that will be returned by Mailgun's webhook.
    $params['headers']['X-Mailgun-Variables'] = json_encode(['civimail-bounce' => $params['Return-Path']]);
  }
  else {
    // Probably a single email, for which we don't have any useful information to add.
  }

  // Civi::log()->info("LU: top level: " . implode(', ', array_keys($params)));
  // Civi::log()->info("LU: headers level: " . implode(', ', array_keys($params['headers'] ?? [])));
  $lu = Civi::$statics[__FUNCTION__]['list_unsubscribe'] ?? '';
  if (!empty($params['List-Unsubscribe']) && $lu) {
    $params['List-Unsubscribe'] = preg_replace('/@[^> "]+/', "@$lu", $params['List-Unsubscribe']);
    // Civi::log()->info("LU: now " . ($params['List-Unsubscribe'] ?? ''));
  }
  /*
   * $context = (string [10]) `flexmailer`
   * $params['X-CiviMail-Mosaico'] = (string [3]) `Yes`
   * $params['List-Unsubscribe'] = (string [52]) `<mailto:u.72.32.fa5f74c72c53c77f@crm.example.com>`
   * $params['Precedence'] = (string [4]) `bulk`
   * $params['job_id'] = (string [2]) `72`
   * $params['From'] = (string [37]) `"Wilma Flintstone" <wilma@example.com>`
   * $params['toEmail'] = (string [20]) `barney@example.com`
   * $params['toName'] = (string [12]) `Barney Rubble`
   * $params['Return-Path'] = (string [43]) `b.72.32.fa5f74c72c53c77f@crm.example.com`
   * $params['X-CiviMail-Bounce'] = (string [43]) `b.72.32.fa5f74c72c53c77f@crm.example.com`
   * $params['attachments'] = (array)
 */
}
/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
function mailgunny_civicrm_navigationMenu(&$menu) {
  _mailgunny_civix_insert_navigation_menu($menu, 'Administer/CiviMail', [
    'label' => E::ts('Mailgunny settings'),
    'name' => 'mailgunny_settings',
    'url' => 'civicrm/mailgunny/settings',
    'permission' => 'administer CiviCRM system',
    //'permission' => 'access CiviCRM',
    'operator' => 'OR',
    'separator' => 0,
  ]);
  _mailgunny_civix_navigationMenu($menu);
}
