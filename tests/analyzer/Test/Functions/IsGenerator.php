<?php

namespace Test\Functions;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class IsGenerator extends Analyzer {
    /* 3 methods */

    public function testFunctions_IsGenerator01()  { $this->generic_test('Functions_IsGenerator.01'); }
    public function testFunctions_IsGenerator02()  { $this->generic_test('Functions/IsGenerator.02'); }
    public function testFunctions_IsGenerator03()  { $this->generic_test('Functions/IsGenerator.03'); }
}
?>