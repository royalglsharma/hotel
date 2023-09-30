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
$q="insert into signup  values( '$na','$em')";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($r>0)
echo "You are Successfully registered";
else
echo "Some problem is occured";
}
?>

