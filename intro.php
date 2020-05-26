<?php 
    session_start();
    require("connect.php");
    
    $user = $_SESSION['username'];

?>
<html>
<head>
<link rel = 'stylesheet' href='css/bootstrap.min.css'>
<link id='Hey' rel="stylesheet" type="text/css" href="sbunzel.css">


<title> Date Sim </title>
</head>

<body class='my-skin'>

<audio loop="loop" controls="controls" hidden="true" autoplay="autoplay">
<source src="music/music1.mp3" type="audio/mpeg" />
</audio>

<div class='container-fluid' id='s1'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chat">
		<p><strong>Hello <?php echo "{$user}";?> welcome to Dating Simulator. We will see how you court a girl...</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>



<div class='container-fluid' id='s2'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chat">
		<p><strong>The story takes place at the University of San Carlos..
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>

<div class='container-fluid' id='s3'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chat">
		<p><strong> With 3 days left before summer vacation.


</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


<div class='container-fluid' id='s4'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chat">
		<p><strong>You <?php echo "{$user}";?> are getting ready for the long break... 

</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


<div class='container-fluid' id='s5'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chat">
		<p><strong> But before you do. You are thinking of dating a girl in your school during summer vacation
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>

<div class='container-fluid' id='s6'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chat">
		<p><strong>To begin with our story.. lets go  and explore the beauty and serene of the Carolinian campus..  </strong> </p>
			
		<button id='intro' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


</body>
</html>


<script src="js/jquery-3.2.1.min.js"></script>
<script>
var ctr=1;
var g3r=0;

//$('#div').value=g2r;



function change()
{

document.getElementById("Hey").href="gym.css";
}


$("#intro").click(function(){
	
	window.location = "day1.php";    
	
	
		
	});

$(document).ready(function(){

	
   $('.container-fluid').not("#s"+ctr).hide();
	$('#mymodal').show();

	
	
	
	
	
	$(".btn-arrow-left").click(function(){
		
		

			
			
		$("#s"+ctr).hide();
		ctr++;
		$("#s"+ctr).show(100);
		
		
		

		
    });
	
	
});
	
	
	
	
	
	


</script>
