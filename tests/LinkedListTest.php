<?php
declare(strict_types=1);

namespace DataStructures\Tests;

use DataStructures\LinkedList;
use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase
{
    /**
     * Test LinkedList instantiation
     */
    public function testInstantiation()
    {
        $list = new LinkedList();

        $this->assertInstanceOf("DataStructures\LinkedList", $list);
        $this->assertTrue($list->isEmpty());
        $this->assertEquals($list->size(), 0);
    }

    public function testPushToEmptyList()
    {
        $list = new LinkedList();
        $list->push('test');

        $this->assertFalse($list->isEmpty());
        $this->assertEquals($list->size(), 1);
    }

    public function testPushToFilledList()
    {
        $list = new LinkedList();
        $list->push('test');

        $this->assertFalse($list->isEmpty());
        $this->assertEquals($list->size(), 1);
        
        $list->push('data');
        $data = $list->peek();
        
        $this->assertEquals($list->size(), 2);
        $this->assertEquals($data, 'data');
    }

    public function testPop()
    {
        $list = new LinkedList();
        $list->push('test');
        $data = $list->pop();

        $this->assertTrue($list->isEmpty());
        $this->assertEquals($list->size(), 0);
        $this->assertEquals($data, 'test');
    }

    public function testPeek()
    {
        $list = new LinkedList();
        $list->push('test');
        $data = $list->peek();

        $this->assertFalse($list->isEmpty());
        $this->assertEquals($list->size(), 1);
        $this->assertEquals($data, 'test');
    }
}
