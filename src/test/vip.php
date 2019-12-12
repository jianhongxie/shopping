<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../../vendor/autoload.php';

use Shopping\OpenSDK\Vip\Client;
use Shopping\OpenSDK\Vip\request\OauthRefreshTokenRequest;
use Shopping\OpenSDK\Vip\Libs\Util;

class OauthRefreshTokenTest
{

    private $appKey = 'e3bf4b79';

    private $appSecret = '03B5CEAB58F44A99321636CBD2DBCE30';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new OauthRefreshTokenRequest();
        $req->setRefreshToken('18D5E01F7B1C1CAF9912058211A7CF4A09E3F1BC');
        $req->setClientId($this->appKey);
        $req->setClientSecret($this->appSecret);
        $req->setRequestClientId(Util::ip());
        $c->setRequest($req);
        $result = $c->execute();

        var_dump($result);
    }

}

(new OauthRefreshTokenTest())();