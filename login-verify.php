<?php 
session_start(); 
include "config.php";

if (isset($_POST['user-id']) && isset($_POST['u-pwd'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['user_id']);
	$pass = validate($_POST['User_Password']);

	if (empty($uname)) {
		header("Location: user-login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: user-login.php?error=Password is required");
	    exit();
	}else{
        $pass = md5($pass);

        
		$sql = "SELECT * FROM user_table WHERE user_id='$uname' AND User_Password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            print_r($row);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['User_Nmae'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['user_id'];
            	header("Location: user-account.php");
		        exit();
            }else{
				header("Location: user-login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: user-login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}