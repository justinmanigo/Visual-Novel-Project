<!DOCTYPE HTML>
<?php

    session_start();

    require("connect.php");

    if(isset($_POST['create'])){
        $username = mysqli_real_escape_string($conn, $_POST['user']);
                    
            $sql  = "INSERT INTO user(username)
            VALUES('$username')";
            mysqli_query($conn,$sql);
        
            $sql= "SELECT username
                   FROM user
                   WHERE username='$username'";
            mysqli_query($conn,$sql);
            $_SESSION['username'] = $username;
            $user = $_SESSION['username'];
        
        header("Location: intro.php");
    }

?>

<html>
<head>
<link rel = 'stylesheet' href='css/bootstrap.min.css'>
<link rel="stylesheet" type="text/css" href="regs.css">
<title> newgame </title>
</head>

<body >
    
    <audio loop="loop" controls="controls" hidden="true" autoplay="autoplay">
<source src="music/music1.mp3" type="audio/mpeg" />
</audio>

<div class='container' id='reg' >
<div class='row pic'> 

	 <img src="image/reg.jpg"/>
	</div>
	
	<div class='row in'>
	 
		<div class='col-md-6 col-md-offset-4' >
		
		
    <form method="POST" action="reg.php">
      <input type="text" class="form-control" id='place' placeholder='Enter a username' required="required" name="user" style="width:50%"> <br>
	  <button  id='submit' onclick="test();" class="btn btn-danger" type='submit' name="create" >SUBMIT</button>
		     
	</form>
</div>  
  
	</div>
</div>	
</body>

</html>
