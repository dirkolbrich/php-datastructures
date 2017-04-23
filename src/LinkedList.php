<?php
declare(strict_types=1);

namespace DataStructures;

use DataStructures\LinkedListNode;

class LinkedList
{
    /**
     * @var mixed
     */
    private $head = null;
    
    /**
     * @var int 
     */
    private $count = 0;

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return ($this->head === null) ? true : false;
    }

    /**
     * @return int
     */
    public function size(): int
    {
        return $this->count;
    }

    /**
     * @param mixed $data
     * @return self
     */
    public function push($data): self
    {
        $node = new LinkedListNode($data);
        $current = $this->head;
        $node->next() = $current;
        $this->head = $node;
        
        // increase count by 1
        ++$this->count;
        
        return $this; 
    }
    
    /**
     * @return mixed
     */
    public function pop(): mixed
    {
        $current = $this->head;
        $this->head = $current->next();
        
        // decrease count by 1
        --$this->count;
        
        return $current->data(); 
    }

    /**
     * @return mixed
     */
    public function peek(): mixed
    {
        return $this->head->data();
    }
}
