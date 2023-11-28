<?php
//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct() {
    load_model('index');
}

function indexAction() {
   $list_order = get_list_order();
    // show_array($list_order);
    $data['list_order'] = $list_order;
    load_view('index',$data);
}

function detailCartAction() {
    $id = $_GET['id'];
    $list_product = get_list_product_cart($id);
    // show_array($list_product);
    $data['list_product'] = $list_product;
    load_view('detailCart', $data);
}

function editAction() {
  
}
