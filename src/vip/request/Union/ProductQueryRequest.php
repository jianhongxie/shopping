<?php
/**
 * 查询商品列表
 *
 * @link: null
 *
 * @brief: 根据关键字查询商品列表，支持指定排序字段，注：返回开发者的商品佣金信息
 *
 * 
 * Date: 2019/9/27
 * Time: 21:01
 */
namespace Shopping\OpenSDK\Vip\request\Union;

use Shopping\OpenSDK\Vip\RequestInterface;
use Shopping\OpenSDK\Vip\libs\Util;

class ProductQueryRequest implements RequestInterface
{

    /**
     * 服务
     *
     * @var string
     */
    public $service = 'com.vip.adp.api.open.service.UnionGoodsService';

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'query';

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

    private $keyword;   //

    private $fieldName; // 排序字段：支持price和discount

    private $order;     // 排序：0-正序，1-逆序

    private $page;      // 页码：从1开始

    private $pageSize;  // 分页大小：默认20，最大500

    private $priceStart;// 价格区间---start

    private $priceEnd;  // 价格区间---end

    private $apiParams = [];


    public function setKeyword($val)
    {
        $this->keyword = (string)$val;
        $this->apiParams['keyword'] = (string)$val;
    }

    public function setFieldName($val)
    {
        $this->fieldName = (string)$val;
        $this->apiParams['fieldName'] = (string)$val;
    }

    public function setOrder($val)
    {
        $this->order = (int)$val;
        $this->apiParams['order'] = (int)$val;
    }

    public function setPage($val)
    {
        $this->page = (int)$val;
        $this->apiParams['page'] = (int)$val;
    }

    public function setPageSize($val)
    {
        $this->pageSize = (int)$val;
        $this->apiParams['pageSize'] = (int)$val;
    }

    public function setPriceStart($val)
    {
        $this->priceStart = (string)$val;
        $this->apiParams['priceStart'] = (string)$val;
    }

    public function setPriceEnd($val)
    {
        $this->priceEnd = (string)$val;
        $this->apiParams['priceEnd'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        $this->apiParams['requestId'] = Util::requestId();

        return ['request' => $this->apiParams];
    }

}