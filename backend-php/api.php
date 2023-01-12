<?php
// con questi due header faccio comunicare il lato server e la parte frontend, in localhost metto la porta dell progetto vue 
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");

// serve a trasformare oggetti php in oggetti json 
header('Content-Type: application/json');
?>