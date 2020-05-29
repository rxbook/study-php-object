<?php

/**
 * 如果希望某个方法，比如计算个人所得税的方法，不能被子类改写，
 * 可以使用fianl 来修饰方法
 */
class C
{
    final public function getRate($salary)
    {
        return $salary * 0.08;
    }
}

class C1 extends C
{
    /*
    public function getRate($sal)
    {
        //这样重载就会出错
        return $sal * 0.02;
    }
    */
}

$c1 = new C1();
echo $c1->getRate(100); //运行结果报错