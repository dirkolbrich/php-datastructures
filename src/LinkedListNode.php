<?php
declare(strict_types=1);

namespace DataStructures

class LinkedListNode
{
    public $data;
    public $next = null;
    
    public function __construct($data)
    {
        $this->data = $data;
    }
}
