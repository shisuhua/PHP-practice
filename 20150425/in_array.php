<?php
    $os = array("10",11);
    if(in_array(10,$os)){
        echo "get 10";
    }
    if(in_array("10",$os)){
        echo "get \"10\"";
    }
    if(in_array(10,$os,true)){
        echo "get 10";
    }elseif(in_array("10",$os,true)){
        echo "get \"10\" ";
    }