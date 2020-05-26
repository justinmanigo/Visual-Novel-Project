<?php 
    session_start();
    require("connect.php");
    
    $user = $_SESSION['username'];

?>


<html>
<head>
<link rel = 'stylesheet' href='css/bootstrap.min.css'>
<link id='Hey' rel="stylesheet" type="text/css" href="bedss.css">


<title> Date Sim </title>
</head>

<body class='my-skin'>

<audio loop="loop" controls="controls" hidden="true" autoplay="autoplay">
<source src="music/music1.mp3" type="audio/mpeg" />
</audio>
    
    <!--php form -->
<form action="saveResult.php" method="POST">
			
		<input type="hidden" id="result" name="result">
        <input type="hidden" id="g1_score" name="g1_score">
        <input type="hidden" id="g2_score" name="g2_score">
        <input type="hidden" id="g3_score" name="g3_score">
		
</form>
    
    

<div class=' col-md-offset-11  '>
	<a id="myBtn1" class="btn btn-warning btn-lg">
          <span class="glyphicon glyphicon-gift"></span> Inventory
        </a>
	
		</div>



    		
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2 class='text-center'><strong>ITEMS</strong></h2>
		
   <div class="row">
    <div class="col-md-4 food" id="dFood" >
      <div class="thumbnail" onclick="checkMe('Food')">
        
          <img id='s' src="items/food.png"  style="width:50%">
          <div class="middle">
		<div class="text">FOOD</div>
		</div>
      
      </div>
    </div>
	 <div class="col-md-4 flowers" id="dFlowers">
      <div class="thumbnail " onclick="checkMe('Flowers')">
        
          <img id='f' src="items/flowers.png"  style="width:40%">
           <div class="middle">
		<div class="text">Flowers</div>
		</div>
      
      </div>
    </div>
    
	
	 
	  <div class="col-md-4 ballpen" id="dBallpen">
      <div class="thumbnail" onclick="checkMe('Ballpen')">
        
          <img id='n' src="items/ballpen.png"  style="width:30% ">
           <div class="middle">
		<div class="text">BALLPEN</div>
		</div>
      
      </div>
    </div>
	 
	
       
       <!-- 2nd row-->
       
       <div class="col-md-4 chocolate" id="dChocolate">
      <div class="thumbnail" onclick="checkMe('Chocolate')">
        
          <img id='n' src="items/choco.png"  style="width:50% ">
           <div class="middle">
		<div class="text">CHOCOLATE</div>
		</div>
      
      </div>
    </div>
       
         <div class="col-md-4 book" id="dBook">
      <div class="thumbnail" onclick="checkMe('Book')">
        
          <img id='n' src="items/book.png"  style="width:50% ">
           <div class="middle">
		<div class="text">BOOK</div>
		</div>
      
      </div>
    </div>
       
       
         <div class="col-md-4 fruits" id="dFruits">
      <div class="thumbnail" onclick="checkMe('Fruits')">
        
          <img id='n' src="items/fruits.gif"  style="width:50% ">
           <div class="middle">
		<div class="text">FRUITS</div>
		</div>
      
      </div>
    </div>
	
	
  </div>
	
  </div>
  
 </div>


<div class='container-fluid' id='s1'>
<div class='col-md-8 col-md-offset-4'>
<img src="char/user/default.png" id="udef">
</div>
	<div class='row '>
		<div class='col-md-1' id="chat">
		<p> <strong> Hey  <?php echo "{$user}";?>  Im your character in this game lets go around and find some chicks... </strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>





<!-- day 1  -->
<div class='container-fluid' id='s2'>
<div class='col-md-8 col-md-offset-4'>
<img src="char/user/default.png" id="udefault">
</div>
	<div class='row'>
		<div class='col-md-1' id="chat">
		<p><?php echo "{$user}";?>: <br><strong> Hmmm.. Christmas is right around the corner.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>





<div class='container-fluid' id='s3'>


<div class='col-md-8 col-md-offset-4'>
<img src="char/user/confuse.png" id='uconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" >
		<p><?php echo "{$user}";?>: <br><strong> I wonder if I should be somewhere...</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>





<div class='container-fluid' id='s4'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/user/confuse.png" id='uconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" >
		<p><?php echo "{$user}";?>: <br><strong> Probably not. I should head to school. </strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s5'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row'>
		<div class='col-md-1' id="chatt">
		<p><strong>On The Way to School.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>






<div class='container-fluid' id='s6'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/user/default.png"  id="udefault">
</div>
	<div class='row'>
		<div class='col-md-1' id="chat">
		<p><?php echo "{$user}";?>: <br><strong> H-Huh?.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<!--  -->


<div class='container-fluid' id='s7'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/angry.png" id='snowangry' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" >
		<p>SNOW: <br><strong> You! you over there!...</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s8'>

	<div class='row chatq '>
		<div class='col-md-1' id="chate" >
		<p><strong>You!you over there!
		</strong> </p>
  			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- to s3 -->
		<button id='ch111' class="btn btn-success" type="button">Ignore the call</button>
		<br>
		<br>
		<!-- to s4 -->
		<button id='ch112' class="btn btn-success" type="button">Huh? me?</button>
		<br>
		<br>
		<!-- to s5 -->
		<button id='ch113' class="btn btn-success" type="button">Yes..</button>
		<br>
		<br>
		<!-- to s12 -->
		<button id='ch114' class="btn btn-success" type="button">Tsk.. What do you want?</button>
		<br>
		<br>
		</div>
		
	</div>
</div>


<!-- 
 -->

 <div class='container-fluid' id='s9'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/angry.png" id='snowangry' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Dont ignore me!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s10'>


<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/shock.png" id='snowshock ' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Urg, hello? is there anyone else?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

    
<div class='container-fluid' id='s11'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/cute.png" id='snowcute' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Hmmph! Finally! It took forever to grap your attention!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s12'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/angry.png" id='snowangry' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong>E-excuse me? How dare. do you even know who you are talking to!?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s13'>

 
<div class='col-md-8 col-md-offset-4'>
   <img src="items/boq.png" id='boq1' class='item' onclick="store()">
<img src="char/snow/default.png" id='snowdefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Ugghh. Anyway, help me take these boxes to the library. These are for the student council.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s14'>

	<div class='row chatq '>
		<div class='col-md-1' id="chate" >
		<p><strong>	 help me take these boxes to the student council room.library. These are for the student council.
		</strong> </p>
  			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 5 pts-->
		<button id='ch121' class="btn btn-success" type="button">Yeah sure.</button>
		<br>
		<br>
		<!-- 0 pts -->
		<button id='ch122' class="btn btn-success" type="button">What? no!</button>
		<br>
		<br>
		<!-- 1 pt -->
		<button id='ch123' class="btn btn-success" type="button">Hmmm why should I?</button>
		<br>
		<br>
		<!-- 4 pts -->
		<button id='ch124' class="btn btn-success" type="button">But,where are the other student council people</button>
		<br>
		<br>
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s15'>


<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/cute.png" id='snowcute' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Huh, your more polite than I thought.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s16'>


<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/cute.png" id='snowcute' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Oh come on! I`m ordering you politely here!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s17'>


<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/shock.png" id='snowshock ' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Ugh, cause I asked you? Are you even listening to me?!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s18'>


<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/default.png" id='snowdefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> They aren`t here yet, and you happened to be so come on and help already.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s20'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/angry.png" id='snowangry' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" >
		<p>SNOW: <br><strong> Could you hurry it up?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s21'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/user/annoy.png" id='uannoy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" >
		<p><?php echo "{$user}";?>: <br><strong> Give me a break.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s22'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/shock.png" id='snowshock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong>Oh man up will you</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s23'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/user/silent.png" id='usilent' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> You know it could be better to loosen up a bit</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s24'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/shock.png" id='snowshock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Wh-what are you implying? Am i not good.. Am I some grandma who whines a lot?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s25'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong>Wh-what are you implying? Am i not good.. Am I some grandma who whines a lot?
		</strong> </p>
		  			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 2 pts -->
		<button id='ch131' class="btn btn-success" type="button">N-not really</button>
		<br>
		<br>
		<!-- 0 pts -->
		<button id='ch132' class="btn btn-success" type="button">Your wrinkles are showing</button>
		<br>
		<br>
		<!-- 3pts-->
		<button id='ch133' class="btn btn-success" type="button">Thats part of you so its okay.</button>
		<br>
		<br>
		<!-- 5 pts-->
		<button id='ch134' class="btn btn-success" type="button">You look a lot cuter if youve smile a  bit more</button>
		<br>
		<br>
		</div>
		
	</div>
</div>

<!-- if a and C -->

<div class='container-fluid' id='s26'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/angry.png" id='snowangry' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Oh stop denying it! Youve the worst!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s27'>


<div class='col-md-8 col-md-offset-4'>
<img src="char/user/confuse.png" id='uconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> But what did I do?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s28'>


<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/angry.png" id='snowangry' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Oh shut it! </strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>




<!-- if B -->

<div class='container-fluid' id='s29'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/angry.png" id='snowangry' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Oh shut up!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<!-- IF D  -->

<div class='container-fluid' id='s30'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/shock.png" id='snowshock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Wh..What are you talking about?!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s31'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/user/wow.png" id='uwow' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> *CHUCKLE* What are you getting all flustered for? </strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s32'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/angry.png" id='snowangry' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Oh shut it!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<!-- after  -->

<div class='container-fluid' id='s33'>


<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/cute.png" id='snowcute' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> A-anyways, we should hurry it up, class are about to start</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s34'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/user/happy.png" id='uhappy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong>alright alright</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s35'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>*Lunch Time*
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


<div class='container-fluid' id='s36'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/silent.png" id='usilent' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> *Sigh*</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s37'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/shock.png" id='snowshock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Hey you</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s38'>

<div class='col-md-8 col-md-offset-4'>
    <img src="items/food.png" id='boq2' class='item' onclick="store()" >
<img src="char/user/happy.png" id='uhappy' >
    
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> Hey too snow...lets eat?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s39'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/cute.png" id='snowcute' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Come with me. </strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s40'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/user/wow.png" id='uwow' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?> <br><strong> AGAIN? where to?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s41'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/cute.png" id='snowcute' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong>Just come with me</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s42'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row'>
		<div class='col-md-1' id="chatt">
		<p><strong>*Under the saturn tree*
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


<div class='container-fluid' id='s43'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/user/wow.png" id='uwow' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> So what are we doing here?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s44'>


<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/angry.png" id='snowangry' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Are you dense? it`s lunchtime and I`m starving..</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s45'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>*You and Snow sat down*
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>

<div class='container-fluid' id='s46'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/default.png" id='udefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> So why take me? </strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s47'>





<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/cute.png" id='snowcute' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong>s-soo. *take out bento* I made too much, eat it for me.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s48'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/happy.png" id='uhappy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> *eats*</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s49'>

	<div class='row chatq '>
		<div class='col-md-1'  id="chat">
		<p><strong>*eats*?	
		</strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 3 -->
		<button id='ch141' class="btn btn-success" type="button">Who made this?</button>
		<br>
		<br>
		<!-- 5-->
		<button id='ch142' class="btn btn-success" type="button">Yummy, this taste good!</button>
		<br>
		<br>
		<!-- 3 -->
		<button id='ch143' class="btn btn-success" type="button">Did you actually made this?</button>
		<br>
		<br>
		<!-- 0-->
		<button id='ch144' class="btn btn-success" type="button">bleugh! It taste so bad</button>
		<br>
		<br>
		</div>
		
	</div>
</div>

<!-- if a or c -->
<div class='container-fluid' id='s50'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/shock.png" id='snowshock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> I did! you got a problem?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s51'>



<div class='col-md-8 col-md-offset-4'>
<img src="char/user/happy.png" id='uhappy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> No, I like it!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s52'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/cute.png" id='snowcute' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Really? oh thanks hehehe</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<!-- if b -->
<div class='container-fluid' id='s53'>

	




<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/cute.png" id='snowcute' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> really? you likeit?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s54'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/happy.png" id='uhappy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?> <br><strong>Yes, I love it!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s55'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/angry.png" id='snowangry' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> tssk..... </strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s56'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/schock.png" id='snowshock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Oh I`m sorry</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s57'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/default.png" id='snowdefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Well I didnt make it for you anyway!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s58'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/user/default.png" id='udefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> Then why am I eating it?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s59'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/shock.png" id='snowshock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> thats because...!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>





<div class='container-fluid' id='s60'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>*Bell rings*
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>





<div class='container-fluid' id='s61'>

	




<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/default.png" id='snowdefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Anyways we need to go.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s62'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/default.png" id='udefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> Okay</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>





<div class='container-fluid' id='s63'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>*After class*
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


<div class='container-fluid' id='s64'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/cute.png" id='snowcute' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Hey, do you have a minute? </strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>





<div class='container-fluid' id='s65'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/annoy.png" id='uannoy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> You again?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s66'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/angry.png" id='snowangry' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Oh. just shut it!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s67'>

	




<div class='col-md-8 col-md-offset-4'>
<img src="char/user/confuse.png" id='uconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> So what do you need this time?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>




<div class='container-fluid' id='s68'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/default.png" id='snowdefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> oooh. its just , I`ve never said thanks today so I thought we can hangout.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s69'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong>oooh. its just , I`ve never said thanks today so I thought we can hangout.</strong> </p>    			
	</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 5pts-->
		<button id='ch151' class="btn btn-success" type="button">Then wanna go to a restaurant and eat?</button>
		<br>
		<br>
		<!-- 1pts-->
		<button id='ch152' class="btn btn-success" type="button">Oh but why now? </button>
		<br>
		<br>
		<!--  4pts -->
		<button id='ch153' class="btn btn-success" type="button">okay where we go?</button>
		<br>
		<br>
		<!-- 0pts -->
		<button id='ch154' class="btn btn-success" type="button">You are becoming quite anusance</button>
		<br>
		<br>
		</div>
		
	</div>
</div>


<!-- if a -->




<div class='container-fluid' id='s70'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/angry.png" id='snowangry' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Oh no. not there</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s71'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/user/confuse.png" id='uconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> eh? but why not?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<!-- cont.. -->

<div class='container-fluid' id='s72'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/cute.png" id='snowcute' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> Just come with me for a bit!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>





<div class='container-fluid' id='s73'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>* Snow bring you to the park while strolling around*
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>



<div class='container-fluid' id='s74'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/user/default.png" id='udefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> So? why are we here?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s75'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/default.png" id='snowdefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong>......</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s76'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/wow.png" id='uwow' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong>HEY</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s77'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/default.png" id='snowdefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong>......</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s78'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/user/confuse.png" id='uconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> are you okay?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s79'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/shock.png" id='snowshock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> huh? oh sorry</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>





<div class='container-fluid' id='s80'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/default.png" id='udefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> is someting bothering you?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s81'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/default.png" id='snowdefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> You know there is this guy I like but im sure he would just reject me.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s82'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong>You know there is this guy I like but im sure he would just reject me.
		</strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 5pts-->
		<button id='ch161' class="btn btn-success" type="button">Your strong independent woman, <br> why you say so?</button>
		<br>
		<br>
		<!--0 pts-->
		<button id='ch162' class="btn btn-success" type="button">I bet he would</button>
		<br>
		<br>
		<!--  3pts -->
		<button id='ch163' class="btn btn-success" type="button">I bet he wont do it though.</button>
		<br>
		<br>
		<!-- 3pts -->
		<button id='ch164' class="btn btn-success" type="button">Dont say that , you havent confessed yet</button>
		<br>
		<br>
		</div>
		
	</div>
</div>




<div class='container-fluid' id='s83'>




<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/shock.png" id='snowshock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> You are an awful person you know that</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s84'>





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/confuse.png" id='uconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> What?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s85'>

	




<div class='col-md-8 col-md-offset-4'>
<img src="char/snow/shock.png" id='snowshock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>SNOW: <br><strong> *sigh* nothing! anyway its getting darker we should go.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s86'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/user/happy.png" id='uhappy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> yeah lets go.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s87'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>*End of day one*
</strong> </p>

		<button id='end1' type="button" class="btn btn-info btn-arrow-left">►</button>
    
     
		</div>
			
	</div>
</div>





<div class='container-fluid' id='s88'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong> On the next day you came early to the room...*  Sit in classroom	*</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


<div class='container-fluid' id='s89'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/ayy.png" id='lilyayy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong> Hey! </strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s90'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/user/happy.png" id='uhappy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> oh hey there lily</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s91'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/default.png" id='lilydefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong> can we walk home together later?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s92'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong>  home together? </strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 5pts-->
		<button id='ch211' class="btn btn-success" type="button"> Yes, sure </button>
		<br>
		<br>
		<!--3 pts-->
		<button id='ch212' class="btn btn-success" type="button"> hmm I`ll think about it    </button>
		<br>
		<br>
		<!-- 4 pts -->
		<button id='ch213' class="btn btn-success" type="button"> I`ll try to free my schedule   </button>
		<br>
		<br>
		<!-- 0pts -->
		<button id='ch214' class="btn btn-success" type="button">  I dont think I can</button>
		<br>
		<br>
		</div>
		
	</div>
</div>




<div class='container-fluid' id='s93'>




<!-- if a -->
<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/default.png" id='lilydefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>  okay see you later then   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s94'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/user/default.png" id='udefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>    Okay see you too! 	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<!-- if b and c -->

<div class='container-fluid' id='s95'>

	



<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/confuse.png" id='lilyconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>   do you have something to do?   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s96'>

	




<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/glad.png" id='lilyglad' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>   I think.. ill let you know if its okay  	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<!-- con... -->

<div class='container-fluid' id='s97'>

	




<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/default.png" id='lilydefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>  Then ill get going   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s98'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>* A few moments later  *</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>



<div class='container-fluid' id='s99'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/wow.png" id='uwow' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?> <br><strong>   hey lily  	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s100'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/glad.png" id='lilyglad' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>  oh me? what is it? 	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s101'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/user/default.png" id='udefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong>Can i copy your homework? I forgot my notebook..	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s102'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/shock.png" id='lilyshock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong> what? seriously?.. fine you can copy it   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s103'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/user/happy.png" id='uhappy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong>yeeey ...     	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s104'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong> yeeey...  </strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 5pts-->
		<button id='ch221' class="btn btn-success" type="button">  You really are the best. </button>
		<br>
		<br>
		<!-- 3pts-->
		<button id='ch222' class="btn btn-success" type="button">  You are the only person I can count on.   </button>
		<br>
		<br>
		<!--  2pts -->
		<button id='ch223' class="btn btn-success" type="button"> You really are kind to everyone   </button>
		<br>
		<br>
		<!-- 3pts -->
		<button id='ch224' class="btn btn-success" type="button"> You are a life saver! </button>
		<br>
		<br>
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s105'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/ayy.png" id='lilyayy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>   geee. thanks hehe  	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s106'>






<div class='col-md-8 col-md-offset-4'>
<img src="items/ballpen.png" id='boq3' class='item' onclick="store()">
<img src="char/user/default.png" id='udefault' >
    
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> oh I`ll make it up to you later 	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s107'>

	




<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/default.png" id='lilydefault'>
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>  then I`m looking forward to it.   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s108'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>*  after class *</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


<div class='container-fluid' id='s109'>

	



<div class='col-md-8 col-md-offset-4'>
<img src="char/user/annoy.png" id='uannoy'>
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> shall we get going?    	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s110'>





<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/confuse.png" id='lilyconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong> o-okay. Then where shall we go?     	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s111'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong> where to go?  </strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 5pts-->
		<button id='ch231' class="btn btn-success" type="button"> To Mcdonalds, it will be a date!  </button>
		<br>
		<br>
		<!-- 3pts-->
		<button id='ch232' class="btn btn-success" type="button">  Lets eat at the iceream store.  </button>
		<br> 
		<br>
		<!--  3pts -->
		<button id='ch233' class="btn btn-success" type="button"> lets go to the park.   </button>
		<br>
		<br>
		<!-- 0 pts -->
		<button id='ch234' class="btn btn-success" type="button"> you pick  </button>
		<br>
		<br>
		</div>
		
	</div>
</div>


<!-- if a -->

<div class='container-fluid' id='s112'>




<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/shock.png" id='lilyshock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>  a date?   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s113'>



<div class='col-md-8 col-md-offset-4'>
<img src="char/user/happy.png" id='uhappy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong>  I`m just kidding   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s114'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/confuse.png" id='lilyconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong> eh? please stop joking errr    	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s115'>

	




<div class='col-md-8 col-md-offset-4'>
<img src="char/user/happy.png" id='uhappy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> HAHAHAHA   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<!-- if d -->

<div class='container-fluid' id='s116'>

	




<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/confuse.png" id='lilyconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong> but you said you will make it up to me    	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s117'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/user/wow.png" id='uwow' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong>but I coundnt think of  anything  	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s118'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/ayy.png" id='lilyayy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>  alright fine, lets go to the park anyway..	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>




<div class='container-fluid' id='s119'>
    
<div class='col-md-5 col-md-offset-5'>
<img src="items/choco.png" id='boq4' class='item' onclick="store()">
    
</div>	
	<div class='row '>
        
		<div class='col-md-1' id="chatte">
		<p><strong>* At the Park you gave lily a foods *</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>




<div class='container-fluid' id='s120'>

	



<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/default.png" id='lilydefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>yummy.. the food is so delicious  	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s121'>



<div class='col-md-8 col-md-offset-4'>
<img src="char/user/happy.png" id='lilyayy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong>  oh im glad you like it..   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>




<div class='container-fluid' id='s122'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/silent.png" id='usilent' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong>what did you want to talk about? 	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s123'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/confuse.png" id='lilyconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong> huh?    	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s124'>





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/wow.png" id='uwow' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong>  you know, because you asked me to come with you,so I thought something come up   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s125'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/confuse.png" id='lilyconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>Oh right.. I was gonna ask if you and snow are going out?     	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s126'>





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/wow.png" id='uwow' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong>  Wha- What are yuou talking about?	   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s127'>





<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/glad.png" id='lilyglad' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong> I saw you two the other day so are you dating ?    	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s128'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong>  I saw you two the other day so are you dating ? </strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 5pts-->
		<button id='ch241' class="btn btn-success" type="button">noo we are not going out  </button>
		<br>
		<br>
		<!-- 3pts-->
		<button id='ch242' class="btn btn-success" type="button"> what made you jump to that?  	 </button>
		<br>
		<br>
		<!-- 2 pts -->
		<button id='ch243' class="btn btn-success" type="button">  Did we look like a couple?   </button>
		<br>
		<br>
		<!-- 0pts -->
		<button id='ch244' class="btn btn-success" type="button"> No we are not a couple yet </button>
		<br>
		<br>
		</div>
		
	</div>
</div>

<!-- if d -->
<div class='container-fluid' id='s129'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/ayy.png" id='lilyayy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong> *giggle* just kidding    	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s130'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/user/default.png" id='udefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> huh? what do you mean?    	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s131'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/default.png" id='lilydefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>  nothing *giggle*    	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s132'>

	




<div class='col-md-8 col-md-offset-4'>
<img src="char/user/annoy.png" id='udefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong>  oh come on   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s133'>





<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/ayy.png" id='lilyayy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>so what kind of girl do you like?  	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s134'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong>so what kind of girl do you like?     </strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 3pts-->
		<button id='ch251' class="btn btn-success" type="button">why this all of a sudden?  </button>
		<br>
		<br>
		<!-- 5pts-->
		<button id='ch252' class="btn btn-success" type="button"> s-someone like you I guess    </button>
		<br>
		<br>
		<!--  2pts -->
		<button id='ch253' class="btn btn-success" type="button"> I`m not looking forward to it yet   </button>
		<br>
		<br>
		<!-- 1pts -->
		<button id='ch254' class="btn btn-success" type="button"> I uh , I dont know.  </button>
		<br>
		<br>
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s135'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/ayy.png" id='lilyayy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>  so I have a chance then?   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s136'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong>  so I have a chance then?   </strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 1pts-->
		<button id='ch261' class="btn btn-success" type="button">  No </button>
		<br>
		<br>
		<!-- 3pts-->
		<button id='ch262' class="btn btn-success" type="button">  Maybe  </button>
		<br>
		<br>
		<!-- 5pts -->
		<button id='ch263' class="btn btn-success" type="button"> Yes   </button>
		<br>
		<br>
		<!-- 2pts -->
		<button id='ch264' class="btn btn-success" type="button"> I dont know hehe </button>
		<br>
		<br>
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s137'>





<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/glad.png" id='lilyglad' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>*giggle* Just kidding   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s138'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/user/annoy.png" id='udefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> oh? seriously? you always tease me.     	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s139'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/lily/default.png" id='lilydefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>lily: <br><strong>*giggle* anyway its almost dark, we should go.   	</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s140'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/happy.png" id='uhappy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> Yeah lets go     	</strong> </p>
			
		<button id='end2' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>





<div class='container-fluid' id='s141'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/user/silent.png" id='usilent' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat">
		<p><br><strong> The next day, your in library *reading a book *</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s142'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/confuse.png" id='miaconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat">
		<p>Mia: <br><strong> Excuse me.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>




<div class='container-fluid' id='s143'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong>Excuse me.
		</strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 4pts-->
		<button id='ch311' class="btn btn-success" type="button">look at the girl</button>
		<br>
		<br>
		<!--5 pts-->
		<button id='ch312' class="btn btn-success" type="button">Yes</button>
		<br>
		<br>
		<!-- 1 pts -->
		<button id='ch313' class="btn btn-success" type="button">What?.</button>
		<br>
		<br>
		<!--0 pts -->
		<button id='ch314' class="btn btn-success" type="button">Ignore the girl </button>
		<br>
		<br>
		</div>
		
	</div>
</div>






<div class='container-fluid' id='s144'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/default.png" id='miadefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> .....</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s145'>





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/silent.png" id='usilent' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> .....</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s146'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/shock.png" id='miashock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> Hey thats my spot</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s147'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong>Thats my spot	
		</strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- pts-->
		<button id='ch321' class="btn btn-success" type="button">I see </button>
		<br>
		<br>
		<!-- pts-->
		<button id='ch322' class="btn btn-success" type="button">And?</button>
		<br>
		<br>
		<!--  pts -->
		<button id='ch323' class="btn btn-success" type="button">Ah, I`m sorry</button>
		<br>
		<br>
		<!-- pts -->
		<button id='ch324' class="btn btn-success" type="button">Ignore the girl</button>
		<br>
		<br>
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s148'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/silent.png" id='usilent' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> *moves over to the next empty seat*</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s149'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/user/silent.png" id='usilent' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> * Sits beside Mia and starts reading* </strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s150'>





<div class='col-md-8 col-md-offset-4'>
<img src="char/user/wow.png" id='uwow' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> The  atmospher was too awkward. I decided to strike up a conversation</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s151'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong>what will you do?
		</strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!--1 pts-->
		<button id='ch331' class="btn btn-success" type="button">So, nice weather today</button>
		<br>
		<br>
		<!--5 pts-->
		<button id='ch332' class="btn btn-success" type="button">You look pretty</button>
		<br>
		<br>
		<!-- 4 pts -->
		<button id='ch333' class="btn btn-success" type="button">That`s an interesting.</button>
		<br>
		<br>
		<!--0 pts -->
		<button id='ch334' class="btn btn-success" type="button">dont initiate a convo.</button>
		<br>
		<br>
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s152'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/default.png" id='miadefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> Hmm.. Its nothing out of the ordinary</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s153'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/smile.png" id='miasmile' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> *blushes* Hmm. *continues reading* </strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s154'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/confuse.png" id='miaconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> Huh? Oh. You read Bryl Lim's Books too?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s155'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/shock.png" id='miashock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> Can you tell me about this book?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s156'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/default.png" id='miadefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> No, wait. I want to finish it for myself</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s157'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/user/silent.png" id='usilent' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> Continues reading..</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<!-- cont.. -->


<div class='container-fluid' id='s158'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>*Both delve into awkward silence oncemore*
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


<div class='container-fluid' id='s159'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>*After a while*
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


<div class='container-fluid' id='s160'>





<div class='col-md-8 col-md-offset-4'>

<img src="char/mia/smile.png" id='miasmile' >
    <img src="items/book.png" id='boq5' class='item' onclick="store()" >

</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> *keeps book* I should go. *packs up her things and leaves*</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s161'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/shock.png" id='miashock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p> <br><strong> *on her way out she suddenly collapses on the floor*</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s162'>

	




<div class='col-md-8 col-md-offset-4'>
<img src="char/user/wow.png" id='uwow' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> Oh my god *rushes to mia*</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s163'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong>Oh my God!
		</strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 4pts-->
		<button id='ch341' class="btn btn-success" type="button"> Are you okay?   </button>
		<br>
		<br>
		<!-- 2 pts-->
		<button id='ch342' class="btn btn-success" type="button">  What happened?  </button>
		<br>
		<br>
		<!--  1 pts -->
		<button id='ch343' class="btn btn-success" type="button">  Did you fall down on purpose?   </button>
		<br>
		<br>
		<!-- 0 pts -->
		<button id='ch344' class="btn btn-success" type="button"> *Stay silent and act like no happened* </button>
		<br>
		<br>
		</div>
		
	</div>
</div>

<!-- if a  and b -->


<div class='container-fluid' id='s164'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/confuse.png" id='miaconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> Im.... I`m fine..</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<!-- if c and d -->


<div class='container-fluid' id='s165'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/shock.png" id='miashock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> IDIOT..!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<!-- cont.. -->


<div class='container-fluid' id='s166'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/lib.png" id='lib' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Librarian: <br><strong> Whats all this racket?!.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s167'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/user/wow.png" id='uwow' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> Miss, she fainted I think she`s ill</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s168'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/lib.png" id='lib' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Librarian: <br><strong> Take her to the clinic!</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>











<div class='container-fluid' id='s169'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>*At the clinic*
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


<div class='container-fluid' id='s170'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>After some consulation, you find out that mia suffers from Anemia.
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>

<div class='container-fluid' id='s171'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>That means she faint on occassion due to her condition.
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


<div class='container-fluid' id='s172'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>The nurse tells you to stay put as she goes away to take care of some bussiness.
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


<div class='container-fluid' id='s173'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>*You now sit quietly beside her as she  lays on the bed resting.*
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>
<!--  -->

<div class='container-fluid' id='s174'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/confuse.png" id='miaconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> You dont have to take me here, you know!..</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>






<div class='container-fluid' id='s175'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong> You dont have to take me here, you know!..
		</strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!--5 pts-->
		<button id='ch351' class="btn btn-success" type="button"> Its ok, I dont mind.  </button>
		<br>
		<br>
		<!-- 0pts-->
		<button id='ch352' class="btn btn-success" type="button"> Trust me, I dont want to be here.   </button>
		<br>
		<br>
		<!--  4pts -->
		<button id='ch353' class="btn btn-success" type="button">  I was to bring you here  </button>
		<br>
		<br>
		<!-- 3pts -->
		<button id='ch354' class="btn btn-success" type="button"> Oh youre awake </button>
		<br>
		<br>
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s176'>

	


<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/smile.png" id='miasmile' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> Well arent you the gentleman.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s177'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/shock.png" id='miashock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> Then what are you doing in here?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s178'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/smile.png" id='miasmile' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> Oh good. You have eyes.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<!-- cont -->

<div class='container-fluid' id='s179'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/default.png" id='miadefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> *sits up * Well Im awake now. You can leave.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s180'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/user/silent.png" id='usilent' >
     <img src="items/fruits.gif" id='boq6' class='item' onclick="store()">
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> I consider about it, but ultimately decided to stay by your side.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s181'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/confuse.png" id='miaconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> Why are you staying?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>



<div class='container-fluid' id='s182'>

	<div class='row chatq '>
		<div class='col-md-1' id="chat" id="chat">
		<p><strong>Why are you staying?	
		</strong> </p>
			
		
		
		
            			
		</div>
		
	</div>
	
	<div class='container '>
	
		<div class='col-md-5 col-md-offset-4'>
		<br>
		<!-- 0pts-->
		<button id='ch361' class="btn btn-success" type="button">I dont gave anywhere to be right now </button>
		<br>
		<br>
		<!-- 1pts-->
		<button id='ch362' class="btn btn-success" type="button"> The nurse told me to stay   </button>
		<br>
		<br>
		<!--  4pts -->
		<button id='ch363' class="btn btn-success" type="button"> I just feel like staying  </button>
		<br>
		<br>
		<!-- 5pts -->
		<button id='ch364' class="btn btn-success" type="button">The prince shoudnt leave the princess </button>
		<br>
		<br>
		</div>
		
	</div>
</div>


<!-- if a -->

<div class='container-fluid' id='s183'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/default.png" id='miadefault' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong> Why dont you go back to the library?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

    
<!-- if b -->


    
    
    
<div class='container-fluid' id='s184'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/shock.png" id='miashock' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" >
		<p>Mia: <br><strong> If the nurse told you to jump over the cliff, would you?</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<!-- if c -->

<div class='container-fluid' id='s185'>

	





<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/confuse.png" id='miaconfuse' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia: <br><strong>All aline with a girl in bed? you creep.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<!-- if d -->

<div class='container-fluid' id='s186'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/user/wow.png" id='uwow' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?>: <br><strong> Oh mia its me , with your face  you barely qualify to be a prince..</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s187'>


<div class='col-md-8 col-md-offset-4'>
<img src="char/user/annoy.png" id='uannoy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p> <br><strong> Somehow you got annoyed by mia`s remarks, but found her sharp remarks to be amused </strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

<div class='container-fluid' id='s188'>

<div class='col-md-8 col-md-offset-4'>
<img src="char/user/happy.png" id='uhappy' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p> <br><strong> so you decided to chat with her a bit more</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s189'>







<div class='col-md-8 col-md-offset-4'>
<img src="char/user/wow.png" id='uwow' >
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chatt">
		<p> <br><strong></strong>You lost track of time, but the time you spent chatting made you a bit  closer to mia.</p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>

	</div>
</div>



<div class='container-fluid' id='s190'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>At the end of the day. You were able to worn your day way into mia`s uncaring demeanor.
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>

<div class='container-fluid' id='s191'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>She gave you her phone number and both of you went home on seperate ways.
</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>


<div class='container-fluid' id='s192'>
<div class='col-md-8 col-md-offset-4'>

</div>	
	<div class='row '>
		<div class='col-md-1' id="chatt">
		<p><strong>*End of day 3*
</strong> </p>
			
		<button id='end3' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
			
	</div>
</div>



<div class='container-fluid' id='s193'>

	




<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/shock.png" id='miashock'>
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia<br><strong> Kindly move over.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s194'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/smile.png" id='miasmile'>
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia<br><strong>Its okay just move over.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s195'>






<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/default.png" id='miadefault'>
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia<br><strong> hmmm......</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>


<div class='container-fluid' id='s196'>
<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/shock.png" id='miashock'>
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p><?php echo "{$user}";?><br><strong> hmm...</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>

    
    

<div class='container-fluid' id='s197'>
<div class='col-md-8 col-md-offset-4'>
<img src="char/mia/shock.png" id='miashock'>
</div>
	<div class='row'>
		<div class='col-md-1' id="chat" id="chat">
		<p>Mia:<br><strong> Hey move over.</strong> </p>
			
		<button id='next1' type="button" class="btn btn-info btn-arrow-left">►</button>
            			
		</div>
		
	</div>
</div>






















<div class="container-fluid" id='mapch'>
	  
	  <div class="row">
		<div class="col-md-3">
		  <div class="thumbnail">
			
			  <img src="image/park.jpg" alt="PARK" style="width:100%" onclick="myFunc('park')">
			  <div class="caption">
				<h2>PARK</h2>
			  </div>
			
		  </div>
		</div>
		<div class="col-md-3">
		  <div class="thumbnail">
			
			  <img src="settings/canteens.jpg" alt="CANTEEN" style="height:33%" onclick="myFunc('canteen')">
			  <div class="caption">
				<h2>CANTEEN</h2>
			  </div>
			
		  </div>
		</div>
		<div class="col-md-3">
		  <div class="thumbnail">
		   
			  <img src="image/croom.jpg" alt="CLASSROOM" style="width:100%"  onclick="myFunc('classroom')">
			  <div class="caption">
				<h2>CLASSROOM</h2>
			  </div>
		   
		  </div>
		</div>
		 <div class="col-md-3">
		  <div class="thumbnail">
			
			  <img src="image/lib.jpg" alt="LIBRARY" style="width:100%" onclick="myFunc('lib')">
			  <div class="caption">
				<h2>LIBRARY</h2>
			  </div>
		 
				
		
						
			
			
		</div> 
		  </div>
		</div>
	
		<div class='row asd'>
			<div class='col-md-1'>
			<p>Choose a place where do you want to go!  </p>
			</div>
		</div>
	</div>




<div class='container-fluid' id='no'>
	<div class='row '>
		<div class='col-md-1' id="chat">
		<p><strong>No one is here.</strong> </p>
			
		<h1>
		
       
          <button id='next1' type="button" class="btn btn-info btn-arrow-leftW">►</button>
        
        </h1>		
		</div>
		
	</div>
</div>


















</body>
</html>

<script src="js/jquery-3.2.1.min.js"></script>
<script>
var ctr=1;/*scene id counter*/
var g1r=0;/* girl 1 score*/
var g2r=0;/* girl 2 score*/
var g3r=0;/* girl 3 score*/
    
    
    
/*for map function*/    
function myFunc(place)
{



	 if(ctr==20){
		if(place=="lib"){
			libC();
			$("#mapch").hide();
			$("#s"+ctr).show(100);
            $("#myBtn1").show(100);
		}else{
			
			if(place=="canteen"){
				canteenC();
			}else if(place=="classroom"){
				classC();
			}else if(place=="park"){
				parkC();
			}
		    
			$("#mapch").hide();
			console.log(ctr);
			$("#no").show(100);
            
			
			$(".btn-arrow-leftW").click(function(){
                
				mapC();
				$("#no").hide();
				$("#mapch").show(100);
				console.log(ctr);
				});
			
			
		}
		
	}else if(ctr==35){
	   if(place=="canteen"){
			canteenC();
			$("#mapch").hide();
			ctr++;
			$("#s"+ctr).show(100);
            $("#myBtn1").show(100);
		}else{
			
			if(place=="park"){
				parkyC();
			}else if(place=="classroom"){
				classC();
			}else if(place=="lib"){
				libC();
			}
		
			$("#mapch").hide();
			console.log(ctr);
			
			
			$("#no").show(100);
			
			
            
			$(".btn-arrow-leftW").click(function(){
                
				mapC();
				$("#no").hide();
				$("#mapch").show(100);
				console.log(ctr);		
				
			});
			
			
		}
		
	}else if(ctr==118){
		if(place=="park"){
			parkC();
			$("#mapch").hide();
			ctr++;
			$("#s"+ctr).show(100);
            $("#myBtn1").show(100);
		}else{
			
			if(place=="canteen"){
				canteenC();
			}else if(place=="classroom"){
				classC();
			}else if(place=="lib"){
				libC();
			}
		
			$("#mapch").hide();
			console.log(ctr);
			
			
			$("#no").show(100);
			
			
			$(".btn-arrow-leftW").click(function(){
		
			
				mapC();
			
				$("#no").hide();
				$("#mapch").show(100);
				console.log(ctr);	
			});
			
			
		}
		
	}else if(ctr==166){
	
			libC();
			$("#mapch").hide();
			ctr++;
			$("#s"+ctr).show(100);
		
		
			$("#mapch").hide();
			console.log(ctr);
			
			
			$("#no").show(100);
			
			
			$(".btn-arrow-leftW").click(function(){
		
			
				mapC();
			
				$("#no").hide();
				$("#mapch").show(100);
				console.log(ctr);
				
				
				
				
			});
			
			
		}else if(ctr==171){
		if(place=="park"){
			parkC();
			$("#mapch").hide();
			ctr++;
			$("#s"+ctr).show(100);
            $("#myBtn1").show(100);
		}else{
			
			if(place=="canteen"){
				canteenC();
			}else if(place=="classroom"){
				classC();
			}else if(place=="lib"){
				libC();
			}
		
			$("#mapch").hide();
			console.log(ctr);
			
			
			$("#no").show(100);
			
			
			$(".btn-arrow-leftW").click(function(){
		
			
				mapC();
			
				$("#no").hide();
				$("#mapch").show(100);
				console.log(ctr);		
			});
			
            
             $("#myBtn1").click(function(){
		
			
				mod();
				
				
				
			});
			
		}
		
	}
}
   
    
    
    
 /*checking item to the right girl*/
function checkMe(item)
{

	if(item=="Food"){
	
		if(ctr>=1 && ctr<87){
		
		g1r+=3; /*plus 3 points to the score*/
		
		alert("Item has been given to snow. +3 points");
		$("#dFood").hide();
		
		}else{
		alert("Item cannot be given to this person");
		}
	
	}else if(item=="Flowers"){
	
		if(ctr>=1 && ctr<87){
		
		g1r+=3;/*plus 3 points to the score*/
		
		alert("Item has been given to snow. +3 points");
		$("#dFlowers").hide();
		
		}else{
		alert("Item cannot be given to this person");
		}
	
	}else if(item=="Ballpen"){
	
		if(ctr>=89 && ctr<140){
		
		g2r+=3;/*plus 3 points to the score*/
		
		alert("Item has been given to lily. +3 points");
		$("#dBallpen").hide();
		
		}else{
		alert("Item cannot be given to this person");
		}
	
	}else if(item=="Chocolate"){
	
		if(ctr>=89 && ctr<140){
		
		g2r+=3;/*plus 3 points to the score*/
		
		alert("Item has been given to lily. +3 points");
		$("#dChocolate").hide();
		
		}else{
		alert("Item cannot be given to this person");
		}
	
	}else if(item=="Book"){
	
		if(ctr>=142 && ctr<190){
		
		g3r+=3;/*plus 3 points to the score*/
		
		alert("Item has been given to mia. +3 points");
		$("#dBook").hide();
		
		}else{
		alert("Item cannot be given to this person");
		}
	
	}else if(item=="Fruits"){
	
		if(ctr>=142 && ctr<190){
		
		g3r+=3;/*plus 3 points to the score*/
		
		alert("Item has been given to snow. +3 points");
		$("#dFruits").hide();
		
		}else{
		alert("Item cannot be given to this person");
		}
	
	}

}
    

/*modal button function*/   
function mod()
{
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn1");
var span = document.getElementsByClassName("close")[0];
    
btn.onclick = function() {
    modal.style.display = "block";
    
}
    
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
    
}    
 
    
function clinicC()
{

document.getElementById("Hey").href="clinic.css";

}      
function bunzelC()
{

document.getElementById("Hey").href="sbunzel.css";

}        
    
function parkyC()
{

document.getElementById("Hey").href="parking.css";

}    
 
function parkC()
{

document.getElementById("Hey").href="paks.css";

}
    
function canteenC()
{

document.getElementById("Hey").href="canteeen.css";

}


function gymC()
{

document.getElementById("Hey").href="gym.css";


}

function classC()
{

document.getElementById("Hey").href="noClasses.css";
}


function libC()
{

document.getElementById("Hey").href="last.css";
}


function bedC()
{

document.getElementById("Hey").href="beds.css";
}


function mapC()
{
    $('#myBtn1').hide();

document.getElementById("Hey").href="maps.css";
	
}


function index()
{

document.getElementById("Hey").href="style.css";
	
}

function reg()
{

document.getElementById("Hey").href="reg.css";
	
}
function classpress()
{

document.getElementById("Hey").href="classs.css";
	
}
    
    
/*inventory function*/    
function hInventory()
{

	$("#dFood").hide();
	$("#dFlowers").hide();
	$("#dBallpen").hide();
	$("#dChocolate").hide();
	$("#dBook").hide();
	$("#dFruits").hide();
}

    /*item store function*/
function store()
{

	if(ctr==13){
		$("#boq1").css("visibility", "hidden");
		$("#dFlowers").show();
        alert("Item has been stored in inventory");
		
	}else if(ctr==38){
	
		$("#boq2").css("visibility", "hidden");
		$("#dFood").show();
        alert("Item has been stored in inventory");
	
	}else if(ctr==106){
	
		$("#boq3").css("visibility","hidden");
		$("#dBallpen").show();
        alert("Item has been stored in inventory");
	
	}else if(ctr==119){
	
		$("#boq4").css("visibility","hidden");
		$("#dChocolate").show();
        alert("Item has been stored in inventory");
	
	}else if(ctr==160){
	
		$("#boq5").css("visibility","hidden");
		$("#dBook").show();
        alert("Item has been stored in inventory");
	
	}else if(ctr==180){
	
		$("#boq6").css("visibility","hidden");
		$("#dFruits").show();
        alert("Item has been stored in inventory");
	
	}

}
 
$("#boq").click(function(){

	
	$("#boq2").css("visibility", "hidden");
	

});
    
    
    
    
/*last button of the scene*/   
$("#end3").click(function(){
$("#s"+ctr).hide();
ctr+=10;
var MAX="gameOver";
if(g1r>g2r && g1r>15){

	MAX="snow";

}else if(g2r<g3r && g3r>15){
	
	
	MAX="mia";
	
}else if(g2r>15){

	MAX="lily";
	
}

$("#g1_score").val(g1r);
$("#g2_score").val(g2r);
$("#g3_score").val(g3r);
$("#result").val(MAX);
$("form").submit();

	
	
});
    
    
    
/*For the next button to go in next div (scene)*/
$(document).ready(function(){

   $('.container-fluid').not("#s"+ctr).hide();
	hInventory();
	
 mod();
   

	 if(ctr==182 || ctr==186){
		
		var MAX;
		if(g1r>g2r){
		MAX="g1e";
		}else if(g2r<g3r){
		MAX="g3r";
		}else{
		MAX="g2r";
		}
	}
	$("#ch111").click(function(){
        
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	$("#ch112").click(function(){
        
		g1r+=4;
		$("#s"+ctr).hide(100);
		ctr+=2;
		$("#s"+ctr).show(100);
		console.log(g1r);
    });
	$("#ch113").click(function(){
        
		g1r+=5;
		$("#s"+ctr).hide(100);
		ctr+=3;
		$("#s"+ctr).show(100);
		console.log(g1r);
    });
	$("#ch114").click(function(){
        
		g1r+=1;
		$("#s"+ctr).hide(100);
		ctr+=4;
		$("#s"+ctr).show(100);
		console.log(g1r);
    });
	
	$("#ch121").click(function(){
        g1r+=5;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	$("#ch122").click(function(){
        
		$("#s"+ctr).hide(100);
		ctr+=2;
		$("#s"+ctr).show(100);
    });
	$("#ch123").click(function(){
        
		g1r+=1;
		$("#s"+ctr).hide(100);
		ctr+=3;
		$("#s"+ctr).show(100);
		console.log(g1r);
    });
	$("#ch124").click(function(){
        
		g1r+=4;
		$("#s"+ctr).hide(100);
		ctr+=4;
		$("#s"+ctr).show(100);
		console.log(g1r);
    });
	
	$("#ch131").click(function(){
        g1r+=2;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	$("#ch132").click(function(){
        
		$("#s"+ctr).hide(100);
		ctr+=4;
		$("#s"+ctr).show(100);
    });
	$("#ch133").click(function(){
        
		g1r+=3;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);
	
    });
	$("#ch134").click(function(){
        
		g1r+=5;
		$("#s"+ctr).hide(100);
		ctr+=5;
		$("#s"+ctr).show(100);
	
    });
	
	$("#ch141").click(function(){
        g1r+=3;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	$("#ch142").click(function(){
        g1r+=5;
		$("#s"+ctr).hide(100);
		ctr+=4;
		$("#s"+ctr).show(100);
    });
	$("#ch143").click(function(){
        
		g1r+=3;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);
	
    });
	$("#ch144").click(function(){
        
		
		$("#s"+ctr).hide(100);
		ctr+=7;
		$("#s"+ctr).show(100);
	
    });
	
	$("#ch151").click(function(){
        g1r+=5;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	$("#ch152").click(function(){
        g1r+=1;
		$("#s"+ctr).hide(100);
		ctr+=3;
		$("#s"+ctr).show(100);
    });
	$("#ch153").click(function(){
        
		g1r+=4;
		$("#s"+ctr).hide(100);
		ctr+=3;
		$("#s"+ctr).show(100);
	
    });
	$("#ch154").click(function(){
        
		$("#s"+ctr).hide(100);
		ctr+=3;
		$("#s"+ctr).show(100);
	
    });
	
	$("#ch161").click(function(){
        g1r+=5;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	$("#ch162").click(function(){
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);
    });
	$("#ch163").click(function(){
        
		g1r+=2;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);
	
    });
	$("#ch164").click(function(){
        g1r+=3;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);
	
    });
	
	$("#ch211").click(function(){
        
		g2r+=5;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch212").click(function(){
        
		g2r+=3;
		$("#s"+ctr).hide(100);
		ctr+=3;
		$("#s"+ctr).show(100);
	
    });
	$("#ch213").click(function(){
        
		g2r+=4;
		$("#s"+ctr).hide(100);
		ctr+=3;
		$("#s"+ctr).show(100);

    });
	$("#ch214").click(function(){
        
		$("#s"+ctr).hide(100);
		ctr+=4;
		$("#s"+ctr).show(100);

    });
	
	$("#ch221").click(function(){
        
		g2r+=5;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch222").click(function(){
        
		g2r+=3;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);
	
    });
	$("#ch223").click(function(){
        
		g2r+=2;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	$("#ch224").click(function(){
        
		g2r+=2;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch231").click(function(){
        
		g2r+=5;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch232").click(function(){
        
		g2r+=3;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);
	
    });
	$("#ch233").click(function(){
        
		g2r+=3;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	$("#ch234").click(function(){
        
		$("#s"+ctr).hide(100);
		ctr+=5;
		$("#s"+ctr).show(100);

    });
	
	$("#ch241").click(function(){
        
		g2r+=5;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch242").click(function(){
        
		g2r+=2;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);
	
    });
	$("#ch243").click(function(){
        
		
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	$("#ch244").click(function(){
        
		
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch251").click(function(){
        
		g2r+=3;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch252").click(function(){
        
		g2r+=5;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);
	
    });
	$("#ch253").click(function(){
        
		
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	$("#ch254").click(function(){
        
		g2r+=1;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch261").click(function(){
        
		
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch262").click(function(){
        
		g2r+=4;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);
	
    });
	$("#ch263").click(function(){
        
		g2r+=5;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	$("#ch264").click(function(){
        

		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch311").click(function(){
        
		g3r+=4;
		$("#s"+ctr).hide(100);
		ctr+=3;
		$("#s"+ctr).show(100);

    });
	
	$("#ch312").click(function(){
        
		g3r+=5;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);
	
    });
	$("#ch313").click(function(){
        
		g3r+=1;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	$("#ch314").click(function(){
        
		$("#s"+ctr).hide(100);
		ctr+=3;
		$("#s"+ctr).show(100);

    });
	
	$("#ch321").click(function(){
        
		g3r+=1;
		$("#s"+ctr).hide(100);
		ctr+=46;
		$("#s"+ctr).show(100);

    });
	
	$("#ch322").click(function(){
        
		g3r+=1;
		$("#s"+ctr).hide(100);
		ctr+=46;
		$("#s"+ctr).show(100);
	
    });
	$("#ch323").click(function(){
        
		g3r+=5;
		$("#s"+ctr).hide(100);
		ctr+=47;
		$("#s"+ctr).show(100);

    });
	$("#ch324").click(function(){
        
		$("#s"+ctr).hide(100);
		ctr+=48;
		$("#s"+ctr).show(100);

    });
	
	$("#ch331").click(function(){
        
		g3r+=1;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch332").click(function(){
        
		g3r+=5;
		$("#s"+ctr).hide(100);
		ctr+=2;
		$("#s"+ctr).show(100);
	
    });
	$("#ch333").click(function(){
        
		g3r+=4;
		$("#s"+ctr).hide(100);
		ctr+=3;
		$("#s"+ctr).show(100);

    });
	$("#ch334").click(function(){
        
		$("#s"+ctr).hide(100);
		ctr+=7;
		$("#s"+ctr).show(100);

    });
	
	$("#ch341").click(function(){
        
		g3r+=5;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch342").click(function(){
        
		g3r+=4;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);
	
    });
	$("#ch343").click(function(){
        
		g3r+=1;
		$("#s"+ctr).hide(100);
		ctr+=2;
		$("#s"+ctr).show(100);

    });
	$("#ch344").click(function(){
        
		$("#s"+ctr).hide(100);
		ctr+=3;
		$("#s"+ctr).show(100);

    });
	
	$("#ch351").click(function(){
        
		g3r+=5;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch352").click(function(){
        
		
		$("#s"+ctr).hide(100);
		ctr+=2;
		$("#s"+ctr).show(100);
	
    });
	$("#ch353").click(function(){
       
		g3r+=4;
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	$("#ch354").click(function(){
        g3r+=1;
		$("#s"+ctr).hide(100);
		ctr+=3;
		$("#s"+ctr).show(100);

    });
	
	/* qestion 6  */
	
	
	$("#ch361").click(function(){
        
		
		$("#s"+ctr).hide(100);
		ctr++;
		$("#s"+ctr).show(100);

    });
	
	$("#ch362").click(function(){
        
		g3r+=1;
		$("#s"+ctr).hide(100);
		ctr+=2;
		$("#s"+ctr).show(100);
	
    });
	$("#ch363").click(function(){
       
		g3r+=4;
		$("#s"+ctr).hide(100);
		ctr+=3;
		$("#s"+ctr).show(100);

    });
	$("#ch364").click(function(){
        g3r+=5;
		$("#s"+ctr).hide(100);
		ctr+=4;
		$("#s"+ctr).show(100);

    });
	


		
	/*For the next button to go in next div (scene)*/
	$(".btn-arrow-left").click(function(){
		
	 if(ctr==4){
			
          $("#s"+ctr).hide();
			ctr+=1;
        bunzelC();
			$("#s"+ctr).show(100);		
     }else if(ctr==9){
			
			$("#s"+ctr).hide();
			ctr+=4;
			$("#s"+ctr).show(100);	
		
		
		}else if(ctr==10){
		
			$("#s"+ctr).hide();
			ctr+=3;
			$("#s"+ctr).show(100);	
		
		
		}else if(ctr==11){
		
			$("#s"+ctr).hide();
			ctr+=2;
			$("#s"+ctr).show(100);	
		
		
		}else if(ctr>=15 && ctr<=18){
		
			$("#s"+ctr).hide();
			ctr=20;
			mapC();
			$("#mapch").show(100);
		
		
		}else if(ctr==28){
		
			$("#s"+ctr).hide();
			ctr+=5;
			$("#s"+ctr).show(100);	
		}else if(ctr==29){
		
			$("#s"+ctr).hide();
			ctr+=4;
			$("#s"+ctr).show(100);	
		}else if(ctr==36){
			
			 $("#s"+ctr).hide();
			ctr+=1;
        canteenC();
			$("#s"+ctr).show(100);	
		
		
		}
        else if(ctr==35){
		
			$("#s"+ctr).hide();
			mapC();
			$("#mapch").show(100);	
		}else if(ctr==41){
			
          $("#s"+ctr).hide();
			ctr+=1;
        parkyC();
			$("#s"+ctr).show(100);		
     }else if(ctr==52){
		
			$("#s"+ctr).hide();
			ctr+=5;
			$("#s"+ctr).show(100);	
		}else if(ctr==54){
		
			$("#s"+ctr).hide();
			ctr+=3;
			$("#s"+ctr).show(100);	
		}else  if(ctr==62){
			
          $("#s"+ctr).hide();
			ctr+=1;
        bunzelC();
			$("#s"+ctr).show(100);		
     }else if(ctr==72){
			
          $("#s"+ctr).hide();
			ctr+=1;
        parkyC();
			$("#s"+ctr).show(100);		
     }else if(ctr==87){
			
          $("#s"+ctr).hide();
			ctr+=1;
        classpress();
			$("#s"+ctr).show(100);		
        }else if(ctr==94){
			
			$("#s"+ctr).hide(100);
			ctr+=3;
			$("#s"+ctr).show(100);
			
			
		}else if(ctr==118){
			
			$("#s"+ctr).hide();
			mapC();
			$("#mapch").show(100);
			
		}else if(ctr==140){
			
			$("#s"+ctr).hide();
			libC();
			ctr++;
			$("#s"+ctr).show(100);
			
		}
		else if(ctr==193){
			
			$("#s"+ctr).hide();
			ctr=148;
			$("#s"+ctr).show(100);
		}else if(ctr==194){
			
			$("#s"+ctr).hide();
			ctr=148;
			$("#s"+ctr).show(100);
			
		}else if(ctr==197){
			
			$("#s"+ctr).hide();
			ctr=148;
			$("#s"+ctr).show(100);
		}else if(ctr==164){
			
			$("#s"+ctr).hide();
			ctr+=2;
			$("#s"+ctr).show(100);
			
		}else if(ctr==168){
			
          $("#s"+ctr).hide();
			ctr+=1;
        clinicC();
			$("#s"+ctr).show(100);		
       }
		
		else{
        
		
		$("#s"+ctr).hide();
		ctr++;
		$("#s"+ctr).show(100);

		}
		
		console.log(ctr);
        console.log(g3r);	
		
    });	
});

</script>


    
   