<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from /var/www/civicrm530/sites/default/files/civicrm/ext/au.com.agileware.elections/xml/schema/CRM/Elections/ElectionVote.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:627881473dfdb21874a3a8674f457d4c)
 */

/**
 * Database access object for the ElectionVote entity.
 */
class CRM_Elections_DAO_ElectionVote extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_election_vote';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Unique ElectionVote ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Rank of a nomination for particular position.
   *
   * @var int unsigned
   */
  public $rank;

  /**
   * FK to ElectionNomination for which this vote is counted.
   *
   * @var int unsigned
   */
  public $election_nomination_id;

  /**
   * FK to Contact who added this vote.
   *
   * @var int unsigned
   */
  public $member_id;

  /**
   * Date on which vote has been added.
   *
   * @var timestamp
   */
  public $created_at;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_election_vote';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'election_nomination_id', 'civicrm_election_nomination', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'member_id', 'civicrm_contact', 'id');
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
          'description' => 'Unique ElectionVote ID',
          'required' => TRUE,
          'table_name' => 'civicrm_election_vote',
          'entity' => 'ElectionVote',
          'bao' => 'CRM_Elections_DAO_ElectionVote',
          'localizable' => 0,
        ],
        'rank' => [
          'name' => 'rank',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Rank'),
          'description' => 'Rank of a nomination for particular position.',
          'import' => TRUE,
          'where' => 'civicrm_election_vote.rank',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => TRUE,
          'table_name' => 'civicrm_election_vote',
          'entity' => 'ElectionVote',
          'bao' => 'CRM_Elections_DAO_ElectionVote',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'election_nomination_id' => [
          'name' => 'election_nomination_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'FK to ElectionNomination for which this vote is counted.',
          'table_name' => 'civicrm_election_vote',
          'entity' => 'ElectionVote',
          'bao' => 'CRM_Elections_DAO_ElectionVote',
          'localizable' => 0,
          'title' => 'Election Nomination',
          'FKClassName' => 'CRM_Elections_DAO_ElectionNomination',
        ],
        'created_at' => [
          'name' => 'created_at',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Created At'),
          'description' => 'Date on which vote has been added.',
          'export' => TRUE,
          'where' => 'civicrm_election_vote.created_at',
          'headerPattern' => '',
          'dataPattern' => '',
          'default' => 'CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_election_vote',
          'entity' => 'Election',
          'bao' => 'CRM_Elections_DAO_ElectionVote',
          'localizable' => 0,
        ],
        'member_id' => [
          'name' => 'member_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'FK to Contact who added this vote.',
          'table_name' => 'civicrm_election_vote',
          'entity' => 'ElectionVote',
          'bao' => 'CRM_Elections_DAO_ElectionVote',
          'localizable' => 0,
          'title' => 'Member',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'election_vote', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'election_vote', $prefix, []);
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
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
