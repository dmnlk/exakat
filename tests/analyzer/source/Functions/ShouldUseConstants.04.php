<?php

htmlspecialchars('a', (ENT_COMPAT));
htmlspecialchars('a', (ENT_COMPAT + 1));
htmlspecialchars('a', (ENT_COMPAT | ENT_COMPAT));

htmlspecialchars('a', $v ? ENT_COMPAT : ENT_COMPAT);
htmlspecialchars('a', $v ? 1 + 2 : ENT_COMPAT);
htmlspecialchars('a', $v ? ENT_COMPAT : 3 + 3);
htmlspecialchars('a', $v ? ENT_COMPAT : (3 + 3));


htmlspecialchars('a', (__CLASS__));
htmlspecialchars('a', ($v ? ENT_COMPAT : __CLASS__));
htmlspecialchars('a', ($v ? __CLASS__ : ENT_COMPAT));

htmlspecialchars($text, $quote_style | ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8', false);

?>