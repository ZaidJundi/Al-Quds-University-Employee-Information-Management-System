<?php
	include("../inc/header.php");
										    
	if($usertype != "Admin"){
        header("Location: ../dashboard");
    }

    if(isset($_GET['id'])){
    	$record_id = mysqli_real_escape_string($db_connect, $_GET['id']);

    	$getinfo = mysqli_query($db_connect, "SELECT * FROM sharp_emp WHERE id = '$record_id' ");
		$getinfocount = mysqli_num_rows($getinfo);
		$getinfo2 = mysqli_query($db_connect, "SELECT * FROM employees ");
		$getinfocount2 = mysqli_num_rows($getinfo2);

        if($getinfocount == 1){
            if($fetch = mysqli_fetch_assoc($getinfo)){
                $employee_id = $fetch['employee_id'];
                $firstname = $fetch['first_name'];
                $middlename = $fetch['middle_name'];
                $lastname = $fetch['last_name'];
                $phone = $fetch['phone'];
                $employee_image = $fetch['employee_image'];
                $id_type = $fetch['id_type'];
                $id_number = $fetch['id_number'];
                $residence_address = $fetch['residence_address'];
                $residence_location = $fetch['residence_location'];
                $residence_direction = $fetch['residence_direction'];
                $residence_gps = $fetch['residence_gps'];
                $next_of_kin = $fetch['next_of_kin'];
                $relationship = $fetch['relationship'];
                $phone_of_kin = $fetch['phone_of_kin'];
                $kin_residence = $fetch['kin_residence'];
                $kin_residence_direction = $fetch['kin_residence_direction'];
                $date_employed = $fetch['date_employed'];
                $job_type = $fetch['job_type'];
                $status = $fetch['status'];
				
            }
        }
if(isset($_GET['EMPLOYEE_ID'])){
$EMPLOYEE_ID = mysqli_real_escape_string($db_connect, $_GET['EMPLOYEE_ID']);
		if($getinfocount2 == 1){
			if($fetch = mysqli_fetch_assoc($getinfo2)){
		//		$EMPLOYEE_ID =$fetch['EMPLOYEE_ID'];
				$EMPLOYEE_NAME =$fetch['EMPLOYEE_NAME'];
				$OTHER_EMPLOYEE_NAME =$fetch['OTHER_EMPLOYEE_NAME'];
				$gender = $fetch['gender'];
				$EMPLOYEE_RELIGION = $fetch['EMPLOYEE_RELIGION'];
				$EMPLOYEE_NATIONALITY =$fetch['EMPLOYEE_NATIONALITY'];
				$IDENTIFICATION_ID = $fetch['IDENTIFICATION_ID'];
			}
		}
	}
	
    } else {
    	echo "Invalid Approach";
    	exit();
    }

?>
	<section class="side-menu fixed left">
		<div class="top-sec">
			
		<div class="dash_logo">
				<img src="../images/alquds.png" alt="Sharpnet Logo">
			</div>			
			<p>HR Management Application<p>
		</div>
		</div>
		<ul class="nav">
			<li class="nav-item"><a href="../dashboard"><span class="nav-icon"><i class="fa fa-users"></i></span>All Employees</a></li>
			<!-- <li class="nav-item"><a href="../dashboard/current_employees.php"><span class="nav-icon"><i class="fa fa-check"></i></span>Current Employees</a></li>
			<li class="nav-item"><a href="../dashboard/past_employees.php"><span class="nav-icon"><i class="fa fa-times"></i></span>Past Employees</a></li> -->
			<?php if($usertype == "Admin"){ ?>
				<li class="nav-item current"><a href="../dashboard/add_employee.php"><span class="nav-icon"><i class="fa fa-user-plus"></i></span>Add Employee</a></li>
				<li class="nav-item"><a href="../dashboard/add_user.php"><span class="nav-icon"><i class="fa fa-user"></i></span>Add User</a></li>
			<?php		} ?>
			<li class="nav-item"><a href="../dashboard/settings.php"><span class="nav-icon"><i class="fa fa-cog"></i></span>Settings</a></li>
			<li class="nav-item"><a href="../dashboard/logout.php"><span class="nav-icon"><i class="fa fa-sign-out"></i></span>Sign out</a></li>
		</ul>
	</section>

	<section class="contentSection right clearfix">
		
		<div class="displaySuccess"></div>
		
		<div class="container">
			
			<div class="wrapper add_employee clearfix">
				
				<div class="section_title">Update Employee Records</div>
				<form id="editemployee" class="clearfix" method="" action="">
					<div class="section_subtitle">Personal Data</div>
					<input type="hidden" name="record_id" value="<?php echo $record_id ?>">
					<div class="input-box input-small left">
						<label for="firstname">First Name</label><br>
						<input type="text" class="inputField firstname" name="firstname" value="<?php echo $firstname ?>">
						<div class="error firstnameerror"></div>
					</div>
	
					<div class="input-box input-small right">
						<label for="middlename">Middle Name</label><br>
						<p class="inputField middlename" placeholder="Optional" name="middlename" value="<?php echo $middlename ?>">
						<div class="error middlenameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="lastname">Last Name</label><br>
						<input type="text" class="inputField lastname" name="lastname" value="<?php echo $lastname ?>">
						<div class="error lastnameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="phone">Phone number</label><br>
						<input type="text" class="inputField phone" name="phone" value="<?php echo $phone ?>">
						<div class="error phoneerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="jobtype">Job Type</label><br>
						<input type="text" class="inputField jobtype" name="jobtype" value="<?php echo $job_type ?>">
						<div class="error jobtypeerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="dateemployed">Date employed</label><br>
						<input type="text" id="datepicker" class="inputField dateemployed" name="dateemployed" value="<?php echo $date_employed ?>">
						<div class="error dateemployederror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="empstatus">Employment status</label><br>
						<select class="inputField empstatus" name="empstatus">
							<option value="<?php echo $status ?>"><?php echo $status ?></option>
							<option value="former">Former employee</option>
							<option value="employee">Employee</option>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="resaddress">Residential Address</label><br>
						<input type="text" class="inputField resaddress" name="resaddress" value="<?php echo $residence_address?>">
						<div class="error resaddresserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="reslocation">Location of Residence</label><br>
						<input type="text" class="inputField reslocation" name="reslocation" value="<?php echo $residence_location ?>">
						<div class="error reslocationerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="gpsreslocation">GPS Location of Residence</label><br>
						<input type="text" class="inputField gpsreslocation" name="gpsreslocation" value="<?php echo $residence_gps ?>">
						<div class="error gpsreslocationerror"></div>
					</div>
					<div class="input-box input-textarea right clearfix">
						<label for="resdirection">Direction to Residence</label><br>
						<textarea class="inputField resdirection" name="resdirection"><?php echo $residence_direction ?></textarea>
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
						<input type="text" class="inputField idnumber" name="idnumber" value="<?php echo $id_number ?>">
						<div class="error IDnumbererror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="idtype">National ID type</label><br>
						<select class="inputField idtype" name="idtype">
							<option value="<?php echo $id_type ?>"><?php echo $id_type ?></option>
							<option value="Voter's">Voter's</option>
							<option value="Passport">Passport</option>
							<option value="NHIS">NHIS</option>
							<option value="Driving License">Driving License</option>
						</select>
						<div class="error idtypeerror"></div>
					</div>
					<div class="input-box input-upload-box left">
						<div class="upload-wrapper">
							<div class="upload-box">
								<input type="file" name="nationalID" class="uploadField nationalID">
								<div class="uploadfile nationalID_file">Upload Selected ID type</div>
								<div class="filebtn nationID-btn">Upload</div>
								<div class="filebtn nationID-disbtn">Upload</div>
							</div>
						</div>
						<div class="error nationalIDerror"></div>
						<div class="selected_nationalID_file"></div>
					</div>
					<div class="section_subtitle left">Next of Kin Data</div>
					<div class="input-box input-small left">
						<label for="fullname">Full Name</label><br>
						<input type="text" class="inputField fullname" name="fullname" value="<?php echo $next_of_kin ?>">
						<div class="error fullnameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="relationship">Relationship to employee</label><br>
						<input type="text" class="inputField relationship" name="relationship" value="<?php echo $relationship ?>">
						<div class="error relationshiperror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="kinphone">Phone number</label><br>
						<input type="text" class="inputField kinphone" name="kinphone" value="<?php echo $phone_of_kin ?>">
						<div class="error kinphoneerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="kinresaddress">Residential Address</label><br>
						<input type="text" class="inputField kinresaddress" name="kinresaddress" value="<?php echo $kin_residence ?>">
						<div class="error kinresaddresserror"></div>
					</div>
					<div class="input-box input-textarea left clearfix">
						<label for="kinresdirection">Direction to Residence</label><br>
						<textarea class="inputField kinresdirection" name="kinresdirection"><?php echo $kin_residence_direction ?></textarea>
						<div class="error kinresdirectionerror"></div>
					</div>
				
					<?php
					 if (isset($_SESSION['username'])){

						$username = $_SESSION['username'];
				
					}
					else {
						
						$username = '';
					}
				
				

					if(isset($_GET['error'])){
						$error_login = "failed_login";
					}
				
					 if(isset($_POST['submitField'])){

						$realusername = mysqli_real_escape_string($db_connect, $_POST['username']);
						$password = mysqli_real_escape_string($db_connect, $_POST['password']);
						$loginpassword = md5(md5($password).md5($realusername));
					 $check_details = mysqli_query($db_connect, "SELECT username FROM users WHERE username = '$realusername' ");
					 $check_details_row = mysqli_num_rows($check_details);
			 
					 if($check_details_row == 1){
	
						 while($row = mysqli_fetch_array($check_details)){
							 $usernamenew = $row['username'];
						 }
			 
						 $loginpassword = md5(md5($password).md5($usernamenew));
						 echo "<script>alert('".$loginpassword."')</script>";
			 
	
						 ob_end_clean();
						 if ($sqlcount == 1){
							 echo json_encode(array("response"=>"Success"));
							 $_SESSION["username"] = $realusername;
							 	
							 exit();
			 
						 } else {
							 echo json_encode(array("response"=>"password"));
							 exit();
						 }
					 } else {
						 echo json_encode(array("response"=>"username"));
						 exit();
					 }
				 
			 
					}
			 
			 
			 ?>
					<div class="input-box input-small right">
	 				<input type="text" class="inputField username" name="username" placeholder="username">
	 				<div class="error usernameerror"></div>
	 			</div>
				 <div class="input-box input-small LEFT ">
	 				<input  type="password" class="inputField password" name="password" placeholder="password">
	 				<div class="error passworderror"></div>
	 			</div>
				 <div class="input-box">
				 <button  type="submit" class="submitField sign_in"><span class="sign-icon"><i class="fa fa-lock"></i></span> Sign in</button>
	 			</div>
					<div class="input-box">
						<button type="submit" class="submitField">Update record</button>
					</div>
				</form>
			</div>
		</div>
	</section>
<script type="text/javascript" src="../js/global.js"></script>
</body>
</html>