<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/7/6
 * Time: 15:09
 */

$all_options = new stdClass();  //这

$all_options->home = 'fasef';

apply_filters('all',$all_options);

function apply_filters($tag,$string)
{

    echo $string->home;
}