<?php
/**
 * 魔术方法__
 */

//__set()方法 和__get()方法
class SportObject
{
    private $type = '';

    private function __get($name)
    {
        if (isset($this->$name)) //判断变量是否被声明
        {
            echo '变量' . $name . '的值为：' . $this->$name . '<br>';
        } else {
            echo '变量' . $name . '未定义，初始化为0<br>';
            $this->$name = 0;
        }
    }

    private function __set($name, $value)
    {
        if (isset($this->$name)) {
            $this->$name = $value;
            echo '变量' . $name . '赋值为：' . $value . '<br>';
        } else {
            $this->$name = $value;
            echo '变量' . $name . '初始化为' . $value . '<br>';
        }
    }
}

$sport = new SportObject();
$sport->type = '篮球';
$sport->type;
$sport->name;