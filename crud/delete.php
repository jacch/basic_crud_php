<?php 

    //連結資料庫
$myPDO = new PDO('sqlite:/home/pi/laravel/sqlitedb/crud.db');

 //delete from 資料庫
$myPDO->exec("delete from score where name='kiki'");

?>