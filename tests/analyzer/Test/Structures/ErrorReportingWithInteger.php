<?php

namespace Test\Structures;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class ErrorReportingWithInteger extends Analyzer {
    /* 3 methods */

    public function testStructures_ErrorReportingWithInteger01()  { $this->generic_test('Structures_ErrorReportingWithInteger.01'); }
    public function testStructures_ErrorReportingWithInteger02()  { $this->generic_test('Structures_ErrorReportingWithInteger.02'); }
    public function testStructures_ErrorReportingWithInteger03()  { $this->generic_test('Structures_ErrorReportingWithInteger.03'); }
}
?>