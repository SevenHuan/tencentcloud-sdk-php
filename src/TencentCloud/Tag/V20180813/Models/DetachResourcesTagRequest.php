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
namespace Hdgtxcloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetachResourcesTag请求参数结构体
 *
 * @method string getServiceType() 获取资源所属业务名称
 * @method void setServiceType(string $ServiceType) 设置资源所属业务名称
 * @method array getResourceIds() 获取资源ID数组，资源个数最多为50
 * @method void setResourceIds(array $ResourceIds) 设置资源ID数组，资源个数最多为50
 * @method string getTagKey() 获取需要解绑的标签键
 * @method void setTagKey(string $TagKey) 设置需要解绑的标签键
 * @method string getResourceRegion() 获取资源所在地域不区分地域的资源不需要传入该字段
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域不区分地域的资源不需要传入该字段
 * @method string getResourcePrefix() 获取资源前缀，cos存储桶不需要传入该字段
 * @method void setResourcePrefix(string $ResourcePrefix) 设置资源前缀，cos存储桶不需要传入该字段
 */
class DetachResourcesTagRequest extends AbstractModel
{
    /**
     * @var string 资源所属业务名称
     */
    public $ServiceType;

    /**
     * @var array 资源ID数组，资源个数最多为50
     */
    public $ResourceIds;

    /**
     * @var string 需要解绑的标签键
     */
    public $TagKey;

    /**
     * @var string 资源所在地域不区分地域的资源不需要传入该字段
     */
    public $ResourceRegion;

    /**
     * @var string 资源前缀，cos存储桶不需要传入该字段
     */
    public $ResourcePrefix;

    /**
     * @param string $ServiceType 资源所属业务名称
     * @param array $ResourceIds 资源ID数组，资源个数最多为50
     * @param string $TagKey 需要解绑的标签键
     * @param string $ResourceRegion 资源所在地域不区分地域的资源不需要传入该字段
     * @param string $ResourcePrefix 资源前缀，cos存储桶不需要传入该字段
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }
    }
}
