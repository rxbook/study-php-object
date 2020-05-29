<?php

class Example
{
    public function __toString()
    {
        return "张三";
    }
}

$object = new Example();
echo $object;