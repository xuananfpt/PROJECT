<?php
get_header();
?>
<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right admin_role_border">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h1 id="index" class="text-center">Quản lý trang chủ</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 p-4">
                            <div class="card mb-3 p-3 admin_role">
                                <a href="?mod=users&action=listUser" class="text-dark">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="public/images/user.jpg" class="card-img mt-3" alt="">
                                        </div>
                                        <div class="col-md-8 mt-3">
                                            <div class="card-body">
                                                <h5 class="card-title">Tài Khoản
                                                </h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-3 p-4">
                            <div class="card mb-3 p-3 admin_role">
                                <a href="?mod=category&action=index" class="text-dark">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="public/images/category.jpg" class="card-img" style="width: 85%;"
                                                alt="">
                                        </div>
                                        <div class="col-md-8 mt-3">
                                            <div class="card-body">
                                                <h5 class="card-title">Danh Mục
                                                </h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-3 p-4">
                            <div class="card mb-3 p-3 admin_role">
                                <a href="?mod=product&action=index" class="text-dark">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="public/images/product.jpg" class="card-img mt-3" alt="">
                                        </div>
                                        <div class="col-md-8 mt-3">
                                            <div class="card-body">
                                                <h5 class="card-title">Sản Phẩm
                                                </h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-3 p-4">
                            <div class="card mb-3 p-3 admin_role">
                                <a href="?mod=post&action=listPost" class="text-dark">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="public/images/post.jpg" class="card-img mt-3" alt="">
                                        </div>
                                        <div class="col-md-8 mt-3">
                                            <div class="card-body">
                                                <h5 class="card-title">Bài Viết
                                                </h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-3 p-4">
                            <div class="card mb-3 p-3 admin_role">
                                <a href="?page=list_comment" class="text-dark">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="public/images/comment.jpg" class="card-img mt-3" alt="">
                                        </div>
                                        <div class="col-md-8 mt-3">
                                            <div class="card-body">
                                                <h5 class="card-title">Bình Luận
                                                </h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-3 p-4">
                            <div class="card mb-3 p-3 admin_role">
                                <a href="?mod=cart&action=index" class="text-dark">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="public/images/cart_pr.jpg" class="card-img mt-3" alt="">
                                        </div>
                                        <div class="col-md-8 mt-3">
                                            <div class="card-body">
                                                <h5 class="card-title"> Đơn Hàng
                                                </h5>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-3 p-4">
                            <div class="card mb-3 p-3 admin_role">
                                <a href="?page=bieudo" class="text-dark">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="public/images/money.jpg" class="card-img mt-4" alt="">
                                        </div>
                                        <div class="col-md-8 mt-3">
                                            <div class="card-body">
                                                <h5 class="card-title"> Lợi Nhuận </h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 admin_chart">
                    <div id="piechart_3dd" style="width: 700px; height: 500px;"></div>
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
                                foreach ($chart_cicrle as $chart) {
                                    extract($chart);
                                    echo "['$cat_name', $soluongsanpham],";
                                }
                                ?>
                            ]);
                            // Set Options
                            const options = {
                                title: 'BIỂU ĐỒ THỐNG KÊ BÌNH LUẬN THEO SẢN PHẨM',
                                is3D: true,
                                colors: ['#ff0000', '#00ff00', '#0000ff']
                            };
                            // Draw
                            const chart = new google.visualization.PieChart(document.getElementById('piechart_3dd'));
                            chart.draw(data, options);
                        }
                    </script>
                </div>
                <div class="col-md-6 admin_chart">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', { 'packages': ['corechart'] });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Year', 'Sales', 'Expenses'],
                                ['2004', 1000, 400],
                                ['2005', 1170, 460],
                                ['2006', 660, 1120],
                                ['2007', 1030, 540]
                            ]);

                            var options = {
                                title: 'Company Performance',
                                curveType: 'function',
                                legend: { position: 'bottom' }
                            };

                            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                            chart.draw(data, options);
                        }
                    </script>
                    <div id="curve_chart" style="width: 80%; height: 500px"></div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
get_footer();
?>