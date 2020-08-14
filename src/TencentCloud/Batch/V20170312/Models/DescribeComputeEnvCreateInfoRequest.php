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
namespace Hdgtxcloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeComputeEnvCreateInfo请求参数结构体
 *
 * @method string getEnvId() 获取计算环境ID
 * @method void setEnvId(string $EnvId) 设置计算环境ID
 */
class DescribeComputeEnvCreateInfoRequest extends AbstractModel
{
    /**
     * @var string 计算环境ID
     */
    public $EnvId;

    /**
     * @param string $EnvId 计算环境ID
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }
    }
}
