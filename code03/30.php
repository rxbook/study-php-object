<?php

/**
 * const 关键字
 */
class D
{
    //常量在定义的时候，必须给初值.
    //const 关键字前面不要带修饰符号public等.
    const TAX_RATE = 0.08; //常量名要大些，不要加$符号

    public function payTax($val)
    {
        //A::TAX_RATE=0.01; //常量不能修改——报错
        //return $val*self::TAX_RATE; 【ok】
        return $val * D::TAX_RATE; //【ok】
    }
}

$d = new D();
echo $d->payTax(200); //输出16