<?php

/**
 * Erfurt Sparql Query2 - Filter.
 * 
 * holds a constraint. no action here
 * 
 * @package    ontowiki
 * @subpackage query2
 * @author     Jonas Brekle <jonas.brekle@gmail.com>
 * @copyright  Copyright (c) 2008, {@link http://aksw.org AKSW}
 * @license    http://opensource.org/licenses/gpl-license.php GNU General Public License (GPL)
 * @version    $Id$
 */
 
class Erfurt_Sparql_Query2_Filter extends Erfurt_Sparql_Query2_ObjectHelper
{
    protected $element;
    
    /**
     * @param Erfurt_Sparql_Query2_Constraint $element
     */
    public function __construct(Erfurt_Sparql_Query2_Constraint $element){
        $this->element = $element;
        parent::__construct();
    }
    
    /**
     * getConstraint
     * @return Erfurt_Sparql_Query2_Constraint
     */
    public function getConstraint(){
       return $this->element;
    }
    
    /**
     * setConstraint
     * @param Erfurt_Sparql_Query2_Constraint $element
     * @return Erfurt_Sparql_Query2_Filter $this
     */
    public function setConstraint(Erfurt_Sparql_Query2_Constraint $element){
       $this->element = $element;
       return $this;
    }
       
    /**
     * getSparql
     * build a valid sparql representation of this obj - should be like "FILTER([constraint])"
     * @return string
     */
    public function getSparql(){
        $constraint_str = trim($this->element->getSparql());
        
        //grammar says: brackets are not needed , sparql engines say: error...
        if(substr($constraint_str, 0, 1) != '('){
            $constraint_str = '('.$constraint_str.')';
        }
        return 'FILTER '.$constraint_str;
    }
    
    //TODO not implemented yet
    /**
     * getVars
     * get all vars used in this filter (recursive)
     * @return array array of Erfurt_Sparql_Query2_Var
     */
    public function getVars(){
        return array();
    }
}
?>