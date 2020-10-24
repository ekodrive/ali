<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title><?=$pageTitle?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="<?=base_url('assets/css/reset.css');?>">
    <link type="text/css" rel="stylesheet" href="<?=base_url('assets/css/plugins.css');?>">
    <link type="text/css" rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
    <link type="text/css" rel="stylesheet" href="<?=base_url('assets/css/color.css');?>">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="<?=base_url('assets/images/favicon.ico');?>">
</head>
<body>
<!--Loader -->
<div class="loader2">
    <div class="loader loader_each"><span></span></div>
</div>
<!-- loader end  -->
<!-- main start  -->
<div id="main">
    <?= $this->include('includes\header') ?>
    <?= $this->include('includes\leftpanel') ?>
    <?= $this->include('includes\sharebuttons') ?>

<?=$this->renderSection('content');?>
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<?= $this->include('includes\scripts') ?>
</body>
</html>
