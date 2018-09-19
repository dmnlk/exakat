<?php

namespace Test\Functions;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class CouldReturnVoid extends Analyzer {
    /* 1 methods */

    public function testFunctions_CouldReturnVoid01()  { $this->generic_test('Functions/CouldReturnVoid.01'); }
}
?>