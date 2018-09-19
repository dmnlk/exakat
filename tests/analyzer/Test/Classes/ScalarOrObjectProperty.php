<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class ScalarOrObjectProperty extends Analyzer {
    /* 2 methods */

    public function testClasses_ScalarOrObjectProperty01()  { $this->generic_test('Classes/ScalarOrObjectProperty.01'); }
    public function testClasses_ScalarOrObjectProperty02()  { $this->generic_test('Classes/ScalarOrObjectProperty.02'); }
}
?>