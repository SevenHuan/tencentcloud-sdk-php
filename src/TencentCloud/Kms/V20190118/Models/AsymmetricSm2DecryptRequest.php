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
namespace Hdgtxcloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AsymmetricSm2Decrypt请求参数结构体
 *
 * @method string getKeyId() 获取CMK的唯一标识
 * @method void setKeyId(string $KeyId) 设置CMK的唯一标识
 * @method string getCiphertext() 获取使用PublicKey加密的密文，Base64编码。密文长度不能超过256字节。
 * @method void setCiphertext(string $Ciphertext) 设置使用PublicKey加密的密文，Base64编码。密文长度不能超过256字节。
 */
class AsymmetricSm2DecryptRequest extends AbstractModel
{
    /**
     * @var string CMK的唯一标识
     */
    public $KeyId;

    /**
     * @var string 使用PublicKey加密的密文，Base64编码。密文长度不能超过256字节。
     */
    public $Ciphertext;

    /**
     * @param string $KeyId CMK的唯一标识
     * @param string $Ciphertext 使用PublicKey加密的密文，Base64编码。密文长度不能超过256字节。
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Ciphertext",$param) and $param["Ciphertext"] !== null) {
            $this->Ciphertext = $param["Ciphertext"];
        }
    }
}
