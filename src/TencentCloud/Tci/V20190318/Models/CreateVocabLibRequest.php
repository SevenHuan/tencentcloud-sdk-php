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
namespace Hdgtxcloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVocabLib请求参数结构体
 *
 * @method string getVocabLibName() 获取词汇库名称
 * @method void setVocabLibName(string $VocabLibName) 设置词汇库名称
 */
class CreateVocabLibRequest extends AbstractModel
{
    /**
     * @var string 词汇库名称
     */
    public $VocabLibName;

    /**
     * @param string $VocabLibName 词汇库名称
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
        if (array_key_exists("VocabLibName",$param) and $param["VocabLibName"] !== null) {
            $this->VocabLibName = $param["VocabLibName"];
        }
    }
}
