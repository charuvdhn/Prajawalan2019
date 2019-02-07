<html>
	<head>
		<style>
			body{
				background-color:  rgba(3, 11, 20,0.95);
    			margin: 0px;
			}
			#container{
				z-index: 3;
				background-color: rgba(0,0,0,0);
			}
			
		</style>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
 		<link href="common/image/prajwalnicon.png" rel="icon">
		

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" type="text/css" href="common/sidebar/sidebar.css">
        <link rel="stylesheet" type="text/css" href="common/background/background.css">
        
        <link rel="stylesheet" type="text/css" media="screen" href="./contact/stylesheet/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="./contact/stylesheet/main.css" />
            
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			
		<script src="js/three.js-master/build/three.js"></script>
		<script src="js/three.js-master/examples/js/libs/tween.min.js"></script>
		<script src="js/three.js-master/examples/js/controls/TrackballControls.js"></script>
        <script src="js/three.js-master/examples/js/renderers/CSS3DRenderer.js"></script>
        <script src="./contact/js/bootstrap.min.js"></script>
		
		
		
	</head>
	<body style="padding:0;margin:0">
		<div class="light"></div>
		
		<div >
		<div id="container1"></div>
		<?php 
			include './common/sidebar/sidebar.php' ;
		?>
        <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#ove">Overall</a>
        <a href="#webapp">Web & App</a>
        <a href="#csu">Core Supporting</a>
        <a href="#csp">Core Sponsorship</a>
        <a href="#esp">Event Sponsorship</a>
        <a href="#asp">Alumni Sponsorship</a>
        <a href="#pub">Publicity</a>
        <a href="#out">Outreach</a>
        <a href="#des">Core Designing & Editing</a>
        <a href="#net">Networking</a>
        <a href="#infra">Infrastructure</a>
        <a href="#mag">Prajwalan Publication (Magazine)</a>
        <a href="#aud">Audit</a>


</div>

<button class="openbtn" onclick="openNav()" style="position:fixed;">&#9776;</button> 
<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>     
<!--Overall-->

<div class="container" id="webapp">
      
      <div class= "heading"><h1 style="margin-top:75px; text-align:center;">Overall</h1></div>

        <div class="row">
        <div class="col-md-4 mob"></div>
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/male-noimage.png" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Dr. R.B.sharma</h1> 
                                    <h2 class="sub">Faculty incharge</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
            <div class="col-md-4 mob"></div>

        </div>

        <div class="row">
        <div class="col-md-2 mob"></div>
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/Overall/rohit_j.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Rohit Jamnare</h1> 
                                    <h2 class="sub">Overall Convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
          <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/Overall/suved.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Suved Ghanmode</h1> 
                                    <h2 class="sub">Organizing Secretary</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        <div class="col-md-2 mob"></div>
        </div>

        <div class="row">
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/Overall/akash.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Akash Jeswani</h1> 
                                    <h2 class="sub">Overall Co-convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/Overall/nakod.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Shivam Nakod</h1> 
                                    <h2 class="sub">Overall Co-convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>


            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/female-noimage.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Kshitija Maye</h1> 
                                    <h2 class="sub">Overall Co-convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        </div>

</div>

<!--WebApp-->
        <div class="container " id="webapp">
      
        <div class= "heading"><h1 style="margin-top:75px; text-align:center;">Web & App Designing</h1></div>
        <div class="row">
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/WebApp/rohit.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Rohit Balage</h1> 
                                    <h2 class="sub">Convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/WebApp/sumit.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Sumit Kumar Jangir</h1> 
                                    <h2 class="sub">Convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>


            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/WebApp/saurish.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Saurish Darodkar</h1> 
                                    <h2 class="sub">Co-Convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/female-noimage.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Pooja Karangale  </h1> 
                                    <h2 class="sub">Co-convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/WebApp/nadeem.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Nadeem Bhati </h1> 
                                    <h2 class="sub">Co-convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>


            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/female-noimage.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Charu Vidhani </h1> 
                                    <h2 class="sub">Co-Convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        </div>
     
   
</div>




<!--Core Supporting-->

        <div class="container" id="csu">
        
        
        <div class= "heading "><h1>Core Suporting</h1></div>
        <div class="row">
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/core-support/ameya.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Ameya Deshpande</h1> 
                                    <h2 class="sub">Convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>        
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/female-noimage.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Apurva Bedre</h1> 
                                    <h2 class="sub">Convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
          <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/core-support/shreyas.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Shreyash Chavda</h1> 
                                    <h2 class="sub">Co-convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/male-noimage.png" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Khushal Kothale</h1> 
                                    <h2 class="sub">Co-convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>        
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/male-noimage.png" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Ganesh Dutare</h1> 
                                    <h2 class="sub">Co-convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
          <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/female-noimage.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Radhika Patharkar</h1> 
                                    <h2 class="sub">Co-convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        </div>
</div>

  <!--Core Sponsorship-->

        <div class="container parallax" id="csp">
       
        <div class= "heading "><h1>Core Sponsorship</h1></div>
        <div class="row">
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/core-sponsor/eshwari.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Eshwari Shingwekar</h1> 
                                    <h2 class="sub">Convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>       
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/core-sponsor/dhanuka.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Pratik Dhanuka </h1> 
                                    <h2 class="sub">Co-convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/core-sponsor/ashwin.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Ashwin Ramidhami</h1> 
                                    <h2 class="sub">Co-convener</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>

            
</div>
</div>
        

   <!--Event Sponsorship-->

  <div class="container " id="esp">
        
        
        <div class= "heading "><h1>Event Sponsorship</h1></div>
        <div class="row">
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/event-sponsorship/bhusan.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Bhushan Agarwal</h1> 
                                    <h2 class="sub">Convener</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/male-noimage.png" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Subodh Wasekar</h1> 
                                    <h2 class="sub">Co-convener</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/female-noimage.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Shruti Tarale </h1> 
                                    <h2 class="sub">Co-convener</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            </div>

            <div class="row">
        <div class="col-md-2 mob"></div>
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/male-noimage.png" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>B. Rampurwala </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
          <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/event-sponsorship/susmita.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Sushmita Khadse</h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        <div class="col-md-2 mob"></div>
        </div>
</div>

<!--Alumini Sponsorship-->

<div class="container parallax" id="asp">
        
        
        <div class= "heading "><h1>Alumini Sponsorship</h1></div>
        <div class="row">
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/alumini-sponsorship/shweta.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Shweta Joshi</h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/female-noimage.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Akansha Baheti </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/male-noimage.png" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Kartik Ingale</h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            </div>
</div>

<!--Publicity-->
<div class="container" id="pub">
      
        <div class= "heading"><h1 style="margin-top:75px; text-align:center;">Publicity</h1></div>
        <div class="row">
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/publicity/harshada.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Harshada Ingole</h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/publicity/shyam.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Shyam Kulkarni</h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>


            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/publicity/palak.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Palak Katira</h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/male-noimage.png" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Ashlesh Waghmare</h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/male-noimage.png" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Khushal Sadafale </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>


            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/publicity/deepam.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Deepam Chandak</h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        </div>
</div>

<!--Outreach-->

<div class="container parallax" id="out">
        
        
        <div class= "heading "><h1>Outreach</h1></div>
        <div class="row">
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/female-noimage.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Prachi Thakur</h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/female-noimage.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Kiran Sakhare </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/Outreach/vaish.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Vaishnav Vaidya</h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            </div>
</div>


<!--Designing And Editing-->
<div class="container" id="des">
      
        <div class= "heading"><h1 style="margin-top:75px; text-align:center;">Core Designing & Editing</h1></div>
        <div class="row">
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/designing/mohit.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Mohit Lalwani</h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/designing/pradeep.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Pradeep Nokwal</h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>


            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/designing/yash.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Yash Bhandarwar</h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/male-noimage.png" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Susmit Shegokar </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/designing/aniket.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Aniket Itankar  </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>


            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/female-noimage.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Pallavi Meshram </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        </div>
</div>

<!--Networking-->

<div class="container" id="net">
        
        
        <div class= "heading "><h1>Networking</h1></div>
        <div class="row">
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/networking/ankit.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Ankit Warjurkar </h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/networking/namrata.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Namrata Gajbhiye </h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/networking/chetan.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Chetan Sharma </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            </div>

            <div class="row">
        <div class="col-md-2 mob"></div>
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/networking/moiz.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Moiz Essaji </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
          <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/networking/pragti.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Pragati Bub </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        <div class="col-md-2 mob"></div>
        </div>
</div>


<!--Infrastructure-->
<div class="container" id="infra">
      
        <div class= "heading"><h1 style="margin-top:75px; text-align:center;">Infrastructure</h1></div>
        <div class="row">
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/Infra/lankesh.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Lankesh Purekar</h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/Infra/sharayu.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Sharayu Dahake</h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>


            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/Infra/sanghal.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Sangal Sahare</h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/male-noimage.png" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Chetan Kshirsagar </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/female-noimage.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Sumedha Deshmukh </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>


            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/Infra/kajal.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="name">Kajal Agrawal</h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
                                </div>
            </div>
            </div>
            </div>
        </div>
</div>
<!--MAgazine-->

<div class="container parallax" id="mag">
        
        
        <div class= "heading "><h1>Prajwalan Publication</h1></div>
        <div class="row">
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/female-noimage.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Padmini Shinde</h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/male-noimage.png" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Sarthak Shrivastav </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/male-noimage.png" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Prathamesh Khuje</h1> 
                                    <h2 class="sub" >Co-convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            </div>
</div>

<!--Audit-->

<div class="container parallax" id="aud">
        
        
        <div class= "heading "><h1>Audit</h1></div>
        <div class="row">
        <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/audit/pratiksha.jpg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Pratiksha Parashar</h1> 
                                    <h2 class="sub">Convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/audit/niket.jpeg" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Niket Lekariya </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="flip-card rounded">
            <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="./contact/img/male-noimage.png" class="img-fluid" alt="Avatar" >
                                  </div>
                                  <div class="flip-card-back">
                                    <h1>Abhishek Selokar </h1> 
                                    <h2 class="sub">Co-convenor</h2> 
                                  </div>
            </div>
            </div>
            </div>
            </div>
            </div>
</div>



		<script src="./common/background/background.js"></script>
		
	</body>
</html>