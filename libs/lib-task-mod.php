<?php 

/***  Mods ***/

# Select mod
function Get_mods()
{
    global $connection;

    # Query for select all Mods from database
    $sql = "SELECT * FROM mods WHERE User_id = :userid";
    $stmt = $connection->prepare($sql);
    $stmt->execute(["userid" => current_user()]);
    $mods = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $mods;
}

# Delete mod
function Delete_mod($mod_id)
{
    global $connection;

    # Query for Delete a Mod from database
    $sql = "DELETE FROM mods WHERE ID = :mod_id ";
    $stmt = $connection->prepare($sql);
    $stmt->execute(["mod_id" => $mod_id]);
}

# Insert new mod
function Add_new_mod($mod_name , $mod_description)
{
    global $connection;

    # Query for insert a Mod in database
    $sql = "INSERT INTO mods (Name , Discription , User_id) VALUES ( :mod_name , :mod_des , :user_id )";
    $stmt = $connection->prepare($sql);
    $stmt->execute(["mod_name" => $mod_name , "mod_des" => $mod_description , "user_id" => current_user()]);
    $last_row = $connection->lastInsertId();
    
    # Select all data from this new Mod
    $sql_s = "SELECT * FROM mods WHERE ID = :mod_id";
    $statment = $connection->prepare($sql_s);
    $statment->execute(["mod_id"=>$last_row]);
    $get_all_data = $statment->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($get_all_data);
}

/***  Tasks ***/

# Select task
function Get_tasks()
{
    global $connection;

    # Query for select all Tasks from database
    $selected_mod = $_GET["mod_id_task"] ?? "";
    if(isset($selected_mod) && is_numeric($selected_mod)){
        $selected_mod = "and Mod_id = $selected_mod";
    }
    $sql = "SELECT * FROM tasks WHERE User_id = :user_idd  $selected_mod ";
    $stmt = $connection->prepare($sql);
    $stmt->execute(["user_idd" =>current_user()]);
    $tasks = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $tasks;
}
function Delete_Task($task_id)
{
    global $connection;

    # Query for Delete a task from database
    $sql = "DELETE FROM tasks WHERE ID = :task_id ";
    $stmt = $connection->prepare($sql);
    $stmt->execute(["task_id" => $task_id]);
}
function Add_new_task($task_name , $task_description , $mod_id)
{
    global $connection;

    # Query for insert a new task in database
    $sql = "INSERT INTO tasks (Name , Description , Mod_id , User_id) VALUES ( :task_name , :task_des , :mod_id  , :user_idd)";
    $stmt = $connection->prepare($sql);
    $stmt->execute(["task_name" => $task_name , "task_des" => $task_description , "mod_id" => $mod_id , "user_idd" => current_user()]);
}

function Taggle_status($task_id , $current_status)
{
    global $connection;

    # Query for Taggle status of a Task
    $sql = "UPDATE tasks SET Status = 1 - :current_status WHERE  User_id = :user_idd AND ID = :id ";
    $stmt = $connection->prepare($sql);
    $stmt->execute(["current_status" => $current_status , "user_idd" => current_user() , "id" => $task_id]);
}