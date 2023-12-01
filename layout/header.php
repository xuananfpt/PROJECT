<!DOCTYPE html>
<html>

<head>
    <title>ISMART STORE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/reset.css" rel="stylesheet" type="text/css" />
    <link href="public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="public/style.css" rel="stylesheet" type="text/css" />
    <link href="public/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="public/styleLogin.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
    <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/js/carousel/owl.carousel.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>
</head>

<body>
    <div id="site">
        <div id="container">
            <div id="header-wp" class="bg-danger">
                <div id="head-top" class="clearfix">
                    <div class="wp-inner">
                        <a href="" title="" id="payment-link" class="fl-left">Hình thức thanh toán</a>
                        <div id="main-menu-wp" class="fl-right">
                            <ul id="main-menu" class="clearfix">
                                <li>
                                    <a href="?" title="">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="?mod=product&action=index" title="">Sản phẩm</a>
                                </li>

                                <li>
                                    <a href="?page=detail_blog" title="">Giới thiệu</a>
                                </li>
                                <?php if (isset($_SESSION['login'])) { ?>

                                    <li style="display:flex" class="profile">

                                        <a><?= $_SESSION['login']['fullname'] ?></a>
                                        <img style="height: 35px; width: 35px;border-radius: 100%;margin: 3px 0 0 5px;" src="admin/public/images/<?= $_SESSION['login']['user_image'] ?>" alt="">
                                        <ul class="sub-menu">
                                            <?php
                                            if ($_SESSION['login']['role'] == 1) {
                                            ?>
                                                <li>
                                                    <a href="admin/?mod=home&action=index">Trang quản trị</a>
                                                </li>
                                                <li>
                                                    <a href="?mod=users&action=update">Chỉnh sửa thông tin</a>
                                                </li>
                                                <li>
                                                    <a href="?mod=users&action=logout">Đăng xuất</a>
                                                </li>
                                            <?php
                                            } else {
                                            ?>

                                                <li>
                                                    <a href="?mod=users&action=update">Chỉnh sửa thông tin</a>
                                                </li>
                                                <li>
                                                    <a href="?mod=users&action=logout">Đăng xuất</a>
                                                </li>
                                        </ul>
                                    </li>
                                <?php
                                            }
                                        } else { ?>
                                <li>
                                    <a href="?mod=users&action=login" title="">Đăng nhập</a>

                                </li>
                                <li>
                                    <a href="?mod=users&action=register" title="">Đăng ký</a>

                                </li>
                            <?php }
                            ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div id="head-body" class="clearfix">
                    <div class="wp-inner">
                        <a href="?page=home" title="" id="logo" class="fl-left" style="font-size: 35px;font-weight: bold;margin-top: 15px;">
                            <h1>DASTORE</h1>
                        </a>
                        <div id="search-wp" class="fl-left">
                            <form method="POST" action="">
                                <input type="text" name="keyw" id="s" placeholder="Nhập từ khóa tìm kiếm tại đây!">
                                <button type="submit" id="sm-s" name="bt-search">Tìm kiếm</button>
                            </form>
                        </div>
                        <div id="action-wp" class="fl-right">
                            <div id="advisory-wp" class="fl-left">
                                <span class="title">Tư vấn</span>
                                <span class="phone">0987.654.321</span>
                            </div>
                            <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            <a href="?page=cart" title="giỏ hàng" id="cart-respon-wp" class="fl-right">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span id="num">2</span>
                            </a>
                            <div id="cart-wp" class="fl-right">
                                <div id="btn-cart">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span id="totalProduct"><?php if(isset($_SESSION['addToCart'])) {
                                        echo count($_SESSION['addToCart']);
                                    } else {
                                        echo "0";
                                    } ?></span>
                                </div>
                                <div id="dropdown">
                                    <p class="desc">Có <span><?php if (isset($_SESSION['addToCart'])) {
                                        echo count($_SESSION['addToCart']);
                                    } else {
                                        echo "0";
                                    } ?> sản phẩm</span> trong giỏ hàng</p>
                                    <ul class="list-cart">
                                        <?php if(isset($_SESSION['addToCart'])) {
                                            $sum = 0;
                                            foreach($_SESSION['addToCart'] as $item) {
                                                $sum +=$item['thanhtien'];
                                                ?>
        <li class="clearfix">
            <a href="" title="" class="thumb fl-left">
                <img src="public/images/<?php echo $item['product_image'] ?>" alt="">
            </a>
            <div class="info fl-right">
                <a href="" title="" class="product-name"><?php echo $item['product_name'] ?></a>
                <p class="price"><?php echo currency_format($item['product_discount'])  ?></p>
                <p class="qty">Số lượng: <span><?php echo $item['product_quantity'] ?></span></p>
            </div>
        </li>
                                                        <?php
                                            }
                                        } ?>
                                       
                                        <!-- <li class="clearfix">
                                            <a href="" title="" class="thumb fl-left">
                                                <img src="public/images/img-pro-23.png" alt="">
                                            </a>
                                            <div class="info fl-right">
                                                <a href="" title="" class="product-name">Laptop Lenovo 10</a>
                                                <p class="price">16.250.000đ</p>
                                                <p class="qty">Số lượng: <span>1</span></p>
                                            </div>
                                        </li> -->
                                    </ul>
                                    <div class="total-price clearfix">
                                        <p class="title fl-left">Tổng:</p>
                                        <p class="price fl-right"><?php if(isset($_SESSION['addToCart'])) echo currency_format($sum) ?></p>
                                    </div>
                                    <dic class="action-cart clearfix">
                                        <a href="?mod=cart&action=index" title="Giỏ hàng" class="view-cart fl-left">Giỏ hàng</a>
                                        <a href="?mod=cart&action=checkout" title="Thanh toán" class="checkout fl-right">Thanh toán</a>
                                    </dic>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>