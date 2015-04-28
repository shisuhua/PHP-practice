<?php
    header("content-type:text/html;charset=utf8");
    class DB{
        private static $obj=null;

        private function __construct(){
            echo "连接数据库成功<br>";
        }
        static function getInstance(){
            if(is_null(self::$obj))
                self::$obj = new self();
            return self::$obj;
        }
        function query($sql){
            echo $sql;
        }
    }
    $db = DB::getInstance();
    $db->query("select * from user");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-28
 * Time: 上午10:50
 */ 