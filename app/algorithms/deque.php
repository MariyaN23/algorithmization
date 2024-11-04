<?php

class Deque
{
    public $data;
    public $prev;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->prev = null;
        $this->next = null;
    }
}

class DoublyLinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function insert($data)
    {
        $newNode = new Deque($data);

        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
            $newNode->prev = $current;
        }
    }

    public function display()
    {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " ";
            $current = $current->next;
        }
    }
}