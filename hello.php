<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name="name";
    function global_var($name) {
        global $name;
        echo "global ".$name." ya"."<br>" ;
        echo "ramesh.";
        $x = 52.55;
        var_dump($x);

    }

    echo global_var($name="rahul");
    ?>
</body>
</html>