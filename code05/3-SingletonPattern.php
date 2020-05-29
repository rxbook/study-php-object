<?php

/**
 * 单例模式
 */
class Singleton
{
    private static $instance = null;

    //私有类型的构造方法
    private function __construct()
    {
    }

    //确保只生成一个类实例
    public static function getInstance()
    {
        if (self::$instance == null) {
            return new Singleton ();
        }
        return self::$instance;
    }

    public function printStr()
    {
        echo "任兴PHP";
    }
}

$class = Singleton::getInstance(); //获取单元素
$class->printStr(); //输出：任兴PHP
