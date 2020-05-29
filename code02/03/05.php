<?php

/**
 * 面向对象的应用――中文字符串的截取类
 */

class Msubstr
{
    function csubstr($str, $start, $len) //指定字符串，字符串的起始位置，字符串长度
    {
        $tmpstr = '';
        $strlen = $start + $len; //$strlen字符串的总长度
        for ($i = 0; $i < $strlen; $i++) //循环读取字符串
        {
            //如果字符串中首个字节的ASCII序数值大于0xa0，则表示为汉字
            if (ord(substr($str, $i, 1)) > 0xa0) {
                //每次取出两位字符赋给变量$tmpstr，即等于一个汉字
                $tmpstr .= substr($str, $i, 2);
                $i++; //变量自加1
            } else //如果不是汉字，则每次取出一位字符赋给变量$tmpstr
            {
                $tmpstr .= substr($str, $i, 1);
            }
        }
        return $tmpstr; //输出字符串
    }
}

$mc = new Msubstr(); //类的实例化

$string = "我的心太乱要一些空白。你若是明白，请你给我些坦白！";
//先用普通的方法截取，此结果会产生乱码。
if (strlen($string) > 10) //判断字符串的长度如果大于10
{
    echo substr($string, 0, 9) . "......"; //截取字符串中前9个字符
} else {
    echo $string;
}

echo "<p>";

//使用上面定义的Msubstr类截取
if (strlen($string) > 10) {
    echo $mc->csubstr($string, "0", "9") . "......"; //应用类中的方法截取
} else {
    echo $string;
}
