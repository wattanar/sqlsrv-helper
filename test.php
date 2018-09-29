<?php

require_once './src/SqlsrvHelper.php';

use Wattanar\SqlsrvHelper;

$connection = array( 
  "Database" => "DB_NAME", 
  "UID" => "DB_USER", 
  "PWD" => "DB_PASSWORD" ,
  "CharacterSet" => "UTF-8",
  "ReturnDatesAsStrings" => true,
  "MultipleActiveResultSets" => true
);

$conn = sqlsrv_connect("DB_HOST", $connection);

// get row from query
$row = (new SqlsrvHelper)->getRow(sqlsrv_query(
  $conn,
  "SELECT * FROM Users"
));

echo "</pre>" . print_r($row, true) . "</pre>"; 

// get rows from query
$rows = (new SqlsrvHelper)->getRows(sqlsrv_query(
  $conn,
  "SELECT * FROM Users"
));

echo "</pre>" . print_r($rows, true) . "</pre>"; 