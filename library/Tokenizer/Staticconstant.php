<?php

namespace Tokenizer;

class Staticconstant extends TokenAuto {
    static public $operators = array('T_DOUBLE_COLON');
    static public $atom = 'Staticconstant';

    public function _check() {
        $this->conditions = array( -2 => array('filterOut2' => array('T_NS_SEPARATOR')),
                                   -1 => array('atom'       => array('Constant', 'Identifier', 'Variable', 'Array', 'Static', 'Nsname')), 
                                    0 => array('token'      => Staticconstant::$operators),
                                    1 => array('atom'       => array('Constant', 'Identifier', 'Boolean')), 
                                    2 => array('filterOut'  => array('T_DOUBLE_COLON', 'T_OPEN_PARENTHESIS')),
                                 );
        
        $this->actions = array('makeEdge'   => array( -1 => 'CLASS',
                                                       1 => 'CONSTANT'),
                               'atom'       => 'Staticconstant',
                               'cleanIndex' => true );
        $this->checkAuto(); 

        return $this->checkRemaining();
    }

    public function fullcode() {
        return <<<GREMLIN

fullcode.setProperty('fullcode',  it.out("CLASS").next().getProperty('fullcode') + "::" + it.out("CONSTANT").next().getProperty('fullcode'));

GREMLIN;
    }
}

?>