<?php

namespace SuperHappysir\Support\Utils\Response;

use JsonSerializable;

/**
 * Class JsonResponseBodyInterface
 *
 * json响应 body
 *
 * @author  luotao
 * @version 1.0
 * @package SuperHappysir\Support\Utils
 */
interface JsonResponseBodyInterface extends JsonSerializable
{
    /**
     * JsonResponseBodyInterface constructor.
     *
     * @param string $code
     * @param string $message
     * @param array  $payload
     */
    public function __construct(string $code = '', string $message = '', array $payload = []);
    
    /**
     * getCode
     *
     * @return string
     */
    public function getCode() : string;
    
    /**
     * @param string $code
     */
    public function setCode(string $code) : void;
    
    /**
     * getMessage
     *
     * @return string
     */
    public function getMessage() : string;
    
    /**
     * @param string $message
     */
    public function setMessage(string $message) : void;
    
    /**
     * getPayload
     *
     * @return array
     */
    public function getPayload() : array;
    
    /**
     * @param array $payload
     */
    public function setPayload(array $payload) : void;
    
    /**
     * 携带荷载
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return JsonResponseBody
     */
    public function withPayload(string $key, $value) : JsonResponseBody;
    
    /**
     * 携带荷载
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return JsonResponseBody
     */
    public function pushPayload(string $key, $value) : JsonResponseBody;
    
    /**
     * 转换成键值对结构
     *
     * @return array
     */
    public function toMap() : array;
    
    /**
     * getErrors
     *
     * @return array
     */
    public function getErrors() : array;
    
    /**
     * @param array $errors
     */
    public function setErrors(array $errors) : void;
}
