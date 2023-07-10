<?php
	include("../inc/header.php");
										    
	if($usertype != "Admin"){
        header("Location: ../dashboard");
    }
	


?>
	<section class="side-menu fixed left">
		<div class="top-sec">
			<div class="dash_logo">
				<img src="../images/alquds.png" alt="Sharpnet Logo">
			</div>			
			<p>HR Management Application<p>
		</div>
	 <ul class="nav">
			<li class="nav-item"><a href="../dashboard"><span class="nav-icon"><i class="fa fa-users"></i></span>All Employees</a></li>
			<!-- <li class="nav-item"><a href="../dashboard/current_employees.php"><span class="nav-icon"><i class="fa fa-check"></i></span>Current Employees</a></li>
			<li class="nav-item"><a href="../dashboard/past_employees.php"><span class="nav-icon"><i class="fa fa-times"></i></span>Past Employees</a></li> -->
			<?php if($usertype == "Admin"){ ?>
				<li class="nav-item current"><a href="../dashboard/add_employee.php"><span class="nav-icon"><i class="fa fa-user-plus"></i></span>Add Employee</a></li>
				<li class="nav-item"><a href="../dashboard/add_user.php"><span class="nav-icon"><i class="fa fa-user"></i></span>Add User</a></li>
			<?php		
		} ?>
			<li class="nav-item"><a href="../dashboard/settings.php"><span class="nav-icon"><i class="fa fa-cog"></i></span>Settings</a></li>
			<li class="nav-item"><a href="../dashboard/logout.php"><span class="nav-icon"><i class="fa fa-sign-out"></i></span>Sign out</a></li>
		</ul> 
	</section>
	<section class="contentSection right clearfix">
		<div class="displaySuccess"></div>
		<div class="container">
			<div class="wrapper add_employee clearfix">
				<div class="section_title">Add Employee</div>
				<form id="addemployee" class="clearfix" method="" action="">
					<div class="section_subtitle">Employee Data</div>
					<div class="input-box input-small left">
						<label for="employee_id">Employee ID</label><br>
						<input type="text" class="inputField emp_id" placeholder="Optional" name="employee_id">
						<div class="error empiderror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="firstname">First Name</label><br>
						<input type="text" class="inputField firstname" name="firstname">
						<div class="error firstnameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="middlename">Middle Name</label><br>
						<input type="text" class="inputField middlename" placeholder="Optional" name="middlename">
						<div class="error middlenameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="lastname">Last Name</label><br>
						<input type="text" class="inputField lastname" name="lastname">
						<div class="error lastnameerror"></div>
					</div>
			
					<div class="input-box input-small left">
						<label for="phone">Phone number</label><br>
						<input type="text" class="inputField phone" name="phone">
						<div class="error phoneerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="jobtype">Job Title</label><br>
						<input type="text" class="inputField jobtype" name="jobtype">
						<div class="error jobtypeerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="dateemployed">Date employed</label><br>
						<input type="text" id="datepicker" class="inputField dateemployed" name="dateemployed">
						<div class="error dateemployederror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="empstatus">Employment status</label><br>
						<select class="inputField empstatus" name="empstatus">
							<option value="">-- Select status --</option>
							<option value="former">Former employee</option>
							<option value="employee">New Employee</option>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="resaddress">city</label><br>
						<input type="text" class="inputField resaddress" name="resaddress">
						<div class="error resaddresserror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="reslocation">Governorate</label><br>
						<input type="text" class="inputField reslocation" name="reslocation">
						<div class="error reslocationerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="gpsreslocation">Country</label><br>
						<input type="text" class="inputField gpsreslocation" name="gpsreslocation">
						<div class="error gpsreslocationerror"></div>
					</div> 
					<div class="input-box input-textarea right clearfix">
						<label for="resdirection">Direction to Residence</label><br>
						<textarea class="inputField resdirection" name="resdirection"></textarea>
						<div class="error resdirectionerror"></div>
					</div>
					<div class="section_subtitle left">Upload Employee Photo</div>
					<div class="input-box input-upload-box left">
						<div class="upload-wrapper">
							<div class="upload-box">
								<input type="file" name="passport_photo" class="uploadField passport_photo">
								<div class="uploadfile passportPhoto_file">Upload Employee Photo</div>
								<div class="filebtn passport-btn">Upload</div>
								<div class="filebtn passport-disbtn">Upload</div>
							</div>
						</div>
						<div class="error photoerror"></div>
						<div class="passport_file"></div>
					</div>
					<div class="section_subtitle left">Upload Employee ID</div>
					<div class="input-box input-small left">
						<label for="idnumber">National ID Number</label><br>
						<input type="text" class="inputField idnumber" name="idnumber">
						<div class="error IDnumbererror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="idtype">National ID type</label><br>
						<select class="inputField idtype" name="idtype">
							<option value="">-- Select ID type --</option>
							<option value="Bank ID">Bank ID</option>
							<option value="Passport">Passport</option>
							<option value="Quds ID">Quds ID</option>
							<option value="Israeli ID">Israeli ID</option>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-upload-box left">
						<div class="upload-wrapper">
							<div class="upload-box">
								<input type="file" name="nationalID" class="uploadField nationalID">
								<div class="uploadfile nationalID_file">Uploada Photo Of The Document</div>
								<div class="filebtn nationID-btn">Upload</div>
								<div class="filebtn nationID-disbtn">Upload</div>
							</div>
						</div>
						<div class="error nationalIDerror"></div>
						<div class="selected_nationalID_file"></div>
					</div>
					<div class="section_subtitle left">About Employee Office</div>
					<div class="input-box input-small left">
						<label for="fullname">Full Name Office</label><br>
						<input type="text" class="inputField fullname" name="fullname">
						<div class="error fullnameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="relationship">Full Name Office In Arabic</label><br>
						<input type="text" class="inputField relationship" name="relationship">
						<div class="error relationshiperror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="kinphone">Office level</label><br>
						<input type="text" class="inputField kinphone" name="kinphone">
						<div class="error kinphoneerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="kinresaddress">Office Nature</label><br>
						<input type="text" class="inputField kinresaddress" name="kinresaddress">
						<div class="error kinresaddresserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="kinresdirection">Office Manager</label><br>
						<input type="text" class="inputField kinresaddress" name="kinresdirection">
						<div class="error kinresdirectionerror"></div>
					</div>
					<!-- Employee General Data-->
					<div class="section_subtitle left">General Information</div>
					<div class="input-box input-small left">
						<label for="EmployeeID">Employee ID</label><br>
						<input type="number" class="inputField EmployeeID" name="EMPLOYEE_ID">
						<div class="error EmployeeIDerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="fullNName">Employee Name</label><br>
						<input type="text" class="inputField fullNName" name="EMPLOYEE_NAME">
						<div class="error fullNNameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="fullNNName">Employee Name In Arabic</label><br>
						<input type="text" class="inputField fullNNName" name="OTHER_EMPLOYEE_NAME">
						<div class="error fullNNNameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="empstatus">The Academic Degree For This Rank</label><br>
						<select class="inputField empstatus" name="gender">
							<option value="">-- Select Gender --</option>
							<option value="m">Male</option>
							<option value="f">Female</option>
						</select>	
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="Religion">Employee Religion</label><br>
						<input type="text" class="inputField Religion" name="EMPLOYEE_RELIGION">
						<div class="error Religionerror"></div>
					</div>



					<div class="input-box input-small right">
						<label for="empstatus">Nationality</label><br>
						<select class="inputField empstatus" name="EMPLOYEE_NATIONALITY">
    					<?php
								$degrees = mysqli_query($db_connect, "SELECT Country From countries");
								while($D = mysqli_fetch_array($degrees))
								{
									echo "<option value='". $D['Country'] ."'>" .$D['Country'] ."</option>";
								}	
						?>
   						</optgroup>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="IdentificationID">Identification ID </label><br>
						<input type="number" class="inputField IdentificationID" name="IDENTIFICATION_ID">
						<div class="error IdentificationIDerror"></div>
					</div>
					<!-- //job_title -->
					<div class="section_subtitle left">Job Title</div>
					<div class="input-box input-small left">
						<label for="title">Name Job Title</label><br>
						<input type="text" class="inputField title" name="Job_title">
						<div class="error titleerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="titleAR">Name Job Title In Arabic </label><br>
						<input type="text" class="inputField titleAR" name="Other_job_title">
						<div class="error titleARerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="Bonus">The Bonus Associated This Title</label><br>
						<input type="number" class="inputField Bonus" name="bonus_title">
						<div class="error Bonuserror"></div>
					</div> 
					<div class="input-box input-small right">
						<label for="empstatus">Required Academic Degree</label><br>
						<select class="inputField empstatus" name="Degre">
    					<?php
								$degrees = mysqli_query($db_connect, "SELECT Name_Degrees From degreess");
								while($D = mysqli_fetch_array($degrees))
								{
									echo "<option value='". $D['Name_Degrees'] ."'>" .$D['Name_Degrees'] ."</option>";
								}	
						?>
   						</optgroup>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="Yearsofwork">Years Of Work Required</label><br>
						<input type="number" class="inputField Yearsofwork" name="Years_of_work">
						<div class="error Yearsofworkerror"></div>
					</div>
					<div class="input-box input-textarea right clearfix">
						<label for="resdirection">Job Description</label><br>
						<textarea class="inputField resdirection" name="Job_Description"></textarea>
						<div class="error resdirectionerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="SkillsRequired">The Skills Required</label><br>
						<input type="text" class="inputField SkillsRequired" name="required_skills">
						<div class="error SkillsRequirederror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="LanguageRequired">The Language Required</label><br>
						<input type="text" class="inputField LanguageRequired" name="Required_languages">
						<div class="error LanguageRequirederror"></div>
					</div>
					<div class="input-box input-small left">
						<label for=" annualburden">Annual Burden For This Title</label><br>
						<input type="number" class="inputField  annualburden" name="annual_burden">
						<div class="error annualburdenerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="Maximumovertime">Maximum overtime value</label><br>
						<input type="number" class="inputField Maximumovertime" name="Maximum_overtime">
						<div class="error Maximumovertimeerror"></div>
					</div>
					<!-- //office -->
					<div class="section_subtitle left">Office Employee</div>
					<div class="input-box input-small left">
						<label for="Officeid">Office Number</label><br>
						<input type="number" class="inputField Officeid" name="Office_id">
						<div class="error Officeiderror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="OfficeName">Office Name</label><br>
						<input type="text" class="inputField OfficeName" name="Office_Name">
						<div class="error OfficeNameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="OfficeNameAR">Office Name In Arabic</label><br>
						<input type="text" class="inputField OfficeNameAR" name="Other_Name_Office">
						<div class="error OfficeNameARerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="Officelevel">Office level</label><br>
						<input type="number" class="inputField Officelevel" name="Office_level">
						<div class="error Officelevelerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="empstatus">Office Nature</label><br>
						<select class="inputField empstatus" name="Office_Nature">
							<option value="">-- Select Office Nature --</option>
							<option value="Administrative">Administrative</option>
							<option value="Academic">Academic</option>
						</select>	
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="OfficeManagerName">Office Manager Name</label><br>
						<input type="text" class="inputField OfficeManagerName" name="Office_Manager">
						<div class="error OfficeManagerNameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="officecapacity">Maximum Number Of Office Jobs</label><br>
						<input type="number" class="inputField officecapacity" name="office_capacity">
						<div class="error officecapacityerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="DepartmentName">Department Name</label><br>
						<input type="text" class="inputField DepartmentName" name="Department_Name">
						<div class="error DepartmentNameerror"></div>
					</div>
					

					<div class="input-box input-small left">
						<label for="empstatus">College Name</label><br>
						<select class="inputField empstatus" name="College_Name">
					<?php
							$College_Name = mysqli_query($db_connect, "SELECT Faculties_Name From faculties");

							while($Faculties_Name = mysqli_fetch_array($College_Name))
							{
								echo "<option value='". $Faculties_Name['Faculties_Name'] ."'>" .$Faculties_Name['Faculties_Name'] ."</option>";
							}	
					?>
				</optgroup>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<!-- //scientific_ranks -->
					<div class="section_subtitle left">Academic Rank Of The Employee</div>
					<div class="input-box input-small left">
						<label for="empstatus">Rank Name</label><br>
						<select class="inputField empstatus" name="Rank_Name">
							<option value="">-- Select Rank Name --</option>
							<option value="Assistant">Assistant Professor</option>
							<option value="Associate">Associate Professor</option>
							<option value="Lecturer">Lecturer</option>
						</select>	
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small right">
					<label for="empstatus">Rank Name In Arabic</label><br>
						<select class="inputField empstatus" name="Other_Rank_Name">
							<option value="">-- Select Rank Name In Arabic --</option>
							<option value="مساعد"> استاذ مساعد </option>
							<option value="مشارك">استاذ مشارك</option>
							<option value="محاضر">محاضر</option>
						</select>	
						<div class="error empstatuserror"></div>
					</div>		
					<div class="input-box input-small left">
						<label for="empstatus">The Academic Degree For This Rank</label><br>
						<select class="inputField empstatus" name="Degree">
					<?php
							$degrees = mysqli_query($db_connect, "SELECT Name_Degrees From degreess");

							while($D = mysqli_fetch_array($degrees))
							{
								echo "<option value='". $D['Name_Degrees'] ."'>" .$D['Name_Degrees'] ."</option>";
							}	
					?>
				</optgroup>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small right">
						<label for=" WatchPrice">Overtime Hourly Rate</label><br>
						<input type="number" class="inputField  WatchPrice" name="Watch_Price">
						<div class="error WatchPriceerror"></div>
					</div>
					<!-- //academic_qualifications -->
					<div class="section_subtitle left">Academic Qualifications Of The Employee</div>

					<div class="input-box input-small left">
						<label for="empstatus">Academic Degree Of The Employee</label><br>
						<select class="inputField empstatus" name="Degreef">
    						<?php
								$d = mysqli_query($db_connect, "SELECT Name_Degrees From degreess");

								while($D = mysqli_fetch_array($d))
								{
									echo "<option value='". $D['Name_Degrees'] ."'>" .$D['Name_Degrees'] ."</option>";
								}	
								?>
   						</optgroup>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="CertificateSpecialties">Certificate Specialties</label><br>
						<input type="text" class="inputField CertificateSpecialties" name="Certificate_Specialties">
						<div class="error CertificateSpecialtieserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="ExactCertificateSpecialization">Exact Certificate Specialization</label><br>
						<input type="text" class="inputField ExactCertificateSpecialization" name="Exact_certificate_specialization">
						<div class="error ExactCertificateSpecializationerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="empstatus">Study language</label><br>
						<select class="inputField empstatus" name="Study_language">
					<?php
						$languages = mysqli_query($db_connect, "SELECT 	language_name From languages");

					while($product_categoty = mysqli_fetch_array($languages))
					{
						echo "<option value='". $product_categoty['language_name'] ."'>" .$product_categoty['language_name'] ."</option>";
					}	
					?>
			</optgroup>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="empstatus">Place Study</label><br>
						<select class="inputField empstatus" name="Place_study">
							<?php
								$countries = mysqli_query($db_connect, "SELECT 	Country  From countries");  // Use select query here 

								while($product = mysqli_fetch_array($countries))
								{
									echo "<option value='". $product['Country'] ."'>" .$product['Country'] ."</option>";  // displaying data in option menu
								}	
								?>  
						</optgroup>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="UniversityName">University Name </label><br>
						<input type="text" class="inputField UniversityName" name="University_Name">
						<div class="error UniversityNameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="dateemployed">Joining Date</label><br>
						<input type="date" id="datepicker" class="inputField dateemployed" name="Joining_Date">
						<div class="error dateemployederror"></div>
					</div>

					
					<div class="input-box input-small right">
						<label for="dateemployed">Graduation Date</label><br>
						<input type="date" id="datepicker" class="inputField dateemployed" name="Graduation_Date">
						<div class="error dateemployederror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="equationnumber">Authentication Equivalency Number</label><br>
						<input type="number" class="inputField equationnumber" name="equation_number">
						<div class="error equationnumbererror"></div>
					</div>
					<!-- //contact -->
					<div class="section_subtitle left">Contact</div>
					<div class="input-box input-small right">
						<label for="phonenumber">Phone Number </label><br>
						<input type="number" class="inputField phonenumber" name="phone_number">
						<div class="error phonenumbererror"></div>
					</div>
					<!--Return-->
					<div class="input-box input-small left">
						<label for="email">E-mail</label><br>
						<input type="email" class="inputField email" name="email">
						<div class="error emailerror"></div>
					</div>
					<!-- //experiences -->
					<div class="section_subtitle left">Employee Experiences</div>
					<div class="input-box input-small left">
						<label for="ExperienceName">Experience Name</label><br>
						<input type="text" class="inputField ExperienceName" name="Experience_name">
						<div class="error ExperienceNameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="CompanyName">Company Name </label><br>
						<input type="text" class="inputField CompanyName" name="CCompany_Name">
						<div class="error CompanyNameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="dateemployed">Experience Start Date</label><br>
						<input type="date" class="inputField dateemployed" name="Experience_start_date">
						<div class="error dateemployederror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="dateemployed">Expiry Date Of Experience</label><br>
						<input type="date" class="inputField dateemployed" name="Expiry_date_of_experience">
						<div class="error dateemployederror"></div>
					</div>
					<!-- //languages -->
					<div class="section_subtitle left">Employee languages</div>
					<div class="input-box input-small left">
						<label for="empstatus">Language Name</label><br>
						<select class="inputField empstatus" name="language_name">
							<?php
								$languages = mysqli_query($db_connect, "SELECT 	language_name From languages");  

								while($product_categoty = mysqli_fetch_array($languages))
								{
									echo "<option value='". $product_categoty['language_name'] ."'>" .$product_categoty['language_name'] ."</option>";  
								}	
								?>  		
						</optgroup>
						</select>						
						<div class="error empstatuserror"></div>
										</div>
                    <div class="input-box input-small right">
						<label for="empstatus">level Writing</label><br>
						<select class="inputField empstatus" name="level_Writing">
								<?php
								$level_Writing = mysqli_query($db_connect, "SELECT Level_Code From levels");  

								while($Writing = mysqli_fetch_array($level_Writing))
								{
									echo "<option value='". $Writing['Level_Code'] ."'>" .$Writing['Level_Code'] ."</option>";  
								}	
								?>  						
						</optgroup>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="empstatus">level Reading</label><br>
						<select class="inputField empstatus" name="level_Reading">
						<?php
							$level_Reading = mysqli_query($db_connect, "SELECT Level_Code From levels");  // Use select query here 

							while($Reading = mysqli_fetch_array($level_Reading))
							{
								echo "<option value='". $Reading['Level_Code'] ."'>" .$Reading['Level_Code'] ."</option>";  // displaying data in option menu
							}	
						?>    
 						 </optgroup>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="empstatus">level Communication</label><br>
						<select class="inputField empstatus" name="level_Communication">
							<?php
								$level_Communication = mysqli_query($db_connect, "SELECT Level_Code From levels");  // Use select query here 

								while($Communication = mysqli_fetch_array($level_Communication))
								{
									echo "<option value='". $Communication['Level_Code'] ."'>" .$Communication['Level_Code'] ."</option>";  // displaying data in option menu
								}	
								?>  						
						</optgroup>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<!-- END-->
					<div class="input-box">
						<button type="submit" class="submitField">Add record</button>
					</div>
				</form>
			</div>
		</div>
	</section>

<script type="text/javascript" src="../js/global.js"></script>
<script> 
var counter = 0;
function moreFields() {
	counter++;
	var newFields = document.getElementById('readroot').cloneNode(true);
	newFields.id = '';
	newFields.style.display = 'block';
	var newField = newFields.childNodes;
	for (var i=0;i<newField.length;i++) {
		var theName = newField[i].name
		if (theName)
			newField[i].name = theName + counter;
	}
	var insertHere = document.getElementById('writeroot');
	insertHere.parentNode.insertBefore(newFields,insertHere);
}
window.onload = moreFields;
</script>

</body>
</html>