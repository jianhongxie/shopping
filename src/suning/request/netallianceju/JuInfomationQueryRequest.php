<?php
/**
 * 苏宁开放平台接口 - 批量查询大聚会商品信息
 *
 * @author suning
 * @date   2015-9-14
 */

namespace Shopping\OpenSDK\SuNing\Request\NetallianceJu;

use Shopping\OpenSDK\SuNing\SelectSuningRequest;
use Shopping\OpenSDK\SuNing\RequestCheckUtil;

class JuInfomationQueryRequest extends SelectSuningRequest
{
    public function getApiMethodName()
    {
        return 'suning.netalliance.juinfomation.query';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
    }

    public function getBizName()
    {
        return "queryJuInfomation";
    }

}

?>