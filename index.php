<?php include 'header.php';?>
    <main class = "main">
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
        <?php
       $sql_post = "select username, avatar,photo, posts.id as 'post_id' from user_account inner join posts on posts.user_id = user_account.id WHERE user_id in( select followers_following.follower_id FROM user_account INNER JOIN followers_following on user_account.id = followers_following.user_id WHERE user_id = $user_id)";
       $query = mysqli_query($conn, $sql_post);
        while($pro = mysqli_fetch_assoc($query)):
        ?>
            <div class="content_item">
                <div class="content_item_avt">
                    <img src="<?php if($pro["avatar"]==null){ echo 'images/blank-user.jpg' ; }else{echo 'images/'.$pro["avatar"];} ?>" alt="">

                    <p>
                        <?php echo $pro["username"] ?>
                    </p>

                    <span class="material-icons-outlined">
                        more_horiz
                    </span>
                </div>
                <div class="content_post">
                    <img class="content_post_img" src="<?php echo 'images/' . $pro["photo"] ?>" alt="">
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
                <form method="post" id="comment_form">
                    <div class="content_item_input">
                        <input id = "item_input_comment" type="text" placeholder="Thêm bình luận">
                        <span class="material-icons-outlined">
                            sentiment_satisfied_alt
                        </span>
                        <input type="hidden" name="comment_id" id="comment_id" value="0" />
                        <input type="submit" name="submit" id="submit" class="text_push_comment"value="Đăng"></input>
                    </div>
                </form>
            </div>
            <?php endwhile ?>
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


    
    <?php include 'footer.php';?>