<?php

require_once("database.php");

function callig_all(){
    $sql = "select * from calligraphers";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function callig_detail($callig_id)  {
    $sql = "select * from calligraphers where id = $callig_id";
    $result = query($sql);
    if($result->num_rows > 0){
        return $result->fetch_assoc();
    }
    return null;
}

function top_books(){
    $sql = "select * from calligraphers where style_id = 4";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function  hot_items(){
    $sql = "select * from calligraphers where style_id = 6";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function feedback_items1(){
    $sql = "select * from calligraphers order by Title asc limit 10";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function feedback_items2(){
    $sql = "select * from calligraphers order by Title desc limit 10";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function lib_calli(){
    $sql = "select * from card_learn";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function lib1(){
    $sql = "select * from calligraphers order by id asc limit 29";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function lib2(){
    $sql = "select * from calligraphers order by id desc limit 29";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function card_calli(){
    $sql = "select id, name from card_calligraphy ";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function product_detail($product_id)  {
    $sql = "select * from card_calligraphy where id = $product_id";
    $result = query($sql);
    if($result->num_rows > 0){
        return $result->fetch_assoc();
    }
    return null;
}