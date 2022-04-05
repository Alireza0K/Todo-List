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
        $sql = "SELECT * FROM tasks";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $tasks = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $tasks;
}