<?php 
/*** ***************************************************************

  作者 :
  日期：
  用途：
  作法：
  連結資料庫->寫入一筆->

********************************************************************/
//變數放這裡






//打開資料庫的　sqlite = 資料庫類型
//demo.db =資料庫位置
//如果路徑不在當前的目錄　: /home/pi/demo.db
//連結資料庫
$myPDO = new PDO('sqlite:/home/pi/laravel/sqlitedb/crud.db');

 //delete from 資料庫
$myPDO->exec("delete from score where name='kiki'");

?>