<?php
$conn=new mysqli("localhost", "root","");
mysqli_select_db($conn,"data1");

if(isset($_POST['Submit']))
{
$name=$_POST['name'];
$time=$_POST['time'];
$tables=$_POST['tables'];

if($conn->connect_error)
{
die("connection failed:" .$conn->connect_error);
}

//echo "connected successfully!!";

isset($_POST['name']);
isset($_POST['time']);
isset($_POST['tables']);


$sql = "INSERT INTO tab2 (name,time,tables) VALUES ('$name','$time','$tables')";

if($conn->query($sql)==TRUE)
{
//echo "Your table has been booked!!!";
}
else
{

echo "Error:" . $sql . "<br>" .$conn->error;
}
$conn->close();

}
?>


