<?php
$a_bool = TRUE;
$a_str = "foo";
$a_str2 = 'foo';
$an_int = 12;

echo gettype($a_bool);
echo gettype($a_str);

if(is_int($an_int)){
    $an_int += 4;
}

echo $an_int;

if(is_string($a_bool)){
    echo "String:$a_bool";
}

$foo = true;

if($a_bool == "show_version"){
    echo "The version is1.23";
    //echo "<hr>\n";
    }

$foo1 = 25;
$bar = &$foo;
unset($bar);
echo $foo1;

?>