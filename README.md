# taobao-top-client
Taobao top client(SDK) for laravel 5


```php
use TopClient;
use TopClient\request\TbkItemsGetRequest;

$topclient = TopClient::connection();
$req = new OpenSmsSendvercodeRequest;
$send_ver_code_request = new SendVerCodeRequest;
$send_ver_code_request->expireTime="600";
$send_ver_code_request->sessionLimit="123";
$send_ver_code_request->deviceLimit="123";
$send_ver_code_request->deviceLimitInTime="600";
$send_ver_code_request->mobileLimit="123";
$send_ver_code_request->sessionLimitInTime="123";
$send_ver_code_request->externalId="12345";
$send_ver_code_request->mobileLimitInTime="123";
$send_ver_code_request->templateId="123";
$send_ver_code_request->signatureId="123";
$send_ver_code_request->sessionId="demo";
$send_ver_code_request->domain="demo";
$send_ver_code_request->deviceId="demo";
$send_ver_code_request->mobile=$mobile;
$send_ver_code_request= json_encode($send_ver_code_request,JSON_UNESCAPED_UNICODE);
$req->setSendVerCodeRequest($send_ver_code_request);
$resp = $topclient->execute($req);
```