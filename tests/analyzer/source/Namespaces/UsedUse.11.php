<?php

namespace A\B;

trait usedT { }
trait usedT2 { }
trait usedT3 { }
trait usedT5 { }

trait unused {}

namespace A\C;
use \A\B\usedT as usedT4;
use \A\B\usedT5;
use \A\B\someClass as unused;

trait usingT {
    use usedT4, usedT5, \A\B\usedT2;
    use \A\B\usedT3 ;
}

trait usingOtherTrait {
    use \A\B\unknownT;
}

trait noTrait {
}

?>