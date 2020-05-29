<?php

/**
 * 观察者模式
 */
interface IObserver
{
    function onChanged($sender, $args);
}

interface IObservable
{
    function addObserver($observer);
}

class UserList implements IObservable
{
    private $_observers = array();

    public function addCustomer($name)
    {
        foreach ($this->_observers as $obs) {
            $obs->onChanged($this, $name);
        }
    }

    public function addObserver($observer)
    {
        $this->_observers [] = $observer;
    }
}

class UserListLogger implements IObserver
{
    public function onChanged($sender, $args)
    {
        echo("$args 被添加到用户列表中<br>");
    }
}

$ul = new UserList();
$ul->addObserver(new UserListLogger());
$ul->addCustomer("北京");
$ul->addCustomer("上海");
$ul->addCustomer("深圳");
$ul->addCustomer("西安");
?>
