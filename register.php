<?php

$rn=$_POST['rn'];
$na=$_POST['na'];
$an=$_POST['an'];
$gen=$_POST['gen'];
$g1=$_POST['g1'];
$adult=$_POST['adult'];
$child=$_POST['child'];
$add=$_POST['add'];

$con=mysqli_connect("localhost","root","","royal");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="insert into hotel  values( '$rn','$na','$an','$gen','$g1','$adult','$child','$add')";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($r>0)
echo "You are Successfully registered";
else
echo "Some problem is occured";
}
?>

