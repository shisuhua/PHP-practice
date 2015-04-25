<html>
    <head><title>添加联系人</title>
    </head>
    <body>

        <form action="" method="post">          <!--<form action="add.php" method="post">;-->
            编号：<input type="text" name="id"><br>
            姓名：<input type="text" name="name"><br>
            公司：<input type="text" name="company"><br>
            地址：<input type="text" name="address"><br>
            电话：<input type="text" name="phone"><br>
            EMAIL：<input type="text" name="email"><br>
            <input type="submit" value="添加新联系人">
        </form>
        <?php
        header("content-type:text/html;charset=utf8");
        echo "用户添加的联系人信息如下:<br>";
        foreach($_POST as $key => $value){
            echo "$key : $value <br>";
        }
        ?>
    </body>

</html>
