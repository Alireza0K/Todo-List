<?php
# premission denied
defined("BASE_PATH") OR die("permission denied");

# This is die notice you can use that any where you need, give your message to $msg and
function dienotice($msg)
{
    # place you're custom style here
    echo "<div style='width: 70%; margin: 10px auto; padding: 25px; background: #fdcbcb; border: 1px red solid; border-radius: 5px; font-family: sans-serif;line-height: 25px;';>$msg</div>";
    die();
}

# This is die notice you can use that any where you need, give your message to $msg and
function Message($msg){
    # place you're custom style here
    echo "<div style='width: 70%; margin: 10px auto; padding: 25px; background: #9fe0ff; border: 1px #1d92ca solid; border-radius: 5px; font-family: sans-serif; line-height: 25px;';>$msg</div>";
}

# Check this request is xml
function isajax()
{
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
        return true;
    }
    return false;
}

function site_url($uri = "")
{
    return BASE_URL . $uri;
}