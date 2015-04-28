<html>
    <head>
        <title>图形计算（使用面向对象技术开发）</title>
        <meta http-equiv="Content-type" content="text/html;charset=utf8">
    </head>
    <body>
        <center>
            <h1>图形周长（面积）计算器</h1>
            <a href="index.php?action=rect">矩形</a>||
            <a href="index.php?action=triangle">三角形</a>||
            <a href="index.php?action=circle">原形</a><hr>
        </center>
        <?php
            error_reporting(E_ALL &~E_NOTICE);
            function __autoload($className){             //自动加载所需类文件
                include strtolower($className).".class.php";
            }
            echo new Form("index.php");   //输出用户需要的表单
            if(isset($_POST["sub"])){
                echo new Result();   //输出形状计算结果
            }

        ?>
    </body>

</html>