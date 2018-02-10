<?php 
    include 'connection.php';
    $id=$_GET['id'];
    mysql_query("DELETE FROM `products` WHERE id='$id'");
?>