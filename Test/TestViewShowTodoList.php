<?php

require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/View/ViewShowTodoList.php";
require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/View/ViewAddTodoList.php";

require_once "C:/xampp/htdocs/pzn/studi-kasus-php-dasar-aplikasi-todolist/BussinesLogic/AddTodoList.php";

addTodoList("Endros");
addTodoList("Kurniawan");
addTodoList("Khanndedy");
addTodoList("Dokumentasi");
addTodoList("Channel");


viewShowTodoList();
