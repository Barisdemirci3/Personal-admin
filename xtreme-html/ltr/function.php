<?php
function post($post)
{
    return trim($_POST[$post]);
}
function birim($data)
{
    switch ($data) {
        case '0':
            return "Muhasebe";
            break;

        case '1':
            return "Teknisyen";
            break;

        case '2':
            return "Supervisor";
            break;
    }
}
function medeni($data)
{
    switch ($data) {
        case '0':
            return "Evli";
            break;

        case '1':
            return "Bekar";
            break;

        case '2':
            return "Boşanmış";
            break;
    }
}
