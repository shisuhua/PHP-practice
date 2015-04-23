<?php
    for($i = 1;$i <= 9;$i++){
        for($j = 1;$j <= $i;$j++){
            if($j == 5)
                break 1;
            elseif($i == 8)
                break 2;
                echo "$i x $j = ".$i*$j."&nbsp;&nbsp;";
        }
        echo "<br>";
    }
    for($i = 9;$i >= 1;$i--){
    for($j = 9;$j >= 10-$i;$j--){
        echo "$i x $j = ".$i*$j."&nbsp;&nbsp;";
    }
    echo "<br>";
}

    $sum = 0;
    for($i = 1;$i <= 100;$i++){
        if($i%10 == 3)
            continue;
        $sum += $i;
    }
    echo "the result:$sum";