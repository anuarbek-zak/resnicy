<?php
	include('connection.php');
	 session_start();
	 $login = $_POST['login'];
     $password = $_POST['password'];
     $query = "SELECT * FROM users WHERE login='$login'";
     $result = mysql_query($query);
     $row = mysql_fetch_array($result);
     if ($row['login']==$login) {
    	if ($password!=$row['password']) {
    		echo "Пароль не верен";
         }else{
            $_SESSION['isAdmin'] = true;
             echo "";
         }
     }else{
         echo "Такого логина не существует";
     }
 ?>