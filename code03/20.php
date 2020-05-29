<?php

/**
 * 魔术常量
 */
class moshu
{
    function __construct()
    {
        echo "<br>" . __LINE__; //当前的行数
        echo "<br>" . __FILE__; //当前文件绝对路径及文件名
        echo "<br>" . __DIR__;  //当前文件绝对路径
        echo "<br>" . __CLASS__;//当前的类名
        echo "<br>" . __FUNCTION__;  //当前的函数（方法）名
        echo "<br>" . __METHOD__;  //类的方法名
        echo "<br>" . __NAMESPACE__;  //命名空间[不常用]
    }
}

$ms = new moshu();