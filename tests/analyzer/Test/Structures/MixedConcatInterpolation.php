<?php

namespace Test\Structures;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class MixedConcatInterpolation extends Analyzer {
    /* 2 methods */

    public function testStructures_MixedConcatInterpolation01()  { $this->generic_test('Structures/MixedConcatInterpolation.01'); }
    public function testStructures_MixedConcatInterpolation02()  { $this->generic_test('Structures/MixedConcatInterpolation.02'); }
}
?>