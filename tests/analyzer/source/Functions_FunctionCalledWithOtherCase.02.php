<?php

class x {
    function abc() { }
    static function sabc() { }
}


abC();  // dummy 
sabC(); // dummy 
new aBc(); // dummy 
new saBc(); // dummy 

$x->ABC();
$x->abc();
$x->sabC();

x::Sabc();
x::sabc();

?>