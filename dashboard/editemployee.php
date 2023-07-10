<?php 
	ob_start();
	include("../inc/db_connect.php");

	
		$record_id = mysqli_real_escape_string($db_connect, $_POST['record_id']);
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
		$username = mysqli_real_escape_string($db_connect, $_POST['username']);
		$EMPLOYEE_ID = mysqli_real_escape_string($db_connect, $_POST['EMPLOYEE_ID']);
		$EMPLOYEE_NAME = mysqli_real_escape_string($db_connect, $_POST['EMPLOYEE_NAME']);
		$OTHER_EMPLOYEE_NAME = mysqli_real_escape_string($db_connect, $_POST['OTHER_EMPLOYEE_NAME']);
		$gender = mysqli_real_escape_string($db_connect, $_POST['gender']);
		$EMPLOYEE_RELIGION = mysqli_real_escape_string($db_connect, $_POST['EMPLOYEE_RELIGION']);
		$EMPLOYEE_NATIONALITY = mysqli_real_escape_string($db_connect, $_POST['EMPLOYEE_NATIONALITY']);
		$IDENTIFICATION_ID = mysqli_real_escape_string($db_connect, $_POST['IDENTIFICATION_ID']);

	

		if($passport_photo_name != ""){
			$query = "UPDATE sharp_emp SET employee_image = '$passport_photo_name' WHERE id = '$record_id' ; ";
		}

		if($nationalID_name != ""){
			$query .= "UPDATE sharp_emp SET id_card_image = '$nationalID_name' WHERE id = '$record_id' ; ";
		}

		$query .= "UPDATE sharp_emp SET  first_name = '$firstname', middle_name = '$middlename', last_name = '$lastname', phone = '$phone', id_type = '$idtype', id_number = '$idnumber', residence_address = '$resaddress', residence_location = '$reslocation', residence_direction = '$resdirection', residence_gps = '$gpsreslocation', next_of_kin = '$fullname', relationship = '$relationship', phone_of_kin = '$kinphone', kin_residence = '$kinresaddress', kin_residence_direction = '$kinresdirection', date_employed = '$dateemployed', job_type = '$jobtype', status = '$empstatus' WHERE id = '$record_id' ; ";
		$query2= "UPDATE employees SET  EMPLOYEE_ID = '$EMPLOYEE_ID', EMPLOYEE_NAME = '$EMPLOYEE_NAME', OTHER_EMPLOYEE_NAME = '$OTHER_EMPLOYEE_NAME', gender = '$gender', EMPLOYEE_RELIGION = '$EMPLOYEE_RELIGION', EMPLOYEE_NATIONALITY = '$EMPLOYEE_NATIONALITY', IDENTIFICATION_ID = '$IDENTIFICATION_ID; ";

		$sql66 = mysqli_query($db_connect, "INSERT INTO edit (username)
		VALUES('$username')");
		$querycount = mysqli_num_rows($sql66); 
	
		ob_end_clean();			
		if(mysqli_multi_query($db_connect, $query)){
			echo json_encode(array("status" => "Success"));
			exit();	
			
		} else {
			echo json_encode(array("status" => "failed"));
			exit();
		}

?>