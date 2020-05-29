<?php
/**
 * 在实现方法覆盖的时候，访问修饰符可以不一样.
 * 但是必须满足: 子类的访问范围>=父类的访问范围
 */

//下面程序会出错
/*
class G
{
    public function cry()
    { //这里是public
        echo "动物的叫声...";
    }
}

class G1 extends G
{
    protected function cry()
    {  //这里是protected，范围<public
        echo "一头猪的叫声...";
        G::cry();
    }
}

$g1 = new G1();
$g1->cry(); //结果会出错
*/