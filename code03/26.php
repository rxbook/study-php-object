<?php

/**
 * 类和接口之间关系
 */
interface iUsb2
{ //父接口1
    public function a();
}

interface iUsb3
{ //父接口2
    public function b();
}

interface iUsbs extends iUsb2, iUsb3
{ //一个接口可以继承多个其他的接口
    const A = 90;

    function test();
}

class Class1 implements iUsbs
{
    //下面的三个方法必须实现所有接口的方法，少一个都会报错
    public function a()
    {
    }

    public function b()
    {
    }

    public function test()
    {
    }
}