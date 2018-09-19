<?php

namespace Test\Structures;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class NoHardcodedPath extends Analyzer {
    /* 5 methods */

    public function testStructures_NoHardcodedPath01()  { $this->generic_test('Structures_NoHardcodedPath.01'); }
    public function testStructures_NoHardcodedPath02()  { $this->generic_test('Structures/NoHardcodedPath.02'); }
    public function testStructures_NoHardcodedPath03()  { $this->generic_test('Structures/NoHardcodedPath.03'); }
    public function testStructures_NoHardcodedPath04()  { $this->generic_test('Structures/NoHardcodedPath.04'); }
    public function testStructures_NoHardcodedPath05()  { $this->generic_test('Structures/NoHardcodedPath.05'); }
}
?>