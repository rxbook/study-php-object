<?php

/**
 * PHP5 中通过魔术方法 __call()来实现方法重载
 */
class F
{
    public function test1($p)
    {
        echo "<br>接收一个参数，接收到的参数为：";
        var_dump($p);
    }

    public function test2($p)
    {
        echo "<br>接收两个参数，接收到的参数为：";
        var_dump($p);
    }
    //使用魔术方法 __call()
    //当一个对象调用某个方法，而该方法不存在的时候，系统会自动调用__call()方法
    function __call($method, $para)
    { //$para是个数组
        if ($method == "test") {
            if (count($para) == 1) { //当参数总数为1的时候
                $this->test1($para);
            } elseif (count($para) == 2) {
                $this->test2($para);
            }
        }
    }
}

$f = new F();
$f->test(28); //test()不存在，于是会去__call()方法里面找，这里传递一个参数
$f->test(120, 33); //这里传递两个参数