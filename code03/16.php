<?php

/**
 * 一个类只能继承一个父类，（直接继承）.如果你希望继承多个类的属性和方法，则使用多层继承
 */
class C
{
    public $n1 = 90;
}

//C1继承C
class C1 extends C
{
    public $n2 = "my name is C1";
}

//C2继承C1
class C2 extends C1
{

}

//实例化C2
$c2 = new C2();
echo $c2->n1;//输出90