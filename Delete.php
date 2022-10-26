<?php

include 'Model/conn.php';

$pid = $_GET['pid'];

$q = " DELETE FROM phonebook WHERE pid = $pid ";

mysqli_query($conn, $q);

header('location:index.php');

?>
