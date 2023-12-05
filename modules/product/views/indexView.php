<?php get_header() ?>
<div id="main-content-wp" class="home-page clearfix">
    <div class="wp-inner">
        <div class="main-content fl-right">
            <div class="section" id="slider-wp">
            </div>


            <div class="section" id="list-product-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php
                        // show_array($list_product);
                        foreach ($list_product as $item) {
                        ?>

                            <li>

                                <a href="?mod=product&action=detailProduct&id=<?= $item['product_id'] ?>" title="" class="thumb">
                                    <img src="admin/public/images/<?= $item['product_image'] ?>">
                                </a>
                                <div class="percent-pay">
                                    <div class="percent">
                                        <p>Giảm <?= $item['phantram'] ?>%</p>
                                    </div>
                                    <div class="pay">
                                        <span>Trả góp 0%</span>
                                    </div>

                                </div>
                                <a href="?page=detail_product" title="" class="product-name"><?= $item['product_name'] ?></a>
                                <div class="price">
                                    <span class="new"><?= $item['product_discount'] ?></span>
                                    <span class="old"><?= $item['product_price'] ?></span>

                                </div>
                                <div class="action clearfix">
                                    <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                    <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                </div>
                            </li>
                        <?php
                        } ?>
                    </ul>
                </div>
            </div>

            <!-- <div class="section" id="banner-wp">
                <div class="section-detail">
                    <a href="" title="" class="thumb">
                        <img src="public/images/banner.png" alt="">
                    </a>
                </div>
            </div> -->
        </div>

    </div>

    <?php get_footer() ?>