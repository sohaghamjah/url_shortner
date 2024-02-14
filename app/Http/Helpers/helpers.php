<?php

use Illuminate\Support\Facades\DB;

/**************************************
 *  Static Variables Start
 ***********/
define('SOMETHING_WRONG', 'Something Went Wrong, Please Try Again!');

 /**************************************
 *  Static Variables End
 ***********/


function isMenuActive($url){
   return request()->is($url) ? 'active' : '';
}

function isMenuExpand($url){
    return request()->is($url) ? 'menu-is-opening menu-open' : ''; 
}

function generateRandomStringNumber($length = 12)
{
    $characters = 'ABCDEFGHJKMNOPQRSTUVWXYZ123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateUniqueString($table,$column,$length = 10) {
    do{
       $generate_rand_string = generateRandomStringNumber($length);
       $unique = DB::table($table)->where($column,$generate_rand_string)->exists();
       $loop = false;
       if($unique) {
        $loop = true;
       }
       $unique_string = $generate_rand_string;
    }while($loop);
    return $unique_string;
}