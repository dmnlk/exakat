<?php

namespace Test;

include_once(dirname(dirname(dirname(__DIR__))).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class Classes_ClassUsage extends Analyzer {
    /* 4 methods */

    public function testClasses_ClassUsage01()  { $this->generic_test('Classes_ClassUsage.01'); }
    public function testClasses_ClassUsage02()  { $this->generic_test('Classes_ClassUsage.02'); }
    public function testClasses_ClassUsage03()  { $this->generic_test('Classes_ClassUsage.03'); }
    public function testClasses_ClassUsage04()  { $this->generic_test('Classes_ClassUsage.04'); }
}
?>