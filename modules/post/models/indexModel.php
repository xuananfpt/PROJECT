<?php

function get_list_post()
{
    $list_post = db_fetch_array("SELECT * FROM tbl_post where post_status='Hoạt động' ");
    return $list_post;
}
function get_post_by_id($id)
{
    $list_post = db_fetch_array("SELECT * FROM tbl_post where post_status='Hoạt động' and post_id='$id' ");
    return $list_post;
}
