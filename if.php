<?php
        date_default_timezone_get("Etc/GMT-8");
        echo "当前时间".date("Y-m-d H:i:s",time())."<br> ";
        $hour = date("H");
        if($hour < 6){
            echo "凌晨好";
        }elseif($hour < 9){
            echo "早上好";
        }else{
            echo "很好";
        }
