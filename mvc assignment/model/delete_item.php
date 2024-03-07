<?php
require("../model/item_db.php");

if(isset($_POST['ItemNum'])) {
    $itemNum = $_POST['ItemNum'];
    deleteItem($itemNum);
    header("Location: ../controller/index.php?mess=deleted");
    exit();
} else {
    header("Location: ../controller/index.php?mess=error");
    exit();
}