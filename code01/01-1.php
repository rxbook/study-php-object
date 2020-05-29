<?php
//引入你需要的php文件
require 'funcs.php';
//请大家完成这样一个需求:
//①输入两个数,再输入一个运算符(+,-,*,/)，得到结果.
$num1 = 34;
$num2 = 90;
$oper = "*";

//以后，要计算结果，则可以直接调用函数
$res = jiSuan($num1, $num2, $oper);
echo "计算结果是=" . $res;

echo '<hr>';

abc(4);
echo "<br>------------------------------------------------<br>";
aaa(4);

echo "<br>------------------------------------------------<br>";
/*5.一个自定义函数中的变量是局部的，函数外不生效*/
function abc3()
{
    $a = 45;
    echo 'a=' . $a;
}

abc3();
echo 'a=' . $a;  // 这里会报一个错误: Undefined variable: a

echo "<br>------------------------------------------------<br>";
/*6.使用global全局变量的时候，可使用在函数外的变量*/
$ab = 12;
function abc4()
{
    global $ab;  //我要在abc4中使用到外层 $ab;
    $ab += 45;
}

abc4();
echo $ab;


echo "<br>------------------------------------------------<br>";
/*7.如果在函数中，我们不希望使用某个变量，或者是希望彻底的不再使用某个变量,则可以用 unset(变量名)，将该变量彻底删除.*/
$a7 = 12;
unset($a7); //删除该变量，即：该变量不再存在，下面会报错。  
$a7 += 45;
echo $a7;

echo "<br>------------------------------------------------<br>";
/*8.在php函数中，我们可以给某些参数，赋一个默认的值.*/
function ccc($y, $x = 2)
{
    $res = $x + $y;
    return $res;
}

$w = 70;
echo ccc($w) . '--';  //70+2
echo ccc($w, 90) . '--'; //70+90
$v = 70;
echo ccc($w, $v); //70+70

echo "<br>------------------------------------------------<br>";
/*9.php传递变量的时候，默认是值传递，如果需要引用(地址)传递，可以使用 &变量名;*/
$p = 213;
function ddd(&$q)
{ //不加&符号的时候，输出为213，加上后输出为314
    $q = 314;
}

ddd($p);
echo $p;