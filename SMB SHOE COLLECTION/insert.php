<?php
if(isset($_POST['submit']))
{

//---------------------------------
$con= mysql_connect("localhost","root","") or die(mysql_error());
$sel = mysql_select_db("batashoedb") or die("not selected".mysql_error());
$first_name=$_POST['fisrt_name'];
$last_name=$_POST['last_name'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$enter=mysql_query("insert into process(fisrt_name,last_name,address,email,phone) values('$first_name','$last_name','$address','$email','$phone')") or die("not inserted".mysql_error());
header("Location:cart.php");
}




?>