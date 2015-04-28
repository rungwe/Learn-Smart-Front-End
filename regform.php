<?php
// check if a post has been made otherwise the page is not available
if ($_SERVER["REQUEST_METHOD"]=="POST"){
		echo <<<TEXT
		<html lang="en">
			<head  profile="http://www.w3.org/2005/10/profile">
				<link rel="icon" type="image/png" href="icon.png">
				<meta http-equiv="content-type" content="text/html; charset=UTF-8">
				<meta charset="utf-8">
				
				<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
				<script type="text/javascript" src="js/bootstrap.min.js"></script>
				<title>Application</title>
				<meta name="generator" content="Bootply" />
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
				<link href="css/bootstrap.min.css" rel="stylesheet">
				<!--[if lt IE 9]>
					<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
				<![endif]-->
				<link href="css/styles.css" rel="stylesheet">
				<link rel="stylesheet" href="style.css" type="text/css"/>
				<link href='http://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>
				<link href="js/bootstrap.css" rel="stylesheet" type="text/css"/>
				<link href="js/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
			</head>
			<body>
			
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
				  <li><a href="index.php#section1">Home</a></li>
				  <li><a href="index.php#section2">Who We Are</a></li>
				  <li>
					<a href="index.php#section3">Subjects </a>
		 
				  </li>
				  <li><a href="index.php#section4">Become a Tutor</a></li>
				  <li><a href="index.php#section4">Need a Tutor</a></li>
				  <li><a href="index.php#section5">Contact</a></li>
				 
				  
				</ul>
				
			  </div><!--/.nav-collapse -->
			</div><!--/.container -->
		</div><!--/.navbar -->

		<!-- Registration form -->

			<div class="container" style="height:auto;">
			
			<ul class="nav nav-tabs" data-tabs="tabs" style="margin-bottom: 30px;">
						<li id="ps" class="active"><a href="#home" data-toggle="tab">Personal Details</a></li>
						<li id="lc" class="disabled"><a id="lcref"  data-toggle="tab">Location</a></li>
						<li id="sub" class="disabled"><a id="subref"  data-toggle="tab">Tutoring Subjects</a></li>
						<li id="abt" class="disabled"><a id="abtref"  data-toggle="tab">About You</a></li>
						<li id="dc" class="disabled"><a id="dcref"  data-toggle="tab">Documentation</a></li>
						<li id="vr" class="disabled"><a id="vrref" data-toggle="tab">Verification and Review</a></li>
			

			</ul>
			<form name="personal" method="post" action="process_personal.php" enctype="multipart/form-data">
			 <div id="myTabContent" class="tab-content">
						
						<div class="tab-pane fade active in" id="home">
						  
						  <div class="row">
									<label for="firstname" class="col-sm-2">
									First Name:
									</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name" value="$_POST[firstName]">
									</div>
									
									<label style="align:right;" for="lastname" class="col-sm-2">
									Last Name:
									</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name" value="$_POST[lastName]">
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
										<input type="email" class="form-control" name="email" id="email" placeholder="Enter email address" value="$_POST[email]">
										<p class="help-block">
											Example: yourname@domain.com
										</p>
									</div>
									 
								</div>
								
								<label for="phonenumber" class="col-sm-2">
									Phone Number:
									</label>
									<div class="col-sm-4">
										<input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter phone number" value="$_POST[cellnum]">
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
										<input type="text" class="form-control" name="idnum" id="idnum" placeholder="Enter ID/Passport number">
									</div>
									
									<label for="d.o.b" class="col-sm-2">
											Date of Birth:
										</label>
										<div class="col-sm-4">
											<input name="dob" id="d.o.b" class="form-control" placeholder="YYYY-MM-DD">
												
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
									
										<label for="uploadimage" class="col-sm-2">
											Upload Image:
										</label>
										<div class="col-sm-4">
											<input type="file" name="upload[]" id="uploadimage">
											<p class="help-block">
												Allowed formats: jpeg, jpg, gif, png
											</p>
										</div>  	
									
						  </div>	
						 <div class="row col-sm-12" ><p><br></p></div>
						  <div class="row">
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
									
									<label name="trans" class="col-sm-2">
											Which mode of transport do you use:
										</label>
										<div class="col-sm-4">
											<select for="trans" name="trans" id="trans" class="form-control">
												<option>--Please Select--</option>
												<option>private car</option>
												<option>public transport</option>
												<option>walking</option>
												
											</select>
										</div>
							</div>
							<div class="row col-sm-12" ><p><br></p></div>
							<div class="row col-sm-12" ><p><br></p></div>
									<div class="row">
										<div class="col-md-11">
										</div>
										<div class="col-md-1">
											<button type="button" onclick="check_personal()" class="btn btn-info">
												Next
											</button>
										</div>
									</div>
							
						  </div>
						<script>
									function check_personal(){
										
										if(document.getElementById("idnum").value==""){
											alert("invalid Identity number");
											return;
										}
										else if(document.getElementById("firstname").value==""){
											alert("invalid First Name");
											return;
										}
										else if(document.getElementById("lastname").value==""){
											alert("invalid Last Name");
											return;
										}
										else if(document.getElementById("email").value==""){
											alert("invalid Email");
											return;
										}
										else if(document.getElementById("phone").value==""){
											alert("invalid First Name");
											return;
										}
										else if(document.getElementById("d.o.b").value=="--Please Select--"){
											alert("invalid Country");
											return;
										}
										else if(document.getElementById("trans").value=="--Please Select--"){
											alert("invalid Mode of transport");
											return;
										}
										
										else{
										document.getElementById("lcref").href="#loc";
										document.getElementById("ps").className="";
										document.getElementById("home").className="tab-pane fade";
										document.getElementById("loc").className="tab-pane fade active in";
										document.getElementById("lc").className="active";
										window.scrollTo(0,0);
										}
										
									}
							

						</script>
						  
						
						<div class="tab-pane fade" id="loc">
						  
								<div class="row" >
								<div>
									<label for="autocomplete" class="col-sm-2">
										Search for Address:
									</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" id="autocomplete" name="autocomplete" placeholder="search address" onFocus="geolocate()">
										<p for ="autocomplete" class="help-block">
											<br><br>This address will be used to locate nearer students
										</p>
									</div>
									 
								</div>
								
								<label for="street_number" class="col-sm-2">
									Street Adress:
									</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" id="street_number" name="street_number" placeholder="street address" >
									</div>
									<div class="col-sm-2">
										<input class="form-control" id="route" name="route" >
									</div>
												
							</div>
							<div class="row col-sm-12" ><p><br></p></div>
							<div class="row col-sm-12" ><p><br></p></div>
							<div class="row">
									<label for="locality" class="col-sm-2">
										City:
									</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" id="locality" name="city" placeholder="city">
									
									</div>
									 
								
								
								<label for="administrative_area_level_1" class="col-sm-1">
									State:
									</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" id="administrative_area_level_1" name="state" placeholder="state" >
									</div>
								<label for="postal_code" class="col-sm-1">
									Zip Code
								</label>
									<div class="col-sm-2">
										<input class="form-control" id="postal_code" name="postal_code"
												 placeholder="zip code">
									</div>
							</div>
							<div class="row col-sm-12" ><p><br></p></div>
							<div class="row col-sm-12" ><p><br></p></div>
							<div class="row">
							<label for="package" class="col-sm-2">
											Type of Residence:
										</label>
										<div class="col-sm-4">
											<select name="residence" id="residence" name="residence" class="form-control">
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
										<input class="form-control" id="country1" name="country1"
												 placeholder="country">
									</div>
							</div>
							<div class="row col-sm-12" ><p><br></p></div>
							<div class="row col-sm-12" ><p><br></p></div>
							<div class="row col-sm-12" ><p><br></p></div>
									<div class="row">
										<div class="col-md-11">
										</div>
										<div class="col-md-1">
											<button type="button" onclick="check_location()" class="btn btn-info">
												Next
											</button>
										</div>
									</div>
						  
						</div>
						<script>
						function check_location(){
										//alert("WTF");
										if(document.getElementById("autocomplete").value==""){
											alert("Address bar is Empty");
											return;
										}
										
										else{
										document.getElementById("subref").href="#tut"
											document.getElementById("lc").className="";
											document.getElementById("loc").className="tab-pane fade";
											document.getElementById("tut").className="tab-pane fade active in";
											document.getElementById("sub").className="active";
											window.scrollTo(0,0);
										}
										
										
								}
						</script>
						
						<div class="tab-pane fade" id="tut">
						  <p>
							 <big><b>Select Subjects That you would like to tutor</big></b>	
						  </p>
						  <p>We do offer a range of subjects, select the subject(s) that you are capable of teaching. Your capability of teaching is determined by your qualification and that shall be verified during consideration of your application</p>
						  <p>It is strongly recommended that every tutor applicant must apply to teach a subject that they have excelled in. Minimum requirement at matric is code 6 and at university level 70% </p>
						  <div class="row col-sm-12"><br></div>
						  <div class="row">
							<div id="primary_school" class="panel panel-default col-sm-3">
								<div class ="panel-heading" style="color:blue;">
									<b><big>Primary School</big></b>
								</div>
								<div class="panel-body">

									<p>
										<label>
											<input type="checkbox" id="pri_mathematics" name="primary []" value="Mathematics">
											Mathematics
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="pri_english" name="primary []" value="English">
											English
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="pri_natural_scie" name="primary []" value="Natural_Science">
											Natural Science
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="pri_art_culture" name="primary []" value="Art_Culture">
											Art and Culture
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="pri_social_scie" name="primary []" value="Social_Science">
											Social Science
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="pri_tech" name="primary []" value="Technology">
											Technology
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="pri_economics" name="primary []" value="Economics">
											Economic and Management Science
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="pri_life" name="primary []" value="Life_Orientation">
											Life Orientation
										</label>
									</p>
									
								</div>
							</div>

							<div id="high_school" class="panel panel-default col-sm-3">
								<div class ="panel-heading" style="color:blue;">
									<b><big>High School</big></b>
								</div>
								<div class="panel-body">
									<p>
										<label>
											<input type="checkbox" id="high_maths" name="high_school[]" value="Mathematics">
											Mathematics
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="high_acc" name="high_school[]" value="Accounts">
											Accounting
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="high_bs" name="high_school[]" value="Business_studies">
											Business Studies
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="high_cs" name="high_school[]" value="Computer_studies">
											Computer Studies
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="high_ml" name="high_school[]" value="Mathematical_Literacy">
											Mathematical Literacy
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="high_it" name="high_school[]" value="InformationTechnology">
											Information Technology
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="high_phy" name="high_school[]" value="PhysicalScience">
											Physical Science
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="high_ecos" name="high_school[]" value="Economics">
											Economics
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="high_ls" name="high_school[]" value="Life_science">
											Life Science
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="high_ss" name="high_school[]" value="Social_Science">
											Social Science
										</label>
									</p>
									
									<p>
										<label>
											<input type="checkbox" id="high_geo" name="high_school[]" value="Geography">
											Geography
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="high_his" name="high_school[]" value="History">
											History
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="high_eng" name="high_school[]" value="English">
											English
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="high_eng_drw" name="high_school[]" value="Engineering_Design">
											Engineering Graphics and Design
										</label>
									</p>
									
								</div>
							</div>
$subj_under= "Create Table Subjects_undergrad(tutorID varchar(11) Not null Primary Key, Mathematics varchar(4), English varchar(4), Physics varchar(4),Accounts varchar(4), Business_studies varchar(4), InformationTechnology varchar(4), Economics varchar(4), Chemistry varchar(4), Geography varchar(4), Computer_science varchar(4), Biology varchar(4),History varchar(4),Engineering_Drawing varchar(4), Statistics varchar(4))";							
							<div id="undergrad" class="panel panel-default col-sm-3">
								<div class ="panel-heading" style="color:blue;">
									<b><big>Undergrad</big></b>
								</div>
								<div class="panel-body">
									<p>
										<label>
											<input type="checkbox" id="u_maths" name="undergrad []" value="Mathematics">
											Mathematics
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="u_acc" name="undergrad []" value="Accounts">
											Accounts
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="u_bs" name="undergrad []" value="Business_studies">
											Business Studies
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="u_cs" name="undergrad []" value="Computer_science">
											Computer Science
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="u_chem" name="undergrad []" value="Chemistry">
											Chemistry
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="u_it" name="undergrad []" value="InformationTechnology">
											Information Technology
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="u_ecos" name="undergrad []" value="Economics">
											Economics
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="u_phy" name="undergrad []" value="Physics">
											Physics
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="u_bio" name="undergrad []" value="Biology">
											Biology
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="u_stats" name="undergrad []" value="Statistics">
											Statistics
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="u_geo" name="undergrad []" value="Geography">
											Geography
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="u_his" name="undergrad []" value="History">
											History
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="u_eng" name="undergrad []" value="English">
											English
										</label>
									</p>
									<p>
										<label>
											<input type="checkbox" id="u_eng_drw" name="undergrad []" value="Engineering_Drawing">
											Engineering Drawing
										</label>
									</p>
									
								</div>
							</div>
							
							<div id="postgrad" class="panel panel-default col-sm-3">
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
							</div>
						
						</div>
						 
						 <div class="row">
									<div class="col-sm-6"
									<label>Give a reason why you think you can teach the subjects you selected, justify yourself in brief</label>
									<textarea name="reason" id="reason" class="form-control" rows="5"></textarea>
							</div>
							<div class="col-sm-3">
								<input type="text" id="subject_list" name="subject_list" style="display:none" class-form-control>
							 </div>
						</div>
							<div class="row col-sm-12" ><p><br></p></div>
									<div class="row">
										<div class="col-md-11">
										</div>
										<div class="col-md-1">
											<button type="button" onclick="check_subjects()" class="btn btn-info">
												Next
											</button>
										</div>
									</div>
						 
						 
						</div>
						<div class="tab-pane fade" id="about_tab">
						  <p><big><b>Tell us about yourself</b></big></p>
						  
						  <div class="row">
							<label class="col-sm-3"> <b>Briefly Describe yourself</b></label>
							 <div class="col-sm-5">
							 <textarea name="brief_dscrip" id="brief_dscrip" class="form-control col-sm-4" rows="5"></textarea>
							 </div>
						  </div>
						  <div class="row col-sm-12"><br></div>
						  <div class="row">
							<label class="col-sm-3"> <b>What makes you think you will become a great tutor?</b></label>
							 <div class="col-sm-5">
							 <textarea name="great_tutor" id="great_tutor" class="form-control" rows="5"></textarea>
							 </div>
						  </div>
						  <div class="row col-sm-12"><br></div>
						  <div class="row">
							<label class="col-sm-3"> <b>Can you tell us of any of your achievements that you ever made</b></label>
							<div class="col-sm-5">
							 <textarea name="archieve" id="archieve" class="form-control" rows="5"></textarea>
							 </div>
							 
						  </div>
						  <div class="row">
										<div class="col-md-11">
										</div>
										<div class="col-md-1">
											<button type="button" onclick="goToDocuments()" class="btn btn-info">
												Next
											</button>
										</div>
									</div>
							
						</div>
						<div class="tab-pane fade" id="docs">
						  <p>You are required to submit the below listed supporting documents</p>
						  <p>These documents are very important in the consideration of your application, failure to provide them might compromise the verdict of your applicant</p>
						  <p>Non-citizens are to submit relevant permits</p>
						  <p><br></p>
						  
						  <label for="uploadid" class="col-sm-4">
							Upload Identity document or Passport:
							</label>
							<div class="col-sm-8">
								<input type="file" name="upload[]" id="uploadid">
								<p class="help-block">
									only that part of the id / passport which contains the photo
								</p>
							</div> 
							<p><br></p>
							<div class="row">
								<label for="upload_permit" class="col-sm-4">
								Upload South African relevant permit:
								</label>
								<div class="col-sm-8">
									<input type="file" name="upload[]" id="upload_permit">
									<p class="help-block">
										only for non-citizens applicants
									</p>
								</div> 
							</div>
							<p><br></p>
							<div class="row">
								<label for="upload_transcript" class="col-sm-4">
								Academic Transcripts:
								</label>
								<div class="col-sm-8">
									<input type="file" name="upload[]" id="upload_transcript">
									<p class="help-block">
										submit only original certificates eg Matric and university official transcript and any other relevant certificates
									</p>
								</div> 
							</div>
							<p><br></p>
							<label for="upload_reference" class="col-sm-4">
							Reference Letter:
							</label>
							<div class="col-sm-8">
								<input type="file" name="upload[]" id="upload_reference">
								<p class="help-block">
									any reference letter or recommendation letter of anywhere you have ever worked or from any relevant person
								</p>
							</div> 
							<p><br></p>
							<div class="row">
								<label for="upload_support" class="col-sm-4">
								Other supporting documents:
								</label>
								<div class="col-sm-8">
									<input type="file" name="upload[]" id="upload_support">
									<p class="help-block">
										any other supporting documents that you think might be necessary to us 
									</p>
								</div>
								
							</div>
							<div class="col-md-11">
										</div>
								<div class="col-md-1">
											<button type="button" onclick="goToSubmit()" class="btn btn-info">
												Next
											</button>
										</div>
							
						</div>
						<div class="tab-pane fade" id="rev">
						  <p><center><big><b>Thank you very much for your time and effort to apply </b></big></center> </p>
						  <p><br></p>
						  <p>Considerations of your application are to begin as soon as possible and we shall inform you of the outcomes</p>
						  <p><br></p>
						  <p>If by any means you haven't submitted all the supporting documents its not a problem at all, You have up to 2 weeks to sort it out</p>
						  <p><br></p>
						  <p>You are advised to keep checking your emails</p>
						  <p><br></p>
						  <p><br></p>
						  <p><br></p>
						  <p><br></p>
						  <p><br></p>
						  <p><br></p>
						  <div class="row">
										<div class="col-md-11">
										</div>
										<div class="col-md-1">
											<button type="submit" onclick="" class="btn btn-info">
												Apply
											</button>
										</div>
						   </div>
						  
						</div>
						
					</div>
					</form>
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
		<script>
			function check_subjects(){
			var check=0;
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
			
			for(var i=0; i<subjects_id.length;i++){
				if (document.getElementById(subjects_id[i]).checked==true){
				check=1;
				document.getElementById("subject_list").value+= subjects_names[i]+",";
				}
			}
			
			
			// check high school
			
				for(var j=0; j<high_id.length;j++){
					if (document.getElementById(high_id[j]).checked==true){
					check=1;
					document.getElementById("subject_list").value+= subjects_names[j]+",";
					}
				}
			
			
			// check undergrad
			
				for(var k=0; k<undergrad_id.length;k++){
					if (document.getElementById(undergrad_id[k]).checked==true){
					check=1;
					document.getElementById("subject_list").value+= subjects_names[k]+",";
					}
				}
			
			// check post grad
			
				
				for(var l=0; l<post_id.length;l++){
					if (document.getElementById(post_id[l]).checked==true){
					check=1;
					document.getElementById("subject_list").value+= subjects_names[l]+",";
					}
				}
				
				if(check==0){
					alert("No subject selected. Select at least 1 subject");
					return;
				}
				else if(document.getElementById("reason").value==""){
					alert("Give us a reason Why you think you can take those subjects");
					return;
				}
				else{
					document.getElementById("abtref").href="#about_tab"
					document.getElementById("sub").className="";
					document.getElementById("tut").className="tab-pane fade";
					document.getElementById("about_tab").className="tab-pane fade active in";
					document.getElementById("abt").className="active";
					window.scrollTo(0,0);
				}
			
		  }
		</script>
		<script>
			function goToDocuments(){
				if(document.getElementById("brief_dscrip").value==""){
					alert("Please put a brief description about yourself.");
				}
				else if(document.getElementById("great_tutor").value==""){
					alert("Please tell us why you think you will be a great tutor");
				}
				else if(document.getElementById("archieve").value==""){
					alert("Please tell us about any of your archievements");
				}
				else{
					document.getElementById("dcref").href="#docs";
					document.getElementById("abt").className="";
					document.getElementById("about_tab").className="tab-pane fade";
					document.getElementById("docs").className="tab-pane fade active in";
					document.getElementById("dc").className="active";
				}
			
		  
		  }
		</script>
		<script>
				function goToSubmit(){
					document.getElementById("vrref").href="#rev" ;
					document.getElementById("dc").className="";
					document.getElementById("docs").className="tab-pane fade";
					document.getElementById("rev").className="tab-pane fade active in";
					document.getElementById("vr").className="active";
				
				}
		</script>

		</html>
TEXT;
}

// throw an error if the page has been accessed in a non post method
else{
	echo <<<TEXT
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
          <li><a href="index.php#section1">Home</a></li>
          <li><a href="index.php#section2">Who We Are</a></li>
          <li>
            <a href="index.php#section3">Subjects </a>
 
          </li>
          <li><a href="index.php#section4">Become a Tutor</a></li>
		  <li><a href="index.php#section4">Need a Tutor</a></li>
          <li><a href="index.php#section5">Contact</a></li>
		 
		  
        </ul>
		
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->

<!-- Registration form -->
	<div class="container" style="height:425px;">
	

	<center> <b><big>Sorry page does not exist</big></b></center>


	</div>
<!-- end of reg forms-->


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

</body>

</html>
TEXT;

}

?>