<?php
<<<<<<< HEAD
    session_start();


=======
>>>>>>> a896fbdf5b4d1f6aa68e0f009f2a4a654a6d9219
    include'config.php';
    if(isset($_POST['submit']) && $_POST["username"] !='' && $_POST["password"] !=''   )
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
<<<<<<< HEAD
        $sql = "SELECT * FROM user_accounts WHERE username='$username' AND password='$password'";
        $user= mysqli_query($conn,$sql);
        if( mysqli_num_rows($user) > 0 ){
            echo "đăng nhập thành công";
            // header("location:");
        }
        else{
            // echo "sai";
=======
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $user= mysqli_query($conn,$sql);
        if( mysqli_num_rows($user) > 0 ){
            header("location:");
        }
        else{
>>>>>>> a896fbdf5b4d1f6aa68e0f009f2a4a654a6d9219
            $_SESSION["thongbao"]="Sai tên đăng nhập hoặc mật khẩu";
            header("location:login.php");

        }


    }
    else{
<<<<<<< HEAD
        $_SESSION["thongbao"]="Vui lòng nhập đầy đủ thông tin";
=======
        $_SESSION["thongbao"]="Vui lòng nhập đầy đủ thông tin"
>>>>>>> a896fbdf5b4d1f6aa68e0f009f2a4a654a6d9219
        header("location:login.php");
    }
?>