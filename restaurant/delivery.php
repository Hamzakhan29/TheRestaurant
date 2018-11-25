<?php include 'store1.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DELIVERY</title>
<link rel="stylesheet" type="text/css" href="c1.css" />
<link rel="icon" type="image/png" href="icon1.png" />
</head>

<body>
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
<pre  style="font-family:PAPyrus; color:#993366; font-size:24px; ">
</pre>
<form id="form1" name="form1" method="post" action="">
  <table width="420" height="422" border="1" cellpadding="5" cellspacing="0" bordercolor="#000000">
    <tr>
      <td width="143"><span class="style29">Name:</span></td>
      <td width="181"><input name="name" type="text" style="border-radius:5px;" maxlength="30" required="required" /></td>
    </tr>
    <tr>
      <td><span class="style29">Address:</span></td>
      <td><textarea name="address" rows="2"  style="border-radius:10px;" required="required" ></textarea></td>
    </tr>
    <tr>
      <td><span class="style29">Contact:</span></td>
      <td><input name="contact" type="text"  style="border-radius:5px;" maxlength="10" required="required" /></td>
    </tr>
    <tr>
      <td><span class="style29">Order:</span></td>
      <td>
	  <select name="orders" required="required" >
			  <option value="" >Select Meal</option> 
              <option>Meal 1</option>
              <option>Meal 2</option>
              <option>Meal 3</option>
     </select>
	  
	  </td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" onselect="empty()" style="border-radius:15px; font-family: PAPyrus; font-size: 30px; color: #993366; font-style: italic;" value="Place Your Order " />
      </div></td>
      </tr>
  </table>
</form>
<pre  style="font-family:PAPyrus; color:#993366; font-size:24px; ">

</pre>
</div>

<pre style="color:#FFFFFF; font-size:18px; position:relative; font-family:PAPyrus;" align="center">
 ©copyrights			 <a href="contact.html" style="color:#FFFFFF; text-decoration:none;"> contact us </a>
 </pre>           

</body>
</html>
