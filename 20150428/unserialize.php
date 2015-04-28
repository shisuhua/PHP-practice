<?php
    header("content-type:text/html;charset=utf8");
    require "person.class.php";
    $person_string = file_get_contents("file.txt");
    $person = unserialize($person_string);
    $person->say();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-28
 * Time: 下午12:07
 */ 