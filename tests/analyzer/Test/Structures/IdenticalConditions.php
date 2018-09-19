<?php

namespace Test\Structures;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class IdenticalConditions extends Analyzer {
    /* 5 methods */

    public function testStructures_IdenticalConditions01()  { $this->generic_test('Structures/IdenticalConditions.01'); }
    public function testStructures_IdenticalConditions02()  { $this->generic_test('Structures/IdenticalConditions.02'); }
    public function testStructures_IdenticalConditions03()  { $this->generic_test('Structures/IdenticalConditions.03'); }
    public function testStructures_IdenticalConditions04()  { $this->generic_test('Structures/IdenticalConditions.04'); }
    public function testStructures_IdenticalConditions05()  { $this->generic_test('Structures/IdenticalConditions.05'); }
}
?>