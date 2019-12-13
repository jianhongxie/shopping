<?php
/**
 * 服务健康度检查
 *
 * @link: http://vop.vip.com/apicenter/method?serviceName=com.vip.adp.api.open.service.UnionOrderService-1.0.0&methodName=healthCheck
 *
 * @brief: 获取订单信息列表. 注：（1）订单归属人为开发者，（2）默认一分钟最多访问60次
 *
 * 
 * Date: 2019/9/27
 * Time: 21:01
 */
namespace Shopping\OpenSDK\Vip\request\Union;

use Shopping\OpenSDK\Vip\RequestInterface;
use Shopping\OpenSDK\Vip\libs\Util;

class HealthCheckRequest implements RequestInterface
{

    /**
     * 服务
     *
     * @var string
     */
    public $service = 'com.vip.adp.api.open.service.UnionOrderService';

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'healthCheck';

    /**
     * 版本号
     *
     * @var string
     */
    public $version = '1.0.0';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $apiParams = [];

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}