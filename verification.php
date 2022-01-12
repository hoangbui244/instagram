<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<div class="forms container">
		<div class="form_content">
			<?php
				if(ISSET($_REQUEST['email'])){
			?>
				<h3 style="text-align: center; font-size: 30px; color: white;"><strong>Bạn đã sẵn sàng!</strong></h3>
				<br />
				<h5 style="text-align: center; font-size: 20px; color: white;">Xin chào, <?php echo $_REQUEST['email']?><h5>
				<h5 style="text-align: center; font-size: 20px; color: white;">Chúng tôi đã hoàn thành việc thiết lập cho tài khoản của bạn.<h5>
				<h5 style="text-align: center; font-size: 20px; color: white;">Chúng tôi đã gửi thư xác nhận đến email của bạn! <h5>
				<a class="btn btn-primary" style="display: flex; justify-content: center; font-size: 20px; color: aqua;" href="https://<?php echo $_REQUEST['email']?>" target="_blank">Xác nhận Email</a>
			<?php
				}
			?>
		</div>		
	</div>
	<style>
	body{
    background-image: url(https://1.bp.blogspot.com/-NriAyn8EQkc/XzPbQkP-THI/AAAAAAAACUY/P4AZtjTfX18HsXhJE7aJCqpggfa0NBUqQCLcBGAsYHQ/s2000/instagram-background-square-1.png);
    background-position: center; /* Center the image */
  	background-repeat: no-repeat; /* Do not repeat the image */
  	background-size: cover; /* Resize the background image to cover the entire container */
	}
	</style>
</body>
</html>

