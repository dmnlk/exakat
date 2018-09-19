<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class Php72ObjectKeyword extends Analyzer {
    /* 1 methods */

    public function testPhp_Php72ObjectKeyword01()  { $this->generic_test('Php/Php72ObjectKeyword.01'); }
}
?>