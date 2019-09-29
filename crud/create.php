<?php 


$myPDO = new PDO('sqlite:/home/pi/laravel/sqlitedb/crud.db');
 //寫入一筆資料
$myPDO->exec("insert into score values ('kiki','10')");

?>