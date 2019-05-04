<?php
  session_start();
	$_SESSION["logged"]="";
  $_SESSION["REG"]="";
  $_SESSION["name"]="";
  $db=mysqli_connect('localhost','root','','hostelroom');
?>
<html>
  <head>
    <script>
		function valid()
		{
			var x=document.getElementById("regno").value;
			var y=document.getElementById("passwd").value;			
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
		}
	
	</script>
    <title> Student Login</title>
    <link rel=stylesheet type="text/css" href=as.css>
  </head>
  <body>
  <body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" background="back8.jpg" >
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
        $query="select regno from login where regno='$reg' and password='$pass';";
        $result=mysqli_query($db,$query);
        $count=mysqli_num_rows($result);
        if($count!=1)
        {
          $error="Wrong Registration number \n or Password";
        }
        else
        {
          $_SESSION["logged"]=1;
          $_SESSION["REG"]=$reg;
		  
          header("location: stud1.php");
        }
      }
     ?>
    <center>
    <form id="login" method="post" action="">
      <?php
        if (isset($_GET["err"])&&$_GET["err"]==1)
          echo "<p class='title'>Please Login</p>";
        else {
          echo "<p class='title'>Student Log in</p>";
        }
       ?>
      <input type="text" placeholder="Registration number" id='regno' name='regno' requried/>
      <input type="password" placeholder="Password" id='passwd' name='passwd' />
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
