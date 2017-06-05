<?php
require_once("connectionInfo.php");


    $dbh = new PDO('mysql:host='.$mysql_server.';dbname='.$mysql_db, $mysql_user, $mysql_pass);



require("./assets/dhtmlxGrid/codebase/grid_connector.php");
require("./assets/dhtmlxGrid/codebase/db_pdo.php");

$grid = new GridConnector($dbh,"PDO");

$grid->dynamic_loading(1000);
$grid->render_table("books");
?>