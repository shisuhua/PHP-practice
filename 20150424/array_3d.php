<?php
    header("content-type:text/html;charset=utf8");
    $wage = array(
        "市场部" => array(
            array(1,"高某","市场部经理",5000),
            array(2,"王某","职员",3000),
            array(3,"张某","职员",3000),
        ),
        "产品部" => array(
            array(1,"李某","产品部经理",5000),
            array(2,"柳某","职员",3000),
            array(3,"施某","职员",3000),
        ),
        "财务部" => array(
            array(1,"谢某","财务部经理",5000),
            array(2,"务某","职员",3000),
            array(3,"正某","职员",3000),
        ),
    );
    print_r($wage["市场部"]);
    echo "<hr>";
    print_r($wage["财务部"][2]);
    echo "<hr>";
    print_r($wage["财务部"][1][3]);