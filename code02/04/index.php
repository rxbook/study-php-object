<?php
function __autoload($class_name)
{
    $class_path = $class_name . '.class.php'; //类文件路径
    if (file_exists($class_path)) //判断类文件是否存在
    {
        include_once($class_path); //动态包含类文件
    } else {
        echo '类路径错误！';
    }
}

$myBook = new SportList("足球"); //实例化对象
echo $myBook; //输出类内容
