<?php

/**
 * __call()方法
 */
class Sport
{
    public function MyDream()
    {
        echo '调用的方法存在，直接执行此方法！<br>';
    }

    public function __call($method, $parameter)
    {
        echo '如果方法不存在，则执行__call()方法<br>';
        echo '方法名为：' . $method . '<br>';
        echo '方法的参数有：';
        var_dump($parameter);
    }
}

$exam = new Sport(); //实例化对象$exam
$exam->MyDream(); //调用已经存在的方法MyDream
$exam->mDream('人生', '其实', '没有', '如果'); //调用不存在的方法mDream
