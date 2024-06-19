<?php
$host = "127.0.0.1";
$user = "root";
$pwd = "root";
$db = "calligraphy";
$conn = new mysqli($host,$user,$pwd,$db);
if($conn->connect_error){
    die("Connect refused!");}

$search = isset($_GET["search"])?$_GET["search"]:"";
$list = [];
if ($search !== "") {
  $sql = "SELECT * FROM card_learn WHERE name LIKE '%$search%'";
  $result = $conn->query($sql);
  while ($row = $result->fetch_assoc()) {
      $list[] = $row;
  }
} else {
  // If no search term, fetch all articles
  $sql = "SELECT * FROM card_learn";
  $result = $conn->query($sql);
  while ($row = $result->fetch_assoc()) {
      $list[] = $row;
  }
}