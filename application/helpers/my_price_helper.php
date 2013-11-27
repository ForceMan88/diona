<?php

function format_price($price)
{
    $CI =& get_instance();
    $CI->load->model('admin/config', 'setting');

    if($rate = $CI->setting->getConfigByName('currency_rate')) {
        return $rate[0]->value > 0 ? $price * $rate[0]->value : false;
    }
}


