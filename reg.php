<?php
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$birthdate=$_POST['birthdate'];
$gender=$_POST['gender'];
$contact_number=$_POST['contact_number'];
$country=$_POST['country'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
mysql_connect("localhost","root","");
mysql_select_db("harry potter");
$query="insert into users(username,password,mail_id,birthday,gender,contact_number,country,city,pincode) values('$username','$password','$email','$birthdate','$gender','$contact_number','$country','$city','$pincode')";
$result=mysql_query($query) or die(mysql_error());
if($result>0)
{
?>
<h1> <?php echo "Registration complete";
?></h1>
<a href="login.php">Click here to login</a>
<?php
}
else
{
echo "";
}
?>