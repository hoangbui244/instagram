<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    $user_id = $_GET['id'];
    require_once "config.php";
    ?>
    <?php
        session_start();
        $user_id_get = $_GET['id'];
        $user_id = (int)$_SESSION["username_id"];
    ?>
    <header>
        <div class="container">
            <div class="navbar">
                <img src="img/header/logo.png" alt="">
                <div class="wrap-input">
                    <input type="text" placeholder="Tìm kiếm">
                    <img class="icon-search" src="img/header/search.png" alt="">
                </div>
                <div class="nav_item">
                    <span style="font-size: 30px; margin-right: 15px;" class="material-icons-outlined">
                        home
                    </span>
                    <span style="font-size: 30px; margin-right: 15px;" class="material-icons-outlined">
                        send
                    </span>
                    <span style="font-size: 30px; margin-right: 15px;" class="material-icons-outlined">
                        add_box
                    </span>
                    <span style="font-size: 30px; margin-right: 15px;" class="material-icons-outlined">
                        explore
                    </span>
                    <span style="font-size: 30px; margin-right: 15px;" class="material-icons-outlined">
                        favorite_border
                    </span>

                    <div class="profile">
                        <img class="avt_profile" onclick="menuProfile()" src="img/header/avatar.jpg" alt="">
                        <!-- last two menu-proflie -->
                        <div class="menu-profile" id="menu-profile">
                            <div class="item-menu">
                                <span class="material-icons-outlined">
                                    account_circle
                                </span>
                                <p>Trang cá nhân</p>
                            </div>
                            <div class="item-menu">
                                <span class="material-icons-outlined">
                                    bookmark_border
                                </span>

                                <p>Đã lưu</p>
                            </div>
                            <div class="item-menu">
                                <span class="material-icons-outlined">
                                    settings
                                </span>

                                <p>Cài đặt</p>
                            </div>
                            <div class="item-menu">
                                <span class="material-icons-outlined">
                                    swap_horizontal_circle
                                </span>


                                <p>Chuyển tài khoản</p>
                            </div>
                            <hr>
                            <div class="item-menu">
                                <p>Đăng xuất</p>
                            </div>
                            <!-- last three -->


                        </div>
                        <!-- end last two menu-proflie -->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="content_top container">
        <?php
          $sql_user = "select * from user_account where id = $user_id_get";
          $query = mysqli_query($conn, $sql_user);
           $pro = mysqli_fetch_assoc($query)
           ?>
            <div class="avatar">
                <img class="avt_profile" onclick="menuProfile()" src="<?php if($pro["avatar"]==null){ echo 'images/blank-user.jpg' ; }else{echo 'images/'.$pro["avatar"];} ?>" alt="">
            </div>
            <div class="information ">
                <div class="info_top">

                    <h4><?php echo $pro["username"] ?></h4>
                    <div class="info_top_right">
                      
                        <?php if ($user_id == $user_id_get) { ?>
                        <button class="btn_edit_profile">Chỉnh sửa trang cá nhân</button>
                        <?php } else { ?>
                        <button class="btn_follow">Theo dõi</button>
                        <?php } ?>
                        
                        <span class="material-icons-outlined">
                            settings
                            </span>
                    </div>
                </div>
                <div class="info_mid">
                    <h6>0 bài viết</h6>
                    <h6>0 người theo dõi</h6>
                    <h6>Đang theo dõi 0 người dùng</h6>
                </div>
                <div class="info_bot">
                    Nguyễn Tuấn Dũng
                </div>
            </div> 
        </div>
        <hr class="container">
        <div class="container">
            <div class="content_mid">
                <div class="tabs">       
                    <div class="tab-item active">
                            <span class="material-icons-outlined">
                                grid_on 
                                </span>
                                Bài viết
                    </div>
                    <div class="tab-item">
                            <span class="material-icons-outlined">
                                bookmark_border
                                </span>
                                Đã lưu                       
                    </div>
                    <div class="tab-item">                        
                            <span class="material-icons-outlined">
                                assignment_ind
                                </span>
                                Được gắn thẻ                       
                    </div> 
                    <div class="line"></div>     
                </div>
                <div class="panes container">
                        <div class="tab-pane active">
                            <div class="row">
                            <?php
           
          $sql_post = "select * from posts WHERE user_id = $user_id_get;";
          $query = mysqli_query($conn, $sql_post);
          $postid = array(); 
           while($pro = mysqli_fetch_assoc($query)):
           ?>
                                <div class="col-md-4 col-6 mt-5 mb-1">
                                    <div class="post">
                                        <img class="img-fluid" src="<?php echo 'images/' . $pro["photo"] ?>" alt="">
                                        <div id="myBtn" class="overlay">
                                            <div class="post_content"> 
                                                <span class="material-icons-outlined">
                                                    favorite_border
                                                    </span> 
                                                    766k   
                                                <span class="material-icons-outlined">
                                                    mode_comment
                                                    </span>
                                                    2000                                      
                                            </div>
                                        </div>                                     
                                        
                                    </div>
                                </div>
                                <?php endwhile ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="saved">
                            <span class="material-icons-outlined">
                                bookmark_border
                                </span>
                            <h6>Những bài viết bạn đã lưu sẽ hiển thị ở đây.</h6>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="tagged">
                            <span class="material-icons-outlined">
                                assignment_ind
                                </span>
                                <h4>Ảnh có mặt bạn</h4>
                                <h6>Khi mọi người gắn thẻ bạn trong ảnh, ảnh sẽ xuất hiện tại đây.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="bottom">
            <div class="container">
                <div class="footer_top">
                    <div class=""> 
                        <a href="https://about.facebook.com/meta">Meta</a>
                        <a href="https://about.instagram.com/">Giới thiệu</a>
                        <a href="https://about.instagram.com/en_US/blog">Blog</a>
                        <a href="https://about.instagram.com/about-us/careers">Việc làm</a>
                        <a href="https://help.instagram.com/">Trợ giúp</a>
                        <a href="https://developers.facebook.com/docs/instagram">API</a>
                        <a href="https://help.instagram.com/519522125107875">Quyền riêng tư</a>
                        <a href="https://help.instagram.com/581066165581870">Điều khoản</a>
                        <a href="https://www.instagram.com/directory/profiles/">Tài khoản liên quan nhất</a>
                        <a href="https://www.instagram.com/directory/hashtags/">Hashtag</a>
                        <a href="https://www.instagram.com/explore/locations/">Vị trí</a>
                        <a href="   ">Instagram Lite</a>
                    </div>
                </div>
                <div class="footer_bot">
                    <hr>
                        <p>
                            © 2021 Instagram from Meta
                        </p>
                </div>
    
            </div>
        </div>
        
    </footer>
    <script>
        
        const $ = document.querySelector.bind(document);
        const $$ = document.querySelectorAll.bind(document);

        const tabs = $$(".tab-item");
        const panes = $$(".tab-pane");

        const tabActive = $(".tab-item.active");
        const line = $(".tabs .line");

        line.style.left = tabActive.offsetLeft + "px";
        line.style.width = tabActive.offsetWidth + "px";

        tabs.forEach((tab, index) => {
        const pane = panes[index];

        tab.onclick = function () {
        $(".tab-item.active").classList.remove("active");
        $(".tab-pane.active").classList.remove("active");

        line.style.left = this.offsetLeft + "px";
        line.style.width = this.offsetWidth + "px";

        this.classList.add("active");
        pane.classList.add("active");
  };
});
    </script>
    <!-- <div id="myModal" class="modal">
        <!-- Modal content -->
       <!-- <div id="model_push" class="modal_push_feed"> -->
         <!-- <div class="model_push_content"> -->
               <!-- <span class="close">&times;</span> -->
              <!-- <div class="model_header"> -->
                    <!-- <div class="pics"> -->
                        <!-- <img src="img/profile/tomhalan.jpg" alt=""> -->
                    <!-- </div> -->
                    <!-- <div class="comments"> -->
                        
                        <!-- <div class="comments_header"> -->
                            <!-- <img src="img/profile/tomhalan.jpg" alt=""> -->
                            <!-- <a href="">tomholland2013</a> -->
                            <!-- <button class="follow"> -->
                                <!-- Đang theo dõi -->
                            <!-- </button> -->
<!--  -->
                            <!-- <div class="comments_header-option"> -->
                                <!-- <span class="material-icons-outlined"> -->
                                    <!-- more_horiz -->
                                    <!-- </span> -->
                            <!-- </div> -->
                            <!--  -->
                        <!-- </div> -->
                        <!-- <hr> -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div>                           -->
    <!-- </div> --> 
</body>
</html>
    
