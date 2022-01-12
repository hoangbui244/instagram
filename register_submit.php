<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    session_start();
    require_once 'config.php';
    if(isset($_POST["username"]))
    {   
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]); 
        $email=$_POST["email"];
        $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
        $sql = "SELECT * from user_account WHERE username='$username'";
        $result=mysqli_query($conn,$sql);
        echo mysqli_num_rows($result);
        if(mysqli_num_rows($result) <= 0 ) {
            //User hop le
            if(isset($_POST["submit"])){
            $sql="INSERT INTO user_account (email,username, user_password) VALUES ('$email','$username','$password')";
            mysqli_query($conn,$sql);
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';
        $link = "localhost/instagram-master/verified.php?email=".$email."";
		$message = "Hello $firstname $lastname! <br>"
        . "Please click the link below to confirm your email and complete the registration process.<br>"
        . "You will be automatically redirected to a welcome page where you can then sign in.<br><br>"            
        . "Please click below to activate your account:<br>"
        . "<a href='$link'>Click Here!</a>";
		$mail = new PHPMailer(true);  
        try {
			//Server settings
			$mail->isSMTP();                                     
			$mail->Host = 'smtp.gmail.com';                      
			$mail->SMTPAuth = true;                             
			$mail->Username = 'khailovesao@gmail.com';     
			$mail->Password = 'futfessfaogzoofn';             
			$mail->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
			);                         
			$mail->SMTPSecure = 'ssl';                           
			$mail->Port = 465;                                   
	
			//Send Email
			$mail->setFrom('khailovesao@gmail.com','Pham Van Khai');
	
			//Recipients
			$mail->addAddress($email);              
			$mail->addReplyTo('khailovesao@gmail.com');
	
			//Content
			$mail->isHTML(true);                                  
			$mail->Subject = 'Account registration confirmation';
            $mail->Body    = $message;
			$mail->send();
            echo 'Message has been sent';
			header("location:verification.php?&email=".$email."");
			
		} catch (Exception $e) {
			$_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
			$_SESSION['status'] = 'error';
		}
        }
    }
}
?>