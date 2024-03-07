<?php

require("../model/database.php");
$error_message = isset($_GET['error_message']) ? $_GET['error_message'] : null;

if ($error_message !== null) {
    require("../view/error.php");
    exit(); 
}
?>

<?php require("../view/header.php"); ?>

<?php 
$todos = $db->query("SELECT * FROM todoitems ORDER BY ItemNum DESC"); 
while($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
    <div class="todo-item">
        <form action="../model/delete_item.php" method="POST">
            <input type="hidden" name="ItemNum" value="<?php echo $todo['ItemNum']; ?>">
            <button type="submit" class="delete-btn">x</button>
        </form>
        <h2><?php echo $todo['Title'];?></h2>
        <h4><?php echo $todo['Description'];?></h4>
    </div>
<?php }?>

<?php require("../view/footer.php"); ?>