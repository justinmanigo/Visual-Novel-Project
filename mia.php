<html>
<head>
<link rel = 'stylesheet' href='css/bootstrap.min.css'>
<link id='Hey' rel="stylesheet" type="text/css" href="reg.css">

<script type='text/javascript' src='newStory.js'></script>
<title> Date Sim </title>
</head>

<body class='my-skin'>

<audio loop="loop" controls="controls" hidden="true" autoplay="autoplay">
<source src="music/music2.mp3" type="audio/mpeg" />
</audio>





<div class='container-fluid' id='s1'>

<div class='col-md-2 col-md-offset-4'>
      <img src="image/lbd.jpg" id='love'>
<img src="image/mia_win.png" id='snowin' >
  
</div>

	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p> <br><strong>Congrats you and  mia are meant to be ...</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>

</div>










</body>
</html>

<script src="js/jquery-3.2.1.min.js"></script>
<script>
var ctr=1;
$("#next1").click(function(){
		
	window.location = "index.php";    
	
	
		
});

$(document).ready(function(){

	
   $('.container-fluid').not("#s"+ctr).hide();
	

	
	
	
	
	
	$(".btn-arrow-left").click(function(){
		
		

            
            $("#s"+ctr).hide();
		ctr++;
		$("#s"+ctr).show(100);
		
		console.log(ctr);
            
        
			
			
		
		

		
    });
	
	
});
	
	
	
	
	
	


</script>
