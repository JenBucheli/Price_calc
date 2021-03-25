<?php


class HomeController
    // connect to DB
{
    private Connection $db;

    public function __construct() {
        $this->db = new Connection;
    }
    public function dropCustomers(array $GET, array $POST) {
        $customers = CustomerLoader::getAllCostumers($this->db);
        require 'View/homepage.php';
    }

    public function dropProducts(array$GET, array$Post){
        $products = ProductLoader::getAllProducts($this->db);
        require 'View/homepage.php';
    }

    //public function showPrice(array$GET,array$Post){


    //product
    //customer
    //calculator

}

