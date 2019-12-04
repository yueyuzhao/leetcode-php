<?php

class MyStack {

    private $data = [];

    /**
     * Initialize your data structure here.
     */
    function __construct() {

    }

    /**
     * Push element x onto stack.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        array_push($this->data, $x);
    }

    /**
     * Removes the element on top of the stack and returns that element.
     * @return Integer
     */
    function pop() {
        return array_pop($this->data);
    }

    /**
     * Get the top element.
     * @return Integer
     */
    function top() {
        $size = count($this->data);
        return $this->data[$size - 1];
    }

    /**
     * Returns whether the stack is empty.
     * @return Boolean
     */
    function empty() {
        return empty($this->data);
    }
}
