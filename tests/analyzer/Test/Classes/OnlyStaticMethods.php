<?php

namespace Test\Classes;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class OnlyStaticMethods extends Analyzer {
    /* 1 methods */

    public function testClasses_OnlyStaticMethods01()  { $this->generic_test('Classes_OnlyStaticMethods.01'); }
}
?>