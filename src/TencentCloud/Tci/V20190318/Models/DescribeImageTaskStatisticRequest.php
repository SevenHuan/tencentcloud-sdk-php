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
use Hdgtxcloud\Common\AbstractModel;

/**
 * DescribeImageTaskStatistic请求参数结构体
 *
 * @method integer getJobId() 获取图像任务标识符
 * @method void setJobId(integer $JobId) 设置图像任务标识符
 */
class DescribeImageTaskStatisticRequest extends AbstractModel
{
    /**
     * @var integer 图像任务标识符
     */
    public $JobId;

    /**
     * @param integer $JobId 图像任务标识符
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }
    }
}
