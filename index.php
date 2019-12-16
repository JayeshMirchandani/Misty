<?php
    include("login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Misty | Your college bud</title>
    <link rel="stylesheet" href="style.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
  integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
  crossorigin="anonymous"></script>

    <script>
        var moveToLogin=function(){
                $(".coverstart").show('slide', {direction : 'down'}, 600, function(){
                    $(".coverend").show();
                        $('html,body').animate({ scrollTop: 1000 }, 600, function(){
                            $('.coverend').hide('slide', {direction:'up'}, 600);
                            $('.coverstart').hide();
                        });
                });
                
            }
        $(document).ready(function(){
            $(".get-started-button").click(moveToLogin);
        });    
    </script>
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
                            <h1>Misty</h1>
                            <h2>The college friend, you NEED</h2>
                            <button class="get-started-button">Lets get started</button>
                        </div>
                    </div>
                </section>
                <section class="login-page">
                    <div class="login-form">
                        <div class="robot">
                            <img src="./img/misty_front.png" alt="misty_front">
                        </div>
                        <div class="form">
                            <form method="post">
                                <div>
                                    <label for="inputUsername">Username:</label><br>
                                    <input type="text" name="username" id="username" placeholder="Enter username">
                                </div>
                                <div>
                                    <label for="inputPassword">Password:</label><br>
                                    <input type="password" name="password" id="password" placeholder="Enter password">
                                </div>
                                <div class="center">
                                        <button type="submit" name="login" value="login">Login</button>
                                        <div>
                                            <a href="#">Forgot your password?</a><br>
                                            <a href="#">Don't have an account yet? Register!</a>
                                        </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>        
                </section>
            </main>
        </header>
    </div>
    <div id="cover"><div class="coverstart"></div><div>
    <div class="coverend"></div></div> 
    
</body>
</html>