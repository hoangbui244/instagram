<?php
include("config.php");
if(isset($_POST['input'])){
    $input = $_POST['input'];
    $query = "SElect * from user_account where username like '%{$input}%'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){?>
<div class="title">
    <p>Gần đây</p>
    <p>Xóa tất cả</p>
</div>
<?php
  while($row = mysqli_fetch_assoc($result)){
    $user_id = $row['id'];
    $user_name = $row['username'];
    $avatar = $row['avatar'];
    $email = $row['email'];
    ?>
<a href="profile.php?id=<?php echo $row['id']; ?>">
<div class="searchresult_item">
    <img class="searchresult_avatar" src="<?php if($row["avatar"]==null){ echo 'images/blank-user.jpg' ; }else{echo 'images/'.$row["avatar"];} ?>" alt="">
    <div class="search_result_name">
        <p class="username">
            <?php echo $user_name ?>
        </p>
        <p class="useremail">
            <?php echo $email ?>
        </p>
    </div>
</div>
</a>


<?php
  }
  ?>
<?php
}
}
?>