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
namespace Hdgtxcloud\Tdmq\V20200217\Models;
use Hdgtxcloud\Common\AbstractModel;

/**
 * DescribeProducers请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境（命名空间）名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称。
 * @method string getTopicName() 获取主题名。
 * @method void setTopicName(string $TopicName) 设置主题名。
 * @method integer getOffset() 获取起始下标，不填默认为0。
 * @method void setOffset(integer $Offset) 设置起始下标，不填默认为0。
 * @method integer getLimit() 获取返回数量，不填则默认为10，最大值为20。
 * @method void setLimit(integer $Limit) 设置返回数量，不填则默认为10，最大值为20。
 * @method string getProducerName() 获取生产者名称，模糊匹配。
 * @method void setProducerName(string $ProducerName) 设置生产者名称，模糊匹配。
 */
class DescribeProducersRequest extends AbstractModel
{
    /**
     * @var string 环境（命名空间）名称。
     */
    public $EnvironmentId;

    /**
     * @var string 主题名。
     */
    public $TopicName;

    /**
     * @var integer 起始下标，不填默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，不填则默认为10，最大值为20。
     */
    public $Limit;

    /**
     * @var string 生产者名称，模糊匹配。
     */
    public $ProducerName;

    /**
     * @param string $EnvironmentId 环境（命名空间）名称。
     * @param string $TopicName 主题名。
     * @param integer $Offset 起始下标，不填默认为0。
     * @param integer $Limit 返回数量，不填则默认为10，最大值为20。
     * @param string $ProducerName 生产者名称，模糊匹配。
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProducerName",$param) and $param["ProducerName"] !== null) {
            $this->ProducerName = $param["ProducerName"];
        }
    }
}
