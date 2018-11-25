<?php
$conn=new mysqli("localhost", "root","");
mysqli_select_db($conn,"data1");

if(isset($_POST['Submit']))
{
$name=$_POST['name'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$orders=$_POST['orders'];

if($conn->connect_error)
{
die("connection failed:" .$conn->connect_error);
}
//echo "connected successfully!!";

isset($_POST['name']);
isset($_POST['address']);
isset($_POST['contact']);
isset($_POST['orders']);


$sql = "INSERT INTO tab4 (name,address,contact,orders) VALUES ('$name','$address','$contact','$orders')";

if($conn->query($sql)==TRUE)
{
echo "Your order has been placed";

}
else
{

echo "Error:" . $sql . "<br>" .$conn->error;
}
$conn->close();

}
?>