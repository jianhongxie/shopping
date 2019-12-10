<?php
/**
 * Created by PhpStorm.
 * User: niugengyun
 * Date: 2019/1/8
 * Time: 15:43
 */

namespace Shopping\OpenSDK\PinDuoDuo;


interface RequestInterface
{
    public function getParams();

    public function setType($type);

    public function getType();
}