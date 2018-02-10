<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
        h2.text-center{
            margin: 50px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center">Редактирование товара</h2>
<form class="form-horizontal" enctype="multipart/form-data" action="update_product.php"  method="post">
<?php
	include('connection.php');
    include('queries.php');
   $id = $_GET['id'];
   $fields = db_result_to_array(mysql_query("SHOW columns FROM `products`"));
   $product_info = mysql_fetch_array(mysql_query("SELECT * FROM `products` WHERE id='$id'"));
   $mapTypes = ['image'=>'file','price'=>'number'];
   $mapLang = ['image'=>'Фото','price'=>'Цена','name'=>'Название'];
   for($i=0;$i<count($fields);$i++){
        $field_name = $fields[$i]['Field'];
        $field_type = $fields[$i]['Type'];
        if($field_name!='id'){
    ?>
     <div class="form-group">
       <label class="control-label col-sm-2" for="<?=$field_name?>"><?=$mapLang[$field_name]?></label>
        <div class="col-sm-8">
             <input class="form-control" name="<?=$field_name?>" id="<?=$field_name?>" type="<?=$mapTypes[$field_name]?>" value="<?=$product_info[$field_name]?>">
        </div>
    </div>
<?php
        }
    }
?>
        <input type="hidden" name="id" value="<?= $id ?>">
        <br/>
         <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
               <input class="btn btn-primary" type="submit" name="submit" value="Сохранить">
             </div>
         </div>

    </form>
</div>