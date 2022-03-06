<?php


require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/Model/todoList.php";
require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/Helper/Input.php";
require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/Helper/Input.php";
require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/BussinesLogic/AddTodoList.php";



function viewAddTodoList()
{
    echo "Menambah TODO" . PHP_EOL;

    $todo  = input("Todo (x untuk batal) ");

    if ($todo == "x") {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
