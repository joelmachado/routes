<?php
    class Clients{

        // Connection
        private $conn;

        // Table
     

        // Columns
        public $id;
        public $name;
        public $email;
        public $age;
        public $designation;
        public $created;

        // Db connection
        public function __construct(){
           
        }

        // GET ALL
        public function index(){
            return "Clients";
        }


    }
?>

