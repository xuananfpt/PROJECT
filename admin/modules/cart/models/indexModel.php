<?php

function get_list_users()
{
    $result = db_fetch_array("SELECT * FROM `tbl_users_byan`");
    return $result;
}

function get_user_by_id($id)
{
    $item = db_fetch_row("SELECT * FROM `tbl_users_byan` WHERE `user_id` = {$id}");
    return $item;
}
function get_list_order()
{
    $list_order = db_fetch_array("SELECT *, SUM(tbl_detail_dh.total_price) AS tongtien FROM `tbl_detail_dh` JOIN tbl_order ON tbl_detail_dh.id_order = tbl_order.id_order
JOIN tbl_users ON tbl_users.user_id = tbl_order.id_account
GROUP BY tbl_detail_dh.id_order");
    return $list_order;
}
function get_list_product_cart($id) {
    $list_product = db_fetch_array("SELECT * FROM `tbl_detail_dh` JOIN tbl_product on tbl_product.product_id = tbl_detail_dh.id_product WHERE id_order = {$id}");
    return $list_product;
}