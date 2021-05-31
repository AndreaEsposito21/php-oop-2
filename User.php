<?php 

    class User {
        public $name;

        public $lastname;

        public $email;

        private $password;

        protected $products = [];

        public function __construct($_name, $_lastname, $_email) {
            $this->name = $_name;
            $this->lastname = $_lastname;
            $this->email = $_email;
        }

        public function addProduct($product) {
            $this->products[] = $product;
        }

        // Per leggere il protected
        public function getProducts() {
            return $this->products;
        }
    }
?>