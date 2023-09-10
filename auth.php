<?php
include 'connect.php';


if (isset($_POST['email']) && isset($_POST['password'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	#echo "$email : $password ";

	if (empty($email)) {
		echo "<script>
		alert('Please Input Email Address')
	
		location.href = 'userlogin.php?error=Please Input Email Address';

		</script>";
	}
	elseif (empty($password)) {
		echo "<script>
		alert('Please Input Password')
	
		location.href = 'userlogin.php?error=Password is Required';

		</script>";
	}
	else {
		
		
		$quer = mysqli_query($dbconnect, "SELECT * FROM STUDENT WHERE Email = '$email' AND Password = '$password'") or die("Failed ->". mysql_error());
		$user = mysqli_fetch_array($quer, MYSQLI_ASSOC);
		
		if ($user) {
			$Email = $user['Email'];
			$Password = $user['Password'];
			$user_id = $user['user_id'];
			$First = $user['First'];
			$Last = $user['Last'];
			loginsuccess($user_id);

			if (password_verify($password, $user["Password"])) {
				
			}else{
				header("Location: userlogin.php?error=Incorrect Password");
			}
			
		}else{
			header("Location: userlogin.php?error=Incorrect Login");
		}
		 // if ($stmt->rowCount() === 1) {
		 // 	echo $user = $stmt->fetch();
		 	
		 // }else{
		 // 	header("Location: userlogin.php?error=Incorrect Login");
		 // }
	}
}


function loginsuccess($user_id)
{
	echo "<script>
	alert('Login Successful')
			location.href = 'index.php?id=$user_id';
			</script>";
}
?>