<?php
    session_start();

    include'config.php';
    if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["email"] != '' && $_POST["password"] != '' && $_POST["password2"] != '' )
    {
        $username=$_POST["username"];
        $email=   $_POST["email"];
        $password=$_POST["password"];
        $password2=$_POST["password2"];
        if($password != $password2) {
            $_SESSION["thongbao"] ="mật khẩu như cái chân gà vậy, KHÔNG KHỚP";

            header("location:register.php");
            die();
        }
        $sql = "SELECT * from user WHERE username='$username'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0 ) {
            $_SESSION["thongbao"]="Tài khoản đã tồn tại";
     
            header("location:register.php");   
            die();
        }
        $sql="INSERT INTO user (username, email, password ) VALUES ('$username','$email','$password')";
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