<?php
    $arr = array("foo" => "bar",12 => true);
    print_r($arr);
    echo $arr["foo"];
    echo $arr["12"];

    class person{
        var $name;
        function say(){
        echo "doing foo.";
         }
    }

    $p = new person;
    $p->name = "tom";
    $p->say();

/*
    $file_handle = fopen("info.txt","w");
    var_dump($file_handle);
    $dir_handle = opendir("c:\\WINDOWS\\Ponts");
    var_dump($dir_handle);
*/

    $foo3 = "5bar" ;
    $bar2 = true;
    settype($foo3,"integer");
    settype($bar2,"string");







