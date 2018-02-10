<?php
	  include('connection.php');
      $image = base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
      $name = $_POST['name'];
      $price = $_POST['price'];
      print_r($_FILES['image']);
      mysql_query("INSERT INTO `products`(`name`, `price`, `image`) VALUES ('$name','$price','$image')");
      header("location: ../admin_page.html");
 ?>
