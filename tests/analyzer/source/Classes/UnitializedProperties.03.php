<?php

$a = new class implements Logger { 
    private $foo;
    private $foo2 = 1;

    function foo() {
        A::$foo = 2;
        self::$foo = 1;
        static::$foo = 1;
    }
} ;

class A implements Logger { 
    function foo() {
        A::foo();
    }
}

?>