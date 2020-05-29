<?php

/**
 * 封装
 */
class Person
{
    public $name;//名字，公开
    protected $age; //年龄，受保护
    private $salary; //工资，隐私

    //构造方法
    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    //成员方法[默认为public，如果变成private function show()就不能访问了]
    function show()
    {
        //本类内部调用，可以实现
        echo $this->name . '&nbsp;' . $this->age . '&nbsp;' . $this->salary . '<br>';
    }

    //思路延伸：根据不同权限判断是否可以查看工资：
    function getSalary($user, $pwd)
    {
        if ($user == 'rx' && $pwd == 'rx') {
            return $this->salary;
        } else {
            return '对不起，您无权查看！';
        }
    }

    //思路延伸：对指定的值进行修改
    function setAge($age)
    {
        //可以判断年龄范围是否合法
        if ($age >= 0 && $age <= 120) {
            $this->age = $age;
        } else {
            echo '年龄不合法！';
        }
    }

    //获取上面修改年龄的方法（此处忽略权限等等）
    function getAge()
    {
        return $this->age;
    }

    //注意：成员方法之间互相调用，需要使用$this->…
    function test1()
    {
        $this->test2();//如果直接使用test2()会出错
    }

    function test2()
    {
        echo '这是test2....';
    }

}

$p1 = new Person("吴承恩", 50, 1200);
$p1->show(); //可以访问
echo $p1->name; //外部可以访问公开的属性
//echo $p1->age; //会报错，外部不能访问受保护属性
//echo $p1->salary; //会报错，外部不能访问私有属性

echo $p1->getSalary('rx', 'rx') . '<br>'; //输出1200

$p1->setAge(18);//如果传入130会提示年龄不合法
echo $p1->getAge(); //输出结果18

$p1->test1(); //输出:这是test2....’
