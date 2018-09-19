<?php

namespace Test\Interfaces;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class UsedInterfaces extends Analyzer {
    /* 3 methods */

    public function testInterfaces_UsedInterfaces01()  { $this->generic_test('Interfaces_UsedInterfaces.01'); }
    public function testInterfaces_UsedInterfaces02()  { $this->generic_test('Interfaces/UsedInterfaces.02'); }
    public function testInterfaces_UsedInterfaces03()  { $this->generic_test('Interfaces/UsedInterfaces.03'); }
}
?>