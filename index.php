<!DOCTYPE html>
<html lang="en">
	<head  profile="http://www.w3.org/2005/10/profile">
		<link rel="icon" type="image/png" href="icon.png">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<link rel="stylesheet" href="form.css">
		<title>LEARN SMART</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<LINK href="subjects.css" rel="stylesheet" type="text/css">
		<link href="css/styles.css" rel="stylesheet">
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link href='http://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>
		<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
<!-- Wrap all page content here -->
<div id="loginModal" class="modal hide" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" onclick="cancel()" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="text-center">Tutor Login</h3>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Sign In</button>
              <span class="pull-right"><a href="#section4" onclick="cancel()">Register</a></span><span><a href="#section5">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" onclick="cancel()" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div>

 <script>
		$('document').ready(function(){
			$("#wrap').betterScroll();
		
		});
	</script>
<div id="wrap">

 
<header class="masthead">

  	<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="students1.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>Tutors for Winners</h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="bg7.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>Knowledge is Power</h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="bg9.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>Empowering People and Unlocking Potential</h2>
              <p></p>
            </div>
          </div>
        </div>       
      </div><!-- /.carousel-inner -->
	  
      <div class="logo">LEARN SMART</div> 
      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>  
    </div>
    <!-- /.carousel -->
  
</header>
  
  
<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
          <li><a href="#section1">Home</a></li>
          <li><a href="#section2">Who We Are</a></li>
          <li>
            <a href="#section3">Subjects </a>
 
          </li>
          <li><a href="#section4" onclick=" sltTutor()">Become a Tutor</a></li>
		  <li><a href="#section4" onclick=" sltStudent()" >Need a Tutor</a></li>
          <li><a href="#section5">Contact</a></li>
		  <li><a  onclick="login()"> login</a></li>
		 <script>
			function sltTutor(){
			//alert("working yess!!!");
			document.getElementById("tu").checked="true";
			}
			
			function sltStudent(){
				document.getElementById("stu").checked="true";
			}
			
			function login(){
				document.getElementById("loginModal").className="modal show";
			
			}
			function cancel(){
				document.getElementById("loginModal").className="modal hide";
			}
		 </script>
		  
        </ul>
		
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->

 <!-- loginmodal -->
 
<!-- Begin page content -->
<div class="divider" id="section1"></div>
  
<div  style="height:250px" class="container">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="text-center" >
	  <img style="align: center;" src="logo.png">
      
    </div>
    
    <p class="lead text-center"> 
      That Platform Where Students Meet Qualified Tutors, Where Tutors Get Connected to Students
    </p> 
    
    
    <div class="divider"></div>
    
  </div>
</div>
    
<div class="divider"></div>
  
<section class="bg-1">
  <div class="col-sm-6 col-sm-offset-3 text-center"></div>
</section>
  
<div class="divider" id="section2"></div>
 
<hr>
<div class="row">
  	<div class="panel panel-primary col-sm-6">
      <div class="panel-heading">Join us as a student</div>
	  <div class="panel-body">
	  <p> You want a Tutor who comes right at your home </p>
      <p>
	  You are struggling to pass exams and tests? Come before its too late
      </p> 
	  <p>
      You want to improve your grades? Come and lets work it out together with our tutors.
	  </p> 
	  <p>
	  You are a parent worried about your child's academic performance? Lets share the burden 
	  </p>
	  <p>
	  Be academically ahead of other students
	  </p>
	  </div>
	  </div><!--/col-->
	  <div class="panel panel-primary col-sm-6">
	  <div class="panel-heading">Join us as a Tutor</div>
	  <div class="panel-body">
	  <p> You want a quick Job within 15km radius from your place </p>
      <p>
	  You think you have what it takes to teach someone? 
	  </p>
	  <p>
	  You have some formal educational experience? 
	  </p>
	  <p>
	  Earn yourself some extra money
	  </p>
	  <p>
	  Come and enhance your Curriculum Vitae by having a tutoring working experience
	  </p>
      </div>
      
      
  	</div><!--/col-->
	<hr>
</div><!--/container-->

<div class="divider"></div>
  
<section class="bg-3">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h4 style="padding:20px;background-color:rgba(5,5,5,.8)">Best Source of Tutors</h4></div>
</section>
  
<div class="divider" id="section3"></div>
  
<div class="bg-4">

  <div class="container">
  <h2 class="text-center">Subjects offered</h2>
	<div class="container">
<div class="row-fluid">


        
        
        
</div>
<div class="row">

            <div class="  col-sm-3">
                <div class="pricing-table-header-tiny">
                    <h2>Primary</h2>
                    <h3>Subjects</h3>
                </div>
                <div class="pricing-table-features">
                    <p><strong>Mathematics</strong></p>
                    <p><strong>English</strong></p>
                    <p><strong>Natural Science</strong></p>
                    <p><strong>Art and Culture</strong></p>
                    <p><strong>Social Science</strong></p>
					<p><strong>Life Orientation</strong></p>
					<p><strong>Economic and Management Science</strong></p>
					<p><strong>Technology</strong></p>
                </div>
                <div class="pricing-table-signup-tiny">
                  <p><a href="#section4">Register</a></p>
                </div>
            </div>
 <div class=" col-sm-3">
                <div class="pricing-table-header-small">
                    <h2>Secondary</h2>
                    <h3>Subjects</h3>
                </div><div class="pricing-table-features">
                    <p><strong>Accounting</strong></p>
                    <p><strong>Business Studies</strong></p>
                    <p><strong>Computer Studies</strong></p>
                    <p><strong>Economics</strong></p>
					<p><strong>English</strong></p>
                    <p><strong>Geography</strong></p>
					<p><strong>Engineering Graphics and Design</strong></p>
					<p><strong>Information Technology</strong></p>
					<p><strong>History</strong></p>
					<p><strong>Life Science</strong></p>
                    <p><strong>Mathematics</strong></p>
                    <p><strong>Mathematical Literacy</strong></p>
                    <p><strong>Physical Science</strong></p>
					

                </div>
                <div class="pricing-table-signup-small">
                  <p><a style="align:center;" href="#">Register</a></p>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="pricing-table-header-medium">
                    <h2>Undergrad</h2>
                    <h3>Courses</h3>
                </div><div class="pricing-table-features">
                    <p><strong>Accounting</strong></p>
                    <p><strong>Business Studies</strong></p>
                    <p><strong>Computer Science</strong></p>
                    <p><strong>Economics</strong></p>
					<p><strong>Chemistry</strong></p>
                    <p><strong>Geography</strong></p>
					<p><strong>Engineering Drawing</strong></p>
					<p><strong>Information Technology</strong></p>
					<p><strong>History</strong></p>
					<p><strong>Biology</strong></p>
					<p><strong>Statistics</strong></p>
                    <p><strong>Mathematics</strong></p>
                    <p><strong>Engineering Courses</strong></p>
                    <p><strong>Physics</strong></p>
                </div>
                <div class="pricing-table-signup-medium">
                    <p><a href="#section4">Register</a></p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="pricing-table-header-pro">
                    <h2>Postgrad</h2>
                    <h3>Courses</h3>
                </div><div class="pricing-table-features">
                    <p><strong>Help on your thesis</strong></p>
					<p><strong>Basic programming for your research</strong></p>
					<p><strong>Data Capturing for your research</strong></p>
					<p><strong>In need of research assistant</strong></p>
					<p><br></p>
					<p><br></p>
					<p><br></p>
					</div>
                <div class="pricing-table-signup-pro">
                    <p><a href="#section4">Register</a></p>
                </div>
            </div>
         </div>
            <div class="row-fluid">
              <hr/>
</div>
</div>
  </div><!--/container-->
</div>

<div class="divider" id="section4"></div>

<div class="row">
  <div class="col-md-8 col-md-offset-1">
  </div>
</div>
  
<div style="color:#0066CC;" class="row">
  
  <div style="height:600px;" class="col-sm-10 col-sm-offset-1">
      
	  <h1 class="register-title">Join us</h1>
  <form id="first_reg_form"class="register" method="post" action="regform.php" name="form" >
    <div class="register-switch">
      <input type="radio" name="type" value="F" id="stu" class="register-switch-input" checked>
      <label for="stu" class="register-switch-label">Student</label>
      <input type="radio" name="type" value="M" id="tu" class="register-switch-input" >
      <label for="tu" class="register-switch-label">Tutor</label>
    </div>
    <input id="name" name="firstName" type="text" class="register-input" placeholder="First Name">
    <input id="sur" name="lastName" type="text" class="register-input" placeholder="Last Name">
    <input id="email" name="email" type="email" class="register-input" placeholder="Email address">
    <input id="cell" name= "cellnum" type="tel"  class="register-input" placeholder="Cell Number">
    <input id="pass" name="paswd" type="password" class="register-input" placeholder="Password">
    <input id="btn_reg" type="button" onclick="reg()" value="Start Application" class="register-button" >
	<a onclick="login()" > Already Registered? <big>Sign in</big> </a>
	
	<hr>       
	<script>
		function reg(){
		if (document.form.email.value==""){
			alert("invalid email");
		}
		else if(document.form.paswd.value==""){
			
			alert("invalid password");
		}
		else{
			if (document.getElementById("tu").checked==true){
			document.getElementById("first_reg_form").submit();
			}
			else{
				window.top.location.href="studentregform.php";
			}
		}
		return false;
	}
	

	</script>
	
  </form>
  
  </div>   
       
  
  
</div><!--/row-->
  
<div class="divider" id="section5"></div>  
<hr></hr>
<div class="row">
		<div class="panel panel-primary col-sm-4">
			<div class="panel-heading"> How it works for Tutors</div>
			<div class="panel-body">
			<p>You register with us first</p>
			<p>If your application becomes successful you will be ready to get jobs </p>
			<p>Our system will then assign you tutoring jobs based on the subject you chose as well as your location </p>
			<p>You will be assigned jobs within at most 15km from your place for your convenience </p>
			<p>We will pay you at the end of the month directly into at competitive rates </p>
			</div>
			
		</div>
	   <div class="panel panel-primary col-sm-4">
		   <div class="panel-heading">How it works for student</div>
		  <div class="panel-body">
		  <p> We strongly encourage parents to register </p>
		  <p>
			You will then choose subjects as well as select a package
		  </p> 
		  <p>
		    Our packages are at very competitive rates
		  </p> 
		  <p>
		  We will then give you chance to choose from our tutors given their profiles and educational experience  
		  </p>
		  <p>
		   The tutor will conduct tutorials right at your place at flexible times 
		  </p>
		  <p><br></p>
		  <p></p>
		  
		  </div>
	  </div><!--/col-->
	  <div class="panel panel-primary col-sm-4">
		  <div class="panel-heading">Frequently Asked Question</div>
		  <div class="panel-body">
		  <p> <b>Where does the tutorials sessions occur ?</b></p>
		  <p style="color:blue">
		  Tutorial sessions occur at the students place
		  </p> 
		  <p><b>
		  What time do the tutorialss occur?</b>
		  </p> 
		  <p style="color:blue">
		  students are to specify the time they are available, but tutors always have a room to negotiate 
		  </p>
		  <p>
		  <b> How do I get paid as a Tutor?</b>
		  </p>
		  <p style="color:blue">
		  Our organization is responsible, we will pay you right into your bank account at the month end, the salaries are hourly based
		  </p>
		  </div>
	  </div><!--/col-->
  </div>
  
<div class="row">
  
  <div  class="col-sm-9 col-sm-offset-1">
      
      <div class="row form-group">
        <div class="col-md-12">
        <h3>Contact Us</h3>        
        </div>
		
        <div class="col-xs-4">
          <input type="text" class="form-control" id="firstName" name="name" placeholder="Your Name *">
        </div>
        <div class="col-xs-4">
          <input type="text" class="form-control" id="organization" name="organization" placeholder="Subject">
        </div>
		
      </div>
	  
      <div class="row form-group">
          <div class="col-xs-4">
          <input type="text" class="form-control" name="email" placeholder="Email *">
          </div>
          <div class="col-xs-4">
          <input type="text" class="form-control" name="phone" placeholder="Phone *">
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-8">
            <textarea class="form-control" placeholder="Comments *"></textarea>
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-8">
            <button class="btn btn-default pull-right">Contact Us</button>
          </div>
      </div>
    
  </div>
  
  
</div><!--/row-->
  
<div class="container">
  	<div class="col-sm-8 col-sm-offset-2 text-center">

      <ul class="list-inline center-block">
        <li><a href="http://facebook.com"><img src="fb.png"></a></li>
        <li><a href="http://twitter.com"><img src="twitter.png"></a></li>
        <li><a href="http://google.com"><img src="google.png"></a></li>
        <li><a href="http://pinterest.com"><img src="pint.jpg"></a></li>
      </ul>
      
  	</div><!--/col-->
</div><!--/container-->
  
</div><!--/wrap-->

<div style="height:auto;" id="footer">

  <div  class="container">
  
		<div class="col-sm-0 pull-right">

      <address>
        LEARN SMART<br>
        <span id="map-input">
        231 Dirkie Uys St, Kempenville<br>
         Cape Town, 7530</span><br>
       
      </address>
    
      <address>
        <strong>Email Us</strong><br>
        <a href="mailto:#">info@learnsmart.co.za</a>
      </address>          
  </div>
	<a href="admin/index.html" > admin </a>
    <center class="text-muted" style="align:center;">Copyright ©2015 LEARN SMART.</center>
  </div>
</div>

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


<div class="modal" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title"></h3>
	</div>
	<div class="modal-body">
		<div id="modalCarousel" class="carousel">
 
          <div class="carousel-inner">
           
          </div>
          
          <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          
        </div>
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>


	<!-- script references -->
		<script src="jquery-2.1.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
		<script src="js/scripts.js"></script>
		<script src="jquery.betterScroll.js"></script>
	</body>
	<script>
    $('.carousel').carousel({
        interval: 5000
    })
</script>
	
	

   
</html>