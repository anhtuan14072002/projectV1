<?php 
session_start();
$bookmarked  = isset($_SESSION["bookmark"]) ? $_SESSION["bookmark"] : [];

$id  = $_POST["book_id"];

if (in_array($id, $bookmark)) {
    // Remove the ID from bookmarks
    $bookmark = array_diff($bookmark, [$id]);
} else {
    // Add the ID to bookmarks
    $bookmark[] = $id;
}

$_SESSION["bookmark"] = $bookmark;
header("Location: /library.php");