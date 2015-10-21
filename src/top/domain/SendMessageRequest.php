<?php

namespace TopClient\domain;

/**
 * 发送短信请求
 * @author auto create
 */
class SendMessageRequest
{

    /**
     * app key
     **/
    public $appKey;

    /**
     * 业务类型
     **/
    public $bizType;

    /**
     * 模板上下文
     **/
    public $context;

    /**
     * 外部id
     **/
    public $externalId;

    /**
     * 手机号
     **/
    public $mobile;

    /**
     * 签名id
     **/
    public $signatureId;

    /**
     * 模板id
     **/
    public $templateId;

    /**
     * 用户id
     **/
    public $userId;
}

?>