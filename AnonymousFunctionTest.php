<?php
declare(strict_types=1);

/**
 * Find errors in this code.
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
