<?php
class Member {
  const DB_TABLE = 'familyinfo'; // database table name

  // database fields for this table
  public $id = 0;
  public $first_name = '';
  public $middle_name = '';
  public $last_name = '';
  public $biography = null;
  public $date_birth = null;
  public $date_death = null;
  public $date_notable = null;
  public $notable= 0;


  // return a member object by ID
  public static function loadById($id) {

      $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE) or die('Error could not connect');



      $q = sprintf("SELECT * FROM `%s` WHERE id = %d;",
        self::DB_TABLE,
        $id
        );

      $result = $db->query($q); // execute query
      // make sure we found something

      if($result->num_rows == 0) {
        return null;

      } else {
        $row = $result->fetch_assoc(); // get results as associative array

        $member = new Member(); // instantiate new member object

        // store db results in local object
        $member->id           = $row['id'];
        $member->first_name   = $row['first_name'];
        $member->middle_name    = $row['middle_name'];
        $member->last_name    = $row['last_name'];
       
        $member->biography      = $row['biography'];
        $member->date_birth    = $row['date_birth'];
        $member->date_death   = $row['date_death'];
        $member->date_notable    = $row['date_notable'];
        $member->notable = $row['notable_event'];

        return $member; // return the member
      }
  }

  // return all members as an array
  public static function getFamilyMembers() {
    $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE) or die('Error could not connect');

    $q = "SELECT id FROM `".self::DB_TABLE."` ORDER BY first_name ASC;";

    $result = $db->query($q);

    $members = array();

    if($result->num_rows != 0) {
      while($row = $result->fetch_assoc()) {
        $members[] = self::loadById($row['id']);
      }
    }
    return $members;
  }

  // public function save(){
  //   if($this->id == 0) {
  //     return $this->insert(); // member is new and needs to be created
  //   } else {
  //     return $this->update(); // member already exists and needs to be updated
  //   }
  // }

  // public function insert() {
  //   if($this->id != 0)
  //     return null; // can't insert something that already has an ID

  //   $db = Db::instance(); // connect to db
  //   // build query

  //   // format dates for insertion
  //   if($this->date_birth != '')
  //     $this->date_birth = $db->formatDate($this->date_birth);
  //   if($this->date_death != '')
  //     $this->date_death = $db->formatDate($this->date_death);

  //   $q = sprintf("INSERT INTO `%s` (`first_name`, `middle_name`, `last_name`, `biography`, 'date_birth'`, `date_death`, `date_notable', 'notable')
  //   VALUES (%s, %s, %s, %s, %s, %s, %d);",
  //     self::DB_TABLE,
  //     $db->escape($this->first_name),
  //     $db->escape($this->middle_name),
  //     $db->escape($this->last_name),
  //     $db->escape($this->biography),
  //     $db->escape($db->date_death),
  //     $db->escape($db->date_birth),
  //     $db->escape($db->date_notable),
  //     $db->escape($this->notable),
  //     );
  //   //echo $q;
  //   $db->query($q); // execute query
  //   return $db->getInsertID(); // return last inserted ID
  // }

  // public function update() {
  //   if($this->id == 0)
  //     return null; // can't update something without an ID

  //   $db = Db::instance(); // connect to db

  //   // format dates for update
  //   if($this->date_birth != '')
  //     $this->date_birth = $db->formatDate($this->date_birth);
  //   if($this->date_death != '')
  //     $this->date_death = $db->formatDate($this->date_death);

  //   // build query
  //   $q = sprintf("UPDATE `%s` SET
  //     `first_name` = %s,
  //     `last_name`  = %s,
  //     `rank`       = %s,
  //     `enlisted`   = %s,
  //     `muster_out` = %s,
  //     `file_name`  = %s,
  //     `creator_id` = %d
  //     WHERE `id` = %d;",
  //     self::DB_TABLE,
  //     $db->escape($this->first_name),
  //     $db->escape($this->last_name),
  //     $db->escape($this->rank),
  //     $db->escape($db->enlisted),
  //     $db->escape($db->muster_out),
  //     $db->escape($this->file_name),
  //     $db->escape($this->creator_id),
  //     $db->escape($this->id)
  //     );
  //   $db->query($q); // execute query
  //   return $db->id; // return this object's ID
  // }

}
