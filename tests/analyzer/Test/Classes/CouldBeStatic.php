<?php

namespace Test\Classes;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class CouldBeStatic extends Analyzer {
    /* 1 methods */

    public function testClasses_CouldBeStatic01()  { $this->generic_test('Classes/CouldBeStatic.01'); }
}
?>