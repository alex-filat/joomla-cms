<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Table
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

require_once JPATH_PLATFORM . '/joomla/table/table.php';

/**
 * Test class for JTable.
 * Generated by PHPUnit on 2011-12-06 at 03:47:50.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Table
 * @since       11.1
 */
class JTableTest extends TestCaseDatabase
{
	/**
	 * @var JTable
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return void
	 */
	protected function setUp()
	{
		/**
		 * JTable is abstract class.  Needs Mock
		 * $this->object = new JTable;
		 */
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 *
	 * @return void
	 */
	protected function tearDown()
	{
	}

	/**
	 * Test...
	 *
	 * @covers JTable::getFields
	 * @todo   Implement testGetFields().
	 *
	 * @return void
	 */
	public function testGetFields()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::getInstance
	 * @todo   Implement testGetInstance().
	 *
	 * @return void
	 */
	public function testGetInstance()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Tests the JTable addIncludePath method.
	 *
	 * @return  void
	 *
	 * @since   12.1
	 */
	public function testAddIncludePath()
	{
		$result = JTable::addIncludePath();

		$this->assertThat(
			realpath($result[0]),
			$this->equalTo(realpath(JPATH_PLATFORM . '/joomla/table')),
			'The default return from addIncludePath without additional parameters should be to "JPATH_PLATFORM . /joomla/table"'
		);
	}

	/**
	 * Test...
	 *
	 * @covers JTable::getTableName
	 * @todo   Implement testGetTableName().
	 *
	 * @return void
	 */
	public function testGetTableName()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::getKeyName
	 * @todo   Implement testGetKeyName().
	 *
	 * @return void
	 */
	public function testGetKeyName()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::getDbo
	 * @todo   Implement testGetDbo().
	 *
	 * @return void
	 */
	public function testGetDbo()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::setDbo
	 * @todo   Implement testSetDBO().
	 *
	 * @return void
	 */
	public function testSetDBO()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::setRules
	 * @todo   Implement testSetRules().
	 *
	 * @return void
	 */
	public function testSetRules()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::getRules
	 * @todo   Implement testGetRules().
	 *
	 * @return void
	 */
	public function testGetRules()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::reset
	 * @todo   Implement testReset().
	 *
	 * @return void
	 */
	public function testReset()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::bind
	 * @todo   Implement testBind().
	 *
	 * @return void
	 */
	public function testBind()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::load
	 * @todo   Implement testLoad().
	 *
	 * @return void
	 */
	public function testLoad()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::check
	 * @todo   Implement testCheck().
	 *
	 * @return void
	 */
	public function testCheck()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::store
	 * @todo   Implement testStore().
	 *
	 * @return void
	 */
	public function testStore()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::save
	 * @todo   Implement testSave().
	 *
	 * @return void
	 */
	public function testSave()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::delete
	 * @todo   Implement testDelete().
	 *
	 * @return void
	 */
	public function testDelete()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::checkOut
	 * @todo   Implement testCheckOut().
	 *
	 * @return void
	 */
	public function testCheckOut()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::checkIn
	 * @todo   Implement testCheckIn().
	 *
	 * @return void
	 */
	public function testCheckIn()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::hit
	 * @todo   Implement testHit().
	 *
	 * @return void
	 */
	public function testHit()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::isCheckedOut
	 * @todo   Implement testIsCheckedOut().
	 *
	 * @return void
	 */
	public function testIsCheckedOut()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::getNextOrder
	 * @todo   Implement testGetNextOrder().
	 *
	 * @return void
	 */
	public function testGetNextOrder()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::reorder
	 * @todo   Implement testReorder().
	 *
	 * @return void
	 */
	public function testReorder()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::move
	 * @todo   Implement testMove().
	 *
	 * @return void
	 */
	public function testMove()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @covers JTable::publish
	 * @todo   Implement testPublish().
	 *
	 * @return void
	 */
	public function testPublish()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}
}