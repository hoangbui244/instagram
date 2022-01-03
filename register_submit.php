<?php
    session_start();
    include'config.php';
    if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["email"] != ''  )
    {   
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]); 
        $email=$_POST["email"];
        $password=password_hash($_POST["password"],PASSWORD_DEFAULT);

        $sql = "SELECT * from user_account WHERE username='$username'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0 ) {
            $_SESSION["thongbao"]="Tài khoản đã tồn tại";
            header("location:register.php");   
            die();
        }
        $sql="INSERT INTO user_account (email,username, user_password) VALUES ('$email','$username','$password')";
        mysqli_query($conn,$sql);
        $_SESSION["thongbao"]=" Đã đăng kí thành công";
        header("location:login.php");

        echo " ĐĂNG KÍ THÀNH CÔNG";


    }
    else{
        $_SESSION["thongbao"]="Nhập hết đi đã đi đâu mà vội";
        header("location:register.php");
        }

?>