<?php 
require "bootstrap/init.php";

if(isset($_GET["mod_id"]) && is_numeric($_GET["mod_id"])){
    Delete_mod($_GET["mod_id"]);
}
if(isset($_GET["task_id"]) && is_numeric($_GET["task_id"])){
    Delete_Task($_GET["task_id"]);
}

# Get mods
$get_mods = Get_mods();
$get_tasks = Get_tasks();

# Template
require "template/main_page.php";