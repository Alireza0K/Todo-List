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
                <h1>Edit Task</h1>
            </div>
        </header>

        <section>
            <div class="EditBox">
                <form action={{route("update", $taskInfo->id)}} method="POST" class="EditBoxForm">
                    @csrf
                    <input type="text" class="input" name="name" id="" placeholder="Task name"f value="{{$taskInfo->name}}">
                    <textarea class="input textarea" name="description" placeholder="Task Desctiption" cols="30" rows="10">{{$taskInfo->description}}</textarea>
                    <button class="btn btn-edit">Update</button>
                </form>
            </div>
        </section>
    </div>
</body>
</html>