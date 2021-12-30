<?php
    session_start();

    include'config.php';
<<<<<<< HEAD
=======
<<<<<<< HEAD
    if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["fullname"] != '' && $_POST["name"] != '' && $_POST["password"] != ''  )
    {   
        $username=$_POST["username"];
        $fullname=   $_POST["fullname"];
        $name=$_POST["name"];
        $password=$_POST["password"];
        // $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  


        $sql = "SELECT * from user_accounts WHERE username='$username'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0 ) {
            $_SESSION["thongbao"]="Tài khoản đã tồn tại";
            echo '<script>alert("Image Inserted into Database")</script>';  

=======
>>>>>>> 845e0d8001fd4edeb15ed43ae6c285a5cd6fb0da
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
<<<<<<< HEAD
=======
>>>>>>> a896fbdf5b4d1f6aa68e0f009f2a4a654a6d9219
>>>>>>> 845e0d8001fd4edeb15ed43ae6c285a5cd6fb0da
     
            header("location:register.php");   
            die();
        }
<<<<<<< HEAD
        $sql="INSERT INTO user (username, email, password ) VALUES ('$username','$email','$password')";
=======
<<<<<<< HEAD
        $sql="INSERT INTO user_accounts (username, fullname,name, password,image ) VALUES ('$username','$fullname','$name','$password','$file')";
=======
        $sql="INSERT INTO user (username, email, password ) VALUES ('$username','$email','$password')";
>>>>>>> a896fbdf5b4d1f6aa68e0f009f2a4a654a6d9219
>>>>>>> 845e0d8001fd4edeb15ed43ae6c285a5cd6fb0da
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