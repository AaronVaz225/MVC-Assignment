<?php

require("database.php"); 

function addItem($title, $description) {
    global $db;
    $stmt = $db->prepare("INSERT INTO todoitems(Title, description) VALUES(?, ?)");
    $res = $stmt->execute([$title, $description]);
    return $res;
}

function deleteItem($itemNum) {
    global $db;
    $stmt = $db->prepare("DELETE FROM todoitems WHERE ItemNum = ?");
    $stmt->execute([$itemNum]);
}