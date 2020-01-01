<?php

class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;

    public function __construct($value)
    {
        $this->val = $value;
    }

    public function insert($val)
    {
        if (null === $val) {
            return;
        }
        if ($val < $this->val) {
            if ($this->left) {
                $this->left->insert($val);
            } else {
                $this->left = new TreeNode($val);
            }
        } else {
            if ($this->right) {
                $this->right->insert($val);
            } else {
                $this->right = new TreeNode($val);
            }
        }
    }

    public static function transform($data)
    {
        $root = new TreeNode($data[0] ?? null);
        $size = count($data);
        for ($i = 1; $i < $size; $i++) {
            $root->insert($data[$i]);
        }
        return $root;
    }
}
