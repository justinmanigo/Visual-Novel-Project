<?php
	session_start();
	require("connect.php");
	$user = $_SESSION['username'];
	$result = mysqli_real_escape_string($conn, $_POST['result']);
    $g1 = mysqli_real_escape_string($conn, $_POST['g1_score']);
    $g2 = mysqli_real_escape_string($conn, $_POST['g2_score']);
    $g3 = mysqli_real_escape_string($conn, $_POST['g3_score']);
        
 
			
			echo "$user";
			echo "$result";
            
			$sql = "UPDATE user SET result='$result' WHERE username='$user'";
            $score= "UPDATE user SET g1_score='$g1', g2_score='$g2',g3_score='$g3' WHERE username='$user'" ;

             mysqli_query($conn,$score);
            mysqli_query($conn,$sql);
			
			header("Location: $result.php");
			
?>
