<style>
    .bieudocot {
        margin-right: 20px;
    }
</style>
<div>
    <div class="col-md-6 text-center admin_chart_profit mt-5  ">
        <!-- <h1>Biểu đồ thống kê doanh thu</h1> -->
        <div style="display: flex;">
 <div id="piechart_3dd" style="width: 50%; height: auto;"></div>
        <div class="bieudocot" id="piechart_4dd" style="width: 50%; height: auto;"></div>
        </div>
       
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


    <div class="col-md-6 text-center admin_chart_profit mt-5  ">
        <!-- <h1>Biểu đồ thống kê doanh thu</h1> -->
        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                const data = google.visualization.arrayToDataTable([
                    ['Tên sản phẩm', 'SL'],
                    <?php

                    // print_r($list_bl);
                    foreach ($list_profit_chart as $chart) {
                        extract($chart);
                        $doangthu = ($chart['tongtien'] * 20) / 100;
                        echo "['$cat_name', $soluongdonhang],";
                    }
                    ?>
                ]);
                // Set Options
                const options = {
                    title: 'BIỂU ĐỒ THỐNG KÊ SỐ LƯỢNG CỦA TỪNG DANH MỤC',
                    is3D: true,
                    colors: ['#00ff00']
                };
                // Draw
                const chart = new google.visualization.ColumnChart(document.getElementById('piechart_4dd'));
                chart.draw(data, options);
            }
        </script>
    </div>
</div>