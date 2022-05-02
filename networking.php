<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      echo "hello! welcome -- ".$_POST["username"];
      echo "<br>";
      echo "your password is ".$_POST["password"];
        ?>
        <br/>
   hello world<br/>
   <form action="./networking.php" method="POST">
        <input type="text" name="username" placeholder="username"><br/>
        <input type="password" name="password" placeholder="password"><br/>
        <input type="submit" value="send"> 
   </form>
</body>
</html>