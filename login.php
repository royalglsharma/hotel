<?php
$na=$_POST['na'];
$em=$_POST['em'];
$con=mysqli_connect("localhost","root","","royal");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="select * from signup where name='$na' and email='$em'";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
if($r>0)
header("location:hotel1.html");
else
echo "user or email is incorrect";
}
?>
