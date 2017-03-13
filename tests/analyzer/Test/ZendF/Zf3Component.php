<?php

namespace Test;

include_once(dirname(dirname(dirname(dirname(__DIR__)))).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class ZendF_Zf3Component extends Analyzer {
    /* 1 methods */

    public function testZendF_Zf3Component01()  { $this->generic_test('ZendF/Zf3Component.01'); }
}
?>