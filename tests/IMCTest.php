<?php

namespace Dojo\Tests;

class FirstClassTest extends \PHPUnit_Framework_TestCase
{
	public function testInstanceOfIMCC()
	{
		$this->assertInstanceOf('Dojo\IMC', new \Dojo\IMC);
	}
}
