<?php
// ini_set('display_errors', '1');
include_once 'functions.php';

$e_title = "";
$e_description = "";
$update = false;

// retrieve todos from db
$todoList = getTodos();

// create or update todo
if (isset($_POST['save'])) {
    if (!empty($_POST['id'])) {
        updateTodo($_POST);
        die();
    }
    createTodo($_POST);

}

// display todo with corresponding id
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = getTodo($id);
    $update = true;
    if (!empty($result)) {
        $e_id = $result['id'];
        $e_title = $result['title'];
        $e_description = $result['description'];
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    deleteTodo($id);
}