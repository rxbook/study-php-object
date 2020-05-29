<?php
/**
 * 全局变量 global
 */
//定义一个全局变量
global $a;
//给全局变量$a 赋值
$ac = 9;
function test4()
{
    //global $ac; //加上这个结果就是90
    $ac = 90;
}

//调用函数
test4();
echo $ac; //结果为9