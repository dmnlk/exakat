<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class ListWithAppends extends Analyzer {
    /* 2 methods */

    public function testPhp_ListWithAppends01()  { $this->generic_test('Php/ListWithAppends.01'); }
    public function testPhp_ListWithAppends02()  { $this->generic_test('Php/ListWithAppends.02'); }
}
?>