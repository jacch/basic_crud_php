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
 //查詢指令 limit 10 10筆　
$row=$myPDO->query("select * from  score");


//foreach取出每一筆放到　＄val
foreach ($row as $val){
    //秀出　$val裡的名字
  print ($val["name"]);
  //秀出計數
  print ($val["counter"]);
  print ("\n");
  
  echo "<br />";

}

?>