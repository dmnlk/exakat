<?php

namespace Test\Functions;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class Typehints extends Analyzer {
    /* 5 methods */

    public function testFunctions_Typehints01()  { $this->generic_test('Functions_Typehints.01'); }
    public function testFunctions_Typehints02()  { $this->generic_test('Functions_Typehints.02'); }
    public function testFunctions_Typehints03()  { $this->generic_test('Functions/Typehints.03'); }
    public function testFunctions_Typehints04()  { $this->generic_test('Functions/Typehints.04'); }
    public function testFunctions_Typehints05()  { $this->generic_test('Functions/Typehints.05'); }
}
?>