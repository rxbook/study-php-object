<?php

//创建空类Tst
class Tst
{
}

//创建子类MyTst
class MyTst extends Tst
{
    private $type;
}

//实例化对象$tst
$tst = new MyTst();
//判断对象$tst是否属于类MyTst
if ($tst instanceof MyTst) {
    echo '对象$tst属于类MyTst！<br>';
} else {
    echo '对象$tst不属于类MyTst！！<br>';
}

//判断对象$tst是否属于类Tst
if ($tst instanceof Tst) {
    echo '对象$tst属于类Tst！<br>';
} else {
    echo '对象$tst不属于类Tst！！<br>';
}