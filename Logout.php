<?php
	// require('core.php');

	session_start();
	
function is_loggedin(){
	return  isset( $_SESSION['authenticated'] );
}


	if( ! isset( $_SESSION['authenticated'] ) ) {
		header('location: login.php');
	}

	if(!is_loggedin()){
		header('location: Login.php');
	}

	$auth_user = $_SESSION['auth_user'];

	// var_dump($auth_user);

	$name = $auth_user['name'];


?>

<h1>Welcome <?php echo $auth_user['name'] ?> To your Profile</h1>

<a href="Logout.php">Click here to logout!</a>