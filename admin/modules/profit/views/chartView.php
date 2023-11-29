<?php get_header() ?>
<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix text-center">
                    <h3 id="index" class="fl-left text-white bg-danger w-100 p-2 mt-5 border-radius">Biểu đồ thống kê
                        doanh thu theo doanh mục</h3>
                </div>
            </div>
            <div class="section mt-5" id="detail-page">
                <div class="section-detail">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 text-center admin_chart_profit">
                                <!-- <h1>Biểu đồ thống kê doanh thu</h1> -->
                                <div id="piechart_3dd" style="width: 300px; height: auto;"></div>
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
                                            foreach ($list_profit_chart as $chart) {
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
</div>
<?php get_footer() ?>