<?php

/**
 * 魔术方法，不推荐使用
 */
class A
{
    private $n1;
    private $n2;
    private $n3;

    //使用__set()方法管理所有属性
    public function __set($n, $v)
    {
        $this->n = $v;
    }

    //使用__get()方法获取所有属性
    public function __get($n)
    {
        if (isset($n)) {
            return $this->n;
        } else {
            return null;
        }
    }
}

$a = new A();
$a->n1 = 'hello...';
echo $a->n1;