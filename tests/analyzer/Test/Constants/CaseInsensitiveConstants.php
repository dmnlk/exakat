<?php

namespace Test\Constants;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class CaseInsensitiveConstants extends Analyzer {
    /* 1 methods */

    public function testConstants_CaseInsensitiveConstants01()  { $this->generic_test('Constants/CaseInsensitiveConstants.01'); }
}
?>