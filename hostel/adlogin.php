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
			var a=x.slice(0,3);
			var c=a.toUpperCase();
			var d=x.slice(3,7)
			
			if(n!=7 || c!="VIT" || isNaN(d))
			)
			{
				alert("Please fill the registration number correctly");
			}
			else if (mno!="Accounts" || mno!="Hostel")
			{
				alert("Please Fill the Department Correctly");
			}
		}
	
	</script>
    <title> Admin Login</title>
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
        $query="select Empid from adlogin where Empid='$reg' and password='$pass' and Department='$mno'";
         $result=mysqli_query($db,$query);
        $count=mysqli_num_rows($result);
        if($count!=1)
        {
          $error="Wrong Employee ID \n or Password or department";
        }
        else
        {
          $_SESSION["logged"]=1;
          $_SESSION["REG"]=$reg;
          header("location: wp.html");
        }
      }
     ?>
    <center>
    <form id="login" method="post" action="">
      <?php
        if (isset($_GET["err"])&&$_GET["err"]==1)
          echo "<p class='title'>Please Login</p>";
        else {
          echo "<p class='title'>Admin Login</p>";
        }
       ?>
      <input type="text" placeholder="Employee ID" id='regno' name='regno' requried/>
      <input type="password" placeholder="Password" id='passwd' name='passwd' />
	  <input type="text" placeholder="Department" id='mno' name='mno' />
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
