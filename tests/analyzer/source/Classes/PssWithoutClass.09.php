<?php

self::B3;

class x extends y {
    const A = 4;
    
    function move ( $a, 
                    $b = self::B,
                    $c = self::C,
                    $e = parent::D ) {}
}

class y {
    const D = 1;
}

?>