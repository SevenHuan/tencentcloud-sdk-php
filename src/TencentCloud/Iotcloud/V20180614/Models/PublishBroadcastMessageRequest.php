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
namespace Hdgtxcloud\Iotcloud\V20180614\Models;
use Hdgtxcloud\Common\AbstractModel;

/**
 * PublishBroadcastMessage请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getPayload() 获取消息内容
 * @method void setPayload(string $Payload) 设置消息内容
 * @method integer getQos() 获取消息质量等级
 * @method void setQos(integer $Qos) 设置消息质量等级
 */
class PublishBroadcastMessageRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 消息内容
     */
    public $Payload;

    /**
     * @var integer 消息质量等级
     */
    public $Qos;

    /**
     * @param string $ProductId 产品ID
     * @param string $Payload 消息内容
     * @param integer $Qos 消息质量等级
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }
    }
}
