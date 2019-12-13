<?php
/**
 * Created by PhpStorm.
 *
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../../../vendor/autoload.php';

use Shopping\OpenSDK\ClassArr;
use Shopping\OpenSDK\JingDong\Request\JdUnionGoodsPromotiongoodsinfoQueryRequest;
class JdUnionGoodsJingfenQuery
{

    private $appKey = '550be597417c87f1b8f5fac667c097a6';

    private $appSecret = 'de28004730f8418b8136c78b1295ebde';

    public function __invoke()
    {
        date_default_timezone_set("PRC");
        $class=new ClassArr();
        $classStats=$class->SdkClassStat();
        $c=$class->initClass('jingdong',$classStats,[$this->appKey,$this->appSecret]);
        $req = new JdUnionGoodsPromotiongoodsinfoQueryRequest;
        $req->setSkuIds('7275691');
        $req->getParamJson();
        $result = $c->execute($req);
        var_dump($result);
    }

}

(new JdUnionGoodsJingfenQuery())();