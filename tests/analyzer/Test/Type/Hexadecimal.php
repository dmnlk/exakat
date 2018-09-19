<?php

namespace Test\Type;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class Hexadecimal extends Analyzer {
    /* 3 methods */

    public function testType_Hexadecimal01()  { $this->generic_test('Type_Hexadecimal.01'); }
    public function testType_Hexadecimal02()  { $this->generic_test('Type_Hexadecimal.02'); }
    public function testType_Hexadecimal03()  { $this->generic_test('Type/Hexadecimal.03'); }
}
?>