<html lang="en">
	<head  profile="http://www.w3.org/2005/10/profile">
	
		<link rel="icon" type="image/png" href="icon.png">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
	
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>


		<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="googlemaps.js"></script>
		<title>Student Registration</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="googlemaps.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link href='http://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>
		<link href="js/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="js/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
		<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
		<link href="googlemaps.css" rel="stylesheet">
	</head>
	<body onload="initialize()">
	
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
          <li><a href="index.html#section1">Home</a></li>
          <li><a href="index.html#section2">Who We Are</a></li>
          <li>
            <a href="index.html#section3">Subjects </a>
 
          </li>
          <li><a href="index.html#section4">Become a Tutor</a></li>
		  <li><a href="index.html#section4">Need a Tutor</a></li>
          <li><a href="index.html#section5">Contact</a></li>
		 
		  
        </ul>
		
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->

<!-- Registration form -->
	
	<div class="container" style="height:auto;">
	
	<ul class="nav nav-tabs" data-tabs="tabs" style="margin-bottom: 30px;">
                <li id="ps" class="active"><a href="#home" data-toggle="tab">Personal Details</a></li>
				<li id="lc" ><a href="#loc" data-toggle="tab" >Location</a></li>
                <li id="cs"><a href="#sub" data-toggle="tab">Choose Subjects</a></li>
				<li id="py"><a href="#payment" data-toggle="tab" onclick="generatePayment()">Payment</a></li>
				
				<li id="rv" ><a href="#rev" data-toggle="tab">Review and Submit</a></li>
	

	</ul>
	
	 <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="home">
                  <p>
				  <div class="row">
							<label for="firstname" class="col-sm-2">
							First Name:
							</label>
							<div class="col-sm-4">
								<input name="First_Name" type="text" class="form-control" id="firstname" placeholder="Enter First Name">
							</div>
							
							<label style="align:right;" for="lastname" class="col-sm-2">
							Last Name:
							</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="lastname" placeholder="Enter Last Name">
							</div>
							<div class="col-sm-1">
							<i class="fa fa-lock fa-2x"></i>
							</div>
				  </div>
				  <div class="row col-sm-12" ><p><br></p></div>
				  <div class="row">
							<div>
							<label for="emailaddress" class="col-sm-2">
								Email address:
							</label>
							<div class="col-sm-4">
								<input type="email" class="form-control" id="emailaddress" placeholder="Enter email address">
								<p class="help-block">
									Example: yourname@domain.com
								</p>
							</div>
							 
						</div>
						
						<label for="phonenumber" class="col-sm-2">
							Phone Number:
							</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="phone" placeholder="Enter phone number">
							</div>
							<div class="col-sm-1">
								<i class="fa fa-lock fa-2x"></i>
							</div>
				  
				  
				  </div>
				  <div class="row col-sm-12" ><p><br></p></div>
				  <div class="row">
							<label for="id" class="col-sm-2">
							ID/Passport Number:
							</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="idnum" placeholder="Enter ID/Passport number">
							</div>
							
							<label for="cntry" class="col-sm-2">
									Date of Birth:
								</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" id="dob" placeholder="DD-MM-YYYY">
								</div>
				  </div>
				  <div class="row col-sm-12" ><p><br></p></div>
					 <div class="row">
							<label for="sex" class="col-sm-2">
								Gender:
							</label>
							<div class="col-sm-4">
								<label class="radio">
									<input type="radio" name="sex" id="sex" value="male" checked>
									Male
								</label>
								<label class="radio">
									<input type="radio" name="sex" id="Radio1" value="female">
									Female
								</label>
							</div>
							
								<label for="about" class="col-sm-2">
									How did you hear about a us:
								</label>
								<div class="col-sm-4">
									<select name="about" id="about" class="form-control">
										<option>--Please Select--</option>
										<option>Facebook</option>
										<option>Flyer</option>
										<option>Google</option>
										<option>Twitter</option>
										<option>Gumtree</option>
										<option>Poster</option>
									</select>
								</div>	
							
				  </div>	

					<div class="row col-sm-12" ><p><br></p></div>
					<div class="row col-sm-12" ><p><br></p></div>
							<div class="row">
								<div class="col-md-11">
								</div>
								<div class="col-md-1">
									<button type="submit" onclick="gotoLocation()" class="btn btn-info">
										Next
									</button>
								</div>
							</div>
				  </div>
					
				  </p>
                  
				<div class="tab-pane fade" id="loc">
                  <p>
					<div class="row" >
						<div>
							<label for="autocomplete" class="col-sm-2">
								Search for Address:
							</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="autocomplete" placeholder="search address" onFocus="geolocate()">
								<p for ="autocomplete" class="help-block">
									<br><br>This address will be used to locate nearer students
								</p>
							</div>
							 
						</div>
						
						<label for="street_number" class="col-sm-2">
							Street Adress:
							</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="street_number" placeholder="street address" disabled="true">
							</div>
							<div class="col-sm-2">
								<input class="form-control" id="route"
										disabled="true"></input>
							</div>
									  	
					</div>
					<div class="row col-sm-12" ><p><br></p></div>
					<div class="row col-sm-12" ><p><br></p></div>
					<div class="row">
							<label for="locality" class="col-sm-2">
								City:
							</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="locality" placeholder="city" disabled="true">
							
							</div>
							 
						
						
						<label for="administrative_area_level_1" class="col-sm-1">
							State:
							</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="administrative_area_level_1" placeholder="state" disabled="true">
							</div>
						<label for="postal_code" class="col-sm-1">
							Zip Code
						</label>
							<div class="col-sm-2">
								<input class="form-control" id="postal_code"
										disabled="true" placeholder="zip code"></input>
							</div>
					</div>
					<div class="row col-sm-12" ><p><br></p></div>
					<div class="row col-sm-12" ><p><br></p></div>
					<div class="row">
					<label for="package" class="col-sm-2">
									Type of Residence:
								</label>
								<div class="col-sm-4">
									<select name="residence" id="residence" class="form-control">
										<option>--Please Select--</option>
										<option>South African Citizen</option>
										<option>Permanent Residence</option>
										<option>Temporary Residence</option>
									</select>
								</div>	
					<label for="country" class="col-sm-2">
						Country:
						</label>
							<div class="col-sm-4">
								<input class="form-control" id="country"
										disabled="true" placeholder="country"></input>
							</div>
					</div>
					<div class="row col-sm-12" ><p><br></p></div>
					<div class="row col-sm-12" ><p><br></p></div>
					<div class="row col-sm-12" ><p><br></p></div>
							<div class="row">
								<div class="col-md-11">
								</div>
								<div class="col-md-1">
									<button type="submit" onclick="gotoSubject()" class="btn btn-info">
										Next
									</button>
								</div>
							</div>
				  </p>
                </div>
                <div class="tab-pane fade" id="sub">
                  <p>
					<div class="row">
						<div class="col-sm-4">
							<div class=" panel panel-primary">
								<div class="panel-heading">
									<b><big><center>5hrs Package</big><br> R240 per hour</center></b>
								</div>
								<div class="panel-body">
								<p>1 lesson free</p>
								<p><big><b>1 hour</b></big> duration for each session</p>
								<p>One on one session with the tutor</p>
								<p>Flexible Times</p>
								
								
								</div>
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class=" panel panel-primary">
								<div class="panel-heading">
									<b><big><center>10hrs Package</big><br> R228 per hour </center></b>
								</div>
								<div class="panel-body">
								<p>1 lesson free</p>
								<p><big><b>1 hour</b></big> duration for each session</p>
								<p>One on one session with the tutor</p>
								<p>Flexible Times</p>
								
								</div>
							</div>
						</div>
					<div class="col-sm-4">
							<div class=" panel panel-primary">
								<div class="panel-heading">
									<b><big><center>20hrs Package</big><br> R216 per hour</center></b>
								</div>
								<div class="panel-body">
								<p>1 lesson free</p>
								<p><big><b>1 hour</b></big> duration for each session</p>
								<p>One on one session with the tutor</p>
								<p>At Flexible Times</p>
								
								</div>
							</div>
						</div>
					</div>
				<div class="row">
					<p>
						<label for="package" class="col-sm-2">
									Package:
								</label>
								<div class="col-sm-4">
									<select name="package" id="sltpackage" class="form-control">
										<option>Please Select Package</option>
										<option>5 hour package</option>
										<option>10 hour package</option>
										<option>20 hour package</option>
									</select>
								</div>	
						
						<label for="sub" class="col-sm-2">
								Academic Level:	
								</label>
								<div class="col-sm-4">
									<select name="level" onChange="select_subject()" id="academic_level" class="form-control">
										<option>Please Select Level</option>
										<option>Grade 1</option>
										<option>Grade 2</option>
										<option>Grade 3</option>
										<option>Grade 4</option>
										<option>Grade 5</option>
										<option>Grade 6</option>
										<option>Grade 7</option>
										<option>Grade 8</option>
										<option>Grade 9</option>
										<option>Grade 10</option>
										<option>Grade 11</option>
										<option>Grade 12</option>
										<option>Undergrad / College</option>
										<option>Postgrad</option>
										
									</select>
								</div>	
					</p>
				</div>
				<div class="row col-sm-12" ><p><br></p></div>
				<div class="row">
					<form id="primary_school" class="panel panel-default col-sm-3">
						<div class ="panel-heading" style="color:blue;">
							<b><big>Primary School</big></b>
						</div>
						<div class="panel-body">
							<p>
								<label>
                                    <input type="checkbox" id="pri_mathematics">
                                    Mathematics
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="pri_english">
                                    English
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="pri_natural_scie">
                                    Natural Science
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="pri_art_culture">
                                    Art and Culture
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="pri_social_scie">
                                    Social Science
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="pri_tech">
                                    Technology
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="pri_economics">
                                    Economic and Management Science
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="pri_life">
                                    Life Orientation
                                </label>
							</p>
							
						</div>
					</form>
					
					<form id="high_school" class="panel panel-default col-sm-3">
						<div class ="panel-heading" style="color:blue;">
							<b><big>High School</big></b>
						</div>
						<div class="panel-body">
							<p>
								<label>
                                    <input type="checkbox" id="high_maths">
                                    Mathematics
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="high_acc">
                                    Accounting
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="high_bs">
                                    Business Studies
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="high_cs">
                                    Computer Studies
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="high_ml">
                                    Mathematical Literacy
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="high_it">
                                    Information Technology
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="high_phy">
                                    Physical Science
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="high_ecos">
                                    Economics
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="high_ls">
                                    Life Science
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="high_ss">
                                    Social Science
                                </label>
							</p>
							
							<p>
								<label>
                                    <input type="checkbox" id="high_geo">
                                    Geography
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="high_his">
                                    History
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="high_eng">
                                    English
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="high_eng_drw">
                                    Engineering Graphics and Design
                                </label>
							</p>
							
						</div>
					</form>
					
					<form id="undergrad"  class="panel panel-default col-sm-3">
						<div class ="panel-heading" style="color:blue;">
							<b><big>Undergrad</big></b>
						</div>
						<div class="panel-body">
							<p>
								<label>
                                    <input type="checkbox" id="u_maths">
                                    Mathematics
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="u_acc">
                                    Accounting
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="u_bs">
                                    Business Studies
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="u_cs">
                                    Computer Science
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="u_chem">
                                    Chemistry
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="u_it">
                                    Information Technology
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="u_ecos">
                                    Economics
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="u_phy">
                                    Physics
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="u_bio">
                                    Biology
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="u_stats">
                                    Statistics
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="u_geo">
                                    Geography
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="u_his">
                                    History
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="u_eng">
                                    English
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="u_eng_drw">
                                    Engineering Drawing
                                </label>
							</p>
							
						</div>
					</form>
					
					<form id="postgrad" class="panel panel-default col-sm-3">
						<div class ="panel-heading" style="color:blue;">
							<b><big>Postgrad</big></b>
						</div>
						<div class="panel-body">
							<p>
								<label>
                                    <input type="checkbox" id="post_general">
                                    Help on your thesis
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="post_programming">
                                    Help with basic programing for your research
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="post_data">
                                    Data Capturing for your research
                                </label>
							</p>
							<p>
								<label>
                                    <input type="checkbox" id="post_assist">
                                    In need of research assistant
                                </label>
							</p>
					
							
						</div>
					</form>
					
				</div>
				<div class="row">
							<div class="col-sm-6"
							<label>Is there anything that you would want to bring to the tutor's attention before lessons commence </label>
                            <textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
				<div class="row col-sm-12" ><p><br></p></div>
							<div class="row">
								<div class="col-md-11">
								</div>
								<div class="col-md-1">
									<button type="submit" onclick="gotoPayment()" class="btn btn-info">
										Next
									</button>
								</div>
							</div>
				  </div>
				 
                <div class="tab-pane fade" id="payment">
                  <p><center style="color:blue"><big>Payment Information</big></center></p>
				  <div class="row col-sm-12" ><p><br></p></div>
				  <p style="color:blue"><b>Bill Summary</b></p>
				  <div class="row col-sm-12" ><p><br></p></div>
				  <div class="row">
				  <p class="col-sm-4" >Package :</p>
				  <p id ="bill_package" class="col-sm-4">
				   
				  </p>

				  </div>
				  <div class="row col-sm-12" ><p><br></p></div>
				  <div class="row">
				  <p class="col-sm-4" >Academic Level :</p>
				  <p id ="bill_level" class="col-sm-4">
				   
				  </p>
				  
				  </div>
				  <div class="row col-sm-12" ><p><br></p></div>
				  <div class="row">
				  <p class="col-sm-4" >Subjects :</p>
				  <p id ="bill_subjects" class="col-sm-4">
				   
				  </p>
				  
				  </div>
				  <div class="row col-sm-12" ><p><br></p></div>
				  <div class="row">
				  <p class="col-sm-4" >Total Amount :</p>
				  <p id ="bill_amount" class="col-sm-4">
				   
				  </p>
				  
				  </div>
				  <div class="row col-sm-12" ><p><br></p></div>
				  <div class="row">
					<div class="panel panel-primary col-sm-4" id="payment_message" >
								<div class="panel-heading">
									What to do next
								</div>
								<div class="panel-body">
								<p>Our system will find you nearest tutor(s) who match your requirements </p>
								<p>Once we allocate a tutor to you we will contact you</p>
								<p>We will give your reference number as well as our bank details</p>
								<p>Once you deposit the tutorial sessions will commence as per the time table which you are to propose later </p>
								
								</div>
							</div>
				  </div>
							<div class="row">
								<div class="col-md-11">
								</div>
								<div class="col-md-1">
									<button type="submit" class="btn btn-info">
										Next
									</button>
								</div>
							</div>
				  </div>
                
				
				<div class="tab-pane fade" id="rev">
                  <p><center><b>Thank you very much for registering with us</b> </center></p>
				  <p><br></p>
				  <p><br></p>
				  <p>From this moment onwards our system is working on allocating the tutor who matches your description</p>
				  <p><br></p>
				  <p>We will contact you shortly and will advice you what to do next</p>
				  <p><br></p>
				  <p>For now just keep checking your email or your phone for sms or we might give you a call most probably</p>
				  <p><br></p>
				  <p>Most probably we don't take much longer than 2 working days<p>
				  <p><br></p>
				  <p><br></p>
				  <div class="row">
								<div class="col-md-11">
								</div>
								<div class="col-md-1">
									<button type="submit" class="btn btn-info">
										submit
									</button>
								</div>
							</div>
                </div>
              </div>
	</div>
	
<!-- end of reg forms-->


<div style="height:auto;" id="footer">

  <div  class="container">
  
		<div class="col-sm-0 pull-right">

      
    
      <address>
        <strong>Email Us</strong><br>
        <a href="mailto:#">info@learnsmart.co.za</a>
      </address>          
  </div>
	
    <center class="text-muted" style="align:center;">Copyright ©2015 LEARN SMART.</center>
  </div>
</div>

</body>
<script type="text/javascript">
	function generatePayment(){
	//alert(getElementById("academic_level").value); 
	document.getElementById("bill_subjects").innerHTML="";
	
	var subject_num=0;
	var package_value=0;
	if (document.getElementById("sltpackage").value=="5 hour package"){
			package_value=240*5;
		}
	else if(document.getElementById("sltpackage").value=="10 hour package"){
			package_value=228*10;
	}
	else if(document.getElementById("sltpackage").value=="20 hour package"){
			package_value=216*20;
		}
	else{
		package_value=0;
	}
	document.getElementById("bill_package").innerHTML=document.getElementById("sltpackage").value;
	document.getElementById("bill_level").innerHTML=document.getElementById("academic_level").value;
	
	var subjects_id=["pri_mathematics", "pri_english", "pri_art_culture", "pri_economics","pri_life","pri_natural_scie","pri_tech"];
	var subjects_names=["Primary Mathematics", "Primary English", "Art and Culture","Economics and Management Science","Life Orientation","Natural Science","Technology" ];
	var high_id=["high_acc","high_bs","high_cs","high_ecos","high_eng","high_eng_drw","high_geo","high_his","high_it","high_ls","high_maths","high_ml","high_phy","high_ss"]
	var high_names=["High School Accounts","High School Business Studies","Computer Studies","High School Economic","High School English","Engineering Graphics and Design","High School Geography","High School History","High School Information Technology","Life Science","High School Mathematics","Mathematical Literacy","Physical Science","Social Science"];
	var undergrad_id=["u_acc","u_bs","u_bio","u_chem","u_cs","u_ecos","u_eng","u_eng_drw","u_geo","u_his","u_it","u_stats","u_maths","u_phy"];
	var undergrad_names=["Undergrad Accounting","Undergrad Business Studies","Biology","Chemistry","Computer Studies","Undergrad Economics","English Literature","Engineering Drawing","Undergrad Geography","Undergrad History","Undergrad Information Technology","Statistics","Undergrad Mathematical","Physics"];
	var post_id=["post_general","post_programming","post_data","post_assist"];
	var post_names=["Help on your thesis","Help with basic programing on your research","Data Capturing for your research","In need of research assistant"];
	var primary_grade=["Grade 1","Grade 2","Grade 3","Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9"];
	var highschool_grade=["Grade 10","Grade 11","Grade 12"];
	var undergrad="Undergrad / College";
	var postgrad="Postgrad";
	//alert("primary test" + high_id.length+ " "+ high_names.length);
	//check primary
	if(primary_grade.indexOf(document.getElementById("academic_level").value) >=0){
	for(var i=0; i<subjects_id.length;i++){
		if (document.getElementById(subjects_id[i]).checked==true){
		subject_num+=1;
		document.getElementById("bill_subjects").innerHTML+= subjects_names[i]+"<br>";
		}
	}
	}
	
	// check high school
	else if(highschool_grade.indexOf(document.getElementById("academic_level").value)>=0){
		for(var j=0; j<high_id.length;j++){
			if (document.getElementById(high_id[j]).checked==true){
			subject_num+=1;
			document.getElementById("bill_subjects").innerHTML+= high_names[j]+"<br>";
			}
		}
	}
	
	// check undergrad
	else if(document.getElementById("academic_level").value==undergrad){
		for(var k=0; k<undergrad_id.length;k++){
			if (document.getElementById(undergrad_id[k]).checked==true){
			subject_num+=1;
			document.getElementById("bill_subjects").innerHTML+= undergrad_names[k]+"<br>";
			}
		}
	}
	// check post grad
	else if(document.getElementById("academic_level").value==postgrad){
		
		for(var l=0; l<post_id.length;l++){
			if (document.getElementById(post_id[l]).checked==true){
			subject_num+=1;
			document.getElementById("bill_subjects").innerHTML+= post_names[l]+"<br>";
			}
		}
	}
	if (subject_num==0 ){
		document.getElementById("bill_amount").innerHTML= "Please complete the subject form";
	}
	else{
		if(package_value==0){
			document.getElementById("bill_amount").innerHTML= "Please complete the subject form";
		}
		else{
			var amount=subject_num*package_value;
			document.getElementById("bill_amount").innerHTML= "R"+amount;
			document.getElementById("payment_message").display=true;
		}
	}
	
	}
	
	function gotoPayment(){
		document.getElementById("cs").className="";
		document.getElementById("sub").className="tab-pane fade";
		document.getElementById("payment").className="tab-pane fade active in";
		document.getElementById("py").className="active";
		window.scrollTo(0,0);
		generatePayment();
	
	}
	
	function gotoSubject(){
		document.getElementById("lc").className="";
		document.getElementById("loc").className="tab-pane fade";
		document.getElementById("sub").className="tab-pane fade active in";
		document.getElementById("cs").className="active";
		window.scrollTo(0,0);
	
	}
	
	function gotoLocation(){
		document.getElementById("ps").className="";
		document.getElementById("home").className="tab-pane fade";
		document.getElementById("loc").className="tab-pane fade active in";
		document.getElementById("lc").className="active";
		window.scrollTo(0,0);
	
	}
	function select_subject(){
		var subjects_id=["pri_mathematics", "pri_english", "pri_art_culture", "pri_economics","pri_life","pri_natural_scie","pri_tech"];
	var subjects_names=["Primary Mathematics", "Primary English", "Art and Culture","Economics and Management Science","Life Orientation","Natural Science","Technology" ];
	var high_id=["high_acc","high_bs","high_cs","high_ecos","high_eng","high_eng_drw","high_geo","high_his","high_it","high_ls","high_maths","high_ml","high_phy","high_ss"]
	var high_names=["High School Accounts","High School Business Studies","Computer Studies","High School Economic","High School English","Engineering Graphics and Design","High School Geography","High School History","High School Information Technology","Life Science","High School Mathematics","Mathematical Literacy","Physical Science","Social Science"];
	var undergrad_id=["u_acc","u_bs","u_bio","u_chem","u_cs","u_ecos","u_eng","u_eng_drw","u_geo","u_his","u_it","u_stats","u_maths","u_phy"];
	var undergrad_names=["Undergrad Accounting","Undergrad Business Studies","Biology","Chemistry","Computer Studies","Undergrad Economics","English Literature","Engineering Drawing","Undergrad Geography","Undergrad History","Undergrad Information Technology","Statistics","Undergrad Mathematical","Physics"];
	var post_id=["post_general","post_programming","post_data","post_assist"];
	var post_names=["Help on your thesis","Help with basic programing on your research","Data Capturing for your research","In need of research assistant"];
	var primary_grade=["Grade 1","Grade 2","Grade 3","Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9"];
	var highschool_grade=["Grade 10","Grade 11","Grade 12"];
	var undergrad="Undergrad / College";
	var postgrad="Postgrad";
	//alert("primary test" + high_id.length+ " "+ high_names.length);
	document.getElementById("postgrad").style.display="";
	document.getElementById("undergrad").style.display="";
	document.getElementById("high_school").style.display="";
	document.getElementById("primary_school").style.display="";
	//check primary
	if(primary_grade.indexOf(document.getElementById("academic_level").value) >=0){
		document.getElementById("postgrad").style.display="none";
		document.getElementById("undergrad").style.display="none";
		document.getElementById("high_school").style.display="none";
	}
	
	// check high school
	else if(highschool_grade.indexOf(document.getElementById("academic_level").value)>=0){
		document.getElementById("primary_school").style.display="none";
		document.getElementById("postgrad").style.display="none";
		document.getElementById("undergrad").style.display="none";
	}
	
	// check undergrad
	else if(document.getElementById("academic_level").value==undergrad){
		document.getElementById("postgrad").style.display="none";
		document.getElementById("high_school").style.display="none";
		document.getElementById("primary_school").style.display="none";
	}
	// check post grad
	else if(document.getElementById("academic_level").value==postgrad){
		document.getElementById("high_school").style.display="none";
		document.getElementById("primary_school").style.display="none";
		document.getElementById("undergrad").style.display="none";
	}
	}
	

</script>

</html>

