<?php include "header.php";
?>

    <?php
        $user_id_get = $_GET['id'];
    ?>
   
    <main>
    <div class="modal_nguoi_follow modal_follow" id="modal_nguoi_follow">    
            <div class="modal_nguoi_follow_content modal_follow_content">
                    <div class="header_nguoi_follow modal_follow_content_header">
                        <h5>Người theo dõi</h5>
                        <span id="btn_close_nguoitheodoi" class="material-icons-outlined">close</span>
                    </div>
                    <div class="list_nguoi_follow list_nguoi">
                    <?php
                $sql_count_duoc_follow = "select * from user_account WHERE user_account.id in(select user_id from followers_following where follower_id = $user_id_get);";
                $query = mysqli_query($conn, $sql_count_duoc_follow);
                while($pro = mysqli_fetch_assoc($query)):
                ?>
                        <div class="list_nguoi_follow_item list_nguoi_flex">
                            <img class="avt_follow" src="<?php if($pro["avatar"]==null){ echo 'images/blank-user.jpg' ; }else{echo 'images/'.$pro["avatar"];} ?>" alt="">
                            <div class="list_nguoi_follow_item_name modal_p">
                                <p><?php echo $pro["username"] ?></p>
                                <p><?php echo $pro["email"] ?></p>
                            </div>
                            <button>Xóa</button>
                        </div>
                        <?php endwhile ?>
                    </div>
            </div>     
        </div>
        <div class="modal_nguoi_dang_follow modal_follow" id="modal_nguoi_dang_follow">    
            <div class="modal_nguoi_dang_follow_content modal_follow_content">
                    <div class="header_nguoi_dang_follow modal_follow_content_header">
                        <h5>Đang theo dõi</h5>
                        <span id="btn_close_nguoidangtheodoi" class="material-icons-outlined">close</span>
                    </div>
                    <div class="list_nguoi_dang_follow list_nguoi">
                    <?php
                $sql_count_dang_follow = "select * from user_account WHERE user_account.id in(select followers_following.follower_id from followers_following where user_id = $user_id_get);";
                $query = mysqli_query($conn, $sql_count_dang_follow);
                while($pro = mysqli_fetch_assoc($query)):
                ?>
                    <div class="list_nguoi_dang_follow_item list_nguoi_flex">
                            <img class="avt_follow" src="<?php if($pro["avatar"]==null){ echo 'images/blank-user.jpg' ; }else{echo 'images/'.$pro["avatar"];} ?>" alt="">
                            <div class="list_nguoi_dang_follow_item_name modal_p">
                                <p><?php echo $pro["username"] ?></p>
                                <p><?php echo $pro["email"] ?></p>
                            </div>
                            <button>Đang theo dõi</button>
                    </div>
                    <?php endwhile ?>
                    </div>
                </div> 
            </div>     
        </div>
        <div class="modal_report_user" id="modal_report_user">    
            <div class="modal_report_user_content">
                <div class="item_rp_user">
                    <button>Chặn người dùng này</button>
                </div>
                <div class="item_rp_user">
                    <button>Hạn chế</button>
                </div>
                <div class="item_rp_user">
                    <form action="" method="post">
                    <button type ="submit" name="report_user" >Báo cáo người dùng</button>
                    </form>
                    <?php
                    if(isset($_POST['report_user'])) {
                    $sql_report_user = "UPDATE user_account set report_count = report_count + 1 WHERE id = $user_id_get";
                    mysqli_query($conn,$sql_report_user);   
                    }
                    ?>
                </div>
                <div id="btn_close_report"  class="item_rp_user">
                    <button style = "color:black; font-weight: 400;">Hủy</button> 
                </div>
            </div>   
        </div>
                
        <div class="content_top container">
        <?php
          $sql_user = "select * from user_account where id = $user_id_get";
          $query = mysqli_query($conn, $sql_user);
           $pro = mysqli_fetch_assoc($query)
           ?>
            <form action="profile.php?id=<?php echo $user_id_get ?>" method="post" enctype="multipart/form-data">
            <div class="avatar">
                <img  class="avt_profile" id="img_open_modal" src="<?php if($pro["avatar"]==null){ echo 'images/blank-user.jpg' ; }else{echo 'images/'.$pro["avatar"];} ?>" alt="">
                <input type="file" name="profileAvatar" onChange="displayAvatar(this)" id="profileAvatar"
                        class="form-control" style="display: none;">
            </div>
            <div class="modal_change_avatar" id="modal_change_avatar">    
            <div class="modal_change_avatar_content">
            <Button>Thay đổi ảnh đại diện</Button>
            <Button type="button" onClick="pickAvatar()">Tải ảnh lên</Button>
            <Button type ="submit" name="change_avatar">Xác nhận</Button>
            <Button  id="btn_huy">Hủy</Button>
            </div>     
            </div>
            </form>

            <div class="information ">
                <div class="info_top">

                    <h4><?php echo $pro["username"] ?></h4>
                    <div class="info_top_right">
                    <?php $sql_post = "select follower_id from followers_following WHERE user_id IN (select user_id from user_account WHERE user_id = 3);";
                    $query = mysqli_query($conn, $sql_post);
                    ?>
                        <?php include "check_follow.php"?>
                        <p></p>
                        
                    </div>
                </div>
                <div class="info_mid">
                <?php
                $sql_count_post = "select COUNT(*) as sl  from posts where user_id = $user_id_get;";
                $query = mysqli_query($conn, $sql_count_post);
                $pro = mysqli_fetch_assoc($query)
                ?>
                    <h6 style ="margin-bottom:0"><?php echo $pro["sl"] ?>   bài viết</h6>
                <?php
                $sql_count_duoc_follow = "select COUNT(*) as sl from followers_following where follower_id   = $user_id_get;";
                $query = mysqli_query($conn, $sql_count_duoc_follow);
                $pro = mysqli_fetch_assoc($query)
                ?>
                    <button class ="btn_follo" id="btn_nguoi_theo_doi"><?php echo $pro["sl"] ?> người theo dõi</button>
                    <?php
                $sql_count_dang_follow = "select COUNT(*) as sl from followers_following where user_id  = $user_id_get;";
                $query = mysqli_query($conn, $sql_count_dang_follow);
                $pro = mysqli_fetch_assoc($query)
                ?>
                    <button class ="btn_follo" id="btn_nguoi_dang_theo_doi">Đang theo dõi <?php echo $pro["sl"] ?> người dùng</button>
                </div>
                <div class="info_bot">
                    Nguyễn Tuấn Dũng
                </div>
                <?php include "change_avatar.php" ?>
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
                                <p> Bài viết</p>
                    </div>
                    <div class="tab-item">
                            <span class="material-icons-outlined">
                                bookmark_border
                                </span>
                                <p>
                                Đã lưu                       

                                </p>
                    </div>
                    <div class="tab-item">                        
                            <span class="material-icons-outlined">
                                assignment_ind
                                </span>
                                <p>
                                Được gắn thẻ                       

                                </p>
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
    <script src="js/profile.js"></script>
    <?php if ($user_id == $user_id_get) { ?>
    <script>
    var modal2 = document.getElementById("modal_change_avatar")
    var btn2 = document.getElementById("img_open_modal");
    var btn_huy = document.getElementById("btn_huy");
    btn2.onclick = function() {
    modal2.style.display = "flex";
    document.body.style['overflow-y'] = "hidden";
    document.body.style.overflowY = "hidden";
    }
    btn_huy.onclick = function() {
    modal2.style.display = "none";
    document.body.style['overflow-y'] = "scroll";
    document.body.style.overflowY = "scroll";
    }
    
    //open modal report user
    
    function pickAvatar(e) {
        document.querySelector('#profileAvatar').click();
    }

    function displayAvatar(e) {
    if (e.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e){
        document.querySelector('#img_open_modal').setAttribute('src', e.target.result);
        
      }
      reader.readAsDataURL(e.files[0]);
     }  
    }

    var modal_nguoi_follow = document.getElementById("modal_nguoi_follow");
    var btn_nguoi_theo_doi = document.getElementById("btn_nguoi_theo_doi");
    var btn_close_nguoitheodoi = document.getElementById("btn_close_nguoitheodoi");
    btn_nguoi_theo_doi.onclick = function() {
    modal_nguoi_follow.style.display = "flex";
    }
    btn_close_nguoitheodoi.onclick = function() {
    modal_nguoi_follow.style.display = "none";
    }

    var modal_nguoi_dang_follow = document.getElementById("modal_nguoi_dang_follow");
    var btn_nguoi_dang_theo_doi = document.getElementById("btn_nguoi_dang_theo_doi");
    var btn_close_nguoidangtheodoi = document.getElementById("btn_close_nguoidangtheodoi");
    btn_nguoi_dang_theo_doi.onclick = function() {
    modal_nguoi_dang_follow.style.display = "flex";
    }
    btn_close_nguoidangtheodoi.onclick = function() {
    modal_nguoi_dang_follow.style.display = "none";
    }
    </script>
    <?php }?>
    
    <?php include("footer.php") ?>