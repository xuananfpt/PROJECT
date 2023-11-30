<?php get_header() ?>
<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="row p-4 w-100">
                <div class="w-100 ml-1 row text-center d-flex justify-content-between">
                    <h5 class="fs-4 fw-bold bg-danger p-2 rounded">QUẢN LÝ ĐƠN HÀNG</h5>
                </div>
                <div class="row w-100">
                    <div class="col-md-8 rounded border-col p-3">
                        <table class="text-center w-100">
                            <thead class="text-center bg-dark text-light">
                                <tr>
                                    <th class="fs-6 py-2 ps-4">STT</th>
                                    <th class="fs-6">Tên sản phẩm</th>
                                    <th class="fs-6">Hình ảnh</th>
                                    <th class="fs-6">Giá</th>
                                    <th class="fs-6">Số lượng</th>
                                    <th class="fs-6">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Xuân An</td>
                                    <td><img class="rounded mx-auto d-block img-fluid w-75 imagedm mt-3" src="" alt="">
                                    </td>
                                    <td class="text-danger fw-bold">200</td>
                                    <td class="fw-bold">20</td>
                                    <td class="text-danger fw-bold">Tổng tiền</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="ml-5 col-md-3 border-col rounded-3 bg-body ms-5 p-3">
                        <div class="bg-dark text-center text-light fs-6 fw-bold p-2">
                            THÔNG TIN NGƯỜI MUA
                        </div>
                        <div class="bg-light m-3 border rounded">
                            <div class="d-flex px-2 pt-3 ms-2 fst-italic">
                                <span class="text-danger fw-bold">Họ tên:</span>
                                <p class="ms-2">
                                    Tên người mua
                                </p>
                            </div>
                            <div class="d-flex px-2 ms-2 fst-italic">
                                <span class="text-danger fw-bold">Địa chỉ: </span>
                                <p class="ms-2">
                                    Địa chỉ người mua
                                </p>
                            </div>
                            <div class="d-flex px-2 ms-2 fst-italic">
                                <span class="text-danger fw-bold"> Điện thoại: </span>
                                <p class="ms-2">
                                    0978238946
                                </p>
                            </div>
                            <div class="d-flex px-2 ms-2 fst-italic">
                                <span class="text-danger fw-bold">Email: </span>
                                <p class="ms-2">
                                    Email người mua
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="d-flex px-2 ms-2">
                                <span class="text-danger fw-bold d-flex align-items-center"><i
                                        class="fa-solid fa-film me-2 fs-4"></i>Tổng tiền
                                    đơn hàng: </span>
                                <p class="ms-2 fw-bold pt-3">
                                    90
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
                            <span class="bg-warning h-25 ml-3 fw-bold text-dark px-2 pb-1 rounded"><i>Đang giao
                                    hàng</i></span>
                        </div>
                        <div class="mt-3 w-100">
                            <div class="input-group mt-3">
                                <div class="d-flex w-75 ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><a href="">Trạng thái</a></span>
                                    </div>
                                    <select name="" id="" class="custom-select">
                                        <option value="">Chọn số lượng</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                                <button class="btn btn-danger w-25 fw-bold ms-4" type="submit" name="btn-sunmit">CẬP
                                    NHẬT</button>
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