<?php
get_header();
?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php
        get_sidebar();
        ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Cập nhật</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" enctype="multipart/form-data" class="row">
                        <div class="col-md-4">
                            <label for="post_title">Tiêu đề</label>
                            <input class="w-100 form-control" type="text" name="post_title" id="post_title" value="<?php echo $post_item['post_title'] ?>">
                        </div>

                        <div class="col-md-4">
                            <label for="post_status">Trạng thái</label>
                            <input class="w-100 form-control" type="text" name="post_status" id="post_status" value="<?php echo $post_item['post_status'] ?>">
                        </div>

                        <div class="col-md-4">

                            <label for="post_creator">Người tạo</label>
                            <input class="w-100 form-control" type="text" name="post_creator" id="post_creator" value="<?php echo $post_item['post_creator'] ?>">
                        </div>

                        <div class="col-md-4">
                            <label for="create_time">Thời gian tạo</label>
                            <input class="w-100 form-control" type="text" name="create_time" id="create_time" value="<?php echo $post_item['create_time'] ?>">
                        </div>

                        <div class="col-md-4">
                            <label for="cat_post">Danh mục </label>
                            <select class="w-100 form-control" name="cat_post" id="">
                                <option value="0">Chọn danh mục</option>
                                <option value="Danh mục 1" <?php if ($post_item['cat_post'] == "Danh mục 1") echo "selected" ?>>Danh mục 1</option>
                                <option value="Danh mục 2" <?php if ($post_item['cat_post'] == "Danh mục 2")
                                                                echo "selected" ?>>Danh mục 2</option>
                            </select>
                        </div>


                        <div class="col-md-12"><label>Hình ảnh</label>
                            <div id="uploadFile">
                                <img src="public/images/noimage.jpg" id="img" height="300px" class="w-25">
                                <input class="d-none" type="file" name="post_image" id="upload">
                                <label for="upload" class="w-25 bg-dark text-light text-center h-50">
                                    <i class="fa-solid fa-upload"></i>
                                </label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="post_title">Nội dung</label>
                            <textarea class="w-100 form-control" type="text" name="post_content" id="post_content"><?php echo $post_item['post_content'] ?></textarea>
                            <div class="error">
                                <?php echo form_error('post_content') ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="post_title">Nội dung ngắn</label>
                            <textarea class="w-100 form-control" type="text" name="short_content" id="short_content"><?php echo $post_item['short_content'] ?></textarea>
                            <div class="error">
                                <?php echo form_error('short_content') ?>
                            </div>
                        </div>
                        <div class="ml-3 mt-2">
                            <button class="btn btn-danger" type="submit" name="btn-edit" id="btn-submit">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let img = document.getElementById("img");
    let upload = document.getElementById("upload");

    upload.onchange = (e) => {
        if (upload.files[0]) {
            img.src = URL.createObjectURL(upload.files[0]);
        }
    };
</script>
<?php
get_footer();
?>