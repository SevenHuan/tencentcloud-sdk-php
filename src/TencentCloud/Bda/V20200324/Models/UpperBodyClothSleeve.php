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
namespace Hdgtxcloud\Bda\V20200324\Models;
use Hdgtxcloud\Common\AbstractModel;

/**
 * 上衣衣袖信息。
 *
 * @method string getType() 获取上衣衣袖信息, 返回值为以下集合中的一个 {长袖, 短袖}。
 * @method void setType(string $Type) 设置上衣衣袖信息, 返回值为以下集合中的一个 {长袖, 短袖}。
 * @method float getProbability() 获取Type识别概率值，[0.0,1.0],代表判断正确的概率。如0.8则代表有Type值有80%概率正确。
 * @method void setProbability(float $Probability) 设置Type识别概率值，[0.0,1.0],代表判断正确的概率。如0.8则代表有Type值有80%概率正确。
 */
class UpperBodyClothSleeve extends AbstractModel
{
    /**
     * @var string 上衣衣袖信息, 返回值为以下集合中的一个 {长袖, 短袖}。
     */
    public $Type;

    /**
     * @var float Type识别概率值，[0.0,1.0],代表判断正确的概率。如0.8则代表有Type值有80%概率正确。
     */
    public $Probability;

    /**
     * @param string $Type 上衣衣袖信息, 返回值为以下集合中的一个 {长袖, 短袖}。
     * @param float $Probability Type识别概率值，[0.0,1.0],代表判断正确的概率。如0.8则代表有Type值有80%概率正确。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Probability",$param) and $param["Probability"] !== null) {
            $this->Probability = $param["Probability"];
        }
    }
}
