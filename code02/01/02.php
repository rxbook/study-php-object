<?php

/**
 * 成员变量
 */
class Sport2
{
    public $name; //定义成员变量：姓名
    public $height; //定义成员变量：身高
    public $age; //定义成员变量：年龄

    public function FootBall($name, $height, $age) //声名成员方法
    {
        $this->name = $name;
        $this->height = $height;
        $this->age = $age;

        if ($this->height > 180 && $this->age > 15) {
            return $this->name . "符合踢足球的要求！"; //方法实现的功能
        } else {
            return $this->name . "不符合要求！！！";
        }
    }
}

$spt2 = new Sport2(); //实例化类，并传递参数
echo $spt2->FootBall('郭靖', '189', '29');
echo "<br>";
echo $spt2->FootBall('黄蓉', '155', '8');