<?php
  session_start();
  $db=mysqli_connect('localhost','root','','hostelroom') or die("Connection failed");
  if ($_SESSION["logged"]!=1)
    header("location: stuologoin.php?err=1");
	$reg=$_SESSION['REG'];
	echo "<title> Welcome $reg </title>";
	
?>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  
}
}
</style>
</head>

  <body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" style="background-color:pink">
<table cellpadding="10" cellspacing="0">
	<tr>
		<td width="30%" height="100px" valign="top" style="background-color:blue;">
	
<span style="font-size:22pt; background-color:blue; "><p style="color:white"> VELLORE INSTITUTE OF TECHNOLOGY </p></span>
		</td>
		<td valign="bottom" colspan="5" style="background-color:blue;"><p style="color:white">Hostel Room Allotment Portal </p>
		
		</td>
		
	</tr>
	
</table>
<?php
 $query="SELECT * FROM login where regno='$reg';";
        mysqli_query($db,$query) or die("Query Failed");
        $result=mysqli_query($db,$query);
        while($row=mysqli_fetch_array($result)){
 $name=$row['name'];
		}
?>		

		    
<?php
$currentdate = date('d/m/Y-h:i:sa');
echo "<h3 style='background-color:pink; padding:5; color:green;'>$name-$reg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='stulogoin.php'>Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $currentdate</h3> " ;
?>
<h2>Rules:-</h2>
<ul>
<li>The following is the room type distrubution table</li>
</ul>
<table>
<tr>
<th>Room</th>
<th>Reservation</th>
</tr>
<tr>
<td>2-BED AC</td>
<td>31%</td>
</tr>
<tr>
<td>3-BED AC</td>
<td>31%</td>
</tr>
<tr>
<td>4-BED AC</td>
<td>31%</td>
</tr>
<tr>
<td>2-BED NAC</td>
<td>31%</td>
</tr>
<tr>
<td>3-BED NAC</td>
<td>31%</td>
</tr>
<tr>
<td>4-BED NAC</td>
<td>31%</td>
</tr>
</table>
<ul>
<li>The Following is the archotecture of A block boys hostel</li>
</ul>
<img src="IMG-20180318-WA0002.jpg">
<br>
<a href="stud1.php"><button style="margin-left:auto;margin-right:auto;display:block;margin-top:05%;margin-bottom:0%;color:white; background-color:green; padding: 11px 22px; text-align: center; cursor: pointer;">Go Back</button></a>
<br>
</body>
</html>