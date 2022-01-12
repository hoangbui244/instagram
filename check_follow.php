<?php if ($user_id == $user_id_get) { ?>
<button class="btn_edit_profile">Chỉnh sửa trang cá nhân</button>
<span class="material-icons-outlined">
                            settings
                            </span>
<?php } else {
    $sql = "select follower_id from followers_following WHERE user_id in(SELECT id from user_account WHERE id = $user_id);";
    $query = mysqli_query($conn, $sql);
    $dem = 0;
    while($pro = mysqli_fetch_assoc($query)){
        if($user_id_get==$pro['follower_id']){
            $dem++;
        }
    }
    if($dem==0){?>
        <form  method="post" id="follow">
        <button type="submit" name ="follow" class="btn_follow">Theo dõi</button>
        </form>
        <span id="btn_report_user" class="material-icons-outlined">more_horiz</span>
    <?php
    }
    else{?>
        <form method="post" id="follow">
        <button type="submit" name ="unfollow" class="btn_follow">Hủy theo dõi</button>
        </form>
        <span id="btn_report_user" class="material-icons-outlined">more_horiz</span>
        <?php
    }
    ?>
<?php } ?>

<?php  
 if(isset($_POST["follow"]))  
 {  
    $sql="INSERT INTO followers_following VALUES ($user_id, $user_id_get)";
    mysqli_query($conn,$sql);
    echo "<meta http-equiv='refresh' content='0'>";
 }  
 if(isset($_POST["unfollow"]))  
 {  
    $sql="Delete from followers_following where user_id = $user_id and follower_id=$user_id_get ";
    mysqli_query($conn,$sql);
    echo "<meta http-equiv='refresh' content='0'>";
 }  
 ?> 