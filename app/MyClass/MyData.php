<?php

namespace App\MyClass;
class MyData
{
    public $data = [];

    public function get($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    public function set($key, $val)
    {
        return $this->data[$key] = $val;
    }

    public function isEmpty($key)
    {
        return empty($this->data[$key]);
    }

    public function all()
    {
        return $this->data;
    }
}