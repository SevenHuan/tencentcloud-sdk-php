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
namespace Hdgtxcloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddIp6Rules返回参数结构体
 *
 * @method array getIp6RuleSet() 获取IPV6转换规则唯一ID数组，形如rule6-xxxxxxxx
 * @method void setIp6RuleSet(array $Ip6RuleSet) 设置IPV6转换规则唯一ID数组，形如rule6-xxxxxxxx
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class AddIp6RulesResponse extends AbstractModel
{
    /**
     * @var array IPV6转换规则唯一ID数组，形如rule6-xxxxxxxx
     */
    public $Ip6RuleSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Ip6RuleSet IPV6转换规则唯一ID数组，形如rule6-xxxxxxxx
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Ip6RuleSet",$param) and $param["Ip6RuleSet"] !== null) {
            $this->Ip6RuleSet = $param["Ip6RuleSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
