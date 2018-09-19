<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class CloseTagsConsistency extends Analyzer {
    /* 6 methods */

    public function testPhp_CloseTagsConsistency01()  { $this->generic_test('Php/CloseTagsConsistency.01'); }
    public function testPhp_CloseTagsConsistency02()  { $this->generic_test('Php/CloseTagsConsistency.02'); }
    public function testPhp_CloseTagsConsistency03()  { $this->generic_test('Php/CloseTagsConsistency.03'); }
    public function testPhp_CloseTagsConsistency04()  { $this->generic_test('Php/CloseTagsConsistency.04'); }
    public function testPhp_CloseTagsConsistency05()  { $this->generic_test('Php/CloseTagsConsistency.05'); }
    public function testPhp_CloseTagsConsistency06()  { $this->generic_test('Php/CloseTagsConsistency.06'); }
}
?>