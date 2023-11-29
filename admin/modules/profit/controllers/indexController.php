<?php
//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct() {
    load_model('index');

}

function indexAction() {
    $list_profit = get_list_profit();
    // show_array($list_profit);
    $data['list_profit'] = $list_profit;
    load_view('index',$data);
}
function chartAction() {
    $list_profit_chart = get_list_profit();
    // show_array($list_profit_chart);
    $data['list_profit_chart'] = $list_profit_chart;
    load_view("chart",$data);
}