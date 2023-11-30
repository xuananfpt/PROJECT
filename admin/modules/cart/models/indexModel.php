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
    $list_order = db_fetch_array("SELECT *, SUM(tbl_detail_dh.price) AS tongtien FROM `tbl_detail_dh` JOIN tbl_order ON tbl_detail_dh.id_order = tbl_order.id_order
JOIN tbl_users ON tbl_users.user_id = tbl_order.id_account
GROUP BY tbl_detail_dh.id_order");
    return $list_order;
}
function get_list_product_cart($id) {
    $list_product = db_fetch_array("SELECT * FROM `tbl_detail_dh` JOIN tbl_product on tbl_product.product_id = tbl_detail_dh.id_product WHERE id_order = {$id}");
    return $list_product;
}
function get_detail_product($id) {
    $list_detail = db_fetch_array("SELECT *,tbl_product.product_name, tbl_product.product_price, tbl_product.product_image FROM `tbl_detail_dh` JOIN tbl_product
ON tbl_product.product_id = tbl_detail_dh.id_product WHERE id_order = $id");
    return $list_detail;
}
function get_customer_by_id($id) {
    $customer = db_fetch_row("SELECT * FROM `tbl_order` WHERE `id_order` =$id");
    return $customer;
}
function get_all_status() {
    $option = db_fetch_array("SELECT * FROM tbl_status WHERE 1");
    return $option;
}
function update_status($data, $id) {
    db_update("tbl_order", $data, "id_order = '$id'");
}
function get_status_by_id($id) {
    $status =  db_fetch_row("SELECT tbl_order.id_status, tbl_status.name_status FROM `tbl_order` JOIN tbl_status on tbl_order.id_status = tbl_status.id_status WHERE id_order = $id");
    return $status;
}