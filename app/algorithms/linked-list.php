<?php

class LinkedList
{
    private $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function insert($data)
    {
        $newNode = (object)['data' => $data, 'next' => null];
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function delete($key)
    {
        $current = $this->head;
        $previous = null;
        while ($current !== null && $current->data !== $key) {
            $previous = $current;
            $current = $current->next;
        }
        if ($current !== null) {
            if ($previous === null) {
                $this->head = $current->next;
            } else {
                $previous->next = $current->next;
            }
        }
    }

    public function printList()
    {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " ";
            $current = $current->next;
        }
        echo "\n";
    }
}