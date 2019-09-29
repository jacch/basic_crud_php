<?php 

    
//連結資料庫    
$myPDO = new PDO('sqlite:/home/pi/laravel/sqlitedb/crud.db');
 //更新計數次數
$myPDO->exec("update score set counter=counter+1 where name='kiki'");

?>