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
namespace Hdgtxcloud\Emr\V20190103\Models;
use Hdgtxcloud\Common\AbstractModel;

/**
 * InquiryPriceCreateInstance返回参数结构体
 *
 * @method float getOriginalCost() 获取原价，单位为元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalCost(float $OriginalCost) 设置原价，单位为元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscountCost() 获取折扣价，单位为元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscountCost(float $DiscountCost) 设置折扣价，单位为元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeUnit() 获取购买实例的时间单位。取值范围：
<li>s：表示秒。</li>
<li>m：表示月份。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeUnit(string $TimeUnit) 设置购买实例的时间单位。取值范围：
<li>s：表示秒。</li>
<li>m：表示月份。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeSpan() 获取购买实例的时长。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeSpan(integer $TimeSpan) 设置购买实例的时长。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class InquiryPriceCreateInstanceResponse extends AbstractModel
{
    /**
     * @var float 原价，单位为元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalCost;

    /**
     * @var float 折扣价，单位为元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiscountCost;

    /**
     * @var string 购买实例的时间单位。取值范围：
<li>s：表示秒。</li>
<li>m：表示月份。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeUnit;

    /**
     * @var integer 购买实例的时长。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeSpan;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $OriginalCost 原价，单位为元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DiscountCost 折扣价，单位为元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeUnit 购买实例的时间单位。取值范围：
<li>s：表示秒。</li>
<li>m：表示月份。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeSpan 购买实例的时长。
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
        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("DiscountCost",$param) and $param["DiscountCost"] !== null) {
            $this->DiscountCost = $param["DiscountCost"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
