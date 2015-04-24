<html>
    <head><title>使用while</title></head>
    <body>
        <table align="center" border="1" width="600">
            <caption><h1>使用while输出表格</h1></caption>
            <?php
                $out = 0;
                while($out < 10){
                    $bgcolor = $out%2 == 0 ? "#ffffff" : "#cccccc";
                    echo "<tr bgcolor=".$bgcolor.">";
                    $in = 0;
                    while($in < 10){
                        echo "<td>".($out*10+$in)."</td>";
                        $in++;
                    }
                    echo "</tr>";
                    $out++;
                }
            echo "这<b>$out</b>";
            ?>
        </table>

    </body>
</html>