<?php

namespace Test;

include_once(dirname(dirname(__DIR__)).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');

class Extensions_Mcrypt extends Analyzer {
    /* 1 methods */

    public function testExtensions_Mcrypt01()  { $this->generic_test('Extensions_Mcrypt.01'); }
}
?>