<?php
    function myfun($v){
        if($v === "mysql"){
            return "oracle";
        }
        return $v;
    }
    $lamp = array("linux","apache","mysql","php");
    print_r(array_map("myfun",$lamp));

    echo "<br>";

    function myfun2($v1,$v2){
        if($v1 === $v2){
            return "same";
        }
        return "deferent";
    }
    $a1 = array("linux","php","mysql");
    $a2 = array("unix","php","oracle");
    print_r(array_map("myfun2",$a1,$a2));

    echo "<br>";
    $a1 = array("linux","mysql");
    $a2 = array("php","oracle");
    print_r(array_map(null,$a1,$a2));
