<?php
session_start();

$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'users_beerreview';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {

	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['username'], $_POST['password']) ) {

	die ('Please fill both the username and password field!');
}

if ($stmt = $con->prepare('SELECT username, password FROM users WHERE username = ?')) {

	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();

	$stmt->store_result();

  if ($stmt->num_rows > 0) {
  	$stmt->bind_result($id, $password);
  	$stmt->fetch();

  	if ($_POST['password'] === $password) {

  		session_regenerate_id();
  		$_SESSION['loggedin'] = TRUE;
  		$_SESSION['name'] = $_POST['username'];
  		$_SESSION['id'] = $id;
  		header('Location: indexLoggedIn.html');
  	} else {
  		echo 'Incorrect password!';
  	}
  } else {
  	echo 'Incorrect username!';
  }

	$stmt->close();
}
?>
