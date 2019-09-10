<?php
    include_once 'process.php';
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todolist</title>
</head>
<body>
    <div class="todos-container">
        <?php
        foreach ($todoList as $todo) {
            $id = $todo['id'];
            $title = $todo['title'];
            $description = $todo['description'];
            $done = $todo['done'] == 0 ? "Not completed" : "Completed";
            $output = "
            <div>
                <h3>$title</h3>
                <p>$description</p>
                <p>$done</p>
                <a href='http://localhost/todolist-challenge/index.php?edit=$id'>Edit</a>
                <a href='http://localhost/todolist-challenge/index.php?delete=$id'>Delete</a>
            </div>
            ";
            echo $output;
        }
        ?>
    </div>

    <form action="process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $update ? $e_id : '' ?>">
        <label for="todo-title">Todo title</label>
        <input type="text" name="title" id="todo-title" placeholder="Enter Todo title" value="<?php echo $e_title ?>">
        <label for="todo-description">Todo description</label>
        <input type="text" name="description" id="todo-description" placeholder="Enter Todo description" value="<?php echo $e_description ?>">
        <input type="submit" value="<?php echo $update ? 'Edit' : 'Save' ?>" name="save">
    </form>

</body>
</html>