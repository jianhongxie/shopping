<?php
/**
 * Created by PhpStorm.
 * User: niugengyun
 * Date: 2019/1/8
 * Time: 15:54
 */

namespace Shopping\OpenSDK\JingDong;


interface RequestInterface
{
    public function getMethod();

    public function getParamJson();
}