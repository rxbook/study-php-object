<?php

/**
 * __toString()方法
 */
class Sport3
{
    private $type = 'DIY';

    public function __toString()
    {
        return $this->type;
    }
}

$myComputer = new Sport3();
echo '对象$myComputer的值为：';
echo $myComputer;

