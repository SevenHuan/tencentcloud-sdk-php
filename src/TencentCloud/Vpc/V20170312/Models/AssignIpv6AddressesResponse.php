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
use Hdgtxcloud\Common\AbstractModel;

/**
 * AssignIpv6Addresses返回参数结构体
 *
 * @method array getIpv6AddressSet() 获取分配给弹性网卡的`IPv6`地址列表。
 * @method void setIpv6AddressSet(array $Ipv6AddressSet) 设置分配给弹性网卡的`IPv6`地址列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class AssignIpv6AddressesResponse extends AbstractModel
{
    /**
     * @var array 分配给弹性网卡的`IPv6`地址列表。
     */
    public $Ipv6AddressSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Ipv6AddressSet 分配给弹性网卡的`IPv6`地址列表。
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
        if (array_key_exists("Ipv6AddressSet",$param) and $param["Ipv6AddressSet"] !== null) {
            $this->Ipv6AddressSet = [];
            foreach ($param["Ipv6AddressSet"] as $key => $value){
                $obj = new Ipv6Address();
                $obj->deserialize($value);
                array_push($this->Ipv6AddressSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
