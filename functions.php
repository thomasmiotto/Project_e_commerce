<?php

function redirect($url)
{
    header('location: ' . $url);
    exit;
}
function isConnected()
{
    return !empty($_SESSION);
}
