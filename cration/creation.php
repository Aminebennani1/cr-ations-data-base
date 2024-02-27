
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    ::-webkit-scrollbar{
width:0
    }
    body{
        background-color :#C59D4B;
    }
  header{
    width:100vw;height:100vh;
    display:flex;justify-content:center;align-items:center;flex-direction:column;text-align:center;
  }
  #btt{
    padding:2%;
  }
</style>
    
</head>
<body>
<header>
<form method="POST">
<input type="submit" value="click" name="click" id="btt"><br>
<?php


if(isset($_POST['click'])){  
    try {
        $connection = new PDO("mysql:host=localhost","root","");
        $connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          $sql = "CREATE DATABASE myD0";
         $connection->exec($sql);
        echo "is cration your data bas";
    }catch(PDOException $e){
        echo "cration failed" ."<br>" . $e->getMessage();
    }
    }
    $connection = null;


?>

</form>

</header>
</body>
</html>




