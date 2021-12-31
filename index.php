<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>

    
</head>

<body>
    abc
    <?php 
    require_once "config.php";
    ?>
    <?php include_once('post_upload.php') ?>
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
        <div class="content_left">
            <div class="multiple-items">
                <!-- logo size 400x200 -->
                <span class="wrap-img">
                    <img src="img/main/1.jpg" alt="">
                    <p>hm.khoaa</p>
                </span>

                <span class="wrap-img">
                    <img src="img/main/2.jpg" alt="">
                    <p>funne.nq</p>
                </span>

                <span class="wrap-img">
                    <img src="img/main/4.jpg" alt="">
                    <p>hamin</p>
                </span>

                <span class="wrap-img">
                    <img src="img/main/5.jfif" alt="">
                    <p>trnq mai</p>
                </span>

                <span class="wrap-img">
                    <img src="img/main/2.jpg" alt="">
                    <p>elena</p>
                </span>

                <span class="wrap-img">
                    <img src="img/main/1.jpg" alt="">
                    <p>kung quan</p>
                </span>
            </div>
            <div class="content_item">
                <div class="content_item_avt">
                    <img src="img/main/1.jpg" alt="">

                    <p>yuki_chan411</p>

                    <span class="material-icons-outlined">
                        more_horiz
                    </span>
                </div>
                <div class="content_post">
                </div>
                <div class="content_item_react">
                    <span class="material-icons-outlined">
                        favorite_border
                    </span>
                    <span class="material-icons-outlined">
                        maps_ugc
                    </span>
                    <span class="material-icons-outlined">
                        send
                    </span>
                    <span class="material-icons-outlined">
                        bookmark_border
                    </span>
                </div>
                <div class="count_like">
                    <p>29 lượt thích</p>
                </div>
                <div class="content_item_comment">
                    <div class="content_item_comment_item">
                        <h6 class="name_account">yuki_chan411</h6>
                        <h6 class="comment_context">From fan camera</h6>
                    </div>
                    <div class="content_item_comment_item">
                        <h6 class="name_account">yuki_chan411</h6>
                        <h6 class="comment_context">From fan camera acbac alskjc</h6>
                    </div>
                </div>
                <div class="content_item_input">
                    <input type="text" placeholder="Thêm bình luận">
                    <span class="material-icons-outlined">
                        sentiment_satisfied_alt
                    </span>
                    <h5 class="text_push_comment">Đăng</h5>
                </div>
            </div>
            <div class="content_item">
                <div class="content_item_avt">
                    <img src="img/main/1.jpg" alt="">

                    <p>yuki_chan411</p>

                    <span class="material-icons-outlined">
                        more_horiz
                    </span>
                </div>
                <div class="content_post">
                </div>
                <div class="content_item_react">
                    <span class="material-icons-outlined">
                        favorite_border
                    </span>
                    <span class="material-icons-outlined">
                        maps_ugc
                    </span>
                    <span class="material-icons-outlined">
                        send
                    </span>
                    <span class="material-icons-outlined">
                        bookmark_border
                    </span>
                </div>
                <div class="count_like">
                    <p>29 lượt thích</p>
                </div>
                <div class="content_item_comment">
                    <div class="content_item_comment_item">
                        <h6 class="name_account">yuki_chan411</h6>
                        <h6 class="comment_context">From fan camera</h6>
                    </div>
                    <div class="content_item_comment_item">
                        <h6 class="name_account">yuki_chan411</h6>
                        <h6 class="comment_context">From fan camera acbac alskjc</h6>
                    </div>
                </div>
                <div class="content_item_input">
                    <input type="text" placeholder="Thêm bình luận">
                    <span class="material-icons-outlined">
                        sentiment_satisfied_alt
                    </span>
                    <h5 class="text_push_comment">Đăng</h5>
                </div>
            </div>

        </div>
        <div class="content_right">
            <div class="account_profile">
                <div class="account_profile_avatar">
                    <img src="img/main/2.jpg" alt="">
                </div>
                <div class="account_profile_name">
                    <h6>cachdanhan</h6>
                    <h6>Đa Nhân Cách</h6>
                </div>
                <h6>Chuyển</h6>
            </div>
            <div class="follow_profile">
                <div class="all">
                    <h6>Gợi ý cho bạn</h6>
                    <h6>Xem tất cả</h6>
                </div>
                <div class="not_follow">
                    <img src="img/main/1.jpg" alt="">
                    <div class="not_follow_info">
                        <h6>daothiphuong601</h6>
                        <h6>Có may_06th + 3 người nữa theo...</h6>
                    </div>
                    <h6>Theo dõi</h6>
                </div>
                <div class="not_follow">
                    <img src="img/header/avatar.jpg" alt="">
                    <div class="not_follow_info">
                        <h6>daothiphuong601</h6>
                        <h6>Có may_06th + 3 người nữa theo...</h6>
                    </div>
                    <h6>Theo dõi</h6>
                </div>
                <div class="not_follow">
                    <img src="img/main/2.jpg" alt="">
                    <div class="not_follow_info">
                        <h6>daothiphuong601</h6>
                        <h6>Có may_06th + 3 người nữa theo...</h6>
                    </div>
                    <h6>Theo dõi</h6>
                </div>
                <div class="not_follow">
                    <img src="img/main/4.jpg" alt="">
                    <div class="not_follow_info">
                        <h6>daothiphuong601</h6>
                        <h6>Có may_06th + 3 người nữa theo...</h6>
                    </div>
                    <h6>Theo dõi</h6>
                </div>
                <div class="not_follow">
                    <img src="img/main/foody-upload-api-foody-mobile-untitled-3-190213145559.jpg" alt="">
                    <div class="not_follow_info">
                        <h6>daothiphuong601</h6>
                        <h6>Có may_06th + 3 người nữa theo...</h6>
                    </div>
                    <h6>Theo dõi</h6>
                </div>
            </div>
            <div class="intro">
                <div class="intro1">
                    <h6>Giới thiệu · </h6>
                    <h6>Trợ giúp · </h6>
                    <h6>Báo chí · </h6>
                    <h6>API · </h6>
                    <h6>Việc làm</h6>
                </div>
                <div class="intro1">
                    <h6>Quyền riêng tư · </h6>
                    <h6>Điều khoản · </h6>
                    <h6>Vị trí</h6>
                </div>
                <div class="intro1">
                    <h6>Tài khoản liên quan nhất · </h6>

                    <h6>Hasgtag · </h6>
                    <h6>Ngôn ngữ </h6>
                </div>
                <div class="intro1">
                    <h6>© 2021 INSTAGRAM FROM META</h6>

                </div>

            </div>
        </div>

    </main>


    <!-- Trigger/Open The Modal -->


    <form action="index.php" method="post" enctype="multipart/form-data">
        <div id="model_push" class="modal_push_feed">
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
                        <img onClick="triggerClick()" id="profileDisplay" class="image_push_modal"  src="" alt="">
                        <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                    </div>
                    <div class="modal_push_text_area">
                        <div class="modal_avatar">
                            <img class="model_avatar_img" src="img/main/2.jpg" alt="">
                            <h3>cachdanhan</h3>
                        </div>
                        <div class="modal_text_area">
                            <textarea class="modal_text_area" aria-label="Viết chú thích..."
                                placeholder="Viết chú thích..." rows="5" cols="33" autocomplete="off"
                                autocorrect="off"></textarea>
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
    </form>



    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
   

</body>

</html>