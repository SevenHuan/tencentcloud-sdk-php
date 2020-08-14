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
namespace Hdgtxcloud\Ie\V20200304\Models;
use Hdgtxcloud\Common\AbstractModel;

/**
 * 智能集锦结果片段
 *
 * @method float getConfidence() 获取置信度，取值范围是 0 到 100。
 * @method void setConfidence(float $Confidence) 设置置信度，取值范围是 0 到 100。
 * @method float getStartTimeOffset() 获取集锦片段起始的偏移时间，单位：秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置集锦片段起始的偏移时间，单位：秒。
 * @method float getEndTimeOffset() 获取集锦片段终止的偏移时间，单位：秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置集锦片段终止的偏移时间，单位：秒。
 */
class HighlightsTaskResultItemSegment extends AbstractModel
{
    /**
     * @var float 置信度，取值范围是 0 到 100。
     */
    public $Confidence;

    /**
     * @var float 集锦片段起始的偏移时间，单位：秒。
     */
    public $StartTimeOffset;

    /**
     * @var float 集锦片段终止的偏移时间，单位：秒。
     */
    public $EndTimeOffset;

    /**
     * @param float $Confidence 置信度，取值范围是 0 到 100。
     * @param float $StartTimeOffset 集锦片段起始的偏移时间，单位：秒。
     * @param float $EndTimeOffset 集锦片段终止的偏移时间，单位：秒。
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
