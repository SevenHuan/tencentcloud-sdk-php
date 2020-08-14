<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Hdgtxcloud\Gaap\V20180529\Models;
use Hdgtxcloud\Common\AbstractModel;

/**
 * CloseSecurityPolicy请求参数结构体
 *
 * @method string getProxyId() 获取通道ID
 * @method void setProxyId(string $ProxyId) 设置通道ID
 * @method string getPolicyId() 获取安全组策略ID
 * @method void setPolicyId(string $PolicyId) 设置安全组策略ID
 */
class CloseSecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string 通道ID
     */
    public $ProxyId;

    /**
     * @var string 安全组策略ID
     */
    public $PolicyId;

    /**
     * @param string $ProxyId 通道ID
     * @param string $PolicyId 安全组策略ID
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
