<?php
/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-4-23
 */

namespace Shopping\OpenSDK\SuNing\Request\Netalliance;

use Shopping\OpenSDK\SuNing\SuningRequest;
use Shopping\OpenSDK\SuNing\RequestCheckUtil;

class CustompromotionurlQueryRequest extends SuningRequest
{
    /**
     *
     */
    private $adBookId;

    /**
     *
     */
    private $visitUrl;

    public function getAdBookId()
    {
        return $this->adBookId;
    }

    public function setAdBookId($adBookId)
    {
        $this->adBookId = $adBookId;
        $this->apiParams["adBookId"] = $adBookId;
    }

    public function getVisitUrl()
    {
        return $this->visitUrl;
    }

    public function setVisitUrl($visitUrl)
    {
        $this->visitUrl = $visitUrl;
        $this->apiParams["visitUrl"] = $visitUrl;
    }

    public function getApiMethodName()
    {
        return 'suning.netalliance.custompromotionurl.query';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
        RequestCheckUtil::checkNotNull($this->adBookId, 'adBookId');
        RequestCheckUtil::checkNotNull($this->visitUrl, 'visitUrl');
    }

    public function getBizName()
    {
        return "queryCustompromotionurl";
    }

}

?>