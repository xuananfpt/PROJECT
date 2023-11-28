<?php get_header() ?>
<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix text-center">
                    <h3 id="index" class="fl-left">Danh sách đơn hàng</h3>
                    <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Mã đơn hàng</span></td>
                                    <td><span class="thead-text">Người đặt</span></td>
                                    <td><span class="thead-text">Người nhận</span></td>
                                    <td><span class="thead-text">Email</span></td>
                                    <td><span class="thead-text">Địa chỉ</span></td>
                                    <td><span class="thead-text">Tổng tiền</span></td>
                                    <td><span class="thead-text">Chức năng</span></td>

                                </tr>
                            </thead>
                            <tbody>
                                <?php if (is_array($list_order)) {
                                    $count = 0;
                                    foreach ($list_order as $order) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                            <td><span class="tbody-text"><?php echo $count ?></h3></span>
                                            <td class="clearfix">
                                                <div class="">
                                                    <a href="" title=""><?php echo $order['code_orders'] ?></a>
                                                </div>

                                            </td>
                                            <td><span class="tbody-text"><?php echo $order['username'] ?></span></td>
                                            <td><span class="tbody-text"><?php echo $order['name_customer'] ?></span></td>
                                            <td><span class="tbody-text"><?php echo $order['email'] ?></span></td>
                                            <td><span class="tbody-text"><?php echo $order['address_customer'] ?></span></td>
                                            <td><span class="tbody-text">
                                                    <?php echo currency_format($order['tongtien']); ?>
                                                </span></td>
                                            <td><span class="tbody-text"><a href="?mod=cart&action=detailCart&id=<?php echo $order['id_order'] ?>">Chi tiết đơn hàng</a></span></td>
                                        </tr>
                                        <?php
                                    }
                                } ?>


                            </tbody>

                        </table>


                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <p id="desc" class="fl-left">Chọn vào checkbox để lựa chọn tất cả</p>
                    <ul id="list-paging" class="fl-right">
                        <li>
                            <a href="" title="">
                                << /a>
                        </li>
                        <li>
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                        <li>
                            <a href="" title="">></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>