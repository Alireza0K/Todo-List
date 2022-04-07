<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="icon" href="assets/image/home.svg">
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
                <div class="section-1">
                    <div class="signout_btn">
                        <button class="btn signout_btn">signout</button>
                    </div>
                    <div class="grid_boxes">
                        <!-- box1 content -->
                        <div class="box1">
                            <div class="box1-content">
                                <img class="avatar" src="assets/image/" alt="" width="90px" height="90px">
                                <p class="name">Example name</p>
                                <p class="email">Example@gmail.com</p>
                            </div>
                        </div>
                        <!-- box2 content -->
                        
                        <!-- box3 content -->
                        <div class="box3">
                            <div class="box3-content">
                                <div class="title-mods" id="create_mod">
                                    <h2>Mods</h2>
                                </div>

                                <!-- Mods creator  -->
                                <div class="send-data" id="form_for_data" style="display:none;">
                                    <input type="text" id="name_of_mod" placeholder="Mod name">
                                    <input type="text" id="description_of_mod" placeholder="Mod Description">
                                    <br>
                                    <button class="btn btn-send" id="create_new_mod">Send</button>
                                </div>

                                <!--  Defualt Box -->
                                <div class="mod defualt-box" style="background:#97DBAE;">
                                    <div class="mod-icon">
                                    <a href="<?php echo site_url();?>"><img src="assets/image/home.svg" alt="" width="50px" style="color: white;"></a>
                                    </div>
                                    <div class="texts" style="color: b;">
                                        <h3>All</h3>
                                        <p>All Task in there</p>
                                    </div>
                                </div>
                                <!-- Mods Boxes -->
                                <div class="mod-boxes" id="mod_boxes">
                                    <?php foreach($get_mods as $mod): ?>
                                    <div class="mod" >
                                    
                                        <div class="mod-icon">
                                            <a href="?mod_id_task=<?php echo $mod->ID;?>"><img src="assets/image/home.svg" alt="" width="50px" style="color: white;"></a>
                                        </div>
                                        <div class="texts" style="color: b;">
                                            <h3><?php echo $mod->Name?></h3>
                                            <p><?php echo $mod->Discription?></p>
                                        </div>
                                        <div class="texts" style="color: b;">
                                            <a href="?mod_id=<?php echo $mod->ID;?>"><button class="btn btn-delete  btn-texts"><span><img src="assets/image/trash-2.svg" alt="" width="25px"></span></button></a>
                                        </div>
                                        
                                    </div>
                                    <?php endforeach;?>
                                    
                                </div>
                            
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        
            <div class="section-1 part2">
                <div class="box2">
                                <div class="box2-content">
                                    <div class="head-box2">
                                        <h2 class="content-box2">All Tasks</h2>
                                        <button class="btn content-box2 btn-add" id="add_task">Add Task</button>
                                    </div>
                                    <!-- Box2 content about Tasks -->
                                    <!-- Task creator  -->
                                <div class="send-data" id="form_for_data_task" style="display:none;">
                                    <input type="text" id="name_of_Task" placeholder="Task name">
                                    <input type="text" id="description_of_Task" placeholder="Task Description">
                                    <br>
                                    <button class="btn btn-send" id="add_new_task">Send</button>
                                </div>
                                    <div class="tasks-box-storage">
                                        <!-- Tasks -->
                                        <?php foreach($get_tasks  as $task):?>
                                        <div class="task">
                                            <div class="left-content">
                                                <h3 class="title-task" ><?php echo $task->Name;?></h3>
                                                <div><hr class="hrwidth"></div>
                                                <br>
                                                <p class="discription"><?php echo $task->Description;?></p>
                                            </div>
                                            <div class="right-content">
                                                <a href="?task_id=<?php echo $task->ID;?>"><button class="btn btn-delete btn-in" onclick='return confirm("are you sure about that Delete task: <?php echo $task->Name;?>")' ><span><img src="assets/image/trash-2.svg" alt="" width="25px"></span></button></a>
                                                <?php echo $task->Status ? "<a data-task_id='$task->ID' data-task_status='$task->Status' class='task_toggle'><p class='complete'>Completed Task</p></a>" : "<a data-task_id='$task->ID'  data-task_status='$task->Status' class='task_toggle'><button class='btn btn-success btn-in'><span><img src='assets/image/check.svg' alt='' width='25px'></span></button></a>"?>
                                                
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div> 
                    </div>
            </div>
        </div>
        <!-- This section about content in body -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $("#create_mod").click(function(){
                $("#form_for_data").fadeIn(400)
                $("#create_mod").dblclick(function(){
                        $("#form_for_data").fadeOut(400)
                })
            });
            $("#add_task").click(function(){
                $("#form_for_data_task").fadeIn(400)
                $("#add_task").dblclick(function(){
                        $("#form_for_data_task").fadeOut(400)
                })
            });
            $(document).ready(function(){
                $("#create_new_mod").click(function(){
                    var mod_name = $("#name_of_mod").val();
                    var mod_description = $("#description_of_mod").val();
                    $.ajax({
                        url : "process/ajax_handler.php",
                        method : "post",
                        data : {
                            action : "add_mod",
                            mod_name : mod_name,
                            mod_description : mod_description
                        },
                        success :function(response){                            
                            response = JSON.parse(response);
                            $('<div class="mod" > <div class="mod-icon"> <img src="assets/image/home.svg" alt="" width="50px" style="color: white;"> </div> <div class="texts" style="color: b;"> <h3>'+response[0].Name+'</h3> <p>'+response[0].Discription+'</p> </div> <div class="texts" style="color: b;"> <a href="?mod_id='+response[0].ID+'"><button class="btn btn-delete  btn-texts"><span><img src="assets/image/trash-2.svg" alt="" width="25px"></span></button></a> </div> </div>').appendTo("#mod_boxes")
                        }
                    });
                });
                $("#add_new_task").click(function(){
                    var name_of_task = $("#name_of_Task").val();
                    var description_of_task = $("#description_of_Task").val();
                    // Get current URl
                    var current_url = window.location.href; 
                    var params = (new URL(current_url)).searchParams;
                    var mod_id = params.get("mod_id_task");
                    $.ajax({
                        url : "process/ajax_handler.php",
                        method : "post",
                        data : {
                            action : "add_task",
                            task_name : name_of_task,
                            task_description : description_of_task,
                            mod_id : mod_id
                        },
                        success :function(response){                            
                            console.log(response);
                            location.reload();
                        },
                        error :function(response){
                            console.log(response)
                        }
                    });
                });
                $(".task_toggle").click(function(){
                    var task_id = $(this).attr("data-task_id");
                    var task_status = $(this).attr("data-task_status");

                    $.ajax({
                        url : "process/ajax_handler.php",
                        method : "post",
                        data : {
                            action : "taggle_status",
                            task_id : task_id,
                            current_status : task_status
                        },
                        success :function(response){                            
                            console.log(response);
                            location.reload();
                        },
                        error :function(response){
                            console.log(response)
                        }
                    });
                });
            });
            
        </script>
    </body>
</html>