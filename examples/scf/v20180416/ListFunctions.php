<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use Hdgtxcloud\Common\Credential;
use Hdgtxcloud\Common\Profile\ClientProfile;
use Hdgtxcloud\Common\Profile\HttpProfile;
use Hdgtxcloud\Common\Exception\TencentCloudSDKException;
use Hdgtxcloud\Scf\V20180416\ScfClient;
use Hdgtxcloud\Scf\V20180416\Models\ListFunctionsRequest;
try {
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"), getenv("TENCENTCLOUD_SECRET_KEY"));
    $httpProfile = new HttpProfile();
    $httpProfile->setEndpoint("scf.tencentcloudapi.com");

    $clientProfile = new ClientProfile();
    $clientProfile->setHttpProfile($httpProfile);
    $client = new ScfClient($cred, "ap-guangzhou", $clientProfile);

    $req = new ListFunctionsRequest();

    $params = '{}';
    $req->fromJsonString($params);


    $resp = $client->ListFunctions($req);

    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
