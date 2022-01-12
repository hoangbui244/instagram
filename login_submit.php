<?php
    session_start();
    include 'config.php';
    if(isset($_POST['submit']) && $_POST["username"] !='' && $_POST["password"] !=''   )
    {   
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user_account WHERE username=?";
        //$query = mysqli_query($conn,$sql);
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        //$row = mysqli_fetch_array($query);     
        //$count = mysqli_num_rows($query);
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_bind_result($stmt,$id,$email,$user_password,$username,$avatar,$usertype,$status,$report_count);
            if(mysqli_stmt_fetch($stmt)){
                if(password_verify($password, $user_password) && $status =='Verified'){
                    $_SESSION["username_id"] = $id;
                    $_SESSION["username"] = $username;
                    $_SESSION["avatar"] = $avatar;
                    $_SESSION["email"] = $email;
                    mysqli_close($conn);
                    if($usertype == 'admin'){
                        header("location:admin/admin.php");
                    }
                    else{
                        header("location:index.php");
                    }
                       
                }
                else{
                    echo "sai";
                    echo $status;
                }
            }
            else{
                ?>
                <script>
                    alert("Tài khoản hoặc mật khẩu không đúng");
                    location.href="login.php"
                </script>
                <?php
    
            }
        }

    }
?>