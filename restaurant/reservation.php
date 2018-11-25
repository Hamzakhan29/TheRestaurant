<?php include 'store.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>RESERVATION</title>
<link rel="stylesheet" type="text/css" href="c1.css" />
<link rel="icon" type="image/png" href="icon1.png" />

</head>

<body>

<script>
var ename=document.forms["form1"]["name"].value;
var etime=document.forms["form1"]["time"].value;
var etab=document.forms["form1"]["tables"].value;
var x="";

function myFunction() 
{ 
	if(ename == "" || ename == null || etime == "" || etab =="" )
	{
	alert("                     All fields are necessary!!!");
	
	
	}
	else
	{
	alert("                         Table has been booked!!!");
	}
}

</script>


<div style=" background-color:#CCCCCC; width:100%; height:100%;" >
<h1 style="color:#FFFFFF; text-align:center; font-size:24px; font-family:PAPyrus;"> 
	<br /> <br /> <img src="flower - Copy.jpg" width="40" height="40" align="middle"  /> <a href="home.html" style="color:#FFFFFF; text-decoration:none;"> ISABIS.</a>  <img src="flower - Copy.jpg" width="40" height="40" align="middle"  /> <br /> <a href="home.html" style="color:#FFFFFF; text-decoration:none;">REDISCOVER.</a> <br />
</h1>
<br />
<ul id="navmenu" >
	<li> <a href="reservation.php"> RESERVATION </a></li>
	<li> <A href="#"> DELIVERY </a>
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

<br />
<br />

<hr />



<div align="center">
<img src="salmon.jpg"  style="width:100%; height:auto;" /></div>

<br />
<br />

<div align="center">
<pre  style="font-family:PAPyrus; color:#993366; font-size:24px;  ">
Book online or give us a call on 022 20000020 between 9am-10pm (9.30am and 10pm on weekends). 
If you wish to speak to our events team in regards to Private Dining, please email isabisindia@isabis.com. 
We look forward to seeing you.

-----------------------------------------------------------------------
</pre></div>

<div align="center">
    <pre  style="font-family:PAPyrus; color:#993366; font-size:24px;  ">
LUNCH
Mon to Sat 12:00 to 15:00
Sun – 12:00 to 15:30

DINNER
Mon to Sat 18:00 to 23:00
Sunday 18:00 to 21:30

</pre>
</div>

<div align="left">
  <form id="form1" name="form1" method="post" action="" >
    <div align="center">
      <table width="378" height= "341" border="1" cellpadding="5" cellspacing="0" bordercolor= "#000000">
        <tr>
          <td width="93" class="style2 style5 style7">Name:</td>
            <td width="142">
              <div align="left" class="style7">
                <input type="text" name="name" placeholder= "Enter your full name" required="required" value="" />
            </div></td>
          </tr>
        <tr>
          <td><span class="style8">Time:</span></td>
            <td>
              <div align="left" class="style7">
                <select name="time" required="required">
                  <option value="">Select time</option>
                  <option>13:00</option>
                  <option>13:30</option>
                  <option>14:00</option>
                  <option>14:30</option>
                  <option>15:00</option>
                  <option>20:00</option>
                  <option>20:30</option>
                  <option>21:00</option>
                  <option>21:30</option>
                  <option>22:00</option>
                  <option>22:30</option>
                  <option>23:00</option>
                </select>
            <span class="style9">hours </span></div></td>
          </tr>
        <tr>
          <td height="57"><span class="style8">Table for: </span></td>
            <td>
              <div align="left" class="style7">
                <select name="tables" required="required" >
                  <option value="">Select tables</option>
                  <option>2</option>
                  <option>4</option>
                  <option>8</option>
                  <option>10</option>
                </select>
            </div></td>
          </tr>
        <tr>
          <td colspan="2"> <div align="center" style="color:#993366; text-decoration:none; font-family:PAPyrus; font-size:30px;" > 
            
            <input type="submit" value="Book Your Table" name="Submit" onclick="myFunction()" style="border-radius:15px; font-family: PAPyrus; font-size: 30px; color: #993366; font-style: italic;" /> </div> </td>
          </tr>
      </table>
    </div>
  </form>
</div>

<br />
<br />

<pre style="color:#FFFFFF; font-size:18px; position:relative; font-family:PAPyrus;" align= "center">
 ©copyrights			 <a href="contact.html" style="color:#FFFFFF; text-decoration:none;"> contact us </a>
 </pre>           

</div>

</body>
</html>
