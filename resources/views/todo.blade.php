<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
</head>

<body>
    <div class="main">
        <header>
            <div class="headerBox">
                <button class="btn btn-register">Sign in | Sign out</button>
            </div>
        </header>

        <div class="boxes">
            <div class="side">
                <div class="profileBox">
                    <section>
                        <div class="profileImageBox">
                            <img src="https://avatars.githubusercontent.com/u/93141231?v=4" alt="">
                        </div>
                        <div class="profileContentBox">
                            <div class="profileName">
                                <h3>Alireza Karimi</h3>
                            </div>
                            <div class="Bio">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modsBox">
                    <div class="modsBoxTitel">
                        <h3>Mods</h3>
                    </div>
                    <section>
                        <div class="modBox">
                            <div class="ModboxContent">
                                <h3>Mod Name</h3>
                                <p>Mod Description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <button class="btn">Delete</button>
                            </div>
                        </div>

                        <div class="modBox">
                            <div class="ModboxContent">
                                <h3>Mod Name</h3>
                                <p>Mod Description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <button class="btn">Delete</button>
                            </div>
                        </div>

                        <div class="addMod">
                            <div class="addModForm">
                                <form action="">
                                    <input type="text" placeholder="Mod Name">
                                    <button class="btn" type="submit">Add Mod</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="todoBox">
                <div class="TodoModsName">
                    <h3>Mod Name</h3>
                    <p>All Tasks</p>
                </div>
                <section>
                    <div class="TasksBoxes">
                        <div class="taskBox">
                            <div class="taskBoxContent">
                                <div class="leftSide">
                                    <div class="taskTitle">
                                        <h3>Task Title</h3>
                                    </div>
                                    <div class="taskDescription">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                    </div>
                                </div>
                                <div class="rightSide">
                                    <button class="btn btn-edit">Edit</button>
                                    <button class="btn btn-complete">Complete</button>
                                    <button class="btn btn-delete">Delete</button>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="addTask">
                        <form action="">
                            <input type="text" placeholder="Task Name" name="taskname">
                            <input type="text" placeholder="Description" name="description">
                            <button class="btn">Add Task</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>

        {{-- main --}}
    </div>
</body>

</html>
