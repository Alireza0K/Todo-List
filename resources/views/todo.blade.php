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
                        @foreach($mods as $mod)
                        <div class="modBox">
                            <div class="ModboxContent">
                                <h3>{{$mod->name}}</h3>
                                <p></p>
                                <form action={{ route('deleteMod', ['modId' => $mod->id]) }} method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn">Delete</button>
                                </form>
                            </div>
                        </div>
                        @endforeach

                        <div class="addMod">
                            <div class="addModForm">
                                <form action={{ route("addMod") }} method="POST">
                                    @csrf
                                    <input type="text" placeholder="Mod Name" name="modeName" autocomplete="off">
                                    <input type="text" placeholder="" style="display: none" name="user_id" value="1">
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
                        @foreach ($tasks as $task)
                            <div class="taskBox">

                                <div class="taskBoxContent">
                                    <div class="leftSide">
                                        <div class="taskTitle">
                                            <h3>{{ $task->name }}</h3>
                                        </div>
                                        <div class="taskDescription">
                                            <p>{{ $task->description }}</p>
                                        </div>
                                    </div>
                                    <div class="rightSide">
                                        
                                        <form action={{ route('delete', ['taskId' => $task->id]) }} method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-delete">Delete</button>
                                        </form>
                                        <form action={{ route('complete', ['id' => $task->id]) }} method="POST">
                                            @csrf
                                            @method('PUT')
                                            @php($visiable = "")
                                            @php($complete = "Complete")
                                            @if ($task->status > 0)
                                                @php($visiable = 'background-color: #ff000000; color:#1A1C20')
                                                @php($complete = "Completed")
                                            @endif
                                            <button class="btn btn-complete" style="{{ $visiable }}">{{$complete}}</button>
                                        </form>
                                        <form action={{route('edit', ['taskId' => $task->id])}} method="get">
                                            @csrf
                                            @method('get')
                                            <button class="btn btn-edit">Edit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="addTask">
                        <form action="\TodoList" method="POST">
                            @csrf
                            <input type="text" placeholder="Task Name" name="taskname">
                            <input type="text" placeholder="Description" name="description">
                            <input type="text" placeholder="" style="display: none" name="user_id" value="1">
                            <button class="btn" type="submit">Add Task</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>

        {{-- main --}}
    </div>
</body>

</html>
