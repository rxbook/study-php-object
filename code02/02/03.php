<?php

/**
 * 接口的使用
 */
interface MyBlog //声明接口MyBlog
{
    function blog();
}

interface MyBBS  //声明接口MyBBS
{
    function bbs();
}

class Member implements MyBlog   //创建子类Member，实现一个接口MyBlog
{
    function blog()
    {
        echo '会员在博客拥有的权限。';
    }
}

class Manager implements MyBlog, MyBBS //创建子类Manager，实现多个接口MyBlog，MyBBS
{
    function blog()
    {
        echo '管理员拥有会员在博客中的所有权限。';
    }

    function bbs()
    {
        echo '管理员还拥有会员在论坛中没有的权限。';
    }
}

$member = new Member(); //类Member实例化
$member->blog(); //调用$member对象的blog方法
echo '<p>';
$manager = new Manager(); //类Manager实例化
$manager->blog(); //调用$manager对象的blog方法
$manager->bbs(); //调用$manager对象的bbs方法