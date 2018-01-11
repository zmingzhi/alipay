<?php
namespace zongphp\alipay;

use zongphp\alipay\build\Base;
use zongphp\config\Config;

/**
 * 支付宝
 * Class AliPay
 *
 * @package zongphp\alipay
 */
class AliPay
{
    protected static $link;

    public function __call($method, $params)
    {
        if (is_null(self::$link)) {
            self::$link = new Base();
        }

        return call_user_func_array([self::$link, $method], $params);
    }

    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array([new static(), $name], $arguments);
    }
}
