<?php

namespace Test;

include_once(dirname(dirname(dirname(__DIR__))).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');

class Type_Pcre extends Analyzer {
    /* 1 methods */

    public function testType_Pcre01()  { $this->generic_test('Type_Pcre.01'); }
}
?>