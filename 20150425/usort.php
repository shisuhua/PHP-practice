<?php
    $lamp = array("linux","apache","mysql","php");
    usort($lamp,"sortbylen");
    print_r($lamp);
    function sortbylen($one,$two){
        if(strlen($one) == strlen($two)){
            return 0;
        }else
            return(strlen($one)>strlen($two)?1:-1);
    }