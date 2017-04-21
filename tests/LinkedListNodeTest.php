<?php
declare(strict_types=1);

namespace DataStructures\Tests;

use DataStructures\LinkedListNode;
use PHPUnit\Framework\TestCase;

class LinkedListNodeTest extends TestCase
{
    /**
     * Test LinkedListNode instantiation
     */
    public function testInstantiation()
    {
        $node = new LinkedListNode();

        $this->assertInstanceOf("DataStructures\LinkedListNode", $node);
        $this->assertEmpty($task->data());
        $this->assertNull($task->next());
        $this->assertTrue($task->isEmpty());
        $this->assertFalse($task->hasNext());
    }

    /**
     * Test LinkedListNode instantiation with data in constructor
     */
    public function testInstantiationWithData()
    {
        $node = new LinkedListNode('test');

        $this->assertInstanceOf("DataStructures\LinkedListNode", $node);
        $this->assertEquals($task->data, 'test');
        $this->assertFalse($task->isEmpty());
    }

    public function testSettingNext()
    {
        $node = new LinkedListNode('test');
        $node->setNext('test next');
        
        $this->assertTrue($task->hasNext());
        $this->assertEquals($task->next(), 'test next');
    }
}
