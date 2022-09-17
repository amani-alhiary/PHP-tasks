
// -------------------------task #1 --------------------------




<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  User Name: <input type="text" name="fname">
  Passward: <input type="text" name="Passward">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    $passward = $_POST['Passward'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo "The name is :".$name."<br>";
    }
    if (empty($passward)) {
        echo "passward is empty";
    } else {
        echo "The Passward is :".$passward."<br>";
    }

}



echo "<br>";
echo "<br>";
?>
