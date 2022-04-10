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
    case "add_task":
        Add_new_task($_POST["task_name"] , $_POST["task_description"] , $_POST["mod_id"]);
        break;
    case "taggle_status":
        Taggle_status($_POST["task_id"] , $_POST["current_status"]);
        break;
    case "sign_out":
        Sign_out();
        break;
}

