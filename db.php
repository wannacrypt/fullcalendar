<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'fullcalendar';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

/* For products */
$conn = mysqli_connect($host, $user, $pass, $db);