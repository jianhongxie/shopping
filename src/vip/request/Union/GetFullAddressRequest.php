<?php
/**
 * 商品信息
 *
 * @link: null
 *
 * @brief: 获取指定商品id集合的商品信息，注：返回开发者的商品佣金信息
 *
 * 
 * Date: 2019/9/27
 * Time: 21:01
 */
namespace Shopping\OpenSDK\Vip\request\Union;

use Shopping\OpenSDK\Vip\RequestInterface;
use Shopping\OpenSDK\Vip\libs\Util;

class GetFullAddressRequest implements RequestInterface
{

    /**
     * 服务
     *
     * @var string
     */
    public $service = 'vipapis.address.AddressService';

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'getFullAddress';

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


    public function setAreaCode($val)
    {
        $this->apiParams['area_code'] = $val;
    }

    public function setIsShowGate($val)
    {
        $this->apiParams['is_show_gat'] = $val;
    }

    public function setIsBind($val)
    {
        $this->apiParams['is_bind'] = $val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        $this->apiParams['requestId'] = Util::requestId();

        return $this->apiParams;
    }

}