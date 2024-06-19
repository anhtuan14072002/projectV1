<?php
session_start();

if (!isset($_SESSION['auth'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit;
}

$book = isset($_SESSION["book"]) ? $_SESSION["book"] : [];
$id = $_POST["id"];
$action = $_POST["action"];

if ($action === 'add') {
    if (!in_array($id, $book)) {
        $book[] = $id;
    }
} else if ($action === 'remove') {
    if (($key = array_search($id, $book)) !== false) {
        unset($book[$key]);
    }
}

$_SESSION["book"] = $book;

echo json_encode(['success' => true, 'action' => $action]);
