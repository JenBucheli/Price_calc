<?php
require 'Model/Connection.php';
require 'Model/Customer.php';
require 'Model/Product.php';
require 'Loader/CustomerLoader.php';
require 'Loader/ProductLoader.php';
require 'Controller/HomeController.php';
require 'config.php';

$controller = new HomeController();

$controller->dropCustomers($_GET, $_POST);





