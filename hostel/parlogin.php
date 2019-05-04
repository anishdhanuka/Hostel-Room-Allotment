<?php
  session_start();

  $db=mysqli_connect('localhost','root','','hostelroom');
?>
<html>
  <head>
    <script>
		function valid()
		{
			var x=document.getElementById("regno").value;
			var y=document.getElementById("mno").value;			
			if(y=="" || x=="")
			{
				alert("Please fill all the boxes");
			}
			var a=x.slice(0,2);
			var b=x.slice(2,5);
			var n=x.length;
			var c=b.toUpperCase();
			var d=x.slice(5,9)
			
			if(n!=9 || a!='17' || a!="16" && c!='BCE'  && c!="BLC" && c!="BME" && c!="BEC" && c!="BEE" && c!="BCL"  )
			{
				alert("Please fill the registration number correctly");
			}
			else if (isNaN(y) || y!=10)
			{
				alert("Please Enter Phone Number correctly");
			}
		}
	
	</script>
    <title> Parent Login</title>
    <link rel=stylesheet type="text/css" href=as.css>
  </head>
  <body>
  <body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" background="back8.jpg">
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
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
        $reg=$_POST['regno'];
        $pass=$_POST['passwd'];
		$mno=$_POST['mno'];
        $query="select regno from plogin where regno='$reg' and pmobile='$mno'";
         $result=mysqli_query($db,$query);
        $count=mysqli_num_rows($result);
        if($count!=1)
        {
          $error="Wrong Registration number \n or date of birth or parent mobile number";
        }
        else
        {
          $_SESSION["logged"]=1;
          $_SESSION["REG"]=$reg;
          header("location: par1.php");
        }
      }
     ?>
    <center>
    <form id="login" method="post" action="">
      <?php
        if (isset($_GET["err"])&&$_GET["err"]==1)
          echo "<p class='title'>Please Login</p>";
        else {
          echo "<p class='title'>Parent Login</p>";
        }
       ?>
      <input type="text" placeholder="Registration number" id='regno' name='regno' requried/>
      <input type="date" placeholder="Password" id='passwd' name='passwd' />
	  <input type="text" placeholder="Mobile Number" id='mno' name='mno' />
      <?php
        if(isset($error) && !empty($error))
        {
          echo "<p id='error' style='color:red;size:23pt'> $error </p>";
        }
        mysqli_close($db);
       ?>
      <button type="submit" onClick="valid()">
        Log In
      </button>
    </form>
  </center>

  </body>
</html>
