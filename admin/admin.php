<?php 
    require_once "../config.php";
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
    $page = 1;
    }
    $num_per_page = 9;
    $start_from = ($page-1)*9;
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
                    <button class="tablinks" onclick="openManager(event, 'manager_user')">
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
                                  <th>Ban</th>
                                  <th>Delete</th>
                                </tr>
                              </thead>
                              
                              <tbody>
                              <?php                              
                                $sql_get_user = "select * from user_account limit $start_from, $num_per_page";
                                $query = mysqli_query($conn, $sql_get_user);
                                 while($pro = mysqli_fetch_assoc($query)):
                              ?>
                                <tr>
                                  <td><?php echo $pro["id"] ?></td>
                                  <td><?php echo $pro["username"] ?></td>
                                  <td><?php echo $pro["email"] ?></td>
                                  <td><?php echo $pro["status"] ?></td>
                                 </tr>   
                                 <?php endwhile ?>                                                      
                              </tbody>
                                
                            
                            
                          </table>
                    </div>
                    <div id ="manager_post" class="tabcontent" data-tab-content>
                        <table id="table-id" class="tablecontent">
                            <thead>
                                <tr>
                                  <th >User ID</th>
                                  <th >Username</th>
                                  <th >Email</th>
                                  <th >Posts</th>
                                  <th >Comments</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>dit me thang linh ngu</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>dit me thang linh ngu</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Larry the Bird</td>
                                  <td>Larry the Bird</td>
                                  <td>dit me thang linh ngu</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>dung nguyen</td>
                                  <td>dung@gmail.com</td>
                                  <td>dit me thang linh ngu</td>
                                </tr>                   
                              </tbody>
                          </table>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="js/admin.js" defer></script>
</body>

</html>