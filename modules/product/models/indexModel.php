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
function product_cat_same($id){
    $item = db_fetch_array("SELECT * FROM product");
}