<?php

namespace Test\Extensions;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Extsockets extends Analyzer {
    /* 1 methods */

    public function testExtensions_Extsockets01()  { $this->generic_test('Extensions_Extsockets.01'); }
}
?>