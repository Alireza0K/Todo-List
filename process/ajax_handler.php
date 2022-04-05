<?php 
require "../bootstrap/init.php";

# Validation
if(!isajax()){
    dienotice("is invalid");
}
if(!isset($_POST["action"]) || empty($_POST["action"])){
    dienotice("is not set or empty");
}

# switch for check action for progress
switch($_POST["action"]){
    case "add_mod":
        Add_new_mod($_POST["mod_name"] , $_POST["mod_description"]);
        break;
}

