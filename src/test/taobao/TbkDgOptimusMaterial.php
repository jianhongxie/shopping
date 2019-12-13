<?php
/**
 * Created by PhpStorm.
 *
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../../../vendor/autoload.php';

use Shopping\OpenSDK\ClassArr;
use Shopping\OpenSDK\TaoBao\Request\TbkDgOptimusMaterialRequest;
class TbkDgOptimusMaterial
{

    private $appKey = '27976708';

    private $appSecret = 'a4dcaff9b3c36a2f300712cd9d8de2d3';

    public function __invoke()
    {

        $class=new ClassArr();
        $classStats=$class->SdkClassStat();
        $c=$class->initClass('taobao',$classStats,[$this->appKey,$this->appSecret]);
        $req = new TbkDgOptimusMaterialRequest;
        $req->setPageSize("20");
        $req->setAdzoneId("109574650027");
        $req->setPageNo("1");
        $req->setMaterialId("9660");
        $result = $c->execute($req);
        var_dump($result);
    }

}

(new TbkDgOptimusMaterial())();