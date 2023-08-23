<?php
// This file declares a new entity type. For more details, see "hook_civicrm_entityTypes" at:
// https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
return [
  [
    'name' => 'DiscountCode',
    'class' => 'CRM_CiviDiscount_DAO_Item',
    'table' => 'cividiscount_item',
  ],
];
