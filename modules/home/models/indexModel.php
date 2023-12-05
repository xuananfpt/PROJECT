<?php

// function get_list_users()
// {
//     $result = db_fetch_array("SELECT * FROM `tbl_users_byan`");
//     return $result;
// }

// function get_user_by_id($id)
// {
//     $item = db_fetch_row("SELECT * FROM `tbl_users_byan` WHERE `user_id` = {$id}");
//     return $item;
// }

function get_list_product_cat_phone()
{
    $item = db_fetch_array("SELECT *, (100 - CEILING((product_discount)/(product_price)*100)) as phantram,
    CONCAT(FORMAT(product_discount, 0),'đ') as price, CONCAT(FORMAT(product_price,0),'đ') as discount 
    FROM tbl_product where `product_cat`= 1 ");
    return $item;
}
function get_list_product_cat_laptop()
{
    $item = db_fetch_array("SELECT *, (100 - CEILING((product_discount)/(product_price)*100)) as phantram,
    CONCAT(FORMAT(product_discount, 0),'đ') as price, CONCAT(FORMAT(product_price,0),'đ') as discount 
    FROM tbl_product where `product_cat`= 2 ");
    return $item;
}
function get_list_cat()
{
    $item = db_fetch_array("SELECT * FROM tbl_category where cat_status=1");
    return $item;
}
function get_all_product($keyw, $price, $id, $min, $max)
{
    $item = "SELECT *, (100 - CEILING((product_discount)/(product_price)*100)) as phantram,
    CONCAT(FORMAT(product_discount, 0),'đ') as price, CONCAT(FORMAT(product_price,0),'đ') as discount 
    FROM tbl_product where product_status=1 ";
    // if ($keyw != "") {
    //     $item .= "and product_name like '%" . $keyw . "%' or product_code like '%" . $keyw . "%' ";
    // }
    if ($price != "") {
        $item .= "order by product_discount $price ";
    }
    if ($id != "") {
        $item .= "and product_cat='$id' ";
    }
    if ($min != "") {
        $item .= "and product_discount between $min and $max";
    }
    return db_query($item);
}
