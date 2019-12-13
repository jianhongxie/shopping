<?php
/**
 * Created by PhpStorm.
 *
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../../../vendor/autoload.php';

use Shopping\OpenSDK\ClassArr;
use Shopping\OpenSDK\PinDuoDuo\Request\DdkGoodsDetailRequest;
class DdkGoodsPidQuery
{

    private $appKey = '3a21e00954a047fa9042832c9de3f249';

    private $appSecret = 'c552a7bbd6936af7f808f66c032cc676f095ba97';

    public function __invoke()
    {
        date_default_timezone_set("PRC");
        $class=new ClassArr();
        $classStats=$class->SdkClassStat();
        $c=$class->initClass('pinduoduo',$classStats,[$this->appKey,$this->appSecret]);
        $req = new DdkGoodsDetailRequest;
        $req->setGoodsIdList(json_encode(['6730722720']));
        $result = $c->execute($req);
        var_dump($result);
    }

}

(new DdkGoodsPidQuery())();