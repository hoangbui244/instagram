<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/profile.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>
    <?php
        if(isset($_SESSION["username_id"])){
            session_start();
            require_once "config.php";
            $user_id = (int)$_SESSION["username_id"];
            include_once('post_upload.php') ;
        }
        else{
            header("location:login.php");
        }
        
    ?>
    <header>
    
        <div class="container">
            <div class="navbar">
                <a href="index.php">
                <img src="img/header/logo.png" alt="">
                </a>
                
                <div class="wrap-input">
                    <input id="live_search" type="text" placeholder="Tìm kiếm">
                    <img class="icon-search" src="img/header/search.png" alt="">
                    <div id = "searchresult">
                        
                        
                    </div>
                </div>
                
                <div class="nav_item">
                    <span style="font-size: 30px; margin-right: 15px;" class="material-icons-outlined">
                        home
                    </span>
                    <span style="font-size: 30px; margin-right: 15px;" class="material-icons-outlined">
                        send
                    </span>
                    <span id="myBtn" style="font-size: 30px; margin-right: 15px;" class="material-icons-outlined">
                        add_box
                    </span>
                    <span style="font-size: 30px; margin-right: 15px;" class="material-icons-outlined">
                        explore
                    </span>
                    <span style="font-size: 30px; margin-right: 15px;" class="material-icons-outlined">
                        favorite_border
                    </span>

                    <div class="profile">
                        <img class="avt_profile" onclick="menuProfile()" src="<?php if($_SESSION["avatar"]==null){echo 'images/blank-user.jpg';}else{echo 'images/'.$_SESSION["avatar"];}?>" alt="">
                        <!-- last two menu-proflie -->
                        <div class="menu-profile" id="menu-profile">
                            <div class="item-menu">
                                <span class="material-icons-outlined">
                                    account_circle
                                </span>
                                <a href="profile.php?id=<?php echo $user_id ?>">
                                <p>Trang cá nhân</p>
                                </a>
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
                                <a href="logout.php"><p>Đăng xuất</p></a>
                                
                            </div>
                            <!-- last three -->


                        </div>
                        <!-- end last two menu-proflie -->
                    </div>
                </div>
            </div>
        </div>
        <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="mymodal" id = "mymodal">
        <div id="model_push" class="modal_push_feed">
        <span class="close">&times;</span>
            <div class="modal_header">
                <span class="material-icons-outlined ">
                    arrow_back
                </span>
                <h5>Tạo bài viết mới</h5>
                <Button type="submit" name="post_feed" id="btn_share">Chia sẻ</h3>
            </div>
            <div class="modal_push_image_avatar">
                <div class="modal_push_image">
                    <div class="modal_pick_image" onClick="triggerClick()">
                        <img src="img/modal/add.png" alt="">
                        <p>Kéo ảnh và video vào đây</p>
                        <button>Chọn ảnh từ máy tính</button>
                    </div>
                    <img onClick="triggerClick()" id="profileDisplay" class="image_push_modal" src="" alt="">
                    <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage"
                        class="form-control" style="display: none;">
                </div>
                <div class="modal_push_text_area">
                    <div class="modal_avatar">
                        <img class="model_avatar_img" src="img/main/2.jpg" alt="">
                        <h3>cachdanhan</h3>
                    </div>
                    <div class="modal_text_area">
                        <textarea class="modal_text_area" aria-label="Viết chú thích..." placeholder="Viết chú thích..."
                            rows="5" cols="33" autocomplete="off" autocorrect="off"></textarea>
                        <span class="material-icons-outlined">
                            insert_emoticon
                        </span>
                        <div class="text_area_hight">
                            <div class="text_area_hight_item">
                                <h4>Thêm vị trí</h4>
                                <span class="material-icons-outlined">
                                    location_on
                                </span>
                            </div>
                            <div class="text_area_hight_item">
                                <h4>Trợ năng</h4>
                                <span class="material-icons-outlined">
                                    keyboard_arrow_down
                                </span>
                            </div>
                            <div class="text_area_hight_item">
                                <h4>Cài đặt nâng cao</h4>
                                <span class="material-icons-outlined">
                                    keyboard_arrow_down
                                </span>
                            </div>
                            <input name="test" type="text">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </form>
    </header>