<?php
/**
 * Created by PhpStorm.
 * User: Pavoht
 * Date: 30/05/2017
 * Time: 10:36
 */
require_once("grid_connector.php");//includes related connector file

$pdo = new PDO ('mysql:host=localhost;dbname=w07eia_loutidev', 'w07eia_loutidev', 'loutidev2');
$statement = $pdo->query("SELECT * FROM books");
$conn = new GridConnector($pdo, "MYSQL");

$conn->render_table("books", "id", "title, author, sales");

$conn->render_table("books","id","title,author,sales");      //data configuration