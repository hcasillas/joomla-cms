<?php
require_once 'PHPUnit/Framework.php';

require_once JPATH_BASE.'/libraries/joomla/registry/registry.php';

/**
 * Test class for JRegistry.
 * Generated by PHPUnit on 2009-10-27 at 15:08:41.
 */
class JRegistryTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @todo Implement test__clone().
	 */
	public function test__clone()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement test__toString().
	 */
	public function test__toString()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testDef().
	 */
	public function testDef()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGet().
	 */
	public function testGet()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 */
	public function testGetInstance()
	{
		// Test INI format.
		$a = JRegistry::getInstance('a');
		$b = JRegistry::getInstance('a');
		$c = JRegistry::getInstance('c');

		// Check the object type.
		$this->assertThat(
			$a instanceof JRegistry,
			$this->isTrue()
		);

		// Check cache handling for same registry id.
		$this->assertThat(
			$a,
			$this->identicalTo($b)
		);

		// Check cache handling for different registry id.
		$this->assertThat(
			$a,
			$this->logicalNot($this->identicalTo($c))
		);
	}

	/**
	 */
	public function testLoadArray()
	{
		$array = array(
			'foo' => 'bar'
		);
		$registry = JRegistry::getInstance('test');
		$result = $registry->loadArray($array);

		// Result is always true, no error checking in method.

		// Test getting a known value.
		$this->assertThat(
			$registry->getValue('foo'),
			$this->equalTo('bar')
		);
	}

	/**
	 */
	public function testLoadFile()
	{
		$registry = JRegistry::getInstance('test');

		// Result is always true, no error checking in method.

		// JSON.
		$result = $registry->loadFile(dirname(__FILE__).'/jregistry.json');

		// Test getting a known value.
		$this->assertThat(
			$registry->getValue('foo'),
			$this->equalTo('bar')
		);

		// INI.
		$result = $registry->loadFile(dirname(__FILE__).'/jregistry.ini', 'ini');

		// Test getting a known value.
		$this->assertThat(
			$registry->getValue('foo'),
			$this->equalTo('bar')
		);

		// XML and PHP versions do not support stringToObject.

		$this->markTestIncomplete(
			'Need to test for a file that does not exist.'
		);
	}

	/**
	 */
	public function testLoadINI()
	{
		$string = "[section]\nfoo=\"bar\"";

		$registry = JRegistry::getInstance('test');
		$result = $registry->loadIni($string);

		// Result is always true, no error checking in method.

		// Test getting a known value.
		$this->assertThat(
			$registry->getValue('foo'),
			$this->equalTo('bar')
		);
	}

	/**
	 */
	public function testLoadJSON()
	{
		$string = '{"foo":"bar"}';

		$registry = JRegistry::getInstance('test');
		$result = $registry->loadJson($string);

		// Result is always true, no error checking in method.

		// Test getting a known value.
		$this->assertThat(
			$registry->getValue('foo'),
			$this->equalTo('bar')
		);
	}

	/**
	 */
	public function testLoadObject()
	{
		$object = new stdClass;
		$object->foo = 'bar';

		$registry = JRegistry::getInstance('test');
		$result = $registry->loadObject($object);

		// Result is always true, no error checking in method.

		// Test getting a known value.
		$this->assertThat(
			$registry->getValue('foo'),
			$this->equalTo('bar')
		);
	}

	/**
	 * @todo Implement testLoadXML().
	 */
	public function testLoadXML()
	{
		// Mega file since stringToObject is not implemented yet.
	}

	/**
	 * @todo Implement testMerge().
	 */
	public function testMerge()
	{
		$array1 = array(
			'foo' => 'bar',
			'hoo' => 'hum',
			'dum' => array(
				'dee' => 'dum'
			)
		);

		$array2 = array(
			'foo' => 'soap',
			'dum' => 'huh'
		);
		$registry1 = JRegistry::getInstance('test1');
		$registry1->loadArray($array1);

		$registry2 = JRegistry::getInstance('test2');
		$registry2->loadArray($array2);

		$registry1->merge($registry2);

		// Test getting a known value.
		$this->assertThat(
			$registry1->getValue('foo'),
			$this->equalTo('soap')
		);

		$this->assertThat(
			$registry1->getValue('dum'),
			$this->equalTo('huh')
		);
	}

	/**
	 * @todo Implement testSet().
	 */
	public function testSet()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testToString().
	 */
	public function testToString()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testToArray().
	 */
	public function testToArray()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testToObject().
	 */
	public function testToObject()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	//
	// The following methods are deprecated in 1.6
	//

	/**
	 * @todo Implement testGetNameSpaces().
	 */
	public function testGetNameSpaces()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetValue().
	 */
	public function testGetValue()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testMakeNameSpace().
	 */
	public function testMakeNameSpace()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testSetValue().
	 */
	public function testSetValue()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}



}