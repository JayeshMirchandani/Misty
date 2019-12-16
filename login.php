<?php
    session_start();
    include("config.php");
    if(isset($_SESSION['username'])){
        $name=$_SESSION['username'];
        echo "<script>window.open('welcome.php?username=$name', '_self')</script>";
    }
    if(isset($_POST['login'])){
        // echo "afdsdfsdff";
        $name=htmlentities(mysqli_real_escape_string($con, $_POST['username']));
        $password=htmlentities(mysqli_real_escape_string($con, $_POST['password']));
        $hash_pass=password_hash($password, PASSWORD_DEFAULT);
        $select_user="select * from users where username='$name'";
        $query=mysqli_query($con, $select_user);
        $check_user=mysqli_num_rows($query);
        echo $check_user;
        if($check_user==1){
            $_SESSION['username']=$name;
            echo "<script>window.open('welcome.php?username=$name', '_self')</script>";
        }
        else{
            echo "<script>alert('Wrong username or password. Try again')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        }
    }
?>