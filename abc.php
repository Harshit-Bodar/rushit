<?php
echo "welcome";
if(isset($_POST['Fname']))
{
    echo "harshit";
}
$server="localhost";
$username="root";
$password="";
$db="harshit";
$connect=mysqli_connect($server,$username,$password,$db);
if(!$connect)
{
    die(mysqli_connect_error);
}
echo "connected";
$name=$_POST['Fname'];
$surname=$_POST['Sname'];
$mobileno=$_POST['Contact'];
$address=$_POST['address'];
echo $sql="INSERT INTO harshit32 (fname,lname,mobile,address) VALUES('$name','$surname','$mobileno','$address')";
echo "<br>";
$query=mysqli_query($connect,$sql);
if($query)
{
    echo "data inserted successfully";
}
else{
    echo "problem";
}
?>