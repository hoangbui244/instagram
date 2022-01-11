<?php include "header.php";
?>

    <?php
        $user_id_get = $_GET['id'];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Instagram</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/profile.css">
        <link rel="stylesheet" href="css/reponsive.css">
    
        
    </head>
    <main>
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
            <div class="avatar">
                <img  class="avt_profile" id="img_open_modal" src="<?php if($pro["avatar"]==null){ echo 'images/blank-user.jpg' ; }else{echo 'images/'.$pro["avatar"];} ?>" alt="">
                <input type="file" name="profileAvatar" onChange="displayAvatar(this)" id="profileAvatar"
                        class="form-control" style="display: none;">
            </div>
            <div class="information ">
                <div class="info_top">

                    <h4><?php echo $pro["username"] ?></h4>
                    <div class="info_top_right">
                    <?php $sql_post = "select follower_id from followers_following WHERE user_id IN (select user_id from user_account WHERE user_id = 3);";
                    $query = mysqli_query($conn, $sql_post);
                    ?>
                        <?php include "check_follow.php"?>
                        
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
                <?php include "change_avatar.php" ?>
            </div> 
        </div>
       
        <div class="modal_change_avatar" id="modal_change_avatar">    
            <div class="modal_change_avatar_content">
            <Button>Thay đổi ảnh đại diện</Button>
            <Button onClick="pickAvatar()">Tải ảnh lên</Button>
            <Button type ="submit" name="change_avatar">Gỡ ảnh hiện tại</Button>
            <Button  id="btn_huy">Hủy</Button>
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
    </script>
    <?php }?>
    <script src="js/profile.js"></script>
    <?php include("footer.php") ?>