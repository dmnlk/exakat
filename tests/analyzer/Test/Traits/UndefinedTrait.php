<?php

namespace Test\Traits;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class UndefinedTrait extends Analyzer {
    /* 3 methods */

    public function testTraits_UndefinedTrait01()  { $this->generic_test('Traits/UndefinedTrait.01'); }
    public function testTraits_UndefinedTrait02()  { $this->generic_test('Traits/UndefinedTrait.02'); }
    public function testTraits_UndefinedTrait03()  { $this->generic_test('Traits/UndefinedTrait.03'); }
}
?>