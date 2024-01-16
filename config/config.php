<?php
const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASS = "root";
const DB_NAME = "todolist";

$connect = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if (mysqli_connect_errno()){
    echo "Нет подключения к MySQL: " . mysqli_connect_error();
    exit();
}