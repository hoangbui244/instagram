<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/report.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body >
    <?php
        require_once "config.php";
        $post_id = $_GET['id'];
       
    ?>
    
    <div class="container choose_report_form">
        <div class="choose_report">
            <h5>Báo cáo</h5>
            <div class="report_css">
                <h6 style="padding-left: 10px;">Tại sao bạn báo cáo bài viết này?</h6>
            </div>
            <form action="" method="post">
            <div class="report_css">
                <input name ="report_1"  value = "Ảnh khỏa thân hoặc hoạt động tình dục" type="submit"/>
                <span class="material-icons-outlined">chevron_right</span>
            </div>
            <form action="">
            <div class="report_css">
                <input name ="report_2"  value = "Biểu tượng hoặc ngôn từ gây thù ghét" type="submit"/>
                <span class="material-icons-outlined">chevron_right</span>
            </div>
            <form action="">
            <div class="report_css">
                <input name ="report_3"  value = "Bạo lực hoặc tổ chức gây nguy hiểm" type="submit"/>
                <span class="material-icons-outlined">chevron_right</span>
            </div>
            <form action="">
            <div class="report_css">
                <input name ="report_4"  value = "Bán hàng hóa phi pháp hoặc thuộc diện kiểm soát" type="submit"/>
                <span class="material-icons-outlined">chevron_right</span>
            </div>
            <form action="">
            <div class="report_css">
                <input name ="report_5"  value = "Bắt nạt hoặc quấy rối" type="submit"/>
                <span class="material-icons-outlined">chevron_right</span>
            </div>
            <form action="">
            <div class="report_css">
                <input name ="report_6"  value = "Vi phạm quyền sở hữu trí tuệ" type="submit"/>
                <span class="material-icons-outlined">chevron_right</span>
            </div>
            <form action="">
            <div class="report_css">
                <input name ="report_7"  value = "Tự tử hoặc tự gây thương tích" type="submit"/>
                <span class="material-icons-outlined">chevron_right</span>
            </div>
            <form action="">
            <div class="report_css">
                <input name ="report_8"  value = "Rối loạn ăn uống" type="submit"/>
                <span class="material-icons-outlined">chevron_right</span>
            </div>
            <form action="">
            <div class="report_css" style="border-bottom: none;">
                <input name ="report_9"  value = "Lừa đảo hoặc gian lận" type="submit"/>
                <span class="material-icons-outlined">chevron_right</span>
            </div>
            </form>
        </div>
    </div>
    
</body>
<?php
      
    if(isset($_POST['report_1'])) {
        $text = $_POST['report_1'];
        $sql_report = "UPDATE posts set report = 1, report_content = '$text'  where id = $post_id ";
        mysqli_query($conn,$sql_report);
        header("location:index.php");
           
    }
    if(isset($_POST['report_2'])) {
        $text = $_POST['report_2'];
        $sql_report = "UPDATE posts set report = 1, report_content = '$text' where id = $post_id ";
        
        mysqli_query($conn,$sql_report);
        header("location:index.php");
    }
    if(isset($_POST['report_3'])) {
        $text = $_POST['report_3'];
        $sql_report = "UPDATE posts set report = 1, report_content = '$text' where id = $post_id ";
        
        mysqli_query($conn,$sql_report);
        header("location:index.php");
    }
    if(isset($_POST['report_4'])) {
        $text = $_POST['report_4'];
        $sql_report = "UPDATE posts set report = 1, report_content = '$text' where id = $post_id ";
        
        mysqli_query($conn,$sql_report);
        header("location:index.php");
    }
    if(isset($_POST['report_5'])) {
        $text = $_POST['report_5'];
        $sql_report = "UPDATE posts set report = 1, report_content = '$text' where id = $post_id ";
        
        mysqli_query($conn,$sql_report);
        header("location:index.php");
    }
    if(isset($_POST['report_6'])) {
        $text = $_POST['report_6'];
        $sql_report = "UPDATE posts set report = 1, report_content = '$text' where id = $post_id ";
        
        mysqli_query($conn,$sql_report);
        header("location:index.php");
    }
    if(isset($_POST['report_7'])) {
        $text = $_POST['report_7'];
        $sql_report = "UPDATE posts set report = 1, report_content = '$text' where id = $post_id ";
        
        mysqli_query($conn,$sql_report);
        header("location:index.php");
    }
    if(isset($_POST['report_8'])) {
        $text = $_POST['report_8'];
        $sql_report = "UPDATE posts set report = 1, report_content = '$text' where id = $post_id ";
        
        mysqli_query($conn,$sql_report);
        header("location:index.php");
    }
    if(isset($_POST['report_9'])) {
        $text = $_POST['report_9'];
        $sql_report = "UPDATE posts set report = 1, report_content = '$text' where id = $post_id ";
        
        mysqli_query($conn,$sql_report);
        header("location:index.php");
    }
  ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>