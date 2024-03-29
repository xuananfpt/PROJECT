<?php get_header() ?>
<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="row p-4 w-100">
                <div class="w-100 row text-center d-flex justify-content-between">
                    <h5 class=" fw-bold py-1 text-center bg-danger rounded text-white px-5">QUẢN LÝ ĐƠN HÀNG</h5>
                </div>
                <div class="row w-100">
                    <div class="col-md-7 rounded border-col p-3">
                        <table class="text-center w-100">
                            <thead class="text-center bg-dark text-light rounded w-100">
                                <tr>
                                    <th class="fs-6 py-2 ps-4">STT</th>
                                    <th class="fs-6">Tên sản phẩm</th>
                                    <th class="fs-6">Hình ảnh</th>
                                    <th class="fs-6">Giá</th>
                                    <th class="fs-6">Số lượng</th>
                                    <th class="fs-6">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 0;
                                $sumMoney = 0;
                                foreach ($data['list_detail_product'] as $item) {
                                    $count++;
                                    $intoMoney = ($item['quantity'] * $item['product_price']);
                                    $sumMoney += $intoMoney;
                                    ?>
                                    <tr>    
                                        <td>1</td>
                                        <td>
                                            <?php echo $item['product_name'] ?>
                                        </td>
                                        <td><img class="rounded mx-auto d-block img-fluid imagedm mt-3" width="100px"
                                                src="public/images/<?php echo $item['product_image'] ?>" alt="">
                                        </td>
                                        <td class="text-danger fw-bold">
                                            <?php echo currency_format($item['product_price']) ?>
                                        </td>
                                        <td class="fw-bold">
                                            <?php echo $item['quantity'] ?>
                                        </td>
                                        <td class="text-danger fw-bold">
                                            <?php echo currency_format($intoMoney) ?>
                                        </td>
                                    </tr>
                                    <?php
                                } ?>


                            </tbody>
                        </table>
                    </div>

                    <div class="ml-5 col-md-4 border-col rounded-3 bg-body ms-5 p-3">
                        <div class="bg-dark text-center text-light fs-6 fw-bold p-2">
                            THÔNG TIN NGƯỜI MUA
                        </div>
                        <div class="bg-light m-3 border rounded">
                            <div class="d-flex px-2 pt-3 ms-2 fst-italic">
                                <span class="text-danger fw-bold">Họ tên:</span>
                                <p class="ms-2">
                                    <?php echo $data['customer']['name_customer'] ?>
                                </p>
                            </div>
                            <div class="d-flex px-2 ms-2 fst-italic">
                                <span class="text-danger fw-bold">Địa chỉ: </span>
                                <p class="ms-2">
                                    <?php echo $data['customer']['address_customer'] ?>
                                </p>
                            </div>
                            <div class="d-flex px-2 ms-2 fst-italic">
                                <span class="text-danger fw-bold"> Điện thoại: </span>
                                <p class="ms-2">
                                    <?php echo $data['customer']['phone_customer'] ?>
                                </p>
                            </div>
                            <div class="d-flex px-2 ms-2 fst-italic">
                                <span class="text-danger fw-bold">Email: </span>
                                <p class="ms-2">
                                    <?php echo $data['customer']['email'] ?>
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="d-flex px-2 ms-2">
                                <span class="text-danger fw-bold d-flex align-items-center"><i
                                        class="fa-solid fa-film me-2 fs-4"></i>Tổng tiền
                                    đơn hàng: </span>
                                <p class="ms-2 fw-bold pt-3">
                                    <?php echo currency_format($sumMoney) ?>
                                </p>
                            </div>
                            <div class="d-flex px-2 ms-2">
                                <span class="text-danger fw-bold d-flex align-items-center"><i
                                        class="fa-solid fa-money-check-dollar me-2 fs-4"></i> Phương Thức Thanh Toán
                                </span>
                            </div>
                            <form class="mt-3" action="">
                                <select disabled class="form-control">
                                    <option value="">Thanh toán bằng tiền mặt</option>
                                    <option value="">Thanh toán online</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8 rounded-3 bg-body-secondary mt-3 p-3">
                        <div class="d-flex">
                            <p class="text-danger fw-bold d-flex align-items-center h-25 fs-5">Trạng Thái Đơn
                                Hàng: </p>
                            <span class="bg-warning h-25 ml-3 fw-bold text-dark px-2 pb-1 rounded"><i><?php echo $data['status']['name_status'] ?></i></span>
                        </div>
                        <div class="mt-3 w-100">
                            <div class="input-group mt-3">
                                <div class="d-flex w-75 ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><a href="">Trạng thái</a></span>
                                    </div>
                                    <?php
                                    // Giả sử bạn có giá trị đã chọn từ một nguồn dữ liệu nào đó
                                    //Cái này t lấy trên db về
                                    //Đổ id của bằng tbl_order vào đây để lấy selected
                                    $selectedValue = $data['status']['id_status']; // Đặt giá trị đã chọn ở đây
                                    // Lấy y hệt ở db
                                    $options = array(
                                        "1" => "Chờ xác nhận",
                                        "2" => "Chờ lấy hàng",
                                        "3" => "Chờ giao hàng",
                                        "4" => "Đã giao",
                                        "5" => "Đã huỷ",
                                        "6" => "Đã trả hàng"
                                    );
                                    ?>

                                    <form action="" method="POST" class="w-100">
                                        <select name="option_status" id="" class="custom-select w-100">
                                        <?php
                                        // Duyệt qua mảng giá trị và tạo các tùy chọn
                                        foreach ($options as $value => $label) {
                                            // Nếu giá trị hiện tại trùng với giá trị đã chọn, thêm thuộc tính "selected"
                                            $isSelected = ($value == $selectedValue) ? 'selected="selected"' : '';
                                            echo "<option value=\"$value\" $isSelected>$label</option>";
                                        }
                                        ?>
                                        </select>
                                </div>
                                <button class="btn btn-danger w-25 fw-bold ms-4" type="submit" name="btn_update">CẬP
                                    NHẬT</button>
                                </form>

                            </div>
                            <!-- <form action="" class="d-flex bg-white" method="POST">
                                <select class="w-75 mr-5 rounded form-select form-input-select" id="floatingSelect"
                                    name="status_order">
                                    <option value="0">---Cập nhật trạng thái---</option>
                                </select>
                                <button class="btn btn-danger w-25 fw-bold ms-4" type="submit" name="btn-sunmit"><b>CẬP
                                        NHẬT</b></button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<?php get_footer() ?>

