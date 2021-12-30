<?php
    session_start();
    include'config.php';

    if(isset($_POST['submit']) && $_POST["username"] != ''  && $_POST["password"] != ''  )
    {   
        header("location:index.html");


        
?>   
