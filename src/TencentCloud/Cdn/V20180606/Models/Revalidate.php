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
namespace Hdgtxcloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 是否回源站校验
 *
 * @method string getSwitch() 获取on | off 是否总是回源校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置on | off 是否总是回源校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取只在特定请求路径回源站校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置只在特定请求路径回源站校验
注意：此字段可能返回 null，表示取不到有效值。
 */
class Revalidate extends AbstractModel
{
    /**
     * @var string on | off 是否总是回源校验
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var string 只在特定请求路径回源站校验
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @param string $Switch on | off 是否总是回源校验
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path 只在特定请求路径回源站校验
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
