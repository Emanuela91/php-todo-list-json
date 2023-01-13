<?php
// con questi due header faccio comunicare il lato server e la parte frontend, in localhost metto la porta dell progetto vue 
header("Access-Control-Allow-Origin: http://localhost:5174");
header("Access-Control-Allow-Headers: X-Requested-With");

// dice quali dati prendere 
header('Content-Type: application/json');

// prende il nuovo task 
$newTodo = $_GET['newTodo'];

// collegamento al file json 
$jsonTodoList = file_get_contents("todo.json");
// dal file json alla todoList php 
$todoList = json_decode($jsonTodoList);

// dico come voglio che venga salvato il nuovo task 
$todoList[] = [
    "text" => $newTodo,
    "completed" => false
];

// ricodifico il tutto in file json 
$jsonTodoList = json_encode($todoList);
// lo metto dentro al file json 
file_put_contents('todo.json', $jsonTodoList);

?>