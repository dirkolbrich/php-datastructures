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
        $this->assertEmpty($node->data());
        $this->assertNull($node->next());
        $this->assertTrue($node->isEmpty());
        $this->assertFalse($node->hasNext());
    }

    /**
     * Test LinkedListNode instantiation with data in constructor
     */
    public function testInstantiationWithData()
    {
        $node = new LinkedListNode('test');

        $this->assertInstanceOf("DataStructures\LinkedListNode", $node);
        $this->assertEquals($node->data, 'test');
        $this->assertFalse($node->isEmpty());
    }

    public function testSettingNext()
    {
        $node = new LinkedListNode('test');
        $node->setNext('test next');
        
        $this->assertTrue($node->hasNext());
        $this->assertEquals($node->next(), 'test next');
    }
}
