<?php
header("content-type:text/html;charset = utf8");
echo "声明前";
table("声明前第一个3行4列",3,4);
function table($tablename,$rows,$cols) {
    echo "<table align='center'border='1' width='600'>";
    echo "<caption><h1>$tablename</h1></caption>";

    for($out=0; $out<$rows;$out++){
        $bacolor = $out%2 == 0 ?"#ffffff" : "#dddddd";
        echo "<tr bgcolor = ".$bacolor.">";
        for($in=0;$in<$cols;$in++){
            echo"<td>".($out*$cols+$in)."</td>";
        }
        echo"</tr>";
    }
    echo"</table>";
}
echo "<hr>";
echo "声明后";
table("声明后第二个5行7列",5,7);