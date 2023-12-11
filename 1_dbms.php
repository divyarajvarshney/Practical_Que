<!DOCTYPE html></body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action=<?php echo $_SERVER['PHP_SELF']; ?>>
    NAME :  <input name ="fname" type="text"/><br><br>
    <button type="submit" >submit
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_REQUEST['fname'];
        if (empty($name)){
            echo $name;
        }
        else{
            echo "your name is empty";
        }
    }
?>
</body>
</html> 