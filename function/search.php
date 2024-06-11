<?php
$host = "127.0.0.1";
$user = "root";
$pwd = "root";
$db = "calligraphy";
$conn = new mysqli($host,$user,$pwd,$db);
if($conn->connect_error){
    die("Connect refused!");}

$search = isset($_GET["search"])?$_GET["search"]:"";

  $sql = "SELECT * FROM calligraphers WHERE Title LIKE '%$search%'";
  $result = $conn->query($sql);
  $list = [];
  while($row = $result-> fetch_assoc()){
    $list[] = $row;
  }