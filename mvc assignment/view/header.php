<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="../view/style.css">
</head>
<body>
    <h1>Todo List</h1>

    <h2>Add Item</h2>
    <form action="../model/add_item.php" method="POST" autocomplete="off">
        <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error'){?>
            <label for="Title">Title:</label><br>
            <input type="text" id="Title" name="Title" placeholder="Required" style="border-color: #ff6666"><br>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description"></textarea><br>
            <input type="submit" value="Add Item" >

        <?php }else{?>

            <label for="Title">Title:</label><br>
            <input type="text" id="Title" name="Title" ><br>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description"></textarea><br>
            <input type="submit" value="Add Item" >
        <?php }?>
    </form>

    <div class="show-todo">