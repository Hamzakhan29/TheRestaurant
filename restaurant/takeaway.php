<?php
$conn=new mysqli("localhost", "root","");
mysqli_select_db($conn,"data1");

if(isset($_POST['Submit']))
{
$name=$_POST['name'];
$contact=$_POST['contact'];
$meal=$_POST['meal'];

if($conn->connect_error)
{
die("connection failed:" .$conn->connect_error);
}

//echo "connected successfully!!";

isset($_POST['name']);
isset($_POST['contact']);
isset($_POST['meal']);

$sql = "INSERT INTO tab3 (name,contact,meal) VALUES ('$name','$contact','$meal')";

if($conn->query($sql)==TRUE)
{
//echo "new record created successfully";

}
else
{

echo "Error:" . $sql . "<br>" .$conn->error;
}
$conn->close();

}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TAKE AWAY</title>
<link rel="stylesheet" type="text/css" href="c1.css" />
<link rel="icon" type="image/png" href="icon1.png" />
</head>

<body>

<script type="text/javascript" >
var ename=document.forms["form1"]["name"].value;
var econ=document.forms["form1"]["contact"].value;
var emeal=document.forms["form1"]["meal"].value;

function empty()
{

	if(ename==="" || ename==null || econ==="" || econ==null || emeal==="")
	{
	alert("all fields are necessary!!!");
	}
	else
	{
	alert("Your order has been placed!!!");
	}
}


</script>


<div style=" background-color:#CCCCCC; width:100%; height:100%;" >
<h1 style="color:#FFFFFF; text-align:center; font-size:24px; font-family:PAPyrus;"> 
	<br /> <br />  <img src="flower - Copy.jpg" width="40" height="40" align="middle"  /><a href="home.html" style="color:#FFFFFF; text-decoration:none;"> ISABIS.</a>  <img src="flower - Copy.jpg" width="40" height="40" align="middle"  /> <br /> <a href="home.html" style="color:#FFFFFF; text-decoration:none;">REDISCOVER.</a> <br />
</h1>
<br />
<ul id="navmenu" >
	<li> <a href="reservation.php"> RESERVATION </a></li>
	<li> <A href=""> DELIVERY </a>
		<ul class="sub1" >
		<li> <a href="delivery.php"> HOME </a></li>
		<li> <a href="takeaway.php"> TAKE AWAY </a></li>
		</ul>
	</li>
	<li> <a href="MENU.html"> MENU </a>
	<ul class="sub1">
			<li> <a href="MENU.html"> STARTERS </a></li>
			<li> <a href="MENU.html"> MAINS </a></li>
			<li> <a href="MENU.html"> SIDES </a></li>
			<li> <a href="MENU.html"> DESSERT </a></li>
	  </ul>
	</li>
	<li> <a href="bar.html"> BAR </a></li>
	<li> <a href="contact.html"> CONTACT US </a></li>
	<li> <a href="home.html"> HOME </a></li>
</ul>
<br /><br />
<hr />

 
<div align="center">
<img src="breakfast1.jpg"  style="width:100%; height:auto;" />
</div>
<br />
<br />

<div align="center">

 <form id="form1" name="form1" method="post" action="">
  <table width="420" height="422" border="1" cellpadding="5" cellspacing="0" bordercolor="#000000">
    <tr>
      <td width="143"><span class="style29" >Name:</span></td>
      <td width="181"><input name="name" type="text" style="border-radius:5px;" maxlength="30"  required="required"/></td>
    </tr>

    <tr>
      <td><span class="style29">Contact:</span></td>
      <td><input name="contact" type="text"  style="border-radius:5px;" maxlength="10" required="required" /></td>
    </tr>
    <tr>
      <td><span class="style29">Order:</span></td>
      <td>
	<select name="meal" required="required" >
			  <option value=""  required="required">Select Meal</option> 
              <option>Meal 1</option>
              <option>Meal 2</option>
              <option>Meal 3</option>
     </select>
	  
	  </td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
 <input type="submit" value="Place Your order" name="Submit" onclick="empty()"  style="border-radius:15px; font-family: PAPyrus; font-size: 30px;     color: #993366; font-style: italic;"  /> </div> </td>
     </td>
    </tr>
  </table>
 
</form>
</div>

<br />
<br />

<pre style="color:#FFFFFF; font-size:18px; position:relative; font-family:PAPyrus;" align="center">
 ©copyrights			
  <a href="contact.html" style="color:#FFFFFF; text-decoration:none;"> contact us </a>
 </pre>           

</div>

</body>
</html>
