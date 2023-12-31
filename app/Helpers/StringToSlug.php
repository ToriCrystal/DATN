<?php

use Illuminate\Support\Facades\DB;

function createSlug($str)
{

    $str = trim(mb_strtolower($str));
    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    $str = preg_replace('/(đ)/', 'd', $str);
    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    $str = preg_replace('/([\s]+)/', '-', $str);
    return $str;
}

function checkIfSlugExisted($str, $id = 0)
{
    $slug = DB::table('categories')->where("category_slug", "=", "$str")->where('id', '!=', $id)->first();
    if ($slug) {
        $str .= uniqid('-');
    }
    return $str;
}
function slug_pro($str)
{
    $slug = DB::table('products')->where("product_slug", "=", "$str")->first();
    if ($slug) {
        $str .= uniqid('-');
    }
    return $str;
}
function stdClassToArray($array){
    return json_decode(json_encode($array), true);
}
