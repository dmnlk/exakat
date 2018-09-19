<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class EchoTagUsage extends Analyzer {
    /* 2 methods */

    public function testPhp_EchoTagUsage01()  { $this->generic_test('Php/EchoTagUsage.01'); }
    public function testPhp_EchoTagUsage02()  { $this->generic_test('Php/EchoTagUsage.02'); }
}
?>