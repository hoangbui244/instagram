<?php
    session_start();
    include'config.php';
    if(isset($_POST['submit']) && $_POST["username"] !='' && $_POST["password"] !=''   )
    {   
        $username = $_POST["username"];
        $password =password_hash($_POST["password"],PASSWORD_DEFAULT);
        $sql = "SELECT * FROM user_account WHERE username=?";
        //$query = mysqli_query($conn,$sql);
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        //$row = mysqli_fetch_array($query);     
        //$count = mysqli_num_rows($query);
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_bind_result($stmt,$id,$email,$user_password,$username,$avatar);
            if(mysqli_stmt_fetch($stmt)){
                $_SESSION["loged"] = true;
                $_SESSION["username_id"] = $id;
                $_SESSION["username"] = $username;
                $_SESSION["avatar"] = $avatar;
                header("location:index.php");   
            }
            else{
                echo "loi roi";
            }
        }

    }
?>