<?php

class MinStack {
    private $data = [];
    private $count = 0;
    private $min = null;

    /**
     * initialize your data structure here.
     */
    function __construct() {
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->data[] = $x;
        $this->count++;
        if (null === $this->min) {
            $this->min = $x;
        } else if ($x < $this->min) {
            $this->min = $x;
        }
    }

    /**
     * @return NULL
     */
    function pop() {
        $val = array_pop($this->data);
        $this->count--;
        if ($this->count == 0) {
            $this->min = null;
            return;
        }
        if ($val == $this->min) {
            $this->min = min($this->data);
        }
    }

    /**
     * @return Integer|null
     */
    function top() {
        if ($this->count == 0) {
            return null;
        }
        return $this->data[$this->count - 1];
    }

    /**
     * @return Integer|null
     */
    function getMin() {
        return $this->min;
    }
}
