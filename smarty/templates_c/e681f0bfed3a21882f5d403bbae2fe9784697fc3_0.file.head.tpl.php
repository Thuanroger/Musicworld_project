<?php
/* Smarty version 3.1.30, created on 2022-11-10 18:14:12
  from "C:\xampp1\htdocs\project_nhac\smarty\templates\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_636d3164823788_39715832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e681f0bfed3a21882f5d403bbae2fe9784697fc3' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\project_nhac\\smarty\\templates\\head.tpl',
      1 => 1514976060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636d3164823788_39715832 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <base href="http://localhost/project_nhac/" />
        <title>Project Nhac - By Phuc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <link rel="icon" type="image/png" href="public/images/nhac.png" />
        <!-- Font -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Css -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link href="public/css/style.css" rel="stylesheet">
        <!-- Js -->
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery.min.js"><?php echo '</script'; ?>
>
        <!-- Ajax -->
        <?php echo '<script'; ?>
 src="public/js/ajax_tim_kiem/tim_album_ajax.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/ajax_tim_kiem/tim_baihat_ajax.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/ajax_tim_kiem/tim_casi_ajax.js"><?php echo '</script'; ?>
>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background: coral;">
            <div class="res-navbar row">
                <div class="row">
                    <div class="toggle-navbar col-4 hidden-lg-up">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    </div>
                    <!-- Brand -->
                    <div class="brand-navbar col-6 d-sm-none">
                        <a class="navbar-brand" href=".">Logo</a>
                    </div>
                </div>
                <div class="brand-navbar col-sm-1 col-lg-1 d-none d-sm-block">
                    <a class="navbar-brand" href=".">Logo</a>
                </div>
                <!-- Links -->

                <div class="collapse navbar-collapse col-sm-11 col-lg-11" id="nav-content">   
                    <ul class="navbar-nav row">
                        <div class="items-navbar d-none d-sm-block col-sm-6 col-lg-4">
                        <?php if (isset($_SESSION['ten'])) {?>
                            
                            <li class="d-inline">
                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Xin ch??o <?php echo $_SESSION['ten'];?>

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php if (isset($_SESSION['phanQuyen'])) {?>
                                    <?php if ($_SESSION['phanQuyen'] == '1') {?>
                                        <a class="dropdown-item" href="thanh_vien.php?id=<?php echo $_SESSION['dangBoi'];?>
">Trang c?? nh??n</a>
                                        <span class="w3-text-teal">B??i h??t</span>
                                        <a class="dropdown-item" href="them.php">Th??m b??i h??t</a>
                                        <a class="dropdown-item" href="them_album.php">Th??m album</a>
                                        <a class="dropdown-item" href="them_ca_si.php">Th??m ca s??</a>
                                        <span class="w3-text-teal">Album</span>
                                        <a class="dropdown-item" href="quan_ly_bai_hat.php">Qu???n l?? b??i h??t</a>
                                        <a class="dropdown-item" href="quan_ly_album.php">Qu???n l?? album</a>
                                        <?php } else { ?>
                                        <a class="dropdown-item" href="thanh_vien.php?id=<?php echo $_SESSION['dangBoi'];?>
">Trang c?? nh??n</a>
                                        <a class="dropdown-item" href="them.php">Th??m b??i h??t</a>
                                        <a class="dropdown-item" href="them_album.php">Th??m album</a>
                                    <?php }?>
                                <?php }?>
                                </div>
                            </li>
                            <li class="d-inline">
                                <a href="thoat.php" role="button" class="btn btn-danger ml-1 mr-2" >Tho??t</a> 
                            </li>
                        <?php } else { ?>
                            <li class="d-inline">
                                <a href="dang_nhap.php" role="button" class="btn btn-success ml-1 mr-2" >????ng nh???p</a> 
                            </li>
                            <li class="d-inline">
                                <a href="dang_ky.php" role="button" class="btn btn-primary ml-1 mr-2" >????ng k?? t??i kho???n m???i</a> 
                            </li>
                        <?php }?>
                        </div>
                        <div class="khung-tim-kiem col-12 col-sm-5 col-md-3 col-lg-3 col-xl-2">
                            <form class="form-inline" action="#" method="post" autocomplete="off">
                                <input name="search" id="search" class="form-control mr-sm-2" type="text" placeholder="Nh???p n???i dung c???n t??m ki???m">
                            </form>
                            <div class="hien-thi-tim-kiem">
                                <div id="result-album"></div>
                                <div id="result-tenBaihat"></div>
                                <div id="result-tenCaSi"></div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header><?php }
}
