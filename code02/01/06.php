<?php
/**
 * 继承
 */

//父类
class Sports
{
    public $name; //定义成员变量：姓名
    public $age; //年龄
    public $avgs; //体重
    public $sex; //性别

    public function __construct($name, $age, $avgs, $sex) //定义构造方法
    {
        $this->name = $name;  //为成员变量赋值
        $this->age = $age;
        $this->avgs = $avgs;
        $this->sex = $sex;
    }

    function showMe() //在父类中定义方法
    {
        echo "这句话是父类中的，不会显示出来！";
    }
}

//子类
class basketball extends Sports //定义子类，继承父类
{
    public $height; //身高

    public function __construct($name, $height) //定义构造方法
    {
        $this->name = $name;
        $this->height = $height;
    }

    function showMe()
    {
        if ($this->height > 180) {
            return $this->name . "可以打篮球！";
        } else {
            return $this->name . "不能达到打篮球的标准！";
        }
    }
}

//子类
class weight extends Sports
{
    function showMe()
    {
        if ($this->avgs < 85) {
            return $this->name . "可以完成举重运动！";
        } else {
            return $this->name . "没有达到举重的要求！！";
        }
    }
}

//实例化对象
$lq = new basketball('赵六', '224');
$lq2 = new basketball('张三', '165');
$jz = new weight('李四', '38', '78', '男');
$jz2 = new weight('王五', '55', '90', '女');
echo $lq->showMe() . "<br>";
echo $lq2->showMe() . "<br>";
echo $jz->showMe() . "<br>";
echo $jz2->showMe();
