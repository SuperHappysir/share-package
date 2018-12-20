<?php

use SuperHappysir\Utils\Response\JsonResponseBody;

if (!function_exists('sort_multiplearray')) {
    /**
     * 对二维数组按照某列进行排序
     * @param array  $data  二维数组
     * @param string $field 字段
     * @param int    $type  SORT_DESC|SORT_ASC
     * @return mixed
     */
    function sort_multiplearray(array $data , $field = 'sort' , $type = SORT_DESC)
    {
        $sort = array_column($data , $field);
        array_multisort($sort , $type , $data);
        
        return $data;
    }
}

if (!function_exists('in_arr')) {
    /**
     * 判断值是否在数组中，用于解决in_array在大量数据时的性能问题
     *
     * @param $item
     * @param $array
     *
     * @return bool
     */
    function in_arr($item, $array)
    {
        //将数组键跟值翻转
        $flipArray = array_flip($array);
        
        return isset($flipArray[$item]);
    }
}

if (!function_exists('json_response_body')) {
    /**
     * json 响应body
     *
     * @param string $code
     * @param string $message
     * @param array  $payload
     *
     * @return JsonResponseBody
     */
    function json_response_body(string $code = '', string $message = '', array $payload = [])
    {
        return new JsonResponseBody($code, $message, $payload);
    }
}

