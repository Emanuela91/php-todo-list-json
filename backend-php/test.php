<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $todoList = [
        [
            "text" => "Fare la spesa",
            "completed" => true
        ],
        [
            "text" => "Prendere l'aereo",
            "completed" => true
        ],
        [
            "text" => "Preparare le valigie",
            "completed" => false
        ],
        [
            "text" => "Prenotare l'hotel",
            "completed" => false
        ]
    ];

    // prendo array php e lo trasformo in file json cosi da leggerlo in vue 
    $jsonTodoList = json_encode($todoList);
    // lo metto nel file todo.json 
    file_put_contents('todo.json', $jsonTodoList);

    // prendo i file json e li traduco in php 
    $jsonTodoList = file_get_contents("todo.json", true);
    // e lo aggiungo alla todo list 
    $todoList = json_decode($jsonTodoList);

    // stampo a schermo l'array
    var_dump($todoList);
    ?>


</body>

</html>