<?php
require("../model/item_db.php");

if(isset($_POST['Title'])) {
    $title = $_POST['Title'];
    $desc = $_POST['description'];

    if(empty($title)) {
        header("Location: ../controller/index.php?mess=error");
        exit();
    }

    $res = addItem($title, $desc);

    if($res) {
        header("Location: ../controller/index.php?mess=success");
    } else {
        header("Location: ../controller/index.php");
    }
} else {
    header("Location: ../controller/index.php?mess=error");
}