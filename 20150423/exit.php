<?php
    Header("content-type:text/html;charset=utf8");
    $conn = mysql_connect("localhost","root","123456") or exit("连接数据库失败");
    mysql_select_db("db") or die("选择数据库失败");
    $result = mysql_query("select * from table");
    if(!$result){
        echo "SQL语句执行失败";
        exit;
    }