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
namespace Hdgtxcloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTargetGroupList请求参数结构体
 *
 * @method array getTargetGroupIds() 获取目标组ID数组
 * @method void setTargetGroupIds(array $TargetGroupIds) 设置目标组ID数组
 * @method array getFilters() 获取过滤条件数组，支持TargetGroupVpcId和TargetGroupName。与TargetGroupIds互斥，优先使用目标组ID，
 * @method void setFilters(array $Filters) 设置过滤条件数组，支持TargetGroupVpcId和TargetGroupName。与TargetGroupIds互斥，优先使用目标组ID，
 * @method integer getOffset() 获取显示的偏移起始量
 * @method void setOffset(integer $Offset) 设置显示的偏移起始量
 * @method integer getLimit() 获取显示条数限制，默认为20
 * @method void setLimit(integer $Limit) 设置显示条数限制，默认为20
 */
class DescribeTargetGroupListRequest extends AbstractModel
{
    /**
     * @var array 目标组ID数组
     */
    public $TargetGroupIds;

    /**
     * @var array 过滤条件数组，支持TargetGroupVpcId和TargetGroupName。与TargetGroupIds互斥，优先使用目标组ID，
     */
    public $Filters;

    /**
     * @var integer 显示的偏移起始量
     */
    public $Offset;

    /**
     * @var integer 显示条数限制，默认为20
     */
    public $Limit;

    /**
     * @param array $TargetGroupIds 目标组ID数组
     * @param array $Filters 过滤条件数组，支持TargetGroupVpcId和TargetGroupName。与TargetGroupIds互斥，优先使用目标组ID，
     * @param integer $Offset 显示的偏移起始量
     * @param integer $Limit 显示条数限制，默认为20
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
        if (array_key_exists("TargetGroupIds",$param) and $param["TargetGroupIds"] !== null) {
            $this->TargetGroupIds = $param["TargetGroupIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
