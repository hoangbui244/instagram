<?php
    session_start();


    include'config.php';
    if(isset($_POST['submit']) && $_POST["username"] !='' && $_POST["password"] !=''   )
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM user_accounts WHERE username='$username' AND password='$password'";
        $user= mysqli_query($conn,$sql);
        if( mysqli_num_rows($user) > 0 ){
            echo "đăng nhập thành công";
            // header("location:");
        }
        else{
            // echo "sai";
            $_SESSION["thongbao"]="Sai tên đăng nhập hoặc mật khẩu";
            header("location:login.php");

        }


    }
    else{
        $_SESSION["thongbao"]="Vui lòng nhập đầy đủ thông tin";
        header("location:login.php");
    }
?>