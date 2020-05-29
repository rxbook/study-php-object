<?php
/**
 * 对象比较
 * 两个等号 == 是比较两个对象的内容；三个等号 === 是比较对象的引用地址
 */

class Test
{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}

$test = new Test('book'); //实例化一个对象$test
$test2 = clone $test; //克隆对象$test2
$test3 = $test; //引用对象$test3
if ($test2 == $test) //使用==比较克隆对象和原对象
{
    echo '两个对象的内容相等！<br>';
} else {
    echo '两个对象的内容不相等！！<br>';
}

if ($test3 === $test) //使用===比较引用对象和原对象
{
    echo '两个对象的引用地址相等！<br>';
} else {
    echo '两个对象的引用地址不相等！！<br>';
}
