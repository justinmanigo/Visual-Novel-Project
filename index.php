<html>
<head>
<link rel = 'stylesheet' href='css/bootstrap.min.css'>
<link rel="stylesheet" type="text/css" href="style.css">
<title> DATE SIMULATOR </title>
</head>

<body>


<audio loop="loop" controls="controls" hidden="true" autoplay="autoplay">
<source src="music/music1.mp3" type="audio/mpeg" />
</audio>

<div class='container'>
	<div class='row menu'>
	<div class='col-md-9 col-md-offset-4 col-xs-12 col-xs-offset-4'>
	<a href="reg.php" class="btn btn-primary" role="button"><h2>Continue Story</h2></a> <br><br>
	<a href="reg.php" class="btn btn-primary" role="button"><h2>New Game</h2></a><br><br>
	
	
	</div>

</div>	

<div class='container set'>
	<div class='col-md-4 col-md-offset-4 col-sm-6 col-xs-12 col-xs-offset-3'>
	<a id="myBtn" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-wrench"></span> SETTINGS
        </a>
	<a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-info-sign"></span> ABOUT
        </a>
		</div>
</div>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2 class='text-center'><em>SETTINGS</em></h2>
		
	<h3 class='text-center'>AUDIO </h3>
	<div class='row sets'>
	<div class='col-md-7 col-md-offset-2'>
	<button type="button" class="btn btn-success" >ON</button>
	<button type="button" class="btn btn-danger">OFF</button> <br>
	</div>
    </div>
	<h3 class='text-center'>VIDEO </h3>
	<div class='cold-md-7 col-md-offset-4'>
	<button type="button" class="btn btn-warning" >LOW</button>
	<button type="button" class="btn btn-info" >MID</button>
	<button type="button" class="btn btn-danger" >HIGH</button>
	</div>
	</div>
    
    
</div>
	
	

</body>

</html>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>