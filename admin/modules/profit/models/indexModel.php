<?php

function get_list_profit()
{
    $list_profit = db_fetch_array("SELECT tbl_category.cat_id, tbl_category.cat_name, SUM(tbl_detail_dh.quantity) AS soluongdonhang, SUM(tbl_detail_dh.quantity*tbl_detail_dh.price) as tongtien FROM
tbl_category JOIN tbl_product ON tbl_category.cat_id = tbl_product.product_cat
JOIN tbl_detail_dh ON tbl_detail_dh.id_product = tbl_product.product_id
GROUP BY tbl_category.cat_id");
    return $list_profit;
}