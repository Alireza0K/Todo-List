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
                                <p>Hello Im Alireza Karimi Im a php Developer</p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modsBox">
                    <section></section>
                </div>
            </div>
            <div class="todoBox">
                <section></section>
            </div>
        </div>

        {{-- main --}}
    </div>
</body>

</html>
