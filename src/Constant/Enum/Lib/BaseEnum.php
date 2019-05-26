<?php

namespace SuperHappysir\Support\Constant\Enum\Lib;

use Exception;
use ReflectionClass;

/**
 * Class BaseEnum
 *
 * 枚举基类
 *
 * @author  luotao
 * @version 1.0
 * @package SuperHappysir\Support\Constant\Enum\Lib
 */
abstract class BaseEnum
{
    /**
     * @var null 常量缓存数组
     */
    protected static $constCacheArray;
    
    /**
     * 常量与名称映射表
     *
     * @var array
     */
    protected static $translations = [];
    
    /**
     * BasicEnum constructor.
     */
    private function __construct()
    {
    }
    
    /**
     * 获取常量
     *
     * @return array|mixed
     */
    public static function getConstants()
    {
        if (self::$constCacheArray === null) {
            self::$constCacheArray = [];
        }
        
        // 使用反射读取常量
        $calledClass = static::class;
        if (!array_key_exists($calledClass, self::$constCacheArray)) {
            try {
                $reflect = new ReflectionClass($calledClass);
            } catch (Exception $e) {
                return [];
            }
            
            self::$constCacheArray[$calledClass] = $reflect->getConstants();
        }
        
        return self::$constCacheArray[$calledClass];
    }
    
    /**
     * 常量名称是否合法
     *
     * @param string $name
     * @param bool   $strict 是否严格模式
     *
     * @return bool
     */
    public static function isValidName(string $name, $strict = false) : bool
    {
        $constants = self::getConstants();
        
        if ($strict) {
            return array_key_exists($name, $constants);
        }
        
        $keys = array_map('strtolower', array_keys($constants));
        
        return in_array(strtolower($name), $keys, true);
    }
    
    /**
     * 属性值是否合法
     *
     * @param mixed $value
     *
     * @return bool
     */
    public static function isValidValue($value) : bool
    {
        $values = array_values(self::getConstants());
        
        return in_array($value, $values, true);
    }
    
    /**
     * 获取枚举常量对应的中文名称
     *
     * @param int|string $constant
     *
     * @return string
     */
    public static function getName($constant) : string
    {
        return static::$translations[$constant] ?? '未知';
    }
    
    /**
     * getTranslations
     *
     * @return array
     */
    public static function getTranslations() : array
    {
        return static::$translations;
    }
}
