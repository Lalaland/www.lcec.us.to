<?php 
session_start();

?>

<?php include "login.php" ?>


<?php include "doctype.php" ?>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="description" content="La Canada Engineering Club team 2429 FRC FLL First Solar Boat">
      <title>Welcome to Team 2429</title>

<?php include "top.php" ?>


<h1 class="centered"> Login Information </h1>
Please enter a username and password.


<form action="test3.php" method="post">
Username:  
<input type="text" name="username" />
<br/>
Password:
<input type="text" name="password" />
<input type="submit" />
</form>

<?php
if (isset($_POST['username']) && isset($_POST['password']))
{
   $b = new MyConnection();
   $username = $_POST['username'];
   $password = $_POST['password'];
   if ($b->createAccount($username,$password))
   {
      session_regenerate_id();
      echo 'Congrats on creating an account ' . $username;
   }
   else
      echo 'Sorry, username in use' ;
}
?>
<?php include "bottom.php"  ?>
