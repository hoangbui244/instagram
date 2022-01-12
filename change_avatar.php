<?php
$msg = "";
$msg_class = "";
if (isset($_POST['change_avatar'])) {
    // for the database
    $profileImageName = time() . '-' . $_FILES["profileAvatar"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileAvatar']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileAvatar"]["tmp_name"], $target_file)) {
        $user_id = (int)$_SESSION["username_id"];
        $sql = "UPDATE  user_account SET avatar = '$profileImageName' where id = $user_id  ";
        echo "<meta http-equiv='refresh' content='0'>";
        if(mysqli_query($conn, $sql)){
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } 
    }
    
};
   
?>
