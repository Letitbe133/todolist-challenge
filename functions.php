<?php

// create todo
        function createTodo($params) {
            $title = $params['title'];
            $description = $params['description'];
        try {
            $data = [
                'title' => $title,
                'description' => $description 
            ];
            $db = new PDO('mysql:host=localhost;dbname=NOM_BDD; charset=utf8', 'USERNAME', 'PASSWORD');
            $query = "INSERT INTO todo (title, description) VALUES (:title, :description)";
            $stmt = $db->prepare($query)->execute($data);
            print "Record successfully saved !";
            $db = null;
        } catch (PDOException $error) {
            print "Erreur !: " . $error->getMessage() . "<br/>";
            die();
        }
        header("location: http://localhost/todolist-challenge/");
    }

// get all todos
    function getTodos() {
        try {
            $options = [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // sets PDO default fetch mode to associative array
            ];
            $db = new PDO('mysql:host=localhost;dbname=NOM_BDD; charset=utf8', 'USERNAME', 'PASSWORD', $options);
            $query = "SELECT * FROM todo";
            $result = $db->query($query)->fetchAll();
            return $result;
            $db = null;
        } catch (PDOException $error) {
            print "Erreur !: " . $error->getMessage() . "<br/>"; 
            die();
        }
    }

// get todo by id
    function getTodo($id) {
        try {
            $options = [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            $db = new PDO('mysql:host=localhost;dbname=NOM_BDD; charset=utf8', 'USERNAME', 'PASSWORD', $options);
            $query = "SELECT * FROM todo WHERE id=$id";
            $result = $db->query($query)->fetch();
            return $result;
            $db = null;
        } catch (PDOException $error) {
            print "Erreur !: " . $error->getMessage() . "<br/>";
            die();
        }
    }

// update todo
    function updateTodo($params) {
        $title = $params['title'];
        $description = $params['description'];
        $id = $params['id'];

        $data = [
            'title' => $title,
            'description' => $description 
        ];

        try {
            $db = new PDO('mysql:host=localhost;dbname=NOM_BDD; charset=utf8', 'USERNAME', 'PASSWORD');
            $query = "UPDATE todo SET title=:title, description=:description WHERE id=$id";
            $stmt = $db->prepare($query)->execute($data);
            // print "Record successfully updated !";
            $db = null;
        } catch (PDOException $error) {
            print "Erreur !: " . $error->getMessage() . "<br/>";
            die();
        }
        header("location: http://localhost/todolist-challenge/");
    }

// delete todo
    function deleteTodo($id) {
        try {
            $db = new PDO('mysql:host=localhost;dbname=NOM_BDD; charset=utf8', 'USERNAME', 'PASSWORD');
            $query = "DELETE FROM todo WHERE id=$id";
            $stmt = $db->query($query);
            // print "Record successfully deleted !";
            $db = null;
        } catch (PDOException $error) {
            print "Erreur !: " . $error->getMessage() . "<br/>";
            die();
        }
    }