<?php get_header() ?>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Giỏ hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>Ảnh sản phẩm</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Số lượng</td>
                            <td colspan="2">Thành tiền</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['addToCart'])) {
                            $sum = 0;
                            $i = 0;
                            foreach ($_SESSION['addToCart'] as $product) {
                                $sum += $product['thanhtien'];
                               
                                ?>
                                <tr>
                                    <td>HCA00031</td>
                                    <td>
                                        <a href="" title="" class="thumb">
                                            <img src="public/images/<?php echo $product['product_image'] ?>" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" title="" class="name-product">
                                            <?php echo $product['product_name'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?php echo $product['product_discount'] ?>
                                    </td>
                                    <td>
                                        <input type="text" name="num-order" value="<?php echo $product['product_quantity'] ?>"
                                            class="num-order">
                                    </td>
                                    <td>
                                        <?php echo currency_format($product['thanhtien']) ?>
                                    </td>
                                    <td>
                                        <a href="?mod=cart&action=deleteCart&i=<?= $i ?>" title="" class="del-product"><i
                                                class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <?php
                                        $i += 1;
                            }
                        } ?>

                        <!-- <tr>
                            <td>HCA00032</td>
                            <td>
                                <a href="" title="" class="thumb">
                                    <img src="public/images/img-pro-23.png" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="" title="" class="name-product">Laptop Probook HP 4430s</a>
                            </td>
                            <td>350.000đ</td>
                            <td>
                                <input type="text" name="num-order" value="1" class="num-order">
                            </td>
                            <td>350.000đ</td>
                            <td>
                                <a href="" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr> -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <p id="total-price" class="fl-right">Tổng giá: <span>
                                            <?php if (isset($_SESSION['addToCart'])) {
                                                echo currency_format($sum);
                                            } else {
                                                echo "0";
                                            } ?>
                                        </span></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <div class="fl-right">
                                        <a href="" title="" id="update-cart">Cập nhật giỏ hàng</a>
                                        <a href="?mod=cart&action=checkout" title="" id="checkout-cart">Thanh toán</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng
                    <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.
                </p>
                <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br />
                <a href="" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>