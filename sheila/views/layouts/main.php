<?php
/**
 * Created by PhpStorm.
 * User: 40749
 * Date: 2018/3/11
 * Time: 23:30
 */
use sheila\assets\AppAsset;

AppAsset::register($this);
$this->beginPage();
//echo 'aaa';die;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>调用资源</title>
    <?php $this->head();?>
</head>
<body>
<?php $this->beginBody();?>
<?php echo $content;?>
<?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>
