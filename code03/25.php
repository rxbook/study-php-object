<?php
/**
 * 接口
 */

//使用程序模拟现实情况，定义规范(方法/属性)
interface iUsb
{
    public function start();

    public function stop();
}

//当一个类实现了 某个接口,则要求该类必须实现这个接口的所有方法
//编写相机类，让它去实现接口
class Camera implements iUsb
{
    public function start()
    {
        echo "相机开始工作...<br>";
    }

    public function stop()
    {
        echo "相机停止工作...<br>";
    }
}

//编写手机类，让它去实现接口
class Phone implements iUsb
{
    public function start()
    {
        echo "手机开始工作...<br>";
    }

    public function stop()
    {
        echo "手机停止工作...<br>";
    }
}

//相机对象
$camera1 = new Camera();
$camera1->start();
$camera1->stop();
//手机对象
$phone1 = new Phone();
$phone1->start();
$phone1->stop();