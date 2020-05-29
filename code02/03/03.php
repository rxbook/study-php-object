<?php

/**
 * __sleep()方法 和 __wakeup()方法
 */
class Sport2
{
    private $type = 'DIY'; //声明私有变量并赋初值

    public function getType()
    {
        return $this->type;
    }

    public function __sleep()
    {
        echo '这是__sleep()方法。。。';
        return $this;
    }

    public function __wakeup()
    {
        echo '这是__wakeup()方法。。。';
    }
}

$myBook = new Sport2(); //实例化对象$myBook
$i = serialize($myBook); //序列化对象
echo '序列化后的字符串：' . $i . '<br>'; //输出字串$i
$reBook = unserialize($i); //将字串$i重新转换为对象$reBook
echo '还原后的成员变量为：' . $reBook->getType();
