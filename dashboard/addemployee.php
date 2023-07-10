<?php 
	ob_start();
	include("../inc/db_connect.php");

	
		$employee_id = mysqli_real_escape_string($db_connect, $_POST['employee_id']);
		$firstname = mysqli_real_escape_string($db_connect, $_POST['firstname']);
		$middlename = mysqli_real_escape_string($db_connect, $_POST['middlename']);
		$lastname = mysqli_real_escape_string($db_connect, $_POST['lastname']);
		$phone = mysqli_real_escape_string($db_connect, $_POST['phone']);
		$jobtype = mysqli_real_escape_string($db_connect, $_POST['jobtype']);
		$dateemployed = mysqli_real_escape_string($db_connect, $_POST['dateemployed']);
		$resaddress = mysqli_real_escape_string($db_connect, $_POST['resaddress']);
		$reslocation = mysqli_real_escape_string($db_connect, $_POST['reslocation']);
		$gpsreslocation = mysqli_real_escape_string($db_connect, $_POST['gpsreslocation']);
		$resdirection = mysqli_real_escape_string($db_connect, $_POST['resdirection']);
		$passport_photo_name = mysqli_real_escape_string($db_connect, $_POST['passport_photo_name']);
		$idnumber = mysqli_real_escape_string($db_connect, $_POST['idnumber']);
		$idtype = mysqli_real_escape_string($db_connect, $_POST['idtype']);
		$nationalID_name = mysqli_real_escape_string($db_connect, $_POST['nationalID_name']);
		$fullname = mysqli_real_escape_string($db_connect, $_POST['fullname']);
		$relationship = mysqli_real_escape_string($db_connect, $_POST['relationship']);
		$kinphone = mysqli_real_escape_string($db_connect, $_POST['kinphone']);
		$kinresaddress = mysqli_real_escape_string($db_connect, $_POST['kinresaddress']);
		$kinresdirection = mysqli_real_escape_string($db_connect, $_POST['kinresdirection']);
		$empstatus = mysqli_real_escape_string($db_connect, $_POST['empstatus']);
		//my Code start
		$EMPLOYEE_ID  = $_POST['EMPLOYEE_ID'];
		$EMPLOYEE_NAME = $_POST['EMPLOYEE_NAME'];
		$OTHER_EMPLOYEE_NAME = $_POST['OTHER_EMPLOYEE_NAME'];
		$gender = $_POST['gender'];
		$EMPLOYEE_RELIGION = $_POST['EMPLOYEE_RELIGION'];
		$EMPLOYEE_NATIONALITY = $_POST['EMPLOYEE_NATIONALITY'];
		$IDENTIFICATION_ID = $_POST['IDENTIFICATION_ID'];
	
			//Office 
			
		$Office_id = $_POST['Office_id'];
		$Office_Name = $_POST['Office_Name'];
		$Other_Name_Office = $_POST['Other_Name_Office'];
		$Office_level = $_POST['Office_level'];
		$Office_Nature = $_POST['Office_Nature'];
		$Office_Manager = $_POST['Office_Manager'];
		$office_capacity = $_POST['office_capacity'];
		$Department_Name = $_POST['Department_Name'];
		$College_Name = $_POST['College_Name'];

		
		//scientific_ranks
		$Rank_Name = $_POST['Rank_Name'];
		$Other_Rank_Name = $_POST['Other_Rank_Name'];
		$Degree = $_POST['Degree'];
		$Watch_Price = $_POST['Watch_Price'];



		
		//academic_qualifications
		$Degreef = $_POST['Degreef'];
		$Certificate_Specialties = $_POST['Certificate_Specialties'];
		$Exact_certificate_specialization = $_POST['Exact_certificate_specialization'];
		$Study_language = $_POST['Study_language'];
		$Place_study = $_POST['Place_study'];
		$University_Name = $_POST['University_Name'];
		$Joining_Date = $_POST['Joining_Date'];
		$Graduation_Date = $_POST['Graduation_Date'];
		$equation_number = $_POST['equation_number'];




		//training_courses
		$course_place = $_POST['course_place'];
		$cycle_Type = $_POST['cycle_Type'];
		$Company_name = $_POST['Company_name'];
		$Course_hours = $_POST['Course_hours'];



		//contact
		$phone_number = $_POST['phone_number'];
		$email = $_POST['email'];
		

		//Experience
		$Experience_name = $_POST['Experience_name'];
		$Experience_start_date = $_POST['Experience_start_date'];
		$Expiry_date_of_experience = $_POST['Expiry_date_of_experience'];
		$CCompany_Name = $_POST['CCompany_Name'];

		//Language
		
		$language_name=$_POST['language_name'];

		$level_Writing=$_POST['level_Writing'];
		$level_Reading=$_POST['level_Reading'];	
		$level_Communication=$_POST['level_Communication'];

		//job_title
		$Job_title=$_POST['Job_title'];
		$Other_job_title=$_POST['Other_job_title'];
		$bonus_title=$_POST['bonus_title'];
		$Degre=$_POST['Degre'];
		$Years_of_work=$_POST['Years_of_work'];
		$Job_Description=$_POST['Job_Description'];
		$required_skills=$_POST['required_skills'];
		$Required_languages	=$_POST['Required_languages'];
		$annual_burden=$_POST['annual_burden'];
		$Maximum_overtime=$_POST['Maximum_overtime'];
		


		//Edn

	
										
		//Check if user already exists
		$id_check =  mysqli_query($db_connect, "SELECT employee_id FROM sharp_emp WHERE employee_id = '$employee_id' ");
								
		//Count the amount of rows where username = $username
		$check_id = mysqli_num_rows($id_check);
		ob_end_clean();	
		if ($check_id == 0) {

			$query = mysqli_query($db_connect, "INSERT INTO `sharp_emp` (`id`, `employee_id`, `first_name`, `middle_name`, `last_name`, `phone`, `employee_image`, `id_type`, `id_number`, `id_card_image`, `residence_address`, `residence_location`, `residence_direction`, `residence_gps`, `next_of_kin`, `relationship`, `phone_of_kin`, `kin_residence`, `kin_residence_direction`, `date_employed`, `job_type`, `status`) VALUES (NULL, '$employee_id', '$firstname', '$middlename', '$lastname', '$phone', '$passport_photo_name', '$idtype', '$idnumber', '$nationalID_name', '$resaddress', '$reslocation', '$resdirection', '$gpsreslocation', '$fullname', '$relationship', '$kinphone', '$kinresaddress', '$kinresdirection', '$dateemployed', '$jobtype', '$empstatus')");
			$querycount = mysqli_num_rows($query);		
			//my SQL
			$sql = mysqli_query($db_connect,"INSERT INTO employees(EMPLOYEE_ID, EMPLOYEE_NAME, OTHER_EMPLOYEE_NAME, gender, EMPLOYEE_RELIGION, EMPLOYEE_NATIONALITY,IDENTIFICATION_ID)
			VALUES ('$EMPLOYEE_ID','$EMPLOYEE_NAME','$OTHER_EMPLOYEE_NAME','$gender','$EMPLOYEE_RELIGION','$EMPLOYEE_NATIONALITY','$IDENTIFICATION_ID')");
			$querycount = mysqli_num_rows($sql);
			//emp_imge
			$sql66 = mysqli_query($db_connect, "INSERT INTO employee_image(EMPLOYEE_ID,employee_image,id_card_image)
			VALUES('$EMPLOYEE_ID','$employee_image','$id_card_image')");
			$querycount = mysqli_num_rows($sql66); 	
			//job_title
			$sql15 = mysqli_query($db_connect,"INSERT INTO job_title (Job_title, Other_job_title, bonus_title, Degre, Years_of_work, Job_Description,required_skills,Required_languages,annual_burden,Maximum_overtime)
			VALUES ('$Job_title','$Other_job_title','$bonus_title','$Degre','$Years_of_work','$Job_Description','$required_skills','$Required_languages','$annual_burden','$Maximum_overtime')");
			$querycount = mysqli_num_rows($sql15);
			//employee_title
			$sql64 = mysqli_query($db_connect, "INSERT INTO employee_title(EMPLOYEE_ID,Job_title)
			VALUES('$EMPLOYEE_ID','$Job_title')");
			$querycount = mysqli_num_rows($sql64); 			
			//office
			$sql2 = mysqli_query($db_connect,"INSERT INTO `office` (`Office_id`, `Office_Name`, `Other_Name_Office`, `Office_level`, `Office_Nature`, `Office_Manager`, `office_capacity`, `Department_Name`, `College_Name`) 
			VALUES ('$Office_id', '$Office_Name', '$Other_Name_Office', '$Office_level', '$Office_Nature', '$Office_Manager', '$office_capacity', '$Department_Name', '$College_Name')");
			$querycount = mysqli_num_rows($sql2); 
			//scientific_ranks
			$sql3 =mysqli_query($db_connect, "INSERT INTO scientific_ranks(Rank_Name,Other_Rank_Name,Degree,Watch_Price)
			VALUES('$Rank_Name','$Other_Rank_Name','$Degree','$Watch_Price')");
			$querycount = mysqli_num_rows($sql3); 
			//academic_qualifications
			$sql4 = mysqli_query($db_connect,"INSERT INTO academic_qualifications(EMPLOYEE_ID , Degreef , Certificate_Specialties, Exact_certificate_specialization,Study_language,Place_study,University_Name,Joining_Date,Graduation_Date,equation_number) 
			VALUES ('$EMPLOYEE_ID','$Degreef', '$Certificate_Specialties', '$Exact_certificate_specialization', '$Study_language', '$Place_study', '$University_Name', '$Joining_Date', '$Graduation_Date', '$equation_number')");
			$querycount = mysqli_num_rows($sql4); 		
			//employee_offiice
			$sql5 =mysqli_query($db_connect, "INSERT INTO employee_offiice(EMPLOYEE_ID,Office_id)
			VALUES('$EMPLOYEE_ID','$Office_id')");
			$querycount = mysqli_num_rows($sql5); 
			//employee_ranks
			$sql6 = mysqli_query($db_connect,"INSERT INTO employee_ranks(EMPLOYEE_ID,Rank_Name)
			VALUES('$EMPLOYEE_ID','$Rank_Name')"); 
			$querycount = mysqli_num_rows($sql6); 
			//training_courses راجعله
			//$sql7 = mysqli_query($db_connect,"INSERT INTO training_courses(EMPLOYEE_ID,course_place,cycle_Type,Company_name,Course_hours)
			//VALUES('$EMPLOYEE_ID','$course_place','$cycle_Type','$Company_name','$Course_hours')");
			//$querycount = mysqli_num_rows($sql7); 
			//employee_training
			//$sql8 = "INSERT INTO employee_courses(EMPLOYEE_ID,Company_name)
			//VALUES('$EMPLOYEE_ID','$Company_name')";


			//contact
			$sql9 = mysqli_query($db_connect,"INSERT INTO contact(EMPLOYEE_ID,phone_number,email)
			VALUES('$EMPLOYEE_ID','$phone_number','$email')");
			$querycount = mysqli_num_rows($sql9); 
			//employee_contact
		//	$sql10 = "INSERT INTO employee_contact(EMPLOYEE_ID,EMPLOYEE_NAME,phone_number)
			//VALUES('$EMPLOYEE_ID','$EMPLOYEE_NAME','$phone_number')";

			//experiences
			$sql11 = mysqli_query($db_connect,"INSERT INTO experiences(Experience_name,CCompany_Name) 
			VALUES ('$Experience_name','$CCompany_Name')");	
			$querycount = mysqli_num_rows($sql11); 
			//employee_experiences
			$sql12 = mysqli_query($db_connect,"INSERT INTO employee_experiences(EMPLOYEE_ID,Experience_name,Experience_start_date,Expiry_date_of_experience) 
			VALUES ('$EMPLOYEE_ID','$Experience_name','$Experience_start_date','$Expiry_date_of_experience')");
			$querycount = mysqli_num_rows($sql12); 
			//languages
			// $sql06 = mysqli_query($db_connect,"INSERT INTO languages(Language_name)
			// VALUES('$Language_name')"); 
			// $querycount = mysqli_num_rows($sql06); 
			//employee_languages
			$sql07 = mysqli_query($db_connect,"INSERT INTO employee_languages(EMPLOYEE_ID,language_name,level_Writing,level_Reading,level_Communication)
			VALUES('$EMPLOYEE_ID','$language_name','$level_Writing','$level_Reading','$level_Communication')");  
			$querycount = mysqli_num_rows($sql07); 
		//	$sql4 = "INSERT INTO employee_ranks(EMPLOYEE_ID,EMPLOYEE_NAME,Rank_id,Rank_Name)
		//	VALUES('$EMPLOYEE_ID','$EMPLOYEE_NAME','$Rank_id','$Rank_Name')";	
			//End
			ob_end_clean();			
			if($query&&$sql){

				echo json_encode(array("status" => "Success"));
				exit();			
			} else {
				echo json_encode(array("status" => "failed"));
				exit();
			}

		} else {
			echo json_encode(array("status" => "exists"));
			exit();
		}
	

?>