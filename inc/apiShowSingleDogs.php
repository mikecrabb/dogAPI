<?php
include("dbconnect.php");

$dogID = $params['dogID'];

$sql = "SELECT * FROM typesofdog WHERE dogID='". $dogID ."'";

$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    $rows[] = $row;
}

  header('Content-type: application/json');
  echo json_encode($rows);


php?>