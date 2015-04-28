<?php
	//check whether a post has been made otherwise through an error
	if($_SERVER["POST_METHOD"]="POST"){
		//***************************connect to the database
		$db = new mysqli("localhost","root","","Learn Smart");
		
	
		// create tutor ID
		
		$error=""; 
		$tutorID="TU".substr($_POST["phone"],1);
		
		//************************* building up for the strings to be executed as mysql query************************************

		//****************** create a directory for the tutor documentations
		mkdir("C:/wamp/tmp/uploads/".$tutorID);
		$dir="C:/wamp/tmp/uploads/".$tutorID."/";
//"Create Table Tutor_Personal(tutorID varchar(11) Not null Primary Key, Firstname varchar(40) Not null, Lastname varchar(40) Not null, Email varchar(40) Unique Not null, Phone varchar(15) Unique not null, DOB Date not null, Gender varchar(6) not null, Image_url varchar(255) not null, Transport varchar(17) not null,Country_origin varchar(40) not null, Awareness varchar(20) not null)";
		$personal="Insert into tutor_personal Values('".$tutorID."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["dob"]."','". $_POST["sex"]."','".$dir.$_FILES["upload"]["name"][0]."','".$_POST["trans"]."','Zimbabwe','".$_POST["about"]."','".$_POST["residence"]."')";                                                   
//$location="Create Table Location(UserID varchar(11) Not null Primary Key,AddressFull varchar(255) not null, StreetAddress varchar(255) not null, City varchar(255) not null,State varchar(255) not null, ZipCode varchar(10) not null, Country varchar(20) not null)";		
		$location="Insert Into location Values('".$tutorID."','".$_POST["autocomplete"]."','".$_POST["street_number"]."','".$_POST["city"]."','".$_POST["state"]."','".$_POST["postal_code"]."','".$_POST["country1"]."')";
//$tutor_prof="Create Table Tutor_Statements(tutorID varchar(11) Not null Primary Key, About_tutor varchar(255) not null, Strengths varchar(255) not null, Archievements varchar(255), Justification varchar(255) )";
		$interview ="Insert Into Tutor_Statements Values('".$tutorID."','".$_POST["brief_dscrip"]."','".$_POST["great_tutor"]."','".$_POST["archieve"]."','".$_POST["reason"]."')";
//$tutor_status="Create Table Tutor_status (tutorID varchar(11) Not null Primary Key,Acceptance varchar(20),Current_status varchar(20))";		
		$status="Insert into Tutor_status Values('".$tutorID."','Pending','Pending')";
//$tutor_documentation = "Create Table Tutor_Documentations (tutorID varchar(11) Not null Primary Key, ID varchar(255), Permit varchar(255), Transcripts varchar(255),Reference varchar(255), Other varchar(255))";
		$documents ="Insert into Tutor_Documentations Values('".$tutorID."','".$dir.$_FILES["upload"]["name"][1]."','".$dir.$_FILES["upload"]["name"][2]."','".$dir.$_FILES["upload"]["name"][3]."','".$dir.$_FILES["upload"]["name"][4]."','".$dir.$_FILES["upload"]["name"][5]."')";
		
		// create an array of sql string statements
		$statements=array($personal,$location,$interview,$status,$documents);
		
		
		$check=0; // error variable, if there it remains zero there are no errors that occurred otherwise there is an error
		
		
		//********************check if there is database connection 
		if (!mysqli_connect_errno()){
				// *************if there is a connection iterate all the statements making queries
			foreach($statements as $statement){
				
				if ($statement!=$documents){   // documentations query is not generic its to be processed on its own 
					if($db->query($statement)==TRUE){
						//echo "sucessful<br>";
					}
					else{
						//echo $db->error;
						$check=1;
					}
				}
				else{
					// check whether there any files uploaded
					if (empty($_FILES)==False){
						//update the database with documentations information
						
						if($db->query($statement)==TRUE){
								// processing for documentations
								for($i=0;$i<6;$i++){
									// check whether the file has been uploaded
									if(!empty($_FILES["upload"]["tmp_name"][$i])){
										if($_FILES["upload"]["size"][$i]>0 and $_FILES["upload"]["size"][$i]<100000000){
											move_uploaded_file($_FILES["upload"]["tmp_name"][$i],$dir.$_FILES["upload"]["name"][$i]);
										}
									}
									
								}
								
							}
							
								//if an error occurred update the check flag
							else {
								//echo $db->error;
								$check=1;
							}
						
					}
					
				}
			}
			
				// if check ==0 it implies no errors, show up thank you message and redirect to home page
			if ($check==0){
							echo <<<TEXT
					<html lang="en">
				<head  profile="http://www.w3.org/2005/10/profile">
					<link rel="icon" type="image/png" href="icon.png">
					<meta http-equiv="content-type" content="text/html; charset=UTF-8">
					<meta charset="utf-8">
					<meta http-equiv="refresh" content="5;url=index.php"/>
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
				

				<center> <b><big>Thank You for Registering with us</big></b></center>
				<script>
					function redirect_page(){
						
					}
				</script>

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
				// if there is an error show the message to the user
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
				

				<center style="color:red"> <b><big>Error Registration failed ooOpps</big></b></center>
				<center style="color:red"> <b><big>The reason could be that either your phone number, email address or you National Id number is currently active in our system</big></b></center>
				<center style="color:red"> <b><big>You are adviced to check those details thoroughly </big></b></center>
				<center style="color:red"> <b><big>if the problem persists <a href="index.php#section5">click here</a> for support, thank you </big></b></center>
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
			
		}
			
			
			
			// throw database connection error
		else {
		
			echo <<< TEXT
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
					  <li><a href="#section1">Home</a></li>
					  <li><a href="#section2">Who We Are</a></li>
					  <li>
						<a href="#section3">Subjects </a>
			 
					  </li>
					  <li><a href="#section4">Become a Tutor</a></li>
					  <li><a href="#section4">Need a Tutor</a></li>
					  <li><a href="#section5">Contact</a></li>
					 
					  
					</ul>
					
				  </div><!--/.nav-collapse -->
				</div><!--/.container -->
			</div><!--/.navbar -->

			<!-- Registration form -->
				<div class="container" style="height:425px;">
				

				<center> <b>Try again there is an unexpected database connection error this could be due to a networking problem or some system internal problem, feel free to <a href="index.php#section5">contact us if the problem persists</b></center>


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


		
			//echo mysqli_connect_errno();
		}
	}
	
	


?>