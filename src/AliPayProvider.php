<?php
namespace zongphp\alipay;

use zongphp\framework\build\Provider;

class AliPayProvider extends Provider {

	//延迟加载
	public $defer = false;

	public function boot() {
	}

	public function register() {
		$this->app->single( 'AliPay', function ( $app ) {
			return new AliPay();
		} );
	}
}
