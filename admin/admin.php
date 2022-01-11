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
    <title>Document</title>
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
                <div class="search">
                    <div class="icon"></div>
                    <div class="input">
                        <input type="text" placeholder="Tìm kiếm" id="mysearch"> 
                    </div>
                    <span class="clear" onclick="document.getElementById('mysearch').value = '' "></span>
                </div>
                <div class ="tab-content">
                    <div id="manager_user" class="tabcontent">                  
                        <table id= "table-id" class="tablecontent ">
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
                                if(isset($_GET['page']))
                                {
                                    $page_user = $_GET['page'];
                                }
                                else
                                {
                                $page_user = 1;
                                }
                                $num_per_page_user = 5;
                                $start_from_user = ($page_user-1) * 5;                             
                                $sql_get_user = "select * from user_account limit $start_from_user, $num_per_page_user";
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
                          <?php
                          
                            $sql_get_user = "select * from user_account";
                            $query_user = mysqli_query($conn, $sql_get_user);
                            $total_record_user = mysqli_num_rows($query_user);
            
                            $total_page_user = ceil($total_record_user/$num_per_page_user);

                            if($page_user>1)
                            {
                                echo "<a href='admin.php?page=".($page_user-1)."' class='btn btn-danger'><</a>";
                            }
            
                            for($i=1;$i<$total_page_user;$i++)
                            {
                                echo "<a href='admin.php?page=".$i."' class='btn btn-primary'>$i</a>";
                            }
                            if($i>$page_user)
                            {
                                echo "<a href='admin.php?page=".($page_user+1)."' class='btn btn-danger'>></a>";
                            }
                        ?>
                    </div>
                    <div id ="manager_post" class="tabcontent">
                        <table id="table-id" class="tablecontent">
                            <thead>
                                <tr>
                                  <th >ID</th>
                                  <th >User ID</th>
                                  <th >Report Count</th>
                                  <th >Report Content</th>
                                </tr>
                              </thead>
                            <tbody>
                            <?php        
                                if(isset($_GET['page']))
                                {
                                    $page_posts = $_GET['page'];
                                }
                                else
                                {
                                $page_posts = 1;
                                }
                                $num_per_page_posts = 5;
                                $start_from_posts = ($page_posts-1) * 5;                                
                                $sql_get_posts = "select * from posts limit $start_from_posts, $num_per_page_posts";
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
                          <?php                           
                              $sql_get_posts = "select * from posts";
                              $query_posts = mysqli_query($conn, $sql_get_posts);
                              $total_record_posts = mysqli_num_rows($query_posts);
              
                              $total_page_posts = ceil($total_record_posts/$num_per_page_posts);
  
                              if($page_posts>1)
                              {
                                  echo "<a href='admin.php?page=".($page_posts-1)."' class='btn btn-danger'><</a>";
                              }
              
                              for($i=1;$i<$total_page_posts;$i++)
                              {
                                  echo "<a href='admin.php?page=".$i."' class='btn btn-primary'>$i</a>";
                              }
                              if($i>$page_posts)
                              {
                                  echo "<a href='admin.php?page=".($page_posts+1)."' class='btn btn-danger'>></a>";
                              }
                          ?>
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