<?php
    class DB{
        private $conn;
        public $pdo;

        public function __construct()
        {
            global $conn;
            $this->conn=$conn;
            if (mysqli_connect_errno()) {
                echo 'Errore: ' . mysqli_connect_errno();
              }
              $this->pdo = new PDO('mysql:dbname='. db_name .';host=' . db_host,db_user,db_pass);
        }

        public function query($sql){
            echo $sql;
            $q=$this->pdo->query($sql);
            if(!$q){
                mysqli_error($q);
            }
            $data=$q->fetchAll();
            return $data;
        }

        public function SelectAll($table,$columns=array()){
            $query='SELECT ';
            $column='';
            foreach($columns as $colName){
                $column.=' '.$colName.' ';
            }
            $column=substr($column, 0, -1);
            $query .= ' * FROM ' . $table;
            echo $query;
            $result = mysqli_query($this->conn, $query);
            $resultArray = mysqli_fetch_all($result, MYSQLI_ASSOC);

            mysqli_free_result($result);

            return $resultArray;
        }

        public function SelectOne($table,$columns=array(),$id){
            $query='SELECT ';
            $column='';

            foreach($columns as $colName){
                $column.=' '.$colName.' ';
            }
            $column=substr($column, 0, -1);
            $query.=$column. ' FROM '.$table. ' WHERE id='.$id ;
            $result=mysqli_query($this->conn, $query);
            $resultArray=mysqli_fetch_array($result, MYSQLI_ASSOC);

            mysqli_free_result($result);

            return $resultArray;
        }

        public function DeleteOne($table,$id){
            $query="DELETE FROM $table WHERE id=$id";

            if(mysqli_query($this->conn,$query)){
                $rowsinf=mysqli_affected_rows($query);
                return $rowsinf;
            }else{
                return -1;
            }
        }

        public function UpdateOne($table,$columns=array(),$id){
            $query="UPDATE ";
            $strCol = '';
            foreach($columns as $colName => $colValue) {
            $colName = $colName;
            $strCol .= " " . $colName . " = '$colValue' ,";
            }
            $strCol = substr($strCol, 0, -1);

            $query = "UPDATE $table SET $strCol WHERE id = $id";

            if (mysqli_query($this->conn, $query)) {
                    $rowsAffected = mysqli_affected_rows($this->conn);

                    return $rowsAffected;
            } else {

                    return -1;
            }
        }

        public function insert_one ($tableName, $columns = array()) {

            $strCol = '';
            foreach($columns as $colName => $colValue) {
              $colName = $colName;
              $strCol .= ' ' . $colName . ',';
            }
            $strCol = substr($strCol, 0, -1);
        
            $strColValues = '';
            foreach($columns as $colName => $colValue) {
              $colValue = $colValue;
              $strColValues .= " '" . $colValue . "' ,";
            }
            $strColValues = substr($strColValues, 0, -1);
        
            $query = "INSERT INTO $tableName ($strCol) VALUES ($strColValues)";
            //var_dump($query); die;
            if (mysqli_query($this->conn, $query)) {
              $lastId = mysqli_insert_id($this->conn);
        
              return $lastId;
            } else {
        
              return -1;
            }
          }
    }
    
    class DBManager {

        protected $db;
        protected $columns;
        protected $tableName;
      
        public function __construct(){
          $this->db = new DB();
        }
      
        public function get($id) {
          $resultArr = $this->db->SelectOne($this->tableName, $this->columns, (int)$id);
          return (object) $resultArr;
        }
      
        public function getAll() {
          $results = $this->db->SelectAll($this->tableName, $this->columns);
          $objects = array();
          foreach($results as $result) {
            array_push($objects, (object)$result);
          }
          return $objects;
        }
      
        public function create($obj) {
          $newId = $this->db->insert_one($this->tableName, (array) $obj);
          return $newId;
        }
      
        public function delete($id) {
          $rowsDeleted = $this->db->UpdateOne($this->tableName, (int)$id);
          return (int) $rowsDeleted;
        }
      
        public function update($obj, $id) {
          $rowsUpdated = $this->db->UpdateOne($this->tableName, (array) $obj, (int)$id);
          return (int) $rowsUpdated;
        }
      }

?>