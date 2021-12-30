<?php
    session_start();

    include'config.php';
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

     
            header("location:register.php");   
            die();
        }
        $sql="INSERT INTO user_accounts (username, fullname,name, password,image ) VALUES ('$username','$fullname','$name','$password','$file')";
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