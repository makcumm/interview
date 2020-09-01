<?php

/**
 * What will output this code?
 */
class AnonymousFunction {

    private $helloText = 'Some text!';

    public function someMethod(): string
    {
        return static function() {
            return $this->helloText;
        };
    }
}

$cl = new AnonymousFunction();
echo $cl->someMethod()();
