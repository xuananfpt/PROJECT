<?php 
function get_list_comment_index() {
    $list_comment = db_fetch_array("SELECT *, COUNT(tbl_comment.id_comment) AS numbersComment FROM tbl_product JOIN tbl_comment ON tbl_comment.id_product = tbl_product.product_id WHERE tbl_comment.comment_status = 1 GROUP BY tbl_product.product_id ORDER BY tbl_product.product_id DESC");
    return $list_comment;
}



function get_detail_comment($id_product){
    $detail_comment = db_fetch_array("SELECT tbl_comment.id_comment, tbl_comment.content, tbl_comment.create_time,tbl_users.username FROM tbl_users join tbl_comment on tbl_users.user_id = tbl_comment.id_user WHERE tbl_comment.id_product = {$id_product} AND tbl_comment.comment_status = 1");
    return $detail_comment;
}
function update_soft_delete($data, $id) {
    db_update('tbl_comment', $data, "id = '{$id}'");
}
function get_list_comment_trash() {
    $list_comment = db_fetch_array("SELECT tbl_comment.id_comment, tbl_comment.content, tbl_comment.create_time,tbl_users.username FROM tbl_users join tbl_comment on tbl_users.user_id = tbl_comment.id_user WHERE tbl_comment.comment_status = 0");
    return $list_comment;
}

function update_restore_comment($data, $id) {
    db_update('tbl_comment', $data, "id = '{$id}'");
}