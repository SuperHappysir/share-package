<?php

namespace SuperHappysir\Constant\Enum;

use SuperHappysir\Constant\Enum\Util\MappingHelper;

/**
 * Class BoolEnum
 *
 * 布尔常量
 *
 * @author  luotao
 * @version 1.0
 * @package SuperHappysir\Constant
 */
class BoolEnum
{
    use MappingHelper;
    
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
    protected const MAPPING = [
        self::NO  => '否',
        self::YES => '是'
    ];
}
