<?php

namespace Test\Functions;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class RedeclaredPhpFunction extends Analyzer {
    /* 2 methods */

    public function testFunctions_RedeclaredPhpFunction01()  { $this->generic_test('Functions_RedeclaredPhpFunction.01'); }
    public function testFunctions_RedeclaredPhpFunction02()  { $this->generic_test('Functions_RedeclaredPhpFunction.02'); }
}
?>