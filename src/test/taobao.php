<?php
use Shopping\OpenSDK\Factory;
use Shopping\OpenSDK\TaoBao\Request\TbkDgOptimusMaterialRequest;
require_once "../vendor/autoload.php";
$c = Factory::taobao();
$req = new TbkDgOptimusMaterialRequest;
$req->setPageSize("20");
$req->setAdzoneId("109574650027");
$req->setPageNo("1");
$req->setMaterialId("9660");
$resp = $c->execute($req);
echo $resp;