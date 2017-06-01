<?php
require_once("./assets/grid_server_assets/codebase/connector/grid_connector.php");//includes connector file
$res=mysql_connect("localhost","w07eia_loutidev","loutidev2");//connects to server with  db
mysql_select_db("w07eia_loutidev");//connects to the database with the name "sampledb"

$conn = new GridConnector($res);             //initializes the connector object
$conn->render_table("books","id","title,quantity,price");  //loads data from db