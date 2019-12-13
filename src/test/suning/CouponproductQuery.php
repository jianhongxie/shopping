<?php
/**
 * Created by PhpStorm.
 *
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../../../vendor/autoload.php';

use Shopping\OpenSDK\ClassArr;
use Shopping\OpenSDK\SuNing\Request\Netalliance\CouponproductQueryRequest;
class CouponproductQuery
{

    private $appKey = '40bfe6c7c7420d9d27d46ec3ebc45d04';

    private $appSecret = 'f7c41d24416147fb0788a235ef908ebf';

    public function __invoke()
    {
        date_default_timezone_set("PRC");
        $class=new ClassArr();
        $classStats=$class->SdkClassStat();
        $c=$class->initClass('suning',$classStats,[$this->appKey,$this->appSecret]);
        $req = new CouponproductQueryRequest;
        $req->setPageNo("1");
        $req->setPageSize("10");
        $req->setPositionId("1");
        $req ->setCheckParam('true');
        $result = $c->execute($req);
        var_dump($result);
    }

}

(new CouponproductQuery())();