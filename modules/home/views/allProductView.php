<?php get_header() ?>

<div id="main-content-wp" class="home-page clearfix">
    <div class="wp-inner">
        <div class="main-content fl-right">
            <?php
            foreach ($get_cat as $cat) { ?>
                <a href="?mod=home&action=allProduct&id=<?= $cat['cat_id'] ?>"><?= $cat['cat_name'] ?></a>
            <?php } ?>
            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title">TẤT CẢ SẢN PHẨM</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php
                        // show_array($get_product);
                        foreach ($get_product as $item) {
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
                                    <span class="new"><?= currency_format($item['product_discount'], 'đ')  ?></span>
                                    <span class="old"><?= currency_format($item['product_price'], 'đ') ?></span>

                                </div>
                                <div class="action clearfix">
                                    <a href="?mod=product&action=detailProduct&id=<?= $item['product_id'] ?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                    <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                </div>
                            </li>
                        <?php
                        } ?>
                    </ul>
                </div>
            </div>


        </div>
        <div class="sidebar fl-left">
            <div class="section" id="category-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Danh mục sản phẩm</h3>
                </div>
                <div class="secion-detail">
                    <a href="?mod=home&action=allProduct&price=asc"> Giá Thấp-Cao</a>
                </div>
                <div class="secion-detail">
                    <a href="?mod=home&action=allProduct&price=desc">Giá Cao-Thấp</a>
                </div>
                <div class="secion-detail">
                    <a href="?mod=home&action=allProduct&">Từ cao xuống thấp</a>
                </div>

            </div>




        </div>

        <!-- Danh mục sản phẩm -->

    </div>
</div>
<?php get_footer() ?>