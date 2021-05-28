<?php

namespace Kraber\Test\Unit\Http\Server;

use Kraber\Test\Unit\Http\TestCase;
use Kraber\Http\Server\RequestHandler;

class RequestHandlerTest extends TestCase
{
	public function testConstructorInitializesProperties() {
		$requestHandler = new RequestHandler();
	}
}
