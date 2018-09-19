<?php

namespace Test\Symfony;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class Symfony32Undefined extends Analyzer {
    /* 1 methods */

    public function testSymfony_Symfony32Undefined01()  { $this->generic_test('Symfony/Symfony32Undefined.01'); }
}
?>