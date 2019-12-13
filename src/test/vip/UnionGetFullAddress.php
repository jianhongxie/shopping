<?php
/**
 * Created by PhpStorm.
 * 
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../../../vendor/autoload.php';

use Shopping\OpenSDK\Vip\request\Union\GetFullAddressRequest;
use Shopping\OpenSDK\ClassArr;

class UnionGetFullAddress
{

    private $appKey = 'e3bf4b79';

    private $appSecret = '03B5CEAB58F44A99321636CBD2DBCE30';

    public function __invoke()
    {

        $class=new ClassArr();
        $classStats=$class->SdkClassStat();
        $c=$class->initClass('vip',$classStats,[$this->appKey,$this->appSecret]);
        $req = new GetFullAddressRequest();
        $req->setAreaCode('0');
        $c->setRequest($req);
        $result = $c->execute();
        var_dump($result);
    }

}

(new UnionGetFullAddress())();