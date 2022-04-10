<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo BASE_URL . "assets/css/auth.css"?>">
        <link rel="icon" href="<?php echo BASE_URL . "assets/image/user.svg"?>">
        <title>Todo List</title>
    </head>
    <body>
        <!-- This section about site Header  -->
        <div class="header">

        </div>
        <!-- This section about site Header  -->

        <!-- This section about content in body -->
        <div class="body">
            <div class="main">
                <div class="register">
                    <div class="content-form">
                        <div class="title">Register</div>
                        <form action="?action=register" method="post">
                            <input type="text" name="username" placeholder="Username" autocomplete="off">
                            <input type="email" name="email" placeholder="Email" autocomplete="off">
                            <input type="password" name="password" placeholder="Password" autocomplete="off">
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>               
                </div>

                <div class="login">
                    <div class="content-form">
                        <div class="title">Login</div>
                            <form action="?action=login" method="post">
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="password" placeholder="Password">
                                <button type="submit" class="btn">Login</button>
                            </form>
                        </div>         
                    </div>
            </div>
        </div>
        <!-- This section about content in body -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script></script>
    </body>
</html>