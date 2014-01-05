<?php

namespace Test;

include_once(dirname(dirname(dirname(__DIR__))).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');

class Variables_InterfaceArguments extends Analyzer {
    /* 1 methods */

    public function testVariables_InterfaceArguments01()  { $this->generic_test('Variables_InterfaceArguments.01'); }
}
?>