<?php 

require "bootstrap/init.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $action = $_GET["action"];

    # Decide with actions
    switch ($action){
        # Register user function
        case "register":
            $result = Register($_POST["username"] , $_POST["email"] , $_POST["password"]);
            if(!$result){
                dienotice("Error pls once time again.");
            }else{
                Message("Successfully registered. now login");
            }
            break;
        # Login user function
        case "login":
            $user_data = $_POST;
            
            $result = login($user_data);;
            if(!$result){
                dienotice("Email or password is incorrect");
            }else{
                $home_url = BASE_URL;
                Message("Now you're login.  </br><a href='{$home_url }'>manage you're task</a>");
            }
            break;
    }
}

require "template/authentication.php";