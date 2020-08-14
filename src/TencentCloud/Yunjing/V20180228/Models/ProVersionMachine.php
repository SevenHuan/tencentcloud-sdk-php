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
namespace Hdgtxcloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 需要开通专业版机器信息。
 *
 * @method string getMachineType() 获取主机类型。
<li>CVM: 虚拟主机</li>
<li>BM: 黑石物理机</li>
 * @method void setMachineType(string $MachineType) 设置主机类型。
<li>CVM: 虚拟主机</li>
<li>BM: 黑石物理机</li>
 * @method string getMachineRegion() 获取主机所在地域。
如：ap-guangzhou、ap-beijing
 * @method void setMachineRegion(string $MachineRegion) 设置主机所在地域。
如：ap-guangzhou、ap-beijing
 * @method string getQuuid() 获取主机唯一标识Uuid。
黑石的InstanceId，CVM的Uuid
 * @method void setQuuid(string $Quuid) 设置主机唯一标识Uuid。
黑石的InstanceId，CVM的Uuid
 */
class ProVersionMachine extends AbstractModel
{
    /**
     * @var string 主机类型。
<li>CVM: 虚拟主机</li>
<li>BM: 黑石物理机</li>
     */
    public $MachineType;

    /**
     * @var string 主机所在地域。
如：ap-guangzhou、ap-beijing
     */
    public $MachineRegion;

    /**
     * @var string 主机唯一标识Uuid。
黑石的InstanceId，CVM的Uuid
     */
    public $Quuid;

    /**
     * @param string $MachineType 主机类型。
<li>CVM: 虚拟主机</li>
<li>BM: 黑石物理机</li>
     * @param string $MachineRegion 主机所在地域。
如：ap-guangzhou、ap-beijing
     * @param string $Quuid 主机唯一标识Uuid。
黑石的InstanceId，CVM的Uuid
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
        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
