<?php

include_once ('dblogin.php');

function db_connect()
{
  return pg_connect("host=".HOSTNAME." dbname=".DATABASE." user=".USERNAME." password=".PASSWORD." port=".DB_PORT );
}

//connects to the database
$connection = db_connect();

//SELECTSs
//pg_prepare($connection, "get_all_products", 'SELECT ProductCode, GroupCode, ProductType, ProductName, ProductImageSmall FROM main');



function dump($arg)
{
	 echo "<pre>";
	 print_r($arg);
	 echo "</pre>";
}
 
 