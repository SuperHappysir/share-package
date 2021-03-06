<?php

namespace SuperHappysir\Support\Constant\Enum;

use SuperHappysir\Support\Constant\Enum\Lib\BaseEnum;

/**
 * Class BoolEnum
 *
 * 布尔常量
 *
 * @author  luotao
 * @version 1.0
 * @package SuperHappysir\Support\Constant
 */
class BoolEnum extends BaseEnum
{
    
    /**
     * 否
     *
     * @var int
     */
    public const NO = 0;
    
    /**
     * 是
     *
     * @var int
     */
    public const YES = 1;
    
    /**
     * 状态码及对应的信息映射
     *
     * @var array
     */
    protected static $translations = [
        self::NO  => '否',
        self::YES => '是'
    ];
}
