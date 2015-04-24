<?php
    $bool = true;
    $str = "foo";
    $int = 12;

    var_dump($bool);   //直接输出变量$bool的类型和值bool(true)
    var_dump($str);
    var_dump($int);

    var_dump((bool) "");

    $large_number = 2147483647;
    var_dump($large_number);

    $large_number = 2147483648;
    var_dump($large_number);

    $million = 1000000;
    $large_number = 50000 * $million;
    var_dump($large_number);

    echo 'this is a simple string';
    echo 'this is a \'simple\' string';

    $str = 100;
    echo "this is a simple $str string";
    echo 'this is a simple $str string';

    $beer = "heineksn";
    echo "1 he drank some $beers"; //无法解析
    echo "2 $beer's taste is great \n";
    echo "3 he drank some ($beer)s";

    $biaoshi=<<<E
        aljgjwgpoejwglkwjelgkjwelkg\n
        jowejgoewjgojwojgowejg\n\r
        gewgjowjgojweogj
E;
    echo $biaoshi;

    $name = "Myname";
    echo <<<EOT
    My name is &name. i am pringtinga "string" \n.
    \tNow, i am printing some new line \n\r.
    \tthis should  print a capital 'a'.
EOT;

?>


