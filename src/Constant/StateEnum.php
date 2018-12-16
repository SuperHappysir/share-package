<?php

namespace SuperHappysir\Constant;

use SuperHappysir\Constant\Util\MappingHelper;

/**
 * Class StateEnum
 *
 * 记录公用状态常量
 *
 * @author  luotao
 * @version 1.0
 * @package SuperHappysir\Constant
 */
class StateEnum
{
    use MappingHelper;
    
    /**
     * 待处理状态
     *
     * @var int
     */
    public const AWAITING = 0;
    
    /**
     * 启用
     *
     * @var int
     */
    public const ENABLED = 1;
    
    /**
     * 禁用
     *
     * @var int
     */
    public const DISABLED = 2;
    
    /**
     * 状态码及对应的信息映射
     *
     * @var array
     */
    protected const MAPPING = [
        self::ENABLED  => '已启用',
        self::DISABLED => '已禁用',
        self::AWAITING => '待审核',
    ];
}
