<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"><!--Server Info--> 
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];  //Using $_REQUEST Superglobal
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>