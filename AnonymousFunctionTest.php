<?php

/**
 * What will output this code?
 */
class AnonymousFunctionTest {

    private $helloText = 'Some text!';

    public function someMethod(): string
    {
        return static function() {
            return $this->helloText;
        };
    }
}

$cl = new AnonymousFunctionTest();
echo $cl->someMethod()();
