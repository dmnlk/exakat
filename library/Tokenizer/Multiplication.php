<?php

namespace Tokenizer;

class Multiplication extends TokenAuto {
    static public $operators = array('T_STAR','T_SLASH','T_PERCENTAGE');
    
    function _check() {

        $operands = array('Integer', 'Addition', 'Variable', 'Multiplication','Sign','Not',
                          'Parenthesis', 'Property', 'Array', 'Concatenation', 'Float',
                          'String', 'Preplusplus', 'Postplusplus', 'Nsname', );
        
        $this->conditions = array(-1 => array('atom' => $operands ),
                                  0 => array('token' => Multiplication::$operators,
                                             'atom' => 'none'),
                                  1 => array('atom' => $operands),
        );
        
        $this->actions = array('makeEdge'    => array( '1' => 'RIGHT',
                                                      '-1' => 'LEFT'
                                                      ),
                               'atom'       => 'Multiplication');
    
        return $this->checkAuto();
    }
    
    function reserve() {
        Token::$reserved[] = '*';
        Token::$reserved[] = '/';
        Token::$reserved[] = '%';
        
        return true;
    }

}

?>