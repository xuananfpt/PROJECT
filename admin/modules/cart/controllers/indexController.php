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
    //id của order
    $id = $_GET['id'];
    // echo $id;
    $list_detail_product = get_detail_product($id);
    $customer = get_customer_by_id($id);
    $option = get_all_status();
    // show_array($option);
    if(isset($_POST['btn_update'])) {
        $id = $_GET['id'];
        $id_status = $_POST['option_status'];
        // echo $id_status;
        // echo $id;
        $data_update = array(
            'id_status' => $id_status
        );
        update_status($data_update ,$id);
       
    }
    $status = get_status_by_id($id);
    $data = array(
        'list_detail_product' => $list_detail_product,
        'customer' => $customer,
        'option' => $option,
        'status' => $status
    );
    load_view('detailCart', $data);
}

