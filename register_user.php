<?php
include("config.php");

    if(isset($_POST['sign_up'])){
        $name=htmlentities(mysqli_real_escape_string($con, $_POST['username']));
        $password=htmlentities(mysqli_real_escape_string($con, $_POST['password']));
        if($name==''){
            echo "<script>alert('Enter a valid username')</script>";
        }
        if(strlen($password)<8){
            echo "<script>alert('Password should be of at least 8 characters')</script>";
            exit();
        }
        $check_name="select * from users where username='$name'";
        $run_name=mysqli_query($con, $check_name);

        $check=mysqli_num_rows($run_name);

        if($check==1){
            echo "<script>alert('Username already exists. Try again')</script>";
            echo "<script>window.open('registration.php', '_self')</script>";
            exit();
        }
        $hash_pass=password_hash($password, PASSWORD_DEFAULT);
        $insert="insert into users(username, password) values('$name', '$hash_pass')";
        $query=mysqli_query($con, $insert);
        if($query){
            echo "<script>alert('Account Created. Login')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        }
        else{
            echo "<script>alert('Registration Failed. Try again')</script>";
            echo "<script>window.open('registration.php', '_self')</script>";
        }
    }
?>