<?php 
# premission denied
defined("BASE_PATH") OR die("permission denied");


# Get curent user
function current_user()
{
    if(isset($_SESSION["user_data"])){
        return $_SESSION["user_data"]->ID;
    }
}

# This func check user is logged in 
function Logged_in()
{
    if(isset($_SESSION["user_data"])){
        return true;
    }
}

# Get username 
function Get_username()
{
    if(isset($_SESSION["user_data"])){
        return $_SESSION["user_data"]->Username;
    }
}

# Get user Email
function Get_user_email()
{
    if(isset($_SESSION["user_data"])){
        return $_SESSION["user_data"]->Email;
    }
}

# This func for register and add user 
function Register($user_name , $email , $password)
{
    global $connection;
    
    # Hash password
    $user_password = password_hash($password , PASSWORD_BCRYPT);

    # Query for add new user (User registration)
    $sql = "INSERT INTO users (Username , Email , Password) VALUES  ( :user_name , :email , :pass ) ";
    $stmt = $connection->prepare($sql);
    $stmt->execute(["user_name" => $user_name ,"email" => $email ,"pass" => $user_password]);
    return $stmt->rowCount() ? true : false ; 
}

# This func for get user data by Email
function Get_user_by_email($user_email)
{
    global $connection;

    # Query for select user by email
    $sql = "SELECT * FROM users WHERE Email = :user_email";
    $stmt = $connection->prepare($sql);
    $stmt->execute(["user_email" => $user_email]);
    $fetch_all_user_data = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $fetch_all_user_data[0] ?? null ;
}

# This func for login user
function login($user_data)
{
    $user = Get_user_by_email($user_data["email"]);
    # check user is not empty
    if(is_null($user)){
        return false;
    }

    # Check user password
    if(password_verify($user_data["password"] , $user->Password)){
        $_SESSION["user_data"] = $user;
        return true;
    }    
}

function Sign_out(){
    unset($_SESSION["user_data"]);
}