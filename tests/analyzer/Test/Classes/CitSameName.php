<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class CitSameName extends Analyzer {
    /* 6 methods */

    public function testClasses_CitSameName01()  { $this->generic_test('Classes_CitSameName.01'); }
    public function testClasses_CitSameName02()  { $this->generic_test('Classes_CitSameName.02'); }
    public function testClasses_CitSameName03()  { $this->generic_test('Classes/CitSameName.03'); }
    public function testClasses_CitSameName04()  { $this->generic_test('Classes/CitSameName.04'); }
    public function testClasses_CitSameName05()  { $this->generic_test('Classes/CitSameName.05'); }
    public function testClasses_CitSameName06()  { $this->generic_test('Classes/CitSameName.06'); }
}
?>