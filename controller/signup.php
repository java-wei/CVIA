<?php 

require('../includes/config.php'); 
require_once('../includes/class.phpmailer.php');


$location = $_SESSION['location'];
if(strrpos($location, "?")) {
	$connector = "&";
} else {
	$connector = "?";
}

//if form has been submitted process it
if(isset($_POST['submit'])){

	//very basic validation
	if(strlen($_POST['username']) < 3){
		$error[] = 'Username is too short.';
	} else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error[] = 'Username provided is already in use.';
		}
			
	}

	if(strlen($_POST['password']) < 3){
		$error[] = 'Password is too short.';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'Confirm password is too short.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Passwords do not match.';
	}

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email'])){
			$error[] = 'Email provided is already in use.';
		}
			
	}

	//if no errors have been created carry on
	if(!isset($error)){

		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);
		//create the activasion code
		$activasion = md5(uniqid(rand(),true));

		try {

			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO members (username,password,email,active) VALUES (:username, :password, :email, :active)');
                        
			$stmt->execute(array(
				':username' => $_POST['username'],
				':password' => $hashedpassword,
				':email' => $_POST['email'],
				':active' => $activasion
			));
			$id = $db->lastInsertId('memberID');

			//send email
	        $mail = new PHPMailer(); // create a new object
	        $mail->IsSMTP(); // enable SMTP
	        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	        $mail->SMTPAuth = true; // authentication enabled
	        $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
	        $mail->Host = "smtp.gmail.com";
	        $mail->Port = 587; // or 587
	        $mail->IsHTML(true);
	        $mail->Username = "charleschengyj@gmail.com";
	        $mail->Password = "CS3219project";
	        $mail->FromName = 'CViA Team';
	        $mail->Subject = "Registration Confirmation";
	        $mail->Body = "Thank you for registering at demo site.\n\n To activate your account, please click on this link:\n\n ".DIR."activateUserAccount.php?x=$id&y=$activasion\n\n Regards Site Admin \n\n";
	        $mail->AddAddress($_POST['email']);                     

			if(!$mail->Send())
			{
			  echo "Mailer Error: " . $mail->ErrorInfo;
			}
			else
			{
			  echo "Message sent!";
			}
			

			//redirect to login page
			header('Location: '.$location.$connector.'action=joined');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
        }
	}

}

if(isset($error)){
	header('Location: '.$location.$connector.'error=$error');
}


?>
