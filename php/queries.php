<?php
	include('connection.php');

//    METHODS -----------------------
	function getProducts(){
	   $products = [];
	   $result = mysql_query("SELECT * FROM products");
	   $products = db_result_to_array($result);
       return $products;
	}

	 function db_result_to_array($result){
                 $arr=array();
                 while ($row=mysql_fetch_array($result)) {
                    $arr[]=$row;
                 }
                 return $arr;
             }


	 //    METHODS END -----------------------


 ?>

