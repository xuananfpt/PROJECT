<?php
//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct()
{

    load_model("index");
}
function indexAction()
{
    $chart_cicrle = get_chart_by_category();
    $chart_date = get_chart_by_date();
    $data['chart_date'] = $chart_date;
    // show_array($chart_cicrle);
    $data['chart_cicrle'] = $chart_cicrle;
    load_view('index', $data);
}
