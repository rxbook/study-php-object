<?php

/**
 * this的使用
 */
class Dog
{
    public $name;
    public $age;

    public function __construct($dogname, $dogage)
    {
        $this->name = $dogname;
        $this->age = $dogage;
        echo "我是dog的构造方法...<br>";
    }
}

$d = new Dog('张三', 26);
echo '我叫' . $d->name . '，年龄是' . $d->age;