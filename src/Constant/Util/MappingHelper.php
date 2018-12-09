<?php
namespace SuperHappysir\Constant\Util;

/**
 * Trait MappingHelper 映射获取辅助trait
 * @package SuperHappysir\Constant\util
 */
trait MappingHelper
{
    /**
     * 获取映射名称
     * @param mixed $field
     * @static
     * @return null|string
     */
    public static function getName($field) : ?string
    {
        if (!$field) {
            return null;
        }
        return self::MAPPING[$field] ?? null;
    }
}
