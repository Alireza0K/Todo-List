<?php

function dienotice($msg)
{
    echo "<div style='width: 70%; margin: 10px auto; padding: 25px; background: #fdcbcb; border: 1px red solid; border-radius: 5px; font-family: sans-serif;line-height: 25px;';>$msg</div>";
    die();
}

function isajax()
{
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
        return true;
    }
    return false;
}