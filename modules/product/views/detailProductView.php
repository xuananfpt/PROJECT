 <?php get_header() ?>
 <div id="main-content-wp" class="clearfix detail-product-page">
     <div class="wp-inner">
         <div class="secion" id="breadcrumb-wp">
             <div class="secion-detail">
                 <ul class="list-item clearfix">
                     <li>
                         <a href="?" title="">Trang chủ</a>
                     </li>
                     <li>
                         <a href="" title="">Điện thoại</a>
                     </li>
                 </ul>
             </div>
         </div>
         <div class="main-content fl-right">
             <div class="section" id="detail-product-wp">
                 <div class="section-detail clearfix">
                     <div class="thumb-wp fl-left">
                         <a href="" title="" id="main-thumb">
                             <div class="img-product">
                                 <img src="admin/public/images/<?= $get_product['product_image'] ?>" />
                             </div>

                         </a>
                         <div id="list-thumb">
                             <?php foreach ($get_image as $image) { ?>
                                 <img src="admin/public/images/<?= $image['image_name'] ?>" />
                             <?php } ?>
                         </div>

                     </div>
                     <div class="thumb-respon-wp fl-left">
                         <img src="public/images/img-pro-01.png" alt="">
                     </div>
                     <!-- <?php show_array($get_product) ?> -->
                     <div class="info fl-right">
                         <h3 class="product-name"><?= $get_product['product_name'] ?></h3>

                         <span>Mã SP: <?= $get_product['product_code'] ?></span><br>
                         <!-- <div class="description-product">
                            <div class="desc-title">
                                <span>Mô tả:</span>
                            </div>

                            <div class="desc">
                                <?= $get_product['product_desc'] ?>
                            </div>
                        </div> -->

                         <hr>

                         <span>Số lượng:</span>
                         <div id="num-order-wp">

                             <input type="number" min=0 max=<?= $get_product['product_quantity'] ?> value="1" id="num-order">

                         </div>
                         <span>Giá bán:</span>
                         <div class="price">
                             <p class="discount-price"><?= $get_product['product_discount'] ?></p>
                             <span><?= $get_product['product_price'] ?></span>
                         </div>
                         <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart">Thêm giỏ hàng</a>
                     </div>
                 </div>
             </div>
             <div class="section" id="post-product-wp">
                 <div class="section-head">
                     <h3 class="section-title">Mô tả sản phẩm</h3>
                 </div>
                 <div class="section-detail">
                     <p><?= $get_product['product_detail'] ?></p>
                 </div>
             </div>
             <div class="section" id="same-category-wp">
                 <div class="section-head">
                     <h3 class="section-title">Cùng chuyên mục</h3>
                 </div>
                 <div class="section-detail">
                     <ul class="list-item">
                         <li>
                             <a href="" title="" class="thumb">
                                 <img src="public/images/img-pro-17.png">
                             </a>
                             <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                             <div class="price">
                                 <span class="new">17.900.000đ</span>
                                 <span class="old">20.900.000đ</span>
                             </div>
                             <div class="action clearfix">
                                 <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                 <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                             </div>
                         </li>
                         <li>
                             <a href="" title="" class="thumb">
                                 <img src="public/images/img-pro-18.png">
                             </a>
                             <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                             <div class="price">
                                 <span class="new">17.900.000đ</span>
                                 <span class="old">20.900.000đ</span>
                             </div>
                             <div class="action clearfix">
                                 <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                 <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                             </div>
                         </li>
                         <li>
                             <a href="" title="" class="thumb">
                                 <img src="public/images/img-pro-19.png">
                             </a>
                             <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                             <div class="price">
                                 <span class="new">17.900.000đ</span>
                                 <span class="old">20.900.000đ</span>
                             </div>
                             <div class="action clearfix">
                                 <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                 <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                             </div>
                         </li>
                         <li>
                             <a href="" title="" class="thumb">
                                 <img src="public/images/img-pro-20.png">
                             </a>
                             <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                             <div class="price">
                                 <span class="new">17.900.000đ</span>
                                 <span class="old">20.900.000đ</span>
                             </div>
                             <div class="action clearfix">
                                 <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                 <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                             </div>
                         </li>
                         <li>
                             <a href="" title="" class="thumb">
                                 <img src="public/images/img-pro-21.png">
                             </a>
                             <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                             <div class="price">
                                 <span class="new">17.900.000đ</span>
                                 <span class="old">20.900.000đ</span>
                             </div>
                             <div class="action clearfix">
                                 <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                 <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                             </div>
                         </li>
                         <li>
                             <a href="" title="" class="thumb">
                                 <img src="public/images/img-pro-22.png">
                             </a>
                             <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                             <div class="price">
                                 <span class="new">17.900.000đ</span>
                                 <span class="old">20.900.000đ</span>
                             </div>
                             <div class="action clearfix">
                                 <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                 <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                             </div>
                         </li>
                         <li>
                             <a href="" title="" class="thumb">
                                 <img src="public/images/img-pro-23.png">
                             </a>
                             <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                             <div class="price">
                                 <span class="new">17.900.000đ</span>
                                 <span class="old">20.900.000đ</span>
                             </div>
                             <div class="action clearfix">
                                 <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                 <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                             </div>
                         </li>
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
                     <ul class="list-item">
                         <li>
                             <a href="?page=category_product" title="">Điện thoại</a>
                             <ul class="sub-menu">
                                 <li>
                                     <a href="?page=category_product" title="">Iphone</a>
                                 </li>
                                 <li>
                                     <a href="?page=category_product" title="">Samsung</a>
                                     <ul class="sub-menu">
                                         <li>
                                             <a href="?page=category_product" title="">Iphone X</a>
                                         </li>
                                         <li>
                                             <a href="?page=category_product" title="">Iphone 8</a>
                                         </li>
                                         <li>
                                             <a href="?page=category_product" title="">Iphone 8 Plus</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a href="?page=category_product" title="">Oppo</a>
                                 </li>
                                 <li>
                                     <a href="?page=category_product" title="">Bphone</a>
                                 </li>
                             </ul>
                         </li>
                         <li>
                             <a href="?page=category_product" title="">Máy tính bảng</a>
                         </li>
                         <li>
                             <a href="?page=category_product" title="">laptop</a>
                         </li>
                         <li>
                             <a href="?page=category_product" title="">Tai nghe</a>
                         </li>
                         <li>
                             <a href="?page=category_product" title="">Thời trang</a>
                         </li>
                         <li>
                             <a href="?page=category_product" title="">Đồ gia dụng</a>
                         </li>
                         <li>
                             <a href="?page=category_product" title="">Thiết bị văn phòng</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="section" id="banner-wp">
                 <div class="section-detail">
                     <a href="" title="" class="thumb">
                         <img src="public/images/banner.png" alt="">
                     </a>
                 </div>
             </div>
             <!-- </div> -->
         </div>
     </div>
     <?php get_footer() ?>