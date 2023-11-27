<style>
    table tr td div {
        margin-top: 30px;
    }

    span {
        display: inline-block;
    }
</style>

<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="text-center">Danh sách bình luận</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <form method="GET" class="form-s fl-right">
                            <input type="text" name="s" id="s">
                            <input type="submit" name="sm_s" value="Tìm kiếm">
                        </form>
                    </div>
                    <div class="actions">
                        <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Xóa</option>
                            </select>
                            <input type="submit" name="sm_action" value="Áp dụng">
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Người bình luận</th>
                                    <th>Hình ảnh</th>
                                    <th>Sản phẩm</th>
                                    <th>Nội dung bình luận</th>
                                    <th>Ngày bình luận</th>
    
    
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        <div>
                                            <input type="checkbox" name="checkItem" class="checkItem">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tbody-text ">1</h3>
                                        </div>
                                    </td>
                                  
                                     <td>
                                        <span class="tbody-thumb mt-1">

                                            <img class="" width="100px" height="auto"
                                                src="public/images/adminxuanan.jpg" alt="">
                                        </span>
                                    </td>
                                      <td>
                                        <div class="tbody-text ">Iphone 15 promax</h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tb-title fl-left">
                                            <a href="" title="">Sản phẩm đẹp qúa</a>
                                        </div>
                                        <ul class="list-operation fl-right mt-4">
                                            <li><a href="" title="Sửa" class="edit"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="" title="Xóa" class="delete"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <span class="tbody-thumb">

                                          <div class="">
                                            20/11/2023
                                          </div>
                                        </span>
                                    </td>
      
                                </tr>
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