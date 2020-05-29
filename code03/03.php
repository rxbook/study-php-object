<?php

/**类的成员方法*/
class Cat
{
    public $name;
    public $age;

    public function speak()
    {
        echo '喵喵喵....';
    }
}

//调用成员方法
$c = new Cat();
$c->speak();