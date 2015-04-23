<?php
    //date_default_timezone_get("Etc/GMT-8");
    $i = date("D");
    echo $i;
    switch($i){
        case "Mon":echo "today is $i";break;
        case "Tus":echo "today is $i";break;
        case "Wed":echo "today is $i";break;
        case "Thu":echo "today is $i";break;
        default:echo "today is another day";
    }