<?php

namespace Test\Variables;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class VariablePhp extends Analyzer {
    /* 2 methods */

    public function testVariables_VariablePhp01()  { $this->generic_test('Variables_VariablePhp.01'); }
    public function testVariables_VariablePhp02()  { $this->generic_test('Variables/VariablePhp.02'); }
}
?>