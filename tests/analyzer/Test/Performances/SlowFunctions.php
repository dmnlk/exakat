<?php

namespace Test\Performances;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class SlowFunctions extends Analyzer {
    /* 1 methods */

    public function testPerformances_SlowFunctions01()  { $this->generic_test('Performances_SlowFunctions.01'); }
}
?>