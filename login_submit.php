<?php
    session_start();
    include'config.php';
    if(isset($_POST['submit']) && $_POST["username"] !='' && $_POST["password"] !=''   )
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM user_account WHERE username='$username' AND user_password='$password'";
        $query =mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($query);
        $count = mysqli_num_rows($query);
        if($count==1){
            // echo "đăng nhập thành công";
            $_SESSION["loged"] = true;
            $_SESSION["username_id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["avatar"] = $row["avatar"];
            header("location:index.php");
            setcookie("success", "Đăng nhập thành công!", time()+1, "/","", 0);
        }
        else{
            // echo "sai";
            $_SESSION["thongbao"]="Sai tên đăng nhập hoặc mật khẩu";
            header("location:login.php");
            setcookie("error", "Đăng nhập không thành công!", time()+1, "/","", 0);
        }
    }
    else{
        $_SESSION["thongbao"]="Vui lòng nhập đầy đủ thông tin";
        header("location:login.php");
    }
?>