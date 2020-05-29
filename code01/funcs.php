<?php
//我们一个计算，+ - * / 的代码集合->函数
//1. function 是一个关键字
//2. jiSuan 函数名(由程序员取名)
//3. $num1,$num2,$oper 是函数的参数列表(形参)
function jiSuan($num1, $num2, $oper)
{
    //$res 表示计算的结果
    $res = 0;
    switch ($oper) {

        case "+":
            $res = $num1 + $num2;
            break;
        case "-":
            $res = $num1 - $num2;
            break;
        case "*":
            $res = $num1 * $num2;
            break;
        case "/":
            $res = $num1 / $num2;
            break;
        default:
            echo '运算符号有误!';

    }
    //表示返回一个结果.
    return $res;
}


function abc($n)
{
    if ($n > 2) {
        abc(--$n); //自己调自己，称为递归
    }
    echo $n . "<br>";
}

function aaa($n)
{
    if ($n > 2) {
        aaa(--$n);
    } else {
        echo $n . "<br>";
    }
}
