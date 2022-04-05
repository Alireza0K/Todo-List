<?php 
# Call All file
require "config.php";
require "constant.php";
require BASE_PATH . "./libs/helper.php";

# Create PDO connection
try {
    $connection = new PDO("mysql:host={$c_information->host};dbname={$c_information->dbname};", $c_information->username , $c_information->password);
} catch (PDOException $e) {
    dienotice($e);
    die();
}

# Call libs
require BASE_PATH . "./libs/auth.php";
require BASE_PATH . "./libs/lib-task-mod.php";