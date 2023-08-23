<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from mjwshared/xml/schema/CRM/Mjwshared/PaymentprocessorWebhook.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:72cfd9cdecd1d3775dfb794e3b430795)
 */
use CRM_Mjwshared_ExtensionUtil as E;

/**
 * Database access object for the PaymentprocessorWebhook entity.
 */
class CRM_Mjwshared_DAO_PaymentprocessorWebhook extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_paymentprocessor_webhook';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique PaymentprocessorWebhook ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * Payment Processor for this webhook
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $payment_processor_id;

  /**
   * Webhook event ID
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $event_id;

  /**
   * Webhook trigger event type
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $trigger;

  /**
   * When the webhook was first received by the IPN code
   *
   * @var string|null
   *   (SQL type: timestamp)
   *   Note that values will be retrieved from the database as a string.
   */
  public $created_date;

  /**
   * Has this webhook been processed yet?
   *
   * @var string
   *   (SQL type: timestamp)
   *   Note that values will be retrieved from the database as a string.
   */
  public $processed_date;

  /**
   * Processing status
   *
   * @var string
   *   (SQL type: varchar(32))
   *   Note that values will be retrieved from the database as a string.
   */
  public $status;

  /**
   * Optional key to group webhooks, as needed by some processors.
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $identifier;

  /**
   * Stores data sent that is needed for processing. JSON suggested.
   *
   * @var string
   *   (SQL type: varchar(1024))
   *   Note that values will be retrieved from the database as a string.
   */
  public $message;

  /**
   * Stores data sent that is needed for processing. JSON suggested.
   *
   * @var string|null
   *   (SQL type: text)
   *   Note that values will be retrieved from the database as a string.
   */
  public $data;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_paymentprocessor_webhook';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Paymentprocessor Webhooks') : E::ts('Paymentprocessor Webhook');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'payment_processor_id', 'civicrm_payment_processor', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('Unique PaymentprocessorWebhook ID'),
          'required' => TRUE,
          'where' => 'civicrm_paymentprocessor_webhook.id',
          'table_name' => 'civicrm_paymentprocessor_webhook',
          'entity' => 'PaymentprocessorWebhook',
          'bao' => 'CRM_Mjwshared_DAO_PaymentprocessorWebhook',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'payment_processor_id' => [
          'name' => 'payment_processor_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Payment Processor'),
          'description' => E::ts('Payment Processor for this webhook'),
          'where' => 'civicrm_paymentprocessor_webhook.payment_processor_id',
          'table_name' => 'civicrm_paymentprocessor_webhook',
          'entity' => 'PaymentprocessorWebhook',
          'bao' => 'CRM_Mjwshared_DAO_PaymentprocessorWebhook',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_PaymentProcessor',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_payment_processor',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
          'add' => NULL,
        ],
        'event_id' => [
          'name' => 'event_id',
          'type' => CRM_Utils_Type::T_STRING,
          'description' => E::ts('Webhook event ID'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_paymentprocessor_webhook.event_id',
          'table_name' => 'civicrm_paymentprocessor_webhook',
          'entity' => 'PaymentprocessorWebhook',
          'bao' => 'CRM_Mjwshared_DAO_PaymentprocessorWebhook',
          'localizable' => 0,
          'add' => NULL,
        ],
        'trigger' => [
          'name' => 'trigger',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Trigger'),
          'description' => E::ts('Webhook trigger event type'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_paymentprocessor_webhook.trigger',
          'table_name' => 'civicrm_paymentprocessor_webhook',
          'entity' => 'PaymentprocessorWebhook',
          'bao' => 'CRM_Mjwshared_DAO_PaymentprocessorWebhook',
          'localizable' => 0,
          'add' => NULL,
        ],
        'created_date' => [
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => E::ts('Created Date'),
          'description' => E::ts('When the webhook was first received by the IPN code'),
          'where' => 'civicrm_paymentprocessor_webhook.created_date',
          'default' => 'CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_paymentprocessor_webhook',
          'entity' => 'PaymentprocessorWebhook',
          'bao' => 'CRM_Mjwshared_DAO_PaymentprocessorWebhook',
          'localizable' => 0,
          'add' => NULL,
        ],
        'processed_date' => [
          'name' => 'processed_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => E::ts('Processed Date'),
          'description' => E::ts('Has this webhook been processed yet?'),
          'required' => FALSE,
          'where' => 'civicrm_paymentprocessor_webhook.processed_date',
          'default' => NULL,
          'table_name' => 'civicrm_paymentprocessor_webhook',
          'entity' => 'PaymentprocessorWebhook',
          'bao' => 'CRM_Mjwshared_DAO_PaymentprocessorWebhook',
          'localizable' => 0,
          'add' => NULL,
        ],
        'status' => [
          'name' => 'status',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Status'),
          'description' => E::ts('Processing status'),
          'required' => TRUE,
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'where' => 'civicrm_paymentprocessor_webhook.status',
          'default' => 'new',
          'table_name' => 'civicrm_paymentprocessor_webhook',
          'entity' => 'PaymentprocessorWebhook',
          'bao' => 'CRM_Mjwshared_DAO_PaymentprocessorWebhook',
          'localizable' => 0,
          'add' => NULL,
        ],
        'identifier' => [
          'name' => 'identifier',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Identifier'),
          'description' => E::ts('Optional key to group webhooks, as needed by some processors.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_paymentprocessor_webhook.identifier',
          'table_name' => 'civicrm_paymentprocessor_webhook',
          'entity' => 'PaymentprocessorWebhook',
          'bao' => 'CRM_Mjwshared_DAO_PaymentprocessorWebhook',
          'localizable' => 0,
          'add' => NULL,
        ],
        'message' => [
          'name' => 'message',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Message'),
          'description' => E::ts('Stores data sent that is needed for processing. JSON suggested.'),
          'required' => TRUE,
          'maxlength' => 1024,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_paymentprocessor_webhook.message',
          'default' => '',
          'table_name' => 'civicrm_paymentprocessor_webhook',
          'entity' => 'PaymentprocessorWebhook',
          'bao' => 'CRM_Mjwshared_DAO_PaymentprocessorWebhook',
          'localizable' => 0,
          'add' => NULL,
        ],
        'data' => [
          'name' => 'data',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Data'),
          'description' => E::ts('Stores data sent that is needed for processing. JSON suggested.'),
          'where' => 'civicrm_paymentprocessor_webhook.data',
          'table_name' => 'civicrm_paymentprocessor_webhook',
          'entity' => 'PaymentprocessorWebhook',
          'bao' => 'CRM_Mjwshared_DAO_PaymentprocessorWebhook',
          'localizable' => 0,
          'add' => NULL,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'paymentprocessor_webhook', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'paymentprocessor_webhook', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'index_event_id' => [
        'name' => 'index_event_id',
        'field' => [
          0 => 'event_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_paymentprocessor_webhook::0::event_id',
      ],
      'index_created_date' => [
        'name' => 'index_created_date',
        'field' => [
          0 => 'created_date',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_paymentprocessor_webhook::0::created_date',
      ],
      'index_processed_date' => [
        'name' => 'index_processed_date',
        'field' => [
          0 => 'processed_date',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_paymentprocessor_webhook::0::processed_date',
      ],
      'index_status_processed_date' => [
        'name' => 'index_status_processed_date',
        'field' => [
          0 => 'status',
          1 => 'processed_date',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_paymentprocessor_webhook::0::status::processed_date',
      ],
      'index_identifier' => [
        'name' => 'index_identifier',
        'field' => [
          0 => 'identifier',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_paymentprocessor_webhook::0::identifier',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}