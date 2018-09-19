<?php

namespace Test\Type;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class ShouldBeSingleQuote extends Analyzer {
    /* 3 methods */

    public function testType_ShouldBeSingleQuote01()  { $this->generic_test('Type_ShouldBeSingleQuote.01'); }
    public function testType_ShouldBeSingleQuote02()  { $this->generic_test('Type_ShouldBeSingleQuote.02'); }
    public function testType_ShouldBeSingleQuote03()  { $this->generic_test('Type/ShouldBeSingleQuote.03'); }
}
?>