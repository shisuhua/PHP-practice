<?php
    abstract class Shape{
        public $shapeName;
        abstract function area();
        abstract function perimeter();

        protected function validate($value,$message = '输入的值'){
            if($value == "" || !is_numeric($value)||$value < 0){
                echo '<font color="red">'. $message.' 必须为非负数，且不能为空</font><br>';
                return false;
            }else{
                return true;
            }
        }
    }
