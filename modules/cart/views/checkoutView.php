<?php get_header(); ?>
<div id="main-content-wp" class="checkout-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Thanh toán</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <form action="" method="POST">
            <div class="section" id="customer-info-wp">
                <div class="section-head">
                    <h1 class="section-title">Thông tin khách hàng</h1>
                </div>
                <div class="section-detail">

                    <div class="form-row clearfix">
                        <div class="form-col fl-left">
                            <label for="fullname">Họ tên</label>
                            <input type="text" name="name_customer" id="fullname">
                            <div class="error">
                                <?php echo form_error('name_customer') ?>
                            </div>
                        </div>
                        <div class="form-col fl-right">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                            <div class="error">
                            <?php echo form_error('email') ?>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-row clearfix">
                        <div class="form-col fl-left">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address_customer" id="address">
                            <div class="error">
                                <?php echo form_error('address_customer') ?>
                            </div>
                        </div>
                        <div class="form-col fl-right">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" name="phone_customer" id="phone">
                            <div class="error">
                                <?php echo form_error('phone_customer') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="notes">Ghi chú</label>
                            <textarea name="note"></textarea>
                        </div>
                    </div>

                </div>
            </div>
            <div class="section" id="order-review-wp">
                <div class="section-head">
                    <h1 class="section-title">Thông tin đơn hàng</h1>
                </div>
                <div class="section-detail">
                    <table class="shop-table">
                        <thead>
                            <tr>
                                <td>Sản phẩm</td>
                                <td>Tổng</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($_SESSION['addToCart'])) {
                                $sum = 0;
                                foreach ($_SESSION['addToCart'] as $product) {
                                    $sum += $product['thanhtien'];
                                    ?>
                                    <tr class="cart-item">
                                        <td class="product-name">
                                            <?php echo $product['product_name'] ?><strong class="product-quantity">x
                                                <?php echo $product['product_quantity'] ?>
                                            </strong>
                                        </td>
                                        <td class="product-total">
                                            <?php echo currency_format($product['thanhtien']) ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } ?>


                        </tbody>
                        <tfoot>
                            <tr class="order-total">
                                <td>Tổng đơn hàng:</td>
                                <td><strong class="total-price">
                                        <?php if (isset($_SESSION['addToCart'])) {
                                            echo currency_format($sum);
                                        } else {
                                            echo "0";
                                        } ?>
                                    </strong></td>
                                <input type="hidden" name="sumdh" value="<?php if (isset($_SESSION['addToCart'])) {
                                    echo $sum;
                                } else {
                                    echo "0";
                                } ?>">
                            </tr>
                        </tfoot>
                    </table>
                    <div id="payment-checkout-wp">
                        <ul id="payment_methods">
                            <li>
                                <input type="radio" id="direct-payment" name="payment-method" value="direct-payment">
                                <label for="direct-payment">Thanh toán tại cửa hàng</label>
                            </li>
                            <li>
                                <input type="radio" id="payment-home" name="payment-method" value="payment-home">
                                <label for="payment-home">Thanh toán tại nhà</label>
                            </li>
                        </ul>
                    </div>
                    <div class="place-order-wp clearfix">
                        <input type="submit" name="order-now" value="Đặt hàng">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php get_footer(); ?>
<?php echo $error['script'] ?>