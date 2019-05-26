<?php

namespace SuperHappysir\Support\Tests\Functions;

use PHPUnit_Framework_TestCase;

class ConstantHelperTest extends PHPUnit_Framework_TestCase
{
    /**
     * 测试给定字符串是手机号码
     *
     * @return void
     */
    public function testIsPhoneNum() : void
    {
        $this->assertTrue(is_phone_num('18581405481'));
    }
    
    /**
     * 测试给定字符串不是手机号码
     *
     * @return void
     */
    public function testNotPhoneNum() : void
    {
        $this->assertFalse(is_phone_num('1858140548122'));
        
        $this->assertFalse(is_phone_num('dhuihsudu'));
        
        $this->assertFalse(is_phone_num('1858145481'));
        
        $this->assertFalse(is_phone_num(';;;18581405481'));
    }
}
