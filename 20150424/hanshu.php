<?php
    header("content-type:text/html;charset = utf8");
    echo "声明前";
    table();
    function table() {
        echo "<table align='center'border='1' width='600'>";
        echo "<caption><h1>通过函数输出表格</h1></caption>";

        for($out=0; $out<10;$out++){
            $bacolor = $out%2 == 0 ?"#ffffff" : "#dddddd";
            echo "<tr bgcolor = ".$bacolor.">";
            for($in=0;$in<10;$in++){
                echo"<td>".($out*10+$in)."</td>";
            }
            echo"</tr>";
        }
        echo"</table>";
    }
    echo "<hr>";
    echo "声明后";
    table();