<?php

interface Interface1
{
    public function getFoo();
    public function setFoo($value);
}

interface Interface2
{
    public function getFoo();
    public function setBar();
}

class Baz Implements Interface1, Interface2
{
    protected $foo = 'foo';

    public function getFoo() {
        return $this->foo;
    }

    public function setFoo($value) {
        $this->foo = $value;
    }

    public function setBar($value) {
        $this->bar = $value;
    }

}

$baz = new Baz();
echo $baz->getFoo();
