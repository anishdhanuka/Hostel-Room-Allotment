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

  <body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" style="background-color:pink" background="back8.jpg">
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
echo "<h3 style='background-color:white; padding:5; color:green;'>$name-$reg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='stulogoin.php'>Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $currentdate</h3> " ;
?>
<br><br><br><h1 style="color:red;"><center style="background-color:white">Select the room you want</center></h1><br><br>


<center><img src="IMG-20180318-WA0002.jpg" usemap="#image-map"></center>



<map name="image-map">
    <area target="" alt="Room no:-X14 (2 bed AC)" title="Room no:-X14 (2 bed AC)" href="x14.php" coords="403,466,445,499" shape="rect">
    <area target="" alt="Room no:-X51 (3 bed NAC)" title="Room no:-X51 (3 bed NAC)" href="x51.php" coords="530,497,489,465" shape="rect">
    <area target="" alt="Room no:-X51 (3 bed NAC)" title="Room no:-X51 (3 bed NAC)" href="x50.php" coords="533,459,574,495" shape="rect">
    <area target="" alt="Room no:-X49 (3 bed NAC)" title="Room no:-X49 (3 bed NAC)" href="x49.php" coords="578,461,618,495" shape="rect">
    <area target="" alt="Room no:-X48(3 bed NAC)" title="Room no:-X48(3 bed NAC)" href="x48.php" coords="621,461,660,492" shape="rect">
    <area target="" alt="Room no:-X46(4bed NAC)" title="Room no:-X46(4bed NAC)" href="x46.php" coords="706,457,745,488" shape="rect">
    <area target="" alt="Room no:-X47(4 bed NAC)" title="Room no:-X47(4 bed NAC)" href="x47.php" coords="660,461,701,489" shape="rect">
    <area target="" alt="Room no:-X15(3 bed AC)" title="Room no:-X15(3 bed AC)" href="x15.php" coords="361,469,403,502" shape="rect">
    <area target="" alt="Room no:-X19(4 bed AC)" title="Room no:-X19(4 bed AC)" href="x19.php" coords="193,475,232,502" shape="rect">
    <area target="" alt="Room no:-x13(2 bed AC)" title="Room no:-x13(2 bed AC)" href="x13.php" coords="269,363,308,393" shape="rect">
    <area target="" alt="Room no:-x08(2 bed NAC)" title="Room no:-x08(2 bed NAC)" href="x08.php" coords="345,208,390,242" shape="rect">
    <area target="" alt="Room no:X09(2 bed NAC)" title="Room no:X09(2 bed NAC)" href="x09.php" coords="307,207,344,243" shape="rect">
</map>

<br>
		<a href="stud1.php"><button style="margin-left:auto;margin-right:auto;display:block;margin-top:05%;margin-bottom:0%;color:white; background-color:green; padding: 11px 22px; text-align: center; cursor: pointer;">Go Back</button></a>
		<br></body>
		</html>