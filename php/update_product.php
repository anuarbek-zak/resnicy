<?php
	include 'connection.php';
    if (isset($_POST['submit'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $price=$_POST['price'];
        if(!$_FILES['image']['tmp_name']){
            echo "no image";
            mysql_query("UPDATE `products` SET `price`=$price,`name`='$name' WHERE id='$id'");
        }else{
         $image = base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
          mysql_query("UPDATE `products` SET `image`='$image',`price`=$price,`name`='$name' WHERE id='$id'");
        }
        header('location: ../admin_page.html');
    }
 ?>