<?php
declare(strict_types=1);

namespace DataStructures

class LinkedListNode
{
    /**
     * @var mixed
     */
    private $data;
    
    /**
     * @var mixed|null
     */
    private $next = null;

    /**
     * class constructor
     *
     * @param mixed $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * check if $data is empty
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return ($this->data == null) ? true : false;
    }

    /**
     * check if $next is null
     *
     * @return bool
     */
    public function hasNext(): bool
    {
        return ($this->next !== null) ? true : false;
    }

    /**
     * set data
     *
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * get the $data
     *
     * @return mixed
     */
    public function data()
    {
        return $this->data;
    }

    /**
     * set the $next node
     *
     * @param mixed $data
     */
    public function setNext($data)
    {
        $this->next = $data;
    }

    /**
     * get the $next node
     *
     * @return mixed
     */
    public function next()
    {
        return $this->next;
    }
}
