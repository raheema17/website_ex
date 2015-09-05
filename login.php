<html>
<head>
<title>Login</title>
</head>
<body bgcolor="#CCCC00">
<?php
session_start();
include('config.php');
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * FROM users WHERE users.username='$username' AND users.password='$password' ";
$rs=mysql_query($query);
if(mysql_num_rows($rs)>0)
{
$rec=mysql_fetch_row($rs);
$username=$rec[1];
$_SESSION['username']=$username;
$_SESSION['logged']=true;
header('location: form.php');
}
else
{
?>
<p align="center">
<?php
echo "Incorrect username or password <br />

Please login again";
}
}
?>
<form  method="post">
<h1 align="center"> LOGIN </h1>
<table cellpadding="10" cellspacing="10" align="center">
<tr>
<td>USERNAME</td>
<td><input type="text" name="username" id="username"/></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" name="password" id="password"/></td>
</tr>
<tr><td></td>
<td><input type="submit" name="submit" value="LOGIN"/>
<input type="reset" value="RESET"/></td>
</table>
</form>
</body>
</html>