<?php

namespace TopClient\request;

/**
 * TOP API: taobao.openim.immsg.push request
 *
 * @author auto create
 * @since  1.0, 2015.09.23
 */
class OpenimImmsgPushRequest
{

    /**
     * openim消息结构体
     **/
    private $immsg;

    private $apiParas = [ ];


    public function getImmsg()
    {
        return $this->immsg;
    }


    public function setImmsg($immsg)
    {
        $this->immsg             = $immsg;
        $this->apiParas["immsg"] = $immsg;
    }


    public function getApiMethodName()
    {
        return "taobao.openim.immsg.push";
    }


    public function getApiParas()
    {
        return $this->apiParas;
    }


    public function check()
    {

    }


    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
