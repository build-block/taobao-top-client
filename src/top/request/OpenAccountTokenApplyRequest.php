<?php

namespace TopClient\request;

/**
 * TOP API: taobao.open.account.token.apply request
 *
 * @author auto create
 * @since  1.0, 2015.06.30
 */
class OpenAccountTokenApplyRequest
{

	/**
	 * isv自己账号的唯一id
	 **/
	private $isvAccountId;

	/**
	 * ISV APP的登录态时长单位是秒
	 **/
	private $loginStateExpireIn;

	/**
	 * open account id
	 **/
	private $openAccountId;

	/**
	 * 时间戳单位是毫秒
	 **/
	private $tokenTimestamp;

	/**
	 * 用于防重放的唯一id
	 **/
	private $uuid;

	private $apiParas = [ ];


	public function getIsvAccountId()
	{
		return $this->isvAccountId;
	}


	public function setIsvAccountId($isvAccountId)
	{
		$this->isvAccountId               = $isvAccountId;
		$this->apiParas["isv_account_id"] = $isvAccountId;
	}


	public function getLoginStateExpireIn()
	{
		return $this->loginStateExpireIn;
	}


	public function setLoginStateExpireIn($loginStateExpireIn)
	{
		$this->loginStateExpireIn                = $loginStateExpireIn;
		$this->apiParas["login_state_expire_in"] = $loginStateExpireIn;
	}


	public function getOpenAccountId()
	{
		return $this->openAccountId;
	}


	public function setOpenAccountId($openAccountId)
	{
		$this->openAccountId               = $openAccountId;
		$this->apiParas["open_account_id"] = $openAccountId;
	}


	public function getTokenTimestamp()
	{
		return $this->tokenTimestamp;
	}


	public function setTokenTimestamp($tokenTimestamp)
	{
		$this->tokenTimestamp              = $tokenTimestamp;
		$this->apiParas["token_timestamp"] = $tokenTimestamp;
	}


	public function getUuid()
	{
		return $this->uuid;
	}


	public function setUuid($uuid)
	{
		$this->uuid             = $uuid;
		$this->apiParas["uuid"] = $uuid;
	}


	public function getApiMethodName()
	{
		return "taobao.open.account.token.apply";
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
