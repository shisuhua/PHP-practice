<?php
    header("content-type:text/html;charset=utf8");
    //使用array()结构声明一个无序的一维数组$contact
    $contact01 = array(1,14=>"高某","A公司","北京市",14=>"(010)987654321","gao@brophp.com");
    $num =  0;
    foreach($contact01 as $value){
        echo "在数组\$contact中第 $num 元素是： $value <br>";
        $num++;
    }

    echo "<hr>";
    $contact02 = array(
        "ID" => 1,
        "姓名"=> "高某",
        "公司"=>"A公司",
        "地址"=>"北京市",
        "电话"=>"(010)98765432",
        "EMAIL"=>"gao@borphp.com",
    );
    echo "<dl>一个联系人信息：";
    foreach($contact02 as $key => $value){
        echo "<dd> $key : $value</dd>";
    }
    echo "</dl>";
