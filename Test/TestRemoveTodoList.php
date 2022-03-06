<?php


require_once "../Model/todoList.php";
require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/RemoveTodoList.php";
require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/AddTodoList.php";
require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/ShowTodoList.php";




addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khanndedy");
addTodoList("Endros");

showTodoList();
removeTodoList(3);
showTodoList();


$success = removeTodoList(4);
var_dump($success);
