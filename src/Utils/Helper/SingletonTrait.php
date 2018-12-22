<?php

namespace SuperHappysir\Support\Utils\Helper;

/**
 * Trait SingletonTrait
 *
 * 单例模式trait
 *
 * @author  luotao
 * @version 1.0
 * @package SuperHappysir\Support\Utils\Helper
 */
trait SingletonTrait
{
    /**
     * 当前对象
     *
     * @var static
     */
    protected static $instance;
    
    /**
     * SingletonTrait constructor.
     *
     * @param array $item
     */
    public function __construct(...$item)
    {
    }
    
    /**
     * 获取单例对象
     *
     * @param mixed ...$item
     *
     * @return static
     */
    public static function getInstance(...$item)
    {
        if (static::$instance === null) {
            static::$instance = new static(...$item);
        }
    
        return static::$instance;
    }
}
