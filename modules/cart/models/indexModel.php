<?php

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `tbl_users_byan`");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_users_byan` WHERE `user_id` = {$id}");
    return $item;
}
function db_add_order($data) {
    db_insert('tbl_order', $data, );
}
function load_id_order() {
    return db_fetch_row("SELECT id_order FROM `tbl_order` ORDER BY id_order DESC");
}
function insert_order_dh($data) {
    db_insert("tbl_detail_dh", $data);
}