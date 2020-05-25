<?php 
session_start();
// Запустить сессию
session_destroy();
// Разорвать все сессии
header('Location: index.php');
// Перенаправить на страницу index.php
 ?>
