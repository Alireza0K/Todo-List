# Todo List
## What is Todo list
To-do list is a list of daily tasks that you have to remind or list to do.

## Now what does the Todo list do for me?
1. In the Todo list I created, you can create different modes for different modes. And put the tasks related to that mod in it.
2. You can create an account and log in and add your tasks and mods.

3. These repositories are built with php, so if you are familiar with this beautiful language, you can develop it for yourself.

## Guide 
---
### In the beginning, you have to customize the config for yourself so that it can communicate with your host.

Go to the `config` file in the bootstrap folder and change the configuration for yourself with the markup I did for you.

Change This:
```php
 $c_information = (object)[
    # data base name
    "dbname" => "todolist",
    # host name
    "host" => "localhost",
    "username" => "root",
    "password" => ""
];
```

After making the above settings, it is time to do the next series of settings, you will then go to the constant.php file in the same folder and implement your settings.

Change This:

```php
# You can put your base url here
define("BASE_URL" , "http://code-pure-php/Todo-List/");

# You can put your base path here
define("BASE_PATH" , "C:/xampp/htdocs/Code-Pure-PHP/Todo-List");
```
---
### After all these settings, your todo list will start working, and you can use it.

If you are eager to develop this Todo list, I have marked everywhere this project , so your work will be very easy. I hope this repo has helped you. If you have any questions, you can email me or contact me via Instagram.

#### [Instagram](https://www.instagram.com/alirez_0k/) || Email: alireza.karimi.programmer@gmail.com

