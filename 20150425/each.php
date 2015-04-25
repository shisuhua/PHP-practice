<?php
    header("content-type:text/html;charset=utf8");
    $contact = array(
        "ID" => 1,
        "姓名"=> "高某",
        "公司"=>"A公司",
        "地址"=>"北京市",
       // "电话"=>"(010)98765432",
        //"EMAIL"=>"gao@borphp.com",
    );
    $id = each($contact);
    print_r($id);
    echo "<hr>";

    $name = each($contact);
    print_r($name);
    echo "<hr>";
    $company = each($contact);
    print_r($company);
    echo "<hr>";
    $address = each($contact);
    print_r($address);
    echo "<hr>";
    $no = each($contact);
    print_r($no);
    var_dump($no);

    echo "<hr>";
    //each()和list()联合使用
    $contact1 = array(
        "ID" => 1,
        "姓名"=> "高某",
        "公司"=>"A公司",
        "地址"=>"北京市",
    );
    list($key,$value) = each($contact1);
    echo "$key => $value";