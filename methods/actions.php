<?php
    session_start();
    include_once "db.php";

//--> SIGN IN
    
    if(isset($_POST['sign_in'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	$encrypt_password = md5($password);
	
	$signin = "SELECT * FROM account WHERE username='$username' AND password = '$encrypt_password'";
	$result = executeQuery($signin);
	$count = mysql_num_rows($result);
	if($count == 1){
	    $_SESSION['username'] = $username;
	    $_SESSION['password'] = $password;
	}else{
	    $_SESSION['logout'] = true;
	}
	    closedb();
	    header('location: ../index.php');
    }
//--> CHANGE PASSWORD
    if(isset($_POST['change_password'])){
	$user = $_SESSION['username'];
	echo $user;
	$old = $_POST['old_password'];
	$new = $_POST['new_password'];
	$confirm = $_POST['confirm_password'];
	
	$old = stripcslashes($old);
	$old = mysql_real_escape_string($old);
	$new = stripcslashes($new);
	$new = mysql_real_escape_string($new);
	$confirm = stripcslashes($confirm);
	$confirm = mysql_real_escape_string($confirm);
	
	$encrypt_old = md5($old);
	$encrypt_new = md5($new);
	$check_password = "SELECT * FROM account WHERE username = '$user' AND password = '$encrypt_old';";
	$result = executeQuery($check_password);
	$count = mysql_num_rows($result);
	
	$success = 0;
	
	if($count == 1){
	    $update = "UPDATE account SET password = '$encrypt_new' WHERE username = '$user';";
	    $update_result = executeQuery($update);
	    $success = "1QAZXSW23EDCVFR45TGB";
	}
	closedb();
	session_destroy();
	header("location: ../index.php?change=$success");
    }
//--> UPLOAD
    if(isset($_POST['upload_data'])){
        $file = $_FILES['file']['tmp_name'];
        $handle = fopen($file,"r");
	    while(($fileop = fgetcsv($handle,1000,",")) !== false){
            $user = $fileop[0];
	    $loc = $fileop[1];
            $comp = $fileop[2];
            $comp_asset = $fileop[3];
            $monitor = $fileop[4];
            $brand = $fileop[5];
            $monitor_asset = $fileop[6] . ", " . $fileop[7];
            $os = $fileop[8];
            $oem = $fileop[9] . ", " . $fileop[10];
            $avv = $fileop[11];
            $processor = $fileop[12];
            $ram = $fileop[13];
            $hdd = $fileop[14];
            $msoffice = $fileop[15];
            $others = $fileop[16];
            $floor = $fileop[17];

            $insert=executeQuery("INSERT INTO 
                                    data(username_owner,department_location,computername,asset_tag_computer,
                                    number_of_monitor,brand_of_monitor,asset_tag_monitor,os,oem,avv,processor,
                                    ram,hard_drive,ms_office_version,others,floor,timestamp) 
                                    VALUES('$user','$loc','$comp','$comp_asset','$monitor','$brand',
                                    '$monitor_asset','$os','$oem','$avv','$processor','$ram','$hdd',
                                    '$msoffice','$others','$floor',NOW());");
	    }
	    fclose($handle);
	    $success = 0;
	    
	    if($insert){
		$success = "qaz2wsx3edc4rfv5tgb1";
	    }
	    closedb();
	    header("location: ../index.php?upload=$success");
    }
    
//--> ADD_ENTRY
  
    if(isset($_POST['add_entry'])){
        
        //datenow and dateout is not yet final
        $floor = $_POST['add_floor'];
        $user = $_POST['add_username'];
        $loc = $_POST['add_loc'];
        $comp = $_POST['add_comp'];
        $comp_asset = $_POST['add_comp_asset'];
        $no_monitor = $_POST['add_num_monitor'];
        $monitor = $_POST['add_monitor'];
        $mon_asset = $_POST['add_monitor_asset'];
        $os = $_POST['add_os'];
        $oem = $_POST['add_oem'];
        $antivi = $_POST['add_avv'];
        $processor= $_POST['add_processor'];
        $ram = $_POST['add_ram'];
        $hdd = $_POST['add_hdd'];
        $msoffice = $_POST['add_msoffice'];
        $others = $_POST['add_others'];
        $dategiven = $_POST['add_dategiven'];
        $dateout = $_POST['add_datepulledout'];
        
        
        $sql_add = "INSERT INTO 
                    data (floor, username_owner, department_location, computername, asset_tag_computer, number_of_monitor, brand_of_monitor, asset_tag_monitor, os, oem, avv, processor, ram, hard_drive, ms_office_version, others, date_given, date_pulled_out, timestamp)
                    VALUES ('$floor', '$user', '$loc', '$comp', '$comp_asset', '$no_monitor', '$monitor', '$mon_asset', '$os', '$oem', '$antivi', '$processor', '$ram', '$hdd', '$msoffice', '$others', '$dategiven', '$dateout', NOW());";
          
        $result = executeQuery($sql_add);
        $success = 0;
	    
	if($result){
	    $success = "BGT54RFVCDE32WSXZAQ1";
	}
	closedb();
	header("location: ../index.php?add=$success");
    }
    
    
//--> EDIT_ENTRY
  
    if(isset($_POST['edit_entry'])){
	
	$user_id = $_POST['edit_id'];
	$floor = $_POST['edit_floor'];
        $user = $_POST['edit_username'];
        $loc = $_POST['edit_loc'];
        $comp = $_POST['edit_comp'];
        $comp_asset = $_POST['edit_comp_asset'];
        $no_monitor = $_POST['edit_num_monitor'];
        $monitor = $_POST['edit_monitor'];
        $mon_asset = $_POST['edit_monitor_asset'];
        $os = $_POST['edit_os'];
        $oem = $_POST['edit_oem'];
        $antivi = $_POST['edit_avv'];
        $processor= $_POST['edit_processor'];
        $ram = $_POST['edit_ram'];
        $hdd = $_POST['edit_hdd'];
        $msoffice = $_POST['edit_msoffice'];
        $others = $_POST['edit_others'];
        $dategiven = $_POST['edit_dategiven'];
        $dateout = $_POST['edit_datepulledout'];
	
	
	
	$sql_edit = "UPDATE data
		SET  floor='$floor', username_owner='$user', department_location='$loc', computername='$comp', asset_tag_computer='$comp_asset',
		    number_of_monitor='$no_monitor', brand_of_monitor='$monitor', asset_tag_monitor='$mon_asset', os='$os', oem='$oem', avv='$antivi',
		    processor='$processor', ram='$ram', hard_drive='$hdd', ms_office_version='$msoffice', others='$others', date_given='$dategiven', date_pulled_out='$dateout',
		    timestamp=NOW()
		WHERE ID = '$user_id'; ";
    
	$result = executeQuery($sql_edit);
        $success = 0;
	    
	if($result){
	    $success = "ZAQ12WSXCDE321QWSAZX";
	}
	closedb();
	header("location: ../index.php?edit=$success");
    
    }
    if(isset($_POST['logout'])){
		session_destroy();
		header('location: ../index.php');
    }
?>