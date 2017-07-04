<?php
use app\assets\MAsset;

MAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <title>编程浪子微信图书商城</title>
    <?php $this->head(); ?>
</head>
<body>

<?php $this->beginBody(); ?>

<?= $content ?>

<?php $this->endBody(); ?>

<div class="copyright clearfix">
    <p class="name">欢迎您，郭威</p>
    <p class="copyright">由<a href="/" target="_blank">编程浪子</a>提供技术支持</p>
</div>

</body>
</html>
<?php $this->endPage(); ?>
