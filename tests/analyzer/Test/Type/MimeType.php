<?php

namespace Test\Type;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class MimeType extends Analyzer {
    /* 1 methods */

    public function testType_MimeType01()  { $this->generic_test('Type_MimeType.01'); }
}
?>