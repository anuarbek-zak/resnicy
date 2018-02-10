<?php
	mysql_connect('srv-pleskdb19.ps.kz:3306','bybru_root','Danikoraz423')
	or die('Error with server'.mysql_error());
	mysql_select_db('bybruant_practice')
	or die('DB error'.mysql_error());
 ?>