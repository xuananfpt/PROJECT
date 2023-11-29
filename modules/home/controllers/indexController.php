<?php
//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct()
{
    load_model('index');
}
// //Đặt tên đúng cách
function indexAction()
{
    $list_phone_cat = get_list_product_cat_phone();
    $list_laptop_cat = get_list_product_cat_laptop();
    $list_product = array(
        '1' => $list_phone_cat,
        '2' => $list_laptop_cat,
    );
    $data['list_product'] = $list_product;
    load_view('index', $data);
}
// //Đi vào bên trong ACT

function detailProductAction()
{
    load_view('detailProduct');
}

function editAction()
{
}
