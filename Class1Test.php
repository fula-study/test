<?php
declare ( strict_types = 1 )
	;

namespace tests;

// require 'vendor/autoload.php'; // この行を追加
use PHPUnit\Framework\TestCase;
use smp;

// require_once __DIR__ . "/../smp/Class1.php";
require_once __DIR__ . "/../smp/Class1.php";
final class Class1Test extends TestCase {

	/**
	 *
	 * @var
	 */
	private $class1;

	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp(): void {
		$_SERVER ["DOCUMENT_ROOT"] = "D:\pleiades_php\xampp\htdocs\sample\src";
		$_GET ['ABC'] = "b";
		$_GET ['DEF'] = "def";

		$this->class1 = new smp\Class1(/* parameters */);

		parent::setUp ();

		// TODO Auto-generated Class1Test::setUp()
	}

	/**
	 *
	 * @covers  Class1
	 */
	public function testPushAndPop(): void {
		$stack = [ ];
		$this->assertSame ( 0, count ( $stack ) );

		array_push ( $stack, 'foo' );
		$this->assertSame ( 'foo', $stack [count ( $stack ) - 1] );
		$this->assertSame ( 1, count ( $stack ) );

		$this->assertSame ( 'foo', array_pop ( $stack ) );
		$this->assertSame ( 0, count ( $stack ) );

		
		$this->assertSame (null,$this->testInit());
		$this->assertSame (null,$this->testExec());
	}

	/**
	 *
	 * @covers  Class1
	 */
	private function testInit():void{
		$this->class1->init ();
	}
	
	/**
	 *
	 * @covers  Class1
	 */
	private function testExec(): void {
// 		$this->markTestIncomplete ( "exec test not implemented" );

		$this->class1->exec(/* parameters */);
	}
}