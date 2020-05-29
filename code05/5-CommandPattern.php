<?php
/**
 * 命令模式
 */

//命令处理接口ICommand
interface ICommand
{
    function onCommand($name, $args);
}

class CommandChain
{
    //私有成员属性$_commands
    private $_commands = array();

    //添加命令处理
    public function addCommand($cmd)
    {
        $this->_commands [] = $cmd;
    }

    //执行命令
    public function runCommand($name, $args)
    {
        foreach ($this->_commands as $cmd) {
            if ($cmd->onCommand($name, $args))
                return;//如果执行命令成功就退出循环
        }
    }
}

//用户命令处理类UserCommand
class UserCommand implements ICommand
{
    public function onCommand($name, $args)
    {
        if ($name != '用户') {
            return false;
        } else {
            echo("用户命令处理：" . $name . "\n");
            return true;
        }
    }
}

//邮件命令处理类MailCommand
class MailCommand implements ICommand
{
    public function onCommand($name, $args)
    {
        if ($name != '邮件') {
            return false;
        } else {
            echo("邮件命令处理：" . $name . "\n");
            return true;
        }
    }
}

$cc = new CommandChain();
$cc->addCommand(new UserCommand());
$cc->addCommand(new MailCommand());
$cc->runCommand('用户', null);
$cc->runCommand('邮件', null);