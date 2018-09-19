<?php

namespace Test\Structures;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class UselessUnset extends Analyzer {
    /* 3 methods */

    public function testStructures_UselessUnset01()  { $this->generic_test('Structures_UselessUnset.01'); }
    public function testStructures_UselessUnset02()  { $this->generic_test('Structures_UselessUnset.02'); }
    public function testStructures_UselessUnset03()  { $this->generic_test('Structures/UselessUnset.03'); }
}
?>