<?php
    session_start();
    include'config.php';
    if(isset($_POST['submit']) && $_POST["username"] !='' && $_POST["password"] !=''   )
    {   
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM user_account WHERE username='$username' ";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($query);     
        $count = mysqli_num_rows($query);
        // echo $password;
        // echo "xuogn dong    ";
        // echo $row["user_password"];
        if($count > 0){
         
                $_SESSION["loged"] = true;
                $_SESSION["username_id"] = $row["id"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["avatar"] = $row["avatar"];
                header("location:index.php");
       
            
    }
    }
    else{
        $_SESSION["thongbao"]="Vui lòng nhập đầy đủ thông tin";
        header("location:login.php");
    }
?>