<?php get_header() ?>
<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix text-center">
                    <h3 id="index" class="fl-left text-white bg-danger w-100 p-2 mt-5 border-radius">Thống kê đơn hàng
                        theo doanh thu</h3>
                </div>
            </div>
            <div class="section mt-5" id="detail-page">
                <div class="section-detail">
                    <div class="row">
                        <div class="table-responsive col-md-12">
                            <table class="table list-table-wp">
                                <thead>
                                    <tr>
                                        <td><span class="thead-text">Tên danh mục</span></td>
                                        <td><span class="thead-text">Số lượng đặt hàng thành công</span></td>
                                        <td><span class="thead-text">Doanh thu</span></td>
                                        <td><span class="thead-text">Lãi xuất 20% / SP</span></td>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (is_array($list_profit)) {
                                        $tongdoangthu = 0;
                                        foreach ($list_profit as $profit) {
                                            // show_array($profit);
                                            $doangthu = ($profit['tongtien'] * 20) / 100;
                                            $tongdoangthu += $doangthu;
                                            ?>
                                            <tr>
                                                <td><span class="tbody-text">
                                                        <?php echo $profit['cat_name'] ?>
                                                    </span></td>
                                                <td><span class="tbody-text">
                                                        <?php echo $profit['soluongdonhang'] ?>
                                                    </span></td>
                                                <td><span class="tbody-text">
                                                        <?php echo currency_format($profit['tongtien']) ?>
                                                    </span></td>
                                                <td><span class="tbody-text">
                                                        <?php echo currency_format($doangthu) ?>
                                                    </span></td>

                                            </tr>
                                            <?php
                                        }
                                    } ?>

                                </tbody>
                                <td>
                                    <div class="btn btn-danger"><a class="text-white" target="chart_profit" href="?mod=profit&action=chart">Xem
                                            biểu đồ</a></div>
                                </td>
                                <!-- <td>
                                    <button class="btn btn-danger"><a class="text-white
                                " href="?mod=profit&action=chart">Xem biểu đồ</a></button>
                                </td> -->
                                <td></td>
                                <td></td>
                                <td colspan=""><span class="tbody-text">
                                        <b class="text-black">TỔNG LÃI XUẤT LÀ:</b>
                                        <span class="text-danger ">

                                            <b>
                                                <?php echo currency_format($tongdoangthu) ?>
                                            </b>
                                        </span>
                                    </span></td>
                                <tfoot>
                                </tfoot>
                            </table>


                        </div>
                        <iframe src="" name="chart_profit" width="100%" height="216px" ></iframe>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer() ?>