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
$Fname=$_POST['Fname'];
echo $sql="SELECT * from harshit32 where fname='$Fname'";
$query=mysqli_query($connect,$sql);
if($query)
{
    echo "harshit";
    $row=mysqli_fetch_array($query);
if($row>0)
{
    echo "here is your data";
    echo "<br>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>";
echo "Name";
echo "<th>";
echo "<th>";
echo "contact";
echo "<th>";
echo "<th>";
echo "address";
echo "<th>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo $row['fname'];
echo "</td>";
echo "</tr>";

}
}

?>