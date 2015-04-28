<?php
$IdNum='TUTRNGKUM001'; $Name='Chaddy Rungwe'; $status='pending'; $idVm=$IdNum+'vm'; $street='21 Hope street'; $town='Rosebank'; $city='Capetown'; $country='South Africa';
$DOB='02-12-1993'; $gender='male'; $nationalID='DN163888'; 
echo "<div class='col-sm-8 col-sm-offset-1' >
						<div class='panel panel-primary '>
							<div class= 'panel-heading'>
							<center><big><b>$Name</b></big></center>
							<div class='row'>
								<div class='col-sm-1 col-sm-offset-1'>
									<i class='fa fa-user fa-4x'></i>
								</div>
								<div class='col-sm-4 col-sm-offset-2'>
									<center> Status: $status <br> ID: $IdNum</center>
								</div> 
								<div class='col-sm-2 col-sm-offset-0'>
									<button class='btn btn-xs btn-success'>
                                                <i class='fa fa-phone'></i>
                                                Interview
                                     </button>
								</div> 
								<div class='col-sm-2 col-sm-offset-0'>
									<button class='btn btn-xs btn-warning'>
                                                <i class='fa fa-envelope-o'></i>
                                                Message
                                     </button>
								</div> 
							</div>
							<center><button id='$idVm' onclick='viewmore(\'$IdNum\')' class='btn btn-xs btn-success'> view more</button></center>
						</div>
						<div id='IdNum' class='panel-body' style='background-color:white; display:none'>
							<div class='row'>
								<div class='col-sm-3 col-sm-offset-1'>
									<h4 style='color:black;'>Address</h4>
									<address>
									$street <br>
									Amdenhoff Gardens<br>
									$town<br>
									$city
									</address>
								</div>
								<div class='col-sm-2'>
									<iframe ></iframe>
								</div>
								<div class='col-sm-3 col-sm-offset-1'>
									
								</div>
							</div>
							<div class='row' style='background-color:grey;'>
							<center style='color:black;'><i><b><big>Personal and Subjects info</big></b></i></center>
							</div>
							<br>
							<div class='row'>
								<div class='col-sm-5 col-sm-offset-1'>
									<div class='panel panel-primary'>
										<div class='panel-heading'>
										Personal Information
										</div>
										<div class='panel-body' style='background-color:grey;'>
										<p>Date of Birth: $DOB</p>
										<p>Gender: $gender</p>
										<p>ID/Passport Num: $nationalID</p>
										<p>Country of Origin: $country</p>
										</div>
									</div>
									
								</div>
								<div class='col-sm-5 col-sm-offset-1'>
									<div class='panel panel-primary'>
										<div class='panel-heading'>
										Subjects Selected
										</div>
										<div class='panel-body' style='background-color:grey;'>
										<p>Physics</p>
										<p>Geography</p>
										<p>Accounting</p>
										<p>Computer studies</p>
										</div>
									</div>
									
								</div>
							</div>
							<div class='row' style='background-color:grey;'>
							<center style='color:black;'><i><b><big>About The Tutor</big></b></i></center>
							</div>
							<br>
							<div class='row'>
								<div class='col-sm-5 col-sm-offset-1'>
								<div class='panel panel-primary'>
									<div class='panel-heading'>
										<center><b>Why being a Tutor</b></center>
										</div>
									<div class='panel-body' style='background-color:grey;'>
										
										<p>Why he/she thinks he/she can be a tutor</p>
										<hr>
										<center><b>Strengths</b></center>
										<p>These are the Strengths he/she has</p>
									</div>
								</div>
								</div>
								<div class='col-sm-5 col-sm-offset-1'>
								<div class='panel panel-primary'>
									<div class='panel-heading'>
										<center><b>Why being a Tutor</b></center>
										</div>
									<div class='panel-body' style='background-color:grey;'>
										<center><b>Brief Description</b></center>
										<p>This is the brief description of the tutor</p>
										<hr>
										<center><b>Archievements</b></center>
										<p>These are the top archievements of this tutor</p>
									</div>
									</div>
								</div>
						
							</div>
							<div class='row' style='background-color:grey;'>
							<center style='color:black;'><i><b><big>Documentations</big></b></i></center>
							</div>
							<br>
							
							<div class='row' style='background-color:grey;'>
								<div class='row'>
									<div class='col-sm-4 col-sm-offset-3'>
										<p><big>ID/Passport:</big> <a href=''>id.pdf</a></p>
										<p><big>Permit     :</big> <a href='android_tutorial.pdf'>permit.pdf</a></p>
										<p><big>Transcripts:</big> <a href=''>certificates.pdf</a></p>
										<p><big>Reference  :</big> N/A</p>
										<p><big>Other      :</big> N/A</p>
										
									</div>
								</div>
								<button class='btn btn-md btn-success pull-right'> ACCEPT</button>
							</div>
							<center><button onclick='viewless(\"$IdNum\")' class='btn btn-xs btn-success'>view less</button></center>
						</div>
					</div>";




?>