<style>
    table tr td div {
        margin-top: 30px;
    }

    span {
        display: inline-block;
    }
</style>
<?php get_header() ?>
<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix text-center">
                    <h3 id="index" class="fl-left">Danh sách danh mục</h3>
                    <a href="?mod=category&action=addCat" title="" id="add-new" class="fl-left btn btn-danger">Thêm mới</a>
                    <form method="POST" class="form-s fl-right mt-4">
                        <input type="text" name="keyw" id="s">
                        <input type="submit" name="btn-submit" value="Tìm kiếm">
                    </form>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="table-responsive">
                        <div class="filter-wp clearfix">


                        </div>
                        <table class="table list-table-wp">
                            <thead class=" text-center">
                                <tr>
                                    <th>#</th>
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Hình ảnh</th>
                                    <th>Thứ tự</th>
                                    <th>Trang thái</th>
                                    <!-- <th>Người tạo</th> -->
                                    <th>Thời gian tạo</th>
                                    <!-- <th>Access</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $stt = 0;
                                foreach ($list_cat as $category) {
                                    $stt++; ?>
                                    <tr>

                                        <td>
                                            <div class="text-center">
                                                <input type="checkbox" name="checkItem" class="checkItem">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tbody-text text-center"><?= $stt ?></h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tb-title d-flex justify-content-around text-center w-100">
                                                <a href="" title=""><?= $category['cat_name'] ?></a>
                                                <ul class="list-operation fl-right mt-1">
                                                    <li><a href="?mod=category&action=editCat&id=<?= $category['cat_id'] ?>" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                    <li><a href="?mod=category&action=delCatsoft&id=<?= $category['cat_id'] ?>" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <span class=" mt-1 ">

                                                    <img class="" width="200px" height="auto" src="public/images/<?= $category['cat_image'] ?>" alt="">
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tbody-text text-center"><?= $category['parent_id'] ?></div>
                                        </td>
                                        <td>
                                            <div class="tbody-text ">Hoạt động</div>
                                        </td>
                                        <!-- <td>
                                            <div class="tbody-text ">Hoạt động</div>
                                        </td>
                                        <td>
                                            <div class="tbody-text ">Admin</div>
                                        </td> -->
                                        <td>
                                            <div class="tbody-text text-center"><?= $category['create_time'] ?></div>
                                        </td>

                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <p id="desc" class="fl-left">
                    <ul class="post-status fl-left mt-2">
                        <li class="all btn bg-danger "><a href="" class="text-white">Tất cả <span class="count text-white">(<?= $stt ?>)</span></a></li>
                        <!-- <li class="publish"><a href="">Đã đăng <span class="count">(51)</span></a> |</li>
                        <li class="pending"><a href="">Chờ xét duyệt<span class="count">(0)</span> |</a></li> -->
                        <li class="pending btn bg-danger"><a class="text-white" href="?mod=category&action=trashCat">Thùng rác<span class="count text-white"></span></a></li>
                    </ul>
                    </p>
                    <ul id="list-paging" class="fl-right">
                        <li>
                            <a href="" title="">
                                < /a>
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