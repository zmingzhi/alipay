<?php
namespace zongphp\alipay\build;

use zongphp\alipay\service\PagePayService;
use zongphp\config\Config;
use zongphp\request\Request;

/**
 * 支付宝
 * Class Base
 *
 * @package zongphp\alipay\build
 */
class Base
{
    use PagePayService;

    /**
     * 签名验证
     * 支付宝通知时的签名验证
     * 验证通过后才可以更新定单信息
     * @return bool
     */
    public function signCheck()
    {
        $alipaySevice = new \AlipayTradeService(Config::get('alipay'));

        return $alipaySevice->check(Request::request());
    }
}
