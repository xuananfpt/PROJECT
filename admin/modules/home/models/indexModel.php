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
function get_chart_by_category()
{
    $chart = db_fetch_array("SELECT *,COUNT(tbl_product.product_id) as soluongsanpham FROM `tbl_product` JOIN tbl_category ON
tbl_product.product_cat = tbl_category.cat_id
WHERE 1
GROUP BY tbl_product.product_cat");

    return $chart;
}
function get_chart_by_date()
{
    $chart = db_fetch_array("Select *,sum(sum_money) as sum_revenue from tbl_order group by date(Date_time)");
    return $chart;
}
