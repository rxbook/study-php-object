<?php
/**
 * 构造方法（构造函数）
 */

class Map
{
    public $name;
    public $age;

    //PHP5中独有的
    public function __construct()
    {
        echo "这是PHP5中的构造方法。";
    }
    //PHP5和PHP4都可以用，但优先选择上面的
    /*public function Map(){
        echo "这是PHP4中的构造方法。";
    }*/
}

$m = new Map();