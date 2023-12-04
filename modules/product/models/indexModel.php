<?php function get_product_by_id($id)
{
    $item = db_fetch_row("SELECT * FROM tbl_product where product_id='$id' and product_status=1");
    return $item;
}
function get_image_product($id)
{
    $item = db_fetch_array("SELECT * FROM product_image where product_id='$id'");
    return $item;
}


function product_cat_same($id, $iddm)
{
    $item = db_fetch_array("SELECT * FROM tbl_product where product_id<>'$id' and product_cat='$iddm'");
    return $item;
}

function get_list_product($keyw)
{

    if ($keyw != "") {
        $list_product = db_fetch_array("select * from tbl_product where product_code like '%" . $keyw . "%' or product_name like '%" . $keyw . "%'");
    } else {
        $list_product = db_fetch_array("select * from tbl_product where product_status=1");
    }
    return $list_product;
}
function load_all_comment_product($id)
{
    $list_comment = db_fetch_array("SELECT tbl_comment.id_comment,tbl_comment.comment_time, tbl_comment.content_comment ,tbl_users.user_id,tbl_comment.comment_status, tbl_users.user_image ,tbl_users.username,tbl_product.product_id,tbl_comment.create_time FROM tbl_comment JOIN
tbl_users on tbl_comment.id_user = tbl_users.user_id
JOIN tbl_product ON tbl_product.product_id = tbl_comment.id_product
WHERE tbl_product.product_id = '{$id}' AND tbl_comment.comment_status = 1");
    return $list_comment;
}
function db_update_status_cmn($data, $id){
    db_update('tbl_comment', $data, "id_comment = '{$id}'");
}
function insert_comment($data){
    db_insert('tbl_comment',$data);
}