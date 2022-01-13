<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accounts/emailsignup/</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                       
                            <?php
                                if(isset($_SESSION["thongbao"])){
                                    echo $_SESSION["thongbao"];
                                    // session_unset("thongbao");
                                }
                            ?>
                        
                        <form action="register_submit.php" method="POST">
                            <div class="main">
                                <div class="top">
                                    <div class="h1">
                                        <img src="img/login/Untitled1.png" alt="">
                                    </div>

                                    <div class="dangkidexemanh">
                                        <h6>
                                            Đăng kí để xem ảnh và video từ bạn bè

                                        </h6>

                                    </div>
                                  
                                    <div class="btn">
                                        <button>
                                            <i class="fab fa-facebook-square"></i>
                                            Đăng nhập bằng Facebook
                                        </button>
                                    </div>
                                    <div class="or">
                                        <div class="line"></div>
                                        <h6> HOẶC </h6>
                                        <div class="line"></div>

                                    </div>

                                    <div class="form-group">
                                        <div class="check_email">
                                        <input type="text" id="email" name="email" class="form-control input-lg" required
                                            autoforcus placeholder="Email">
                                        <span class="material-icons-outlined correct_email">check_circle_outline</span>
                                        <span class="material-icons-outlined wrong_email" >cancel</span>
                                        </div>
                                        
                                        <div class="check_user_name">
                                        <input type="text" id="username" name="username" class="form-control input-lg"
                                            placeholder="Tên người dùng" required autoforcus>
                                        <span class="material-icons-outlined correct_user">check_circle_outline</span>
                                        <span class="material-icons-outlined wrong_user" >cancel</span>
                                        </div>
                                        
                                        <input type="password" id="password" name="password" class="form-control input-lg"
                                            placeholder="Mật khẩu" required autoforcus>
                                        </div>
                                        <div class="btn">
                                        <button type="submit" name="submit" id="btn" >Đăng kí</button>
                                        </div> 
                                        <br /> 
                                        </form> 
                                        <!-- <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />   -->
                                   

                                   
                                     
                               
                                <div class="p">
                                    <p>Bằng cách nhấp vào đăng ký, bạn đồng ý với chính sách và điều khoản của chúng tôi</p>

                                </div>

                                </div>
                                

             

          
                <div class="mid">
                    <div class="mid1">
                        <p>
                            Bạn có tài khoản ? <a style="font-size:15px;color:#385185;" href="login.php">Đăng nhập</a>
                        </p>

                    </div>

                </div>
                <div class="taiungdung">
                    <p>
                        Tải ứng dụng.
                    </p>
                </div>
           
                <div class="bot">

              
                    <div class="img">
                        <a href="https://apps.apple.com/app/instagram/id389801252?vt=lo"><img src="img/login/IOS.png"
                                alt="tải về trên appstor"></a>
                        <a
                            href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb&utm_campaign=loginPage&ig_mid=37023918-0B95-4643-8949-584BD53816D2&utm_content=lo&utm_medium=badge"><img
                                src="img/login/androi.png" alt="tải về trên google play"></a>
                    </div>

                </div>
            </div>
        </div>
                <div class="footer">
                    <div class=" row1">
                       

                        <a href="https://about.facebook.com/meta">Meta</a>
                        <a href="https://about.instagram.com/">Giới thiệu</a>
                        <a href="https://about.instagram.com/en_US/blog">Blog</a></li>
                        <a href="https://about.instagram.com/about-us/careers">Trợ giúp</a>
                        <a href="https://help.instagram.com/">Việc làm</a>
                        <a href="https://developers.facebook.com/docs/instagram">API</a></li>
                        <a href="https://help.instagram.com/519522125107875">Quyền riêng tư</a>
                        <a href="https://help.instagram.com/581066165581870">Điều khoản</a>
                        <a href="https://www.instagram.com/directory/profiles/">Tài khoản liên quan nhất</a>
                        <a href="https://www.instagram.com/directory/hashtags/">
                            Hashtag</a>
                        <a href="https://www.instagram.com/explore/locations/">
                            Vị trí</a>
                        <a href="https://www.instagram.com/web/lite/">Instagram Lite</a>
                    </div>
                    
                    <div class="fn">
                        <div class="fn2">
                            © 2021 Instagram from Meta
                        </div>
                    </div>
                </div>

            

            <!-- </fieldset> -->
            
        




    </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <script src="js/register.js"></script>
        
</body>

</html>