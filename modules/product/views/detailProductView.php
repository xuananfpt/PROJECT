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
                 <form action="" method="post" enctype="multipart/form-data">
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
                         <div class="info fl-right">
                             <h3 class="product-name"><?= $get_product['product_name'] ?></h3>

                             <span><?= $get_product['product_code'] ?></span><br>
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


                                 <input type="number" name="quantity" min=1 max=<?= $get_product['product_quantity'] ?> value="1" id="num-order">


                             </div>
                             <span>Giá bán:</span>
                             <div class="price">
                                 <p class="discount-price">
                                     <?= currency_format($get_product['product_discount']); ?>
                                 </p>
                                 <input type="hidden" name="product_discount" value="<?= $get_product['product_discount'] ?>">
                                 <span>
                                     <?= currency_format($get_product['product_price']); ?>
                                 </span>
                             </div>
                             <input type="submit" class="btn btn-danger" name="btn-add-cart" value="Thêm giỏ hàng">
                         </div>
                 </form>
             </div>
         </div>

         <div class="section" id="post-product-wp">
             <div class="section-head">
                 <h3 class="section-title">Mô tả sản phẩm</h3>
             </div>
             <div class="section-detail">
                 <p>
                     <?= $get_product['product_detail'] ?>
                 </p>
                 <div class="section" id="post-product-wp">
                     <div class="section-head">
                         <h3 class="section-title">Bình luận</h3>
                     </div>

                     <div class="section-detail">
                         <form action="" method="post">
                             <div class="form-comment">
                                 <input type="text" name="binhluan" placeholder="Nhập bình luận tại đây...">
                             </div>
                             <div class="btn-comment">
                                 <input type="submit" name="btn-comment" value="Gửi bình luận">
                             </div>
                         </form>
                         <div class="comment">
                             <table class="table text-center">
                                 <thead>
                                     <tr>
                                         <td>Tên khách hàng</td>
                                         <td>Ảnh khách hàng</td>
                                         <td>Nội dung bình luận</td>
                                         <td>Ngày bình luận</td>
                                         <td>Thu hồi</td>

                                     </tr>
                                 </thead>
                                 <tbody class="text-center">
                                     <?php foreach ($load_comment as $comment) {
                                        ?>
                                         <tr class="text-center">
                                             <td class="text-center">
                                                 <?= $comment['username'] ?>
                                             </td>
                                             <td class="text-center">
                                                 <img style="height: 100px;" class="image-comment " src="public/images/<?php echo $comment['user_image'] ?>" alt="">
                                             </td>
                                             <td class="text-center">
                                                 <?= $comment['content_comment'] ?>
                                             </td>
                                             <td class="text-center">
                                                 <?= $comment['comment_time'] ?>
                                             </td>
                                             <td>
                                                 <div class="text-center">
                                                     <a href="?mod=product&action=trash&id_comment=<?php echo $comment['id_comment']; ?>&id_product=<?php echo $comment['product_id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                 </div>
                                             </td>

                                         </tr>
                                     <?php
                                        } ?>



                                 </tbody>

                             </table>
                         </div>
                         <div class="error">
                             <?php echo form_error("binhluan") ?>
                         </div>
                     </div>

                 </div>
                 <div class="section" id="same-category-wp">
                     <div class="section-head">
                         <h3 class="section-title">Sản phẩm cùng loại</h3>
                     </div>
                     <div class="section-detail">
                         <ul class="list-item">
                             <?php foreach ($same_product as $item) {
                                ?>
                                 <li>
                                     <a href="?mod=product&action=detailProduct&id=<?= $item['product_id'] ?>" title="" class="thumb">
                                         <img src="admin/public/images/<?= $item['product_image'] ?>">
                                     </a>
                                     <div class="percent-pay">
                                         <!-- <div class="percent">
                                                             <p>Giảm <?= $item['phantram'] ?>%</p>
                                                         </div> -->
                                         <div class="pay">
                                             <span>Trả góp 0%</span>
                                         </div>


                                     </div>
                                     <a href="?page=detail_product" title="" class="product-name">
                                         <?= $item['product_name'] ?>
                                     </a>
                                     <div class="price">
                                         <span class="new">
                                             <?= currency_format($item['product_discount']) ?>
                                         </span>
                                         <span class="old">
                                             <?= currency_format($item['product_price']) ?>
                                         </span>

                                     </div>
                                     <div class="action clearfix">
                                         <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                         <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                     </div>
                                 </li>
                             <?php } ?>

                         </ul>
                     </div>

                 </div>
             </div>
             <!-- Thêm comment vô đây -->

         </div>
     </div>
     <div class="sidebar fl-left">
         <div class="section" id="category-product-wp">
             <div class="section-head">
                 <h3 class="section-title">Danh mục sản phẩm</h3>
             </div>
             <div class="secion-detail">
                 <ul class="list-item">
                     <?php foreach ($get_cat as $item) { ?>
                         <li>
                             <a href="?mod=home&action=allProduct&id=<?= $item['cat_id'] ?>" title=""><?= $item['cat_name'] ?></a>

                         </li>
                     <?php } ?>
                 </ul>
             </div>
         </div>
     </div>
     <?php get_footer() ?>