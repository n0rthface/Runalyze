<?php

namespace Runalyze\Parameter;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2014-09-15 at 19:03:16.
 */
class ParameterBoolTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @var \Runalyze\Parameter\Bool
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->object = new Bool(true);
	}

	public function testValues() {
		$this->assertEquals( true, $this->object->value() );
		$this->assertEquals( 'true', $this->object->valueAsString() );

		$this->object->set(false);

		$this->assertEquals( false, $this->object->value() );
		$this->assertEquals( 'false', $this->object->valueAsString() );

		$this->object->setFromString('true');

		$this->assertEquals( true, $this->object->value() );
		$this->assertEquals( 'true', $this->object->valueAsString() );
	}

}