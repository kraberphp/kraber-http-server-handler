<?php

namespace Kraber\Test\Unit\Http\Server;

use Kraber\Test\Unit\Http\TestCase;
use Kraber\Http\Server\Middleware;

class MiddlewareTest extends TestCase
{
	public function testConstructorInitializesProperties() {
		$middleware = new Middleware();
	}
}
