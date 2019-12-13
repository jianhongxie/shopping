<?php
namespace Shopping\OpenSDK;
class ClassArr{

    /**
     * sdk对应命名空间路径
     * @return array
     * @date 2019/12/13 11:55
     */
    public function SdkClassStat() {
        return [
            "taobao" => "Shopping\OpenSDK\TaoBao\Application",
            "jingdong" => "Shopping\OpenSDK\JingDong\Application",
            "pinduoduo" => "Shopping\OpenSDK\PinDuoDuo\Application",
            "suning" => "Shopping\OpenSDK\SuNing\Application",
            "vip" => "Shopping\OpenSDK\Vip\Application",
        ];
    }

    /**
     * 初始化类
     * @param $type
     * @param $supportedClass
     * @param array $params
     * @param bool $needInstance
     * @return bool|object
     * @date time
     */
    public function initClass($type, $supportedClass, $params = [], $needInstance = true) {
        if(!array_key_exists($type, $supportedClass)) {
            return false;
        }
        $className = $supportedClass[$type];
        return $needInstance ? (new \ReflectionClass($className))->newInstanceArgs($params) : $className;
    }
}