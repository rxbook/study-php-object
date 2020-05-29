<?php
/**
 * final关键字
 */

//如果希望某个类不被其它的类来继承(可能因为安全考虑...), 可以使用final关键字
final class B
{
}

/*
class B1 extends B
{
    //这里就会报错，因为final关键字使B类不能被继承
}
*/
