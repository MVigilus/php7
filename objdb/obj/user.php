<?php
    class user{
        public $id;
        public $nome;
        public $cognome;
        public $email;
        public $password;
        public $usertype;

        public function __construct($id, $nome, $cognome, $email,$pas,$usertype)
        {
            $this->id=$id;
            $this->nome=$nome;
            $this->cognome=$cognome;
            $this->email=$email;
            $password=$pas;
            $this->usertype=$usertype;

        }

    }

    class UserManager extends DBManager{
        public function __construct()
        {
            parent::__construct();
            $this->tableName = 'User';
            $this->columns = array('id','nome', 'cognome','email','usertype','password');
        }
        
        public function createUser($user, $password){
            $id = parent::create($user);
            $this->updatePassword($id, $password);
            return $id;
          }
      
          public function updatePassword($userId, $password){
            $pwd = $password ;
            $query = "UPDATE $this->tableName SET password = '$pwd' where id = $userId";
            $this->db->query($query);
          }
      
          public function isValidPassword($pwd){
            return strlen($pwd) > 6;
          }
      
          public function passwordsMatch($pwd1, $pwd2){
            return $pwd1 == $pwd2;
          }
      
          public function login($email, $password) {
      
            $email = $email;
            $password = $password;
            
            $query = "SELECT * FROM " . $this->tableName . " WHERE email = '$email' AND password = '$password'";
            $user = $this->db->query($query);
            //var_dump( $query); die;
            if (count($user) > 0) {
              $user = $user[0];
              return new User($user['id'], $user['nome'], $user['cognome'], $user['email'], $user['usertype'],$user['password']);
            } else {
              return false;
            }
          }
      
          public function register($first_name, $last_name, $email, $password){
            $user = new User(0, $first_name, $last_name, $email, $password, 'regular');
            $userId = $this->createUser($user, $password);
            return $userId;
          }
      
          public function userExists($email){
            $result = $this->db->query("SELECT count(id) as count FROM user WHERE email = '$email'");
            return $result[0]['count'] > 0;
          }
      
          public function isValidEmail($email){
            return filter_var($email, FILTER_VALIDATE_EMAIL);
          }
    }
?>