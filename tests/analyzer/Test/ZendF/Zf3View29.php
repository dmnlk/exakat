<?php

namespace Test\ZendF;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class Zf3View29 extends Analyzer {
    /* 1 methods */

    public function testZendF_Zf3View2901()  { $this->generic_test('ZendF/Zf3View29.01'); }
}
?>