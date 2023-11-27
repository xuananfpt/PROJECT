<?php get_header() ?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách sản phẩm</h3>
                    <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                       
                        <form method="GET" class="form-s fl-right">
                            <input type="text" name="s" id="s">
                            <input type="submit" name="sm_s" value="Tìm kiếm">
                        </form>
                         <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Công khai</option>
                                <option value="1">Chờ duyệt</option>
                                <option value="2">Bỏ vào thủng rác</option>
                            </select>
                            <input type="submit" name="sm_action" value="Áp dụng">
                        </form>
                    </div>
                    <div class="actions">
                        
                    </div>
                    <div class="table-responsive">

                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Nội dung bình luận</th>
                                    <th>Ngày bình luận</th>
                                    <th>Quản lý bình luận</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (is_array($detail_comment)) {
                                    $count = 0;
                                    foreach ($detail_comment as $comment) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="checkbox" name="checkItem" class="checkItem">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tbody-text "><?php echo $count ?></h3>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="tbody-text "><?php echo $comment['username'] ?></div>
                                            </td>


                                            <td>
                                                <div class="tbody-text "><?php echo $comment['content'] ?></div>
                                            </td>

                                            <!-- <td>
                                        <div class="tbody-text ">20</div>
                                    </td> -->
                                            <td>
                                                <div class="tbody-text "><?php echo $comment['create_time'] ?></div>
                                            </td>
                                            <td>
                                                <div class="div">
                                                    <button class="btn btn-danger"><a class="text-white" href="?mod=comment&action=softComment&id=<?php echo $comment['id'] ?>">Ẩn bình luận</a></button>

                                                </div>
                                            </td>


                                        </tr>
                                        <?php
                                    }
                                }
                                ?>



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
                 <div class="section-detail">
                    <ul class="post-status fl-left">
                        <div class="btn btn-danger"><li class="all"><a href="" class="text-white">Tất cả <span class="count text-white">( <?php echo $count ?> )
                                </span></a> |</li></div>
                            
                            <button class="btn-danger btn">
                                <li class="pending"><a class="text-white" href="?mod=comment&action=detailTrash">Thùng rác<span class="count text-white"></span></a></li>
                            </button>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>