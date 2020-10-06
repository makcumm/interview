<?php

/**
 * What will output this code
 */

class A {
    public $someVar = 'Some text!';
}

$a = new A;

function foobar($a) {
    $a = null;
}

var_dump($a);

foobar($a);

var_dump($a);
