<?php

namespace Test\Php;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class ShellFavorite extends Analyzer {
    /* 1 methods */

    public function testPhp_ShellFavorite01()  { $this->generic_test('Php/ShellFavorite.01'); }
}
?>