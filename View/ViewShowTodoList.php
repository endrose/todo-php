<?php
require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/Model/todoList.php";
require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/BussinesLogic/ShowTodoList.php";
require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/View/ViewAddTodoList.php";
require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/View/ViewRemoveTodoList.php";
require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/Helper/Input.php";


function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "Menu : " . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;


        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodoList();
        } elseif ($pilihan == "2") {
            viewRemoveTodoList();
        } elseif ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak di mengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi " . PHP_EOL;
}
