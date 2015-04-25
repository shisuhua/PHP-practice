<?php
    header("content-type:text/html;charset=utf8");
    $wage = array(
        "市场部" => array(
            array(1,"高某","市场部经理",5000),
            array(2,"王某","职员",3000),
            array(3,"张某","职员",3000),
        ),
        "产品部" => array(
            array(1,"李某","产品部经理",5000),
            array(2,"柳某","职员",3000),
            array(3,"施某","职员",3000),
        ),
        "财务部" => array(
            array(1,"谢某","财务部经理",5000),
            array(2,"务某","职员",3000),
            array(3,"正某","职员",3000),
            ),
    );
    foreach($wage  as $sector=> $table){
        echo '<table border="1" width="600" align="center">';
        echo '<caption><h2>'.$sector.'10月份工资</h2></caption>';
        echo '<tr bgcolor="#dddddd"><th>编号</th><th>姓名</th><th>职务</th><th>工资</th>';
        foreach($table as $row){
            echo '<tr>';
            foreach($row as $col){
                echo "<td> $col </td>";
            }
            echo '</tr>';
        }
        echo '</table><br>';
    }