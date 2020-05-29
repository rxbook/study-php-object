<?php

class MyClass
{
    static $staticvariable = 0;
}

MyClass::$staticvariable++;
echo MyClass::$staticvariable;//输出：1