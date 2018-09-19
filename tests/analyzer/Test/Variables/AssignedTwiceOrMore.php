<?php

namespace Test\Variables;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class AssignedTwiceOrMore extends Analyzer {
    /* 4 methods */

    public function testVariables_AssignedTwiceOrMore01()  { $this->generic_test('Variables/AssignedTwiceOrMore.01'); }
    public function testVariables_AssignedTwiceOrMore02()  { $this->generic_test('Variables/AssignedTwiceOrMore.02'); }
    public function testVariables_AssignedTwiceOrMore03()  { $this->generic_test('Variables/AssignedTwiceOrMore.03'); }
    public function testVariables_AssignedTwiceOrMore04()  { $this->generic_test('Variables/AssignedTwiceOrMore.04'); }
}
?>