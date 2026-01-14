<?php
session_start();
include("includes/config.php");
if(isset($_POST['login'])){
 $u=$_POST['username']; $p=$_POST['password'];
 $q=mysqli_query($conn,"SELECT * FROM admin WHERE username='$u' AND password='$p'");
 if(mysqli_num_rows($q)>0){ $_SESSION['admin']=$u; header("location:admin/dashboard.php"); }
 else echo "Invalid Login";
}
?>
<form method="post">
<input name="username" placeholder="Username"><br><br>
<input name="password" type="password" placeholder="Password"><br><br>
<button name="login">Login</button>
</form>