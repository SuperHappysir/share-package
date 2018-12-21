<?php

namespace SuperHappysir\Utils\Response;

/**
 * Class JsonResponseBody
 *
 * json响应 body
 *
 * @author  luotao
 * @version 1.0
 * @package SuperHappysir\Utils
 */
class JsonResponseBody implements JsonResponseBodyInterface
{
    /**
     * 响应状态码
     *
     * @var string
     */
    protected $code;
    
    /**
     * 响应信息
     *
     * @var string
     */
    protected $message;
    
    /**
     * 错误明细
     *
     * @var array
     */
    protected $errors;
    
    /**
     * 响应荷载
     *
     * @var array
     */
    protected $payload = [];
    
    /**
     * JsonResponseBody constructor.
     *
     * @param string $code
     * @param string $message
     * @param array  $payload
     */
    public function __construct(string $code = '', string $message = '', array $payload = [])
    {
        $this->code    = $code;
        $this->message = $message;
        $this->payload = $payload;
    }
    
    /**
     * getCode
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    
    /**
     * @param string $code
     */
    public function setCode(string $code) : void
    {
        $this->code = $code;
    }
    
    /**
     * getMessage
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    
    /**
     * @param string $message
     */
    public function setMessage(string $message) : void
    {
        $this->message = $message;
    }
    
    /**
     * getPayload
     *
     * @return array
     */
    public function getPayload() : array
    {
        return $this->payload;
    }
    
    /**
     * @param array $payload
     */
    public function setPayload(array $payload) : void
    {
        $this->payload = $payload;
    }
    
    /**
     * 转换成键值对结构
     *
     * @return array
     */
    public function toMap() : array
    {
        return [
            'code'    => $this->code,
            'message' => $this->message,
            'payload' => (object) $this->payload
        ];
    }
    
    /**
     * Specify data which should be serialized to JSON
     *
     * @link  https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return $this->toMap();
    }
    
    /**
     * getErrors
     *
     * @return array
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    
    /**
     * @param array $errors
     */
    public function setErrors(array $errors) : void
    {
        $this->errors = $errors;
    }
}
