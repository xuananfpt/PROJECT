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
                        <div class="table-responsive col-md-8">
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
                                <td></td>
                                <!-- <td>
                                    <button class="btn btn-danger"><a class="text-white
                                " href="?mod=profit&action=chart">Xem biểu đồ</a></button>
                                </td> -->
                                <td></td>
                                <td></td>

                                <td><span class="tbody-text">
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
                        <div class="col-md-4 text-center admin_chart_profit  border-chart">
                            <!-- <h1>Biểu đồ thống kê doanh thu</h1> -->
                            <div id="piechart_3dd" style="width: 100%; height: auto;"></div>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                                google.charts.load('current', {
                                    'packages': ['corechart']
                                });
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {
                                    const data = google.visualization.arrayToDataTable([
                                        ['Tên sản phẩm', 'Số lượng bình luận'],
                                        <?php

                                        // print_r($list_bl);
                                        foreach ($list_profit as $chart) {
                                            extract($chart);
                                            $doangthu = ($chart['tongtien'] * 20) / 100;
                                            echo "['$cat_name', $doangthu],";
                                        }
                                        ?>
                                    ]);
                                    // Set Options
                                    const options = {
                                        title: 'BIỂU ĐỒ THỐNG KÊ DOANH THU CỦA TỪNG DANH MỤC',
                                        is3D: true,
                                        colors: ['#ff0000', '#00ff00', '#0000ff']
                                    };
                                    // Draw
                                    const chart = new google.visualization.PieChart(document.getElementById('piechart_3dd'));
                                    chart.draw(data, options);
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer() ?>