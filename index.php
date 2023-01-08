<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require 'functions.php';

require 'Database.php';

$config = require('config.php');

//require 'route.php';


$db = new DataBase($config['database']);

$id = $_GET['id'];

$query = "select * from posts where id = :id";

$posts = $db->query($query,[':id' => $id])->fetchAll();

dd($posts);

