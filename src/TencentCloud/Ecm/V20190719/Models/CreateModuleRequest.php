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
namespace Hdgtxcloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateModule请求参数结构体
 *
 * @method string getModuleName() 获取模块名称，如视频直播模块。限制：模块名称不得以空格开头，长度不得超过60个字符。
 * @method void setModuleName(string $ModuleName) 设置模块名称，如视频直播模块。限制：模块名称不得以空格开头，长度不得超过60个字符。
 * @method integer getDefaultBandWidth() 获取默认带宽，单位：M。范围不得超过带宽上下限，详看DescribeConfig。
 * @method void setDefaultBandWidth(integer $DefaultBandWidth) 设置默认带宽，单位：M。范围不得超过带宽上下限，详看DescribeConfig。
 * @method string getDefaultImageId() 获取默认镜像，如img-qsdf3ff2。
 * @method void setDefaultImageId(string $DefaultImageId) 设置默认镜像，如img-qsdf3ff2。
 * @method string getInstanceType() 获取机型ID。
 * @method void setInstanceType(string $InstanceType) 设置机型ID。
 * @method integer getDefaultSystemDiskSize() 获取默认系统盘大小，单位：G，默认大小为50G。范围不得超过系统盘上下限制，详看DescribeConfig。
 * @method void setDefaultSystemDiskSize(integer $DefaultSystemDiskSize) 设置默认系统盘大小，单位：G，默认大小为50G。范围不得超过系统盘上下限制，详看DescribeConfig。
 * @method integer getDefaultDataDiskSize() 获取默认数据盘大小，单位：G。范围不得超过数据盘范围大小，详看DescribeConfig。
 * @method void setDefaultDataDiskSize(integer $DefaultDataDiskSize) 设置默认数据盘大小，单位：G。范围不得超过数据盘范围大小，详看DescribeConfig。
 * @method boolean getCloseIpDirect() 获取是否关闭IP直通。取值范围：
1：表示关闭IP直通
0：表示开通IP直通
 * @method void setCloseIpDirect(boolean $CloseIpDirect) 设置是否关闭IP直通。取值范围：
1：表示关闭IP直通
0：表示开通IP直通
 * @method array getTagSpecification() 获取标签列表。
 * @method void setTagSpecification(array $TagSpecification) 设置标签列表。
 */
class CreateModuleRequest extends AbstractModel
{
    /**
     * @var string 模块名称，如视频直播模块。限制：模块名称不得以空格开头，长度不得超过60个字符。
     */
    public $ModuleName;

    /**
     * @var integer 默认带宽，单位：M。范围不得超过带宽上下限，详看DescribeConfig。
     */
    public $DefaultBandWidth;

    /**
     * @var string 默认镜像，如img-qsdf3ff2。
     */
    public $DefaultImageId;

    /**
     * @var string 机型ID。
     */
    public $InstanceType;

    /**
     * @var integer 默认系统盘大小，单位：G，默认大小为50G。范围不得超过系统盘上下限制，详看DescribeConfig。
     */
    public $DefaultSystemDiskSize;

    /**
     * @var integer 默认数据盘大小，单位：G。范围不得超过数据盘范围大小，详看DescribeConfig。
     */
    public $DefaultDataDiskSize;

    /**
     * @var boolean 是否关闭IP直通。取值范围：
1：表示关闭IP直通
0：表示开通IP直通
     */
    public $CloseIpDirect;

    /**
     * @var array 标签列表。
     */
    public $TagSpecification;

    /**
     * @param string $ModuleName 模块名称，如视频直播模块。限制：模块名称不得以空格开头，长度不得超过60个字符。
     * @param integer $DefaultBandWidth 默认带宽，单位：M。范围不得超过带宽上下限，详看DescribeConfig。
     * @param string $DefaultImageId 默认镜像，如img-qsdf3ff2。
     * @param string $InstanceType 机型ID。
     * @param integer $DefaultSystemDiskSize 默认系统盘大小，单位：G，默认大小为50G。范围不得超过系统盘上下限制，详看DescribeConfig。
     * @param integer $DefaultDataDiskSize 默认数据盘大小，单位：G。范围不得超过数据盘范围大小，详看DescribeConfig。
     * @param boolean $CloseIpDirect 是否关闭IP直通。取值范围：
1：表示关闭IP直通
0：表示开通IP直通
     * @param array $TagSpecification 标签列表。
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
        if (array_key_exists("ModuleName",$param) and $param["ModuleName"] !== null) {
            $this->ModuleName = $param["ModuleName"];
        }

        if (array_key_exists("DefaultBandWidth",$param) and $param["DefaultBandWidth"] !== null) {
            $this->DefaultBandWidth = $param["DefaultBandWidth"];
        }

        if (array_key_exists("DefaultImageId",$param) and $param["DefaultImageId"] !== null) {
            $this->DefaultImageId = $param["DefaultImageId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DefaultSystemDiskSize",$param) and $param["DefaultSystemDiskSize"] !== null) {
            $this->DefaultSystemDiskSize = $param["DefaultSystemDiskSize"];
        }

        if (array_key_exists("DefaultDataDiskSize",$param) and $param["DefaultDataDiskSize"] !== null) {
            $this->DefaultDataDiskSize = $param["DefaultDataDiskSize"];
        }

        if (array_key_exists("CloseIpDirect",$param) and $param["CloseIpDirect"] !== null) {
            $this->CloseIpDirect = $param["CloseIpDirect"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }
    }
}
