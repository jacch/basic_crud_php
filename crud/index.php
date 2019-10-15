<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    使用說明：

    default:
    <br />
    新增: C ==> Create (SQL=INSERT)
    <a herf="create.php?id=1&data=資料">create.php?id=1&data=資料</a>
    <br />
    讀取: R ==> READ (SQL=SELECT)
    <a herf="read.php?id=1">read.php?id=1</a>
    <br />
    讀取: R ==> READ 所有的 (不指定id) (SQL=SELECT)
    <a herf="read.php">read.php</a>

    <br />
    更新: U ==> UPDATE 所有的 (一定要有範圍)  ( SQL= UPDATE + WHERE  )
    <a herf="update.php?id=1&data=資料">update.php?id=1&data=資料</a>

    <br />
    刪除: D==> DELETE 所有的 (一定要有範圍)  ( SQL=DELETE+ WHERE  )
    <a herf="delete.php?id=1">update.php?id=1&data=資料</a>
    
</body>
</html>
