<?php
session_start();
require_once("database.php");

$list = get_book();

function get_book() {
    $book = isset($_SESSION["book"]) ? $_SESSION["book"] : [];
    if (count($book) > 0) {
        $product_book = implode(",", $book);
        $sql = "SELECT * FROM card_learn WHERE id IN ($product_book)";
        $result = query($sql);
        $list = [];
        while ($row = $result->fetch_assoc()) {
            $row['bookmarked'] = true;
            $list[] = $row;
        }
        return $list;
    }
    return [];
}
