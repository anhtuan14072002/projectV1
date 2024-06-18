<?php
session_start();
require_once("database.php");

function get_bookmarked(){
    $bookmarked = isset($_SESSION["bookmark"]) ? $_SESSION["bookmark"] : [];
    if(count($bookmarked) > 0){
        $book_ids = [];
        foreach($bookmarked as $id){
            $book_ids[] = $id;
        }
        // Convert strings to integers
        $book_ids = implode(",", $book_ids); // Convert array elements to integers
        $sql = "SELECT * FROM calligraphers WHERE id IN ($book_ids)";
        $result = query($sql);
        $list = [];
        while($row = $result->fetch_assoc()){
            $list[] = $row;
        }
        return $list;
    }
    return [];
}