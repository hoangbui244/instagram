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
					$email = $_REQUEST['email'];
			?>
				<center><h3 style="text-align: center; font-size: 30px; color: white;">Email đã tồn tại!</h3></center>
				
				<h5 style="text-align: center; font-size: 20px; color: white;">Hãy cho chúng tôi biết nếu bạn có bất kì câu hỏi nào hoặc muốn biết thêm thông tin.</h5>
				
				<h5 style="text-align: center; font-size: 20px; color: white;">Bạn có thể đăng nhập tại <a class="btn btn-primary" style="font-size: 20px; color: aqua;" href="confirm_account.php?email=<?php echo $email?>">đây</a></h5>
				
				<h5 style="text-align: center; font-size: 20px; color: white;">Xin cảm ơn!</h5>
				
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