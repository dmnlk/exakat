<?php

namespace Test\Php;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class TypedPropertyUsage extends Analyzer {
    /* 1 methods */

    public function testPhp_TypedPropertyUsage01()  { $this->generic_test('Php/TypedPropertyUsage.01'); }
}
?>