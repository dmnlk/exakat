<?php

if ($a1 > 1     || $a1 < 1000) {}
if ($a2 < 1000  || $a2 > 1) {}
if ($a3 >= 1    || $a3 <= 1000) {}
if ($a4 <= 1000 || $a4 >= 1) {}

if ($a11 > 1     or $a11 < 1000) {}
if ($a12 < 1000  or $a12 > 1) {}
if ($a13 >= 1    or $a13 <= 1000) {}
if ($a14 <= 1000 or $a14 >= 1) {}


if ($b1 <= 1000 || $b2 >= 1) {}
if ($b3 <= 1000 && $b3 >= 1) {}
if ($b3 <= 1000 || $b3 != 1) {}
if ($b3 <= 1000 || $b3 <= 1) {}

?>