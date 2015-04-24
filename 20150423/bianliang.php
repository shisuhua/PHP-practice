<?php
    $hi = "hello";
    $$hi = "world";

    echo "$hi $hello";
    echo "$hi $($hi)";

    $foo = "Bob";
    $bar = &$foo;

    $bar = "My name is Tom";
    echo $bar;
    echo $foo;

    $foo = "your name is bob";
    echo $foo;
    echo $bar;

?>
