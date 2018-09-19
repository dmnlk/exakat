<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class PHP72scalartypehints extends Analyzer {
    /* 2 methods */

    public function testPhp_PHP72scalartypehints01()  { $this->generic_test('Php/PHP72scalartypehints.01'); }
    public function testPhp_PHP72scalartypehints02()  { $this->generic_test('Php/PHP72scalartypehints.02'); }
}
?>