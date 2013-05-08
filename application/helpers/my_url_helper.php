<?php
function skin_url($string = '')
{
    return base_url('media').'/frontend/image/'.$string;
}

function css_url($string)
{
    return base_url('media').'/frontend/css/'.$string;
}

function js_url($string)
{
    return base_url('media').'/frontend/js/'.$string;
}

function current_url_query()
{
    $CI =& get_instance();

    $url = $CI->config->site_url($CI->uri->uri_string());
    return $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;
}
