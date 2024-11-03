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

	$uname = validate($_POST['user-id']);
	$pass = validate($_POST['u-pwd']);

	if (empty($uname)) {
		header("Location: user-login.php?error=User ID is required");
	    exit();
	}else if(empty($pass)){
        header("Location: user-login.php?error=Password is required");
	    exit();
	}else{

        $pass = md5($pass);
		echo $pass;
        

		$sql = "SELECT * FROM user_table WHERE user_id='$uname'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
          

            if ($row['user_id'] === $uname) {
            	$_SESSION['user_name'] = $row['User_Nmae'];
            	$_SESSION['id'] = $row['user_id'];
				if($row['User_role']==="admin"){
					$_SESSION['logged_in']=true;
					$_SESSION['user_type']="admin";
					$_SESSION['user_Img'] = $row['admin_image']; 
					header("Location: admin-pannel.php");
		        exit();
				}
				else{
					$_SESSION['logged_in']=true;
					$_SESSION['user_type']="user";
					$_SESSION['user_Img'] = $row['User_profile']; 
					header("Location: user-account.php");
		            exit();
				}

            }else{
				header("Location: user-login.php?error=Incorect User ID or password");
		        exit();
			}
		}else{
			header("Location: user-login.php?error=Incorect User ID or password");
	        exit();
		}
	}
	
}else{
	header("Location: user-login.php");
	exit();
}