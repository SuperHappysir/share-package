<?php

namespace SuperHappysir\Support\Tests\Utils\Response;

use PHPUnit_Framework_TestCase;
use SuperHappysir\Support\Utils\Response\JsonResponseBody;

/**
 * Class JsonResponseBodyTest
 *
 * json 响应体测试
 *
 * @author  luotao
 * @version 1.0
 * @package SuperHappysir\Support\Tests\Utils\Response
 */
class JsonResponseBodyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var JsonResponseBody
     */
    protected $jsonResopnseData;
    
    protected function setUp()
    {
        parent::setUp();
        $this->jsonResopnseData = new JsonResponseBody('200', 'hello world', ['hello' => 'world']);
    }
    
    public function testCode()
    {
        $this->assertEquals('200', $this->jsonResopnseData->getCode());
    }
    
    public function testMessage()
    {
        $this->assertEquals('hello world', $this->jsonResopnseData->getMessage());
    }
    
    public function testPayload()
    {
        $this->assertEquals(['hello' => 'world'], $this->jsonResopnseData->getPayload());
        
        $this->assertArrayHasKey('hello', $this->jsonResopnseData->getPayload());
    }
}
