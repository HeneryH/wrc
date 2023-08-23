<?php

require_once 'group2summary.civix.php';
use CRM_Group2summary_ExtensionUtil as E;

/**
 * Implements hook_civicrm_summary().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_summary
 */
function group2summary_civicrm_summary($contactID, &$content) {
  CRM_Core_Region::instance('page-body')->add([
    'template' => 'group2summary.tpl'
  ]);
}

function group2summary_civicrm_config(&$config) {
  _group2summary_civix_civicrm_config($config);
}
