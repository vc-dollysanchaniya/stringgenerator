<?php 

if (!function_exists('randomString')) {
    /**
     * @param $length
     * @return string
     *  This function will return a random
     *  string of specified length
     */
    function randomString($length)
    {
     
       // String of all alphanumeric chaeracter
        $make_string = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        return substr(str_shuffle($make_string),
                       0, $length);
    }
}




