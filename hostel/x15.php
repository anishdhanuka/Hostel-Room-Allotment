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
<br><br><br>
<center><h1>Please select the room number from your seleted room type(X13)</h1></center>.
<?php
 $query="SELECT * FROM roomava where category=5;";
        mysqli_query($db,$query) or die("Query Failed");
        $result=mysqli_query($db,$query);
        while($row=mysqli_fetch_array($result)){
 $room=$row['roomno'];
 echo("<h2 style='color:red'><center>$room</center></h2>");
		}
		?><br>
<center>
<form action="" method="post">
<h4>Enter Your Selected Room Number:</h4> <input type="number" name="num"><br><br>
<input type="submit" style="margin-left:auto;margin-right:auto;display:block;margin-top:0%;margin-bottom:0%;color:white; background-color:green; padding: 11px 22px; text-align: center; cursor: pointer;">
</form>
<a href="book.php"><button style="margin-left:auto;margin-right:auto;display:block;margin-top:02%;margin-bottom:0%;color:white; background-color:green; padding: 11px 22px; text-align: center; cursor: pointer;">Go Back</button></a>		
</center>
<?php
$num = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num = $_POST["num"];
}
$query="SELECT * FROM roomava where category=5;";
        mysqli_query($db,$query) or die("Query Failed");
        $result=mysqli_query($db,$query);
        while($row=mysqli_fetch_array($result)){
 $room=$row['roomno'];
 if($room==$num)
 {	setcookie("as",$room,time()+3600);
	  header("location: dac.php");
	 break;
	 
 }
 
		}
	echo "<script> alert('Please select the correct room number from above list');</script>";	
?>
