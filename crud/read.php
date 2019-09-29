<?php 

  //連到資料庫  
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