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

  <body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" style="background-color:pink"background="back8.jpg">
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
<br><br><br><center><h1 style='color:yellow'>Your room has been alloted</h1><br><br><br><?php
$strReadCookie = $_COOKIE["as"];
$a=$strReadCookie;

$strReadCookie1 = $_COOKIE["qw"];
$b=$strReadCookie1;
$query="DELETE FROM roomava WHERE roomno='$a';";
      mysqli_query($db,$query) or die("The Room is already booked");

	$query1="INSERT INTO roomalo (category,roomno,regno,fees)
VALUES ('1', '$a','$reg','65000');";
        mysqli_query($db,$query1) or die("The Room is already been alloted for the given registrations number");
		$query2="INSERT INTO roomalo (category,roomno,regno,fees)
VALUES ('1', '$a','$b','65000');";
        mysqli_query($db,$query2) or die("The Room is already been allotedfor the given registrations number");

$query3="SELECT * FROM rank,login where rank.regno=login.regno and rank.regno='$reg'";
        mysqli_query($db,$query3) or die("Query Failed");
        $result1=mysqli_query($db,$query3);
        while($row=mysqli_fetch_array($result1)){
 $name=$row['name'];
		}
		$query4="SELECT * FROM rank,login where rank.regno=login.regno and rank.regno='$b'";
        mysqli_query($db,$query4) or die("Query Failed");
        $result2=mysqli_query($db,$query4);
        while($row=mysqli_fetch_array($result2)){
 $name1=$row['name'];
		}
		
		$query5="SELECT * FROM roomalo where  regno='$reg'";
        mysqli_query($db,$query5) or die("Query Failed");
        $result5=mysqli_query($db,$query5);
        while($row=mysqli_fetch_array($result5)){
 $rno=$row['roomno'];
		$fees=$row['fees'];}
 echo("	<table style='width:100%; border: 1px solid black;'>
  <tr>
    <th  style='width:25%; border: 1px solid black;padding: 5px;
  text-align: center;'><b>Registration Number</b></th>
    <th  style='width:25%; border: 1px solid black;padding: 5px;
  text-align: center;'><b>Name</b></th>
	 <th  style='width:25%; border: 1px solid black;padding: 5px;
  text-align: center;'><b>Room number</b></th>
	  <th  style='width:25%; border: 1px solid black;padding: 5px;
  text-align: center;'><b>Fees</b></th>
	  
  </tr>
  <tr>
     <td  style='width:25%; border: 1px solid black;padding: 5px;
  text-align: center;'>$reg</td> 
    <td  style='width:25%; border: 1px solid black;padding: 5px;
  text-align: center;'>$name</td> 
	<td  style='width:25%; border: 1px solid black;padding: 5px;
  text-align: center;'>$rno</td> 
	 <td  style='width:25%; border: 1px solid black;padding: 5px;
  text-align: center;'>$fees</td> 
	   
  </tr>
  <tr>
     <td  style='width:25%; border: 1px solid black;padding: 5px;
  text-align: center;'>$b</td> 
    <td  style='width:25%; border: 1px solid black;padding: 5px;
  text-align: center;'>$name1</td> 
	<td  style='width:25%; border: 1px solid black;padding: 5px;
  text-align: center;'>$rno</td> 
	 <td  style='width:25%; border: 1px solid black;padding: 5px;
  text-align: center;'>$fees</td> 
	   
  </tr>
</table>");
		
		
?>
