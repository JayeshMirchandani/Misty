<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        echo "<script>window.open('index.php', '_self')</script>";
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Misty | Your college buddy</title>
    <link rel="stylesheet" href="style.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"> </script>
</head>
<body>
    <div class="page">
        <header>
            <nav class="nav_bar">
                <a href="#"><h3 class="logo">Misty</h3></a>
                <img src="./img/hamburger.png" alt="burger">

            </nav>
            <main>
                <section class="landing-page container-fluid" >
                    <div class="row">
                        <div class="landing_robot col-12 col-md-6">
                            <img src="./img/misty_side.png" alt="misty_side">
                        </div>
                        <div class="cta col-12 col-md-6">
                        <h1 style="padding-left:53px;">Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>.</h1>
                           
                                <button class="get-started-button" style="margin-left:53px;" onClick=window.open('https://web.chatteron.io/?clientId=8T813_AXwTdQK94tIaMwk','_self')>Start bot!</button>
                           
                        </div>
                    </div>
                </section>
            </main>
        </header>
    </div>
    </body>
</html>