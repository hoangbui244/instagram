<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
    session_start();


=======
>>>>>>> a896fbdf5b4d1f6aa68e0f009f2a4a654a6d9219
>>>>>>> 845e0d8001fd4edeb15ed43ae6c285a5cd6fb0da
    include'config.php';
    if(isset($_POST['submit']) && $_POST["username"] !='' && $_POST["password"] !=''   )
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
<<<<<<< HEAD
=======
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
>>>>>>> 845e0d8001fd4edeb15ed43ae6c285a5cd6fb0da
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $user= mysqli_query($conn,$sql);
        if( mysqli_num_rows($user) > 0 ){
            header("location:");
        }
        else{
<<<<<<< HEAD
=======
>>>>>>> a896fbdf5b4d1f6aa68e0f009f2a4a654a6d9219
>>>>>>> 845e0d8001fd4edeb15ed43ae6c285a5cd6fb0da
            $_SESSION["thongbao"]="Sai tên đăng nhập hoặc mật khẩu";
            header("location:login.php");

        }


    }
    else{
<<<<<<< HEAD
        $_SESSION["thongbao"]="Vui lòng nhập đầy đủ thông tin"
=======
<<<<<<< HEAD
        $_SESSION["thongbao"]="Vui lòng nhập đầy đủ thông tin";
=======
        $_SESSION["thongbao"]="Vui lòng nhập đầy đủ thông tin"
>>>>>>> a896fbdf5b4d1f6aa68e0f009f2a4a654a6d9219
>>>>>>> 845e0d8001fd4edeb15ed43ae6c285a5cd6fb0da
        header("location:login.php");
    }
?>