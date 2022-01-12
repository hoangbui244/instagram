<?php 
    require_once "../config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></script>
    <title>Document</title>
    <script>
        $(document).ready(function() {
     
     // Cấu hình các nhãn phân trang
     $('#example').dataTable( {
         "language": {
         "sProcessing":   "Đang xử lý...",
         "sLengthMenu":   "Xem _MENU_ mục",
         "sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
         "sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
         "sInfoEmpty":    "Đang xem 0 đến 0 trong tổng số 0 mục",
         "sInfoFiltered": "(được lọc từ _MAX_ mục)",
         "sInfoPostFix":  "",
         "sSearch":       "Tìm:",
         "sUrl":          "",
         "oPaginate": {
             "sFirst":    "Đầu",
             "sPrevious": "Trước",
             "sNext":     "Tiếp",
             "sLast":     "Cuối"
             }
         }
     } );
          
     } ); 
    </script>
</head>

<body>
    
    <header>
            <div class="header_left">
                <img class="img_logo" src="img/logo.png" alt="">
                <span class="material-icons-outlined">
                    menu
                </span>
                <span class="material-icons-outlined">
                    search
                </span>
            </div>
            <div class="header_right">
                <span class="material-icons-outlined">
                    notifications
                </span>
                <div class="dropdown_user">
                   
                    <span class="material-icons-outlined">
                        manage_accounts
                    </span>   
                </div>
            </div>
        
    </header>
    <main>
        <div class="main">
            <div class="main_left">
                <div class="main_profile">
                    <img src="img/avatar.jpg" alt="">
                    <h6>acc1</h6>
                </div>
                <div class="main_manager_menu">
                    <h6 style="color: #4680ff;">Admin Panel</h6>
                </div>
                <div class="tab">
                    <button class="tablinks" onclick="openManager(event, 'manager_user')" id="defaultOpen">
                        <span class="material-icons-outlined">
                            account_circle
                        </span>
                        <h6>Manager User</h6>
                    </button>
                    <button class="tablinks" onclick="openManager(event, 'manager_post')">
                        <span class="material-icons-outlined">
                            comment_bank
                            </span>
                        <h6>Manager Post</h6>
                        </button>
                        <a href="../logout.php">
                            <button class="tablinks">
                                <span class="material-icons-outlined">
                                    logout
                                    </span>
                                    <h6>Log out</h6>
                                </button>
                        </a>
                </div>  
            </div>
            <div class="main_right container">               
                <div class ="tab-content">
                    <div id="manager_user" class="tabcontent">                  
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                  <th>User ID</th>
                                  <th>Username</th>
                                  <th>Email</th>
                                  <th>Status</th>
                                  <th>Report Count</th>                                  
                                </tr>
                              </thead>                              
                              <tbody>  
                              <?php
                                $sql_get_user = "select * from user_account";
                                $query_user = mysqli_query($conn, $sql_get_user);
                                 while($pro = mysqli_fetch_assoc($query_user)):
                              ?>                           
                                <tr>
                                  <td><?php echo $pro["id"] ?></td>
                                  <td><?php echo $pro["username"] ?></td>
                                  <td><?php echo $pro["email"] ?></td>
                                  <td><?php echo $pro["status"] ?></td>
                                  <td><?php echo $pro["report_count"] ?></td>
                                 </tr>   
                                 <?php endwhile ?>                                                      
                              </tbody>                                         
                          </table>                         
                    </div>
                    <div id ="manager_post" class="tabcontent">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Report Count</th>
                                <th>Report Content</th>                       
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql_get_posts = "select * from posts";
                                $query_posts = mysqli_query($conn, $sql_get_posts);
                                 while($pro = mysqli_fetch_assoc($query_posts)):
                              ?>
                            <tr>
                                <td><?php echo $pro["id"] ?></td>
                                <td><?php echo $pro["user_id"] ?></td>
                                <td><?php echo $pro["report"] ?></td>                               
                                <td><?php echo $pro["report_content"] ?></td>
                            </tr>
                            <?php endwhile ?> 
                            </tbody>
                          </table>
                </div>
            </div>
        </div>
    </main>
    <footer>
        
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="js/admin.js" defer></script>
</body>

</html>