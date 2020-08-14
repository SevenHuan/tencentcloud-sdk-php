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
namespace Hdgtxcloud\Ecc\V20181213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ECC返回参数结构体
 *
 * @method CorrectData getData() 获取整体的批改结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(CorrectData $Data) 设置整体的批改结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务 id，用于查询接口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务 id，用于查询接口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ECCResponse extends AbstractModel
{
    /**
     * @var CorrectData 整体的批改结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var string 任务 id，用于查询接口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param CorrectData $Data 整体的批改结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务 id，用于查询接口
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new CorrectData();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
