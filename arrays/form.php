
// -------------------------task #1 --------------------------



<!-- using server to print data -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Email: <input type="text" name="email">
  Passward: <input type="text" name="Passward">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $passward = $_POST['Passward'];
    if (empty($email)) {
        echo "email is empty";
    } else {
        echo "The email is :".$email."<br>";
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
