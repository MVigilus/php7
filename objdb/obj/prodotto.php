<?php
    class prodotto{
        public $id;
        public $nome;
        public $descr;
        public $prezzo;
        public $category_id;

        public function __construct($id, $name, $price, $description, $category_id){
            $this->id = (int)$id;
            $nome = $name;
            $prezzo = (float)$price;
            $descr = $description;
            $this->category_id = (int)$category_id;
          }
    }
    class ProductManager extends DBManager {

        public function __construct(){
          parent::__construct();
          $this->columns = array( 'id', 'nome', 'prezzo', 'descr', 'category_id' );
          $this->tableName = 'product';
        }
      }
?>