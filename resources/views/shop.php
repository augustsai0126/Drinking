<?php
/**
 * Created by PhpStorm.
 * User: x4017
 * Date: 2016/11/29
 * Time: 下午 10:23
 */
?>
<htm>
    <head>
        <!-- 最新編譯和最佳化的 CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <!-- 選擇性佈景主題 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

        <title>店名</title>
    </head>
    <body>
    <div class="row"></div>
    <h1>
        今天喝這家
    </h1>
    <div class="alert alert-info glyphicon glyphicon-glass" role="alert"><?php echo $shop; ?></div>
    <a href="<?php echo $url; ?>">幫我GOOGLE</a>

    </body>
</htm>
