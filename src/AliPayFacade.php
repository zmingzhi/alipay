<?php
namespace zongphp\alipay;

use zongphp\framework\build\Facade;

class AliPayFacade extends Facade {
	public static function getFacadeAccessor() {
		return 'AliPay';
	}
}