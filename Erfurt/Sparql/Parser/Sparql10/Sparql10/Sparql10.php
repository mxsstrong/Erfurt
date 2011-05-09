<?php
declare(ENCODING = 'utf-8') ;
namespace Erfurt\Sparql\Parser\Sparql10\Sparql10;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Thomas Maroschik <tmaroschik@dfau.de>
 *  All rights reserved
 *
 *  This class is a port of the corresponding class of the
 *  {@link http://aksw.org/Projects/Erfurt Erfurt} project.
 *  All credits go to the Erfurt team.
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * @category Erfurt
 * @package Sparql_Parser_Sparql10
 * @author Rolland Brunec <rollxx@gmail.com>
 * @copyright Copyright (c) 2010 {@link http://aksw.org aksw}
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License (GPL)
 */
# for convenience in actions
if (!defined('HIDDEN')) define('HIDDEN', \BaseRecognizer::$HIDDEN);
use \Erfurt\Sparql;
use \Erfurt\Sparql\Query2;
use \Erfurt\Sparql\Parser\Sparql10;
class Sparql10 extends \AntlrParser {

	public $PREFIX = 5;
	public $EXPONENT = 60;
	public $CLOSE_SQUARE_BRACE = 99;
	public $GRAPH = 24;
	public $REGEX = 39;
	public $PNAME_LN = 50;
	public $CONSTRUCT = 10;
	public $NOT = 6;
	public $EOF = -1;
	public $VARNAME = 51;
	public $ISLITERAL = 38;
	public $GREATER = 43;
	public $EOL = 76;
	public $NOT_EQUAL = 97;
	public $LESS = 42;
	public $LANGMATCHES = 31;
	public $DOUBLE = 61;
	public $BASE = 4;
	public $PN_CHARS_U = 79;
	public $COMMENT = 86;
	public $SELECT = 7;
	public $OPEN_CURLY_BRACE = 44;
	public $CLOSE_CURLY_BRACE = 45;
	public $DOUBLE_POSITIVE = 65;
	public $BOUND = 33;
	public $DIVIDE = 91;
	public $ISIRI = 35;
	public $A = 27;
	public $NOT_SIGN = 90;
	public $ASC = 19;
	public $ASK = 12;
	public $BLANK_NODE_LABEL = 81;
	public $SEMICOLON = 87;
	public $ISBLANK = 37;
	public $GROUP = 17;
	public $WS = 77;
	public $OR_SINGLE = 85;
	public $NAMED = 14;
	public $INTEGER_POSITIVE = 63;
	public $STRING_LITERAL2 = 72;
	public $OR = 84;
	public $FILTER = 26;
	public $DESCRIBE = 11;
	public $STRING_LITERAL1 = 71;
	public $PN_CHARS = 80;
	public $DATATYPE = 32;
	public $LESS_EQUAL = 95;
	public $DOUBLE_NEGATIVE = 68;
	public $FROM = 13;
	public $FALSE = 41;
	public $DISTINCT = 8;
	public $LANG = 30;
	public $WHERE = 15;
	public $IRI_REF = 46;
	public $ORDER = 16;
	public $LIMIT = 21;
	public $AND = 83;
	public $ASTERISK = 88;
	public $ISURI = 36;
	public $STR = 29;
	public $AS = 28;
	public $SAMETERM = 34;
	public $COMMA = 89;
	public $OFFSET = 22;
	public $EQUAL = 92;
	public $DECIMAL_POSITIVE = 64;
	public $PLUS = 62;
	public $DIGIT = 59;
	public $DOT = 57;
	public $INTEGER = 56;
	public $BY = 18;
	public $REDUCED = 9;
	public $INTEGER_NEGATIVE = 66;
	public $PN_LOCAL = 49;
	public $PNAME_NS = 48;
	public $HEX_DIGIT = 75;
	public $REFERENCE = 82;
	public $CLOSE_BRACE = 94;
	public $MINUS = 54;
	public $TRUE = 40;
	public $OPEN_SQUARE_BRACE = 98;
	public $UNION = 25;
	public $ECHAR = 69;
	public $OPTIONAL = 23;
	public $HAT_LABEL = 100;
	public $STRING_LITERAL_LONG2 = 74;
	public $PN_CHARS_BASE = 78;
	public $DECIMAL = 58;
	public $VAR1 = 52;
	public $VAR2 = 53;
	public $STRING_LITERAL_LONG1 = 73;
	public $DECIMAL_NEGATIVE = 67;
	public $PN_PREFIX = 47;
	public $UNICODE_CHAR = 70;
	public $DESC = 20;
	public $OPEN_BRACE = 93;
	public $GREATER_EQUAL = 96;
	public $LANGTAG = 55;

	// delegates
	// delegators
	public $gSparql10;
	public $gParent;

	static $FOLLOW_prologue_in_query1034;
	static $FOLLOW_selectQuery_in_query1047;
	static $FOLLOW_constructQuery_in_query1059;
	static $FOLLOW_describeQuery_in_query1072;
	static $FOLLOW_askQuery_in_query1085;
	static $FOLLOW_baseDecl_in_prologue117;
	static $FOLLOW_prefixDecl_in_prologue120;
	static $FOLLOW_BASE_in_baseDecl140;
	static $FOLLOW_iriRef_in_baseDecl142;
	static $FOLLOW_PREFIX_in_prefixDecl163;
	static $FOLLOW_PNAME_NS_in_prefixDecl165;
	static $FOLLOW_iriRef_in_prefixDecl167;
	static $FOLLOW_SELECT_in_selectQuery188;
	static $FOLLOW_DISTINCT_in_selectQuery192;
	static $FOLLOW_REDUCED_in_selectQuery206;
	static $FOLLOW_variable_in_selectQuery223;
	static $FOLLOW_ASTERISK_in_selectQuery228;
	static $FOLLOW_datasetClause_in_selectQuery232;
	static $FOLLOW_whereClause_in_selectQuery235;
	static $FOLLOW_solutionModifier_in_selectQuery237;
	static $FOLLOW_CONSTRUCT_in_constructQuery257;
	static $FOLLOW_constructTemplate_in_constructQuery259;
	static $FOLLOW_datasetClause_in_constructQuery261;
	static $FOLLOW_whereClause_in_constructQuery264;
	static $FOLLOW_solutionModifier_in_constructQuery266;
	static $FOLLOW_DESCRIBE_in_describeQuery285;
	static $FOLLOW_varOrIRIref_in_describeQuery289;
	static $FOLLOW_ASTERISK_in_describeQuery294;
	static $FOLLOW_datasetClause_in_describeQuery298;
	static $FOLLOW_whereClause_in_describeQuery301;
	static $FOLLOW_solutionModifier_in_describeQuery304;
	static $FOLLOW_ASK_in_askQuery323;
	static $FOLLOW_datasetClause_in_askQuery325;
	static $FOLLOW_whereClause_in_askQuery328;
	static $FOLLOW_FROM_in_datasetClause349;
	static $FOLLOW_defaultGraphClause_in_datasetClause353;
	static $FOLLOW_namedGraphClause_in_datasetClause367;
	static $FOLLOW_sourceSelector_in_defaultGraphClause402;
	static $FOLLOW_NAMED_in_namedGraphClause427;
	static $FOLLOW_sourceSelector_in_namedGraphClause429;
	static $FOLLOW_iriRef_in_sourceSelector454;
	static $FOLLOW_WHERE_in_whereClause475;
	static $FOLLOW_groupGraphPattern_in_whereClause478;
	static $FOLLOW_orderClause_in_solutionModifier499;
	static $FOLLOW_limitOffsetClauses_in_solutionModifier502;
	static $FOLLOW_limitClause_in_limitOffsetClauses521;
	static $FOLLOW_offsetClause_in_limitOffsetClauses523;
	static $FOLLOW_offsetClause_in_limitOffsetClauses533;
	static $FOLLOW_limitClause_in_limitOffsetClauses535;
	static $FOLLOW_ORDER_in_orderClause555;
	static $FOLLOW_BY_in_orderClause557;
	static $FOLLOW_orderCondition_in_orderClause559;
	static $FOLLOW_ASC_in_orderCondition585;
	static $FOLLOW_DESC_in_orderCondition591;
	static $FOLLOW_brackettedExpression_in_orderCondition595;
	static $FOLLOW_constraint_in_orderCondition611;
	static $FOLLOW_variable_in_orderCondition617;
	static $FOLLOW_LIMIT_in_limitClause639;
	static $FOLLOW_INTEGER_in_limitClause641;
	static $FOLLOW_OFFSET_in_offsetClause662;
	static $FOLLOW_INTEGER_in_offsetClause664;
	static $FOLLOW_OPEN_CURLY_BRACE_in_groupGraphPattern691;
	static $FOLLOW_triplesBlock_in_groupGraphPattern696;
	static $FOLLOW_graphPatternNotTriples_in_groupGraphPattern710;
	static $FOLLOW_filter_in_groupGraphPattern716;
	static $FOLLOW_DOT_in_groupGraphPattern734;
	static $FOLLOW_triplesBlock_in_groupGraphPattern740;
	static $FOLLOW_CLOSE_CURLY_BRACE_in_groupGraphPattern749;
	static $FOLLOW_triplesSameSubject_in_triplesBlock776;
	static $FOLLOW_DOT_in_triplesBlock782;
	static $FOLLOW_triplesBlock_in_triplesBlock787;
	static $FOLLOW_optionalGraphPattern_in_graphPatternNotTriples824;
	static $FOLLOW_groupOrUnionGraphPattern_in_graphPatternNotTriples836;
	static $FOLLOW_graphGraphPattern_in_graphPatternNotTriples848;
	static $FOLLOW_OPTIONAL_in_optionalGraphPattern873;
	static $FOLLOW_groupGraphPattern_in_optionalGraphPattern875;
	static $FOLLOW_GRAPH_in_graphGraphPattern900;
	static $FOLLOW_varOrIRIref_in_graphGraphPattern902;
	static $FOLLOW_groupGraphPattern_in_graphGraphPattern904;
	static $FOLLOW_groupGraphPattern_in_groupOrUnionGraphPattern935;
	static $FOLLOW_UNION_in_groupOrUnionGraphPattern941;
	static $FOLLOW_groupGraphPattern_in_groupOrUnionGraphPattern945;
	static $FOLLOW_FILTER_in_filter973;
	static $FOLLOW_constraint_in_filter975;
	static $FOLLOW_brackettedExpression_in_constraint1006;
	static $FOLLOW_builtInCall_in_constraint1016;
	static $FOLLOW_functionCall_in_constraint1026;
	static $FOLLOW_iriRef_in_functionCall1048;
	static $FOLLOW_argList_in_functionCall1050;
	static $FOLLOW_OPEN_BRACE_in_argList1079;
	static $FOLLOW_WS_in_argList1081;
	static $FOLLOW_CLOSE_BRACE_in_argList1084;
	static $FOLLOW_OPEN_BRACE_in_argList1092;
	static $FOLLOW_expression_in_argList1096;
	static $FOLLOW_COMMA_in_argList1110;
	static $FOLLOW_expression_in_argList1114;
	static $FOLLOW_CLOSE_BRACE_in_argList1120;
	static $FOLLOW_OPEN_CURLY_BRACE_in_constructTemplate1147;
	static $FOLLOW_constructTriples_in_constructTemplate1150;
	static $FOLLOW_CLOSE_CURLY_BRACE_in_constructTemplate1156;
	static $FOLLOW_triplesSameSubject_in_constructTriples1183;
	static $FOLLOW_DOT_in_constructTriples1189;
	static $FOLLOW_constructTriples_in_constructTriples1194;
	static $FOLLOW_varOrTerm_in_triplesSameSubject1224;
	static $FOLLOW_propertyListNotEmpty_in_triplesSameSubject1226;
	static $FOLLOW_triplesNode_in_triplesSameSubject1236;
	static $FOLLOW_propertyList_in_triplesSameSubject1238;
	static $FOLLOW_verb_in_propertyListNotEmpty1269;
	static $FOLLOW_objectList_in_propertyListNotEmpty1273;
	static $FOLLOW_SEMICOLON_in_propertyListNotEmpty1287;
	static $FOLLOW_verb_in_propertyListNotEmpty1293;
	static $FOLLOW_objectList_in_propertyListNotEmpty1297;
	static $FOLLOW_propertyListNotEmpty_in_propertyList1336;
	static $FOLLOW_object_in_objectList1365;
	static $FOLLOW_COMMA_in_objectList1379;
	static $FOLLOW_object_in_objectList1383;
	static $FOLLOW_graphNode_in_object1411;
	static $FOLLOW_varOrIRIref_in_verb1436;
	static $FOLLOW_A_in_verb1446;
	static $FOLLOW_collection_in_triplesNode1471;
	static $FOLLOW_blankNodePropertyList_in_triplesNode1481;
	static $FOLLOW_OPEN_SQUARE_BRACE_in_blankNodePropertyList1506;
	static $FOLLOW_propertyListNotEmpty_in_blankNodePropertyList1508;
	static $FOLLOW_CLOSE_SQUARE_BRACE_in_blankNodePropertyList1510;
	static $FOLLOW_OPEN_BRACE_in_collection1543;
	static $FOLLOW_graphNode_in_collection1546;
	static $FOLLOW_CLOSE_BRACE_in_collection1552;
	static $FOLLOW_varOrTerm_in_graphNode1575;
	static $FOLLOW_triplesNode_in_graphNode1585;
	static $FOLLOW_variable_in_varOrTerm1610;
	static $FOLLOW_graphTerm_in_varOrTerm1620;
	static $FOLLOW_variable_in_varOrIRIref1645;
	static $FOLLOW_iriRef_in_varOrIRIref1655;
	static $FOLLOW_VAR1_in_variable1686;
	static $FOLLOW_VAR2_in_variable1698;
	static $FOLLOW_iriRef_in_graphTerm1725;
	static $FOLLOW_rdfLiteral_in_graphTerm1737;
	static $FOLLOW_numericLiteral_in_graphTerm1749;
	static $FOLLOW_booleanLiteral_in_graphTerm1761;
	static $FOLLOW_blankNode_in_graphTerm1773;
	static $FOLLOW_OPEN_BRACE_in_graphTerm1783;
	static $FOLLOW_WS_in_graphTerm1785;
	static $FOLLOW_CLOSE_BRACE_in_graphTerm1788;
	static $FOLLOW_conditionalOrExpression_in_expression1813;
	static $FOLLOW_conditionalAndExpression_in_conditionalOrExpression1848;
	static $FOLLOW_OR_in_conditionalOrExpression1858;
	static $FOLLOW_conditionalAndExpression_in_conditionalOrExpression1862;
	static $FOLLOW_valueLogical_in_conditionalAndExpression1899;
	static $FOLLOW_AND_in_conditionalAndExpression1905;
	static $FOLLOW_valueLogical_in_conditionalAndExpression1909;
	static $FOLLOW_relationalExpression_in_valueLogical1937;
	static $FOLLOW_numericExpression_in_relationalExpression1964;
	static $FOLLOW_EQUAL_in_relationalExpression1978;
	static $FOLLOW_numericExpression_in_relationalExpression1982;
	static $FOLLOW_NOT_EQUAL_in_relationalExpression1996;
	static $FOLLOW_numericExpression_in_relationalExpression2000;
	static $FOLLOW_LESS_in_relationalExpression2014;
	static $FOLLOW_numericExpression_in_relationalExpression2018;
	static $FOLLOW_GREATER_in_relationalExpression2032;
	static $FOLLOW_numericExpression_in_relationalExpression2036;
	static $FOLLOW_LESS_EQUAL_in_relationalExpression2050;
	static $FOLLOW_numericExpression_in_relationalExpression2054;
	static $FOLLOW_GREATER_EQUAL_in_relationalExpression2068;
	static $FOLLOW_numericExpression_in_relationalExpression2072;
	static $FOLLOW_additiveExpression_in_numericExpression2107;
	static $FOLLOW_multiplicativeExpression_in_additiveExpression2138;
	static $FOLLOW_PLUS_in_additiveExpression2155;
	static $FOLLOW_multiplicativeExpression_in_additiveExpression2159;
	static $FOLLOW_MINUS_in_additiveExpression2175;
	static $FOLLOW_multiplicativeExpression_in_additiveExpression2179;
	static $FOLLOW_numericLiteralPositive_in_additiveExpression2195;
	static $FOLLOW_numericLiteralNegative_in_additiveExpression2211;
	static $FOLLOW_unaryExpression_in_multiplicativeExpression2259;
	static $FOLLOW_ASTERISK_in_multiplicativeExpression2276;
	static $FOLLOW_unaryExpression_in_multiplicativeExpression2280;
	static $FOLLOW_DIVIDE_in_multiplicativeExpression2286;
	static $FOLLOW_unaryExpression_in_multiplicativeExpression2290;
	static $FOLLOW_NOT_SIGN_in_unaryExpression2318;
	static $FOLLOW_primaryExpression_in_unaryExpression2322;
	static $FOLLOW_PLUS_in_unaryExpression2332;
	static $FOLLOW_primaryExpression_in_unaryExpression2336;
	static $FOLLOW_MINUS_in_unaryExpression2346;
	static $FOLLOW_primaryExpression_in_unaryExpression2350;
	static $FOLLOW_primaryExpression_in_unaryExpression2362;
	static $FOLLOW_brackettedExpression_in_primaryExpression2393;
	static $FOLLOW_builtInCall_in_primaryExpression2405;
	static $FOLLOW_iriRefOrFunction_in_primaryExpression2417;
	static $FOLLOW_rdfLiteral_in_primaryExpression2429;
	static $FOLLOW_numericLiteral_in_primaryExpression2441;
	static $FOLLOW_booleanLiteral_in_primaryExpression2453;
	static $FOLLOW_variable_in_primaryExpression2465;
	static $FOLLOW_OPEN_BRACE_in_brackettedExpression2490;
	static $FOLLOW_expression_in_brackettedExpression2494;
	static $FOLLOW_CLOSE_BRACE_in_brackettedExpression2496;
	static $FOLLOW_STR_in_builtInCall2521;
	static $FOLLOW_OPEN_BRACE_in_builtInCall2523;
	static $FOLLOW_expression_in_builtInCall2527;
	static $FOLLOW_CLOSE_BRACE_in_builtInCall2529;
	static $FOLLOW_LANG_in_builtInCall2539;
	static $FOLLOW_OPEN_BRACE_in_builtInCall2541;
	static $FOLLOW_expression_in_builtInCall2545;
	static $FOLLOW_CLOSE_BRACE_in_builtInCall2547;
	static $FOLLOW_LANGMATCHES_in_builtInCall2557;
	static $FOLLOW_OPEN_BRACE_in_builtInCall2559;
	static $FOLLOW_expression_in_builtInCall2563;
	static $FOLLOW_COMMA_in_builtInCall2565;
	static $FOLLOW_expression_in_builtInCall2569;
	static $FOLLOW_CLOSE_BRACE_in_builtInCall2571;
	static $FOLLOW_DATATYPE_in_builtInCall2581;
	static $FOLLOW_OPEN_BRACE_in_builtInCall2583;
	static $FOLLOW_expression_in_builtInCall2587;
	static $FOLLOW_CLOSE_BRACE_in_builtInCall2589;
	static $FOLLOW_BOUND_in_builtInCall2599;
	static $FOLLOW_OPEN_BRACE_in_builtInCall2601;
	static $FOLLOW_variable_in_builtInCall2603;
	static $FOLLOW_CLOSE_BRACE_in_builtInCall2605;
	static $FOLLOW_SAMETERM_in_builtInCall2615;
	static $FOLLOW_OPEN_BRACE_in_builtInCall2617;
	static $FOLLOW_expression_in_builtInCall2621;
	static $FOLLOW_COMMA_in_builtInCall2623;
	static $FOLLOW_expression_in_builtInCall2627;
	static $FOLLOW_CLOSE_BRACE_in_builtInCall2629;
	static $FOLLOW_ISIRI_in_builtInCall2639;
	static $FOLLOW_OPEN_BRACE_in_builtInCall2641;
	static $FOLLOW_expression_in_builtInCall2645;
	static $FOLLOW_CLOSE_BRACE_in_builtInCall2647;
	static $FOLLOW_ISURI_in_builtInCall2657;
	static $FOLLOW_OPEN_BRACE_in_builtInCall2659;
	static $FOLLOW_expression_in_builtInCall2663;
	static $FOLLOW_CLOSE_BRACE_in_builtInCall2665;
	static $FOLLOW_ISBLANK_in_builtInCall2675;
	static $FOLLOW_OPEN_BRACE_in_builtInCall2677;
	static $FOLLOW_expression_in_builtInCall2681;
	static $FOLLOW_CLOSE_BRACE_in_builtInCall2683;
	static $FOLLOW_ISLITERAL_in_builtInCall2693;
	static $FOLLOW_OPEN_BRACE_in_builtInCall2695;
	static $FOLLOW_expression_in_builtInCall2699;
	static $FOLLOW_CLOSE_BRACE_in_builtInCall2701;
	static $FOLLOW_regexExpression_in_builtInCall2711;
	static $FOLLOW_REGEX_in_regexExpression2736;
	static $FOLLOW_OPEN_BRACE_in_regexExpression2738;
	static $FOLLOW_expression_in_regexExpression2742;
	static $FOLLOW_COMMA_in_regexExpression2744;
	static $FOLLOW_expression_in_regexExpression2748;
	static $FOLLOW_COMMA_in_regexExpression2752;
	static $FOLLOW_expression_in_regexExpression2756;
	static $FOLLOW_CLOSE_BRACE_in_regexExpression2761;
	static $FOLLOW_iriRef_in_iriRefOrFunction2798;
	static $FOLLOW_argList_in_iriRefOrFunction2811;
	static $FOLLOW_string_in_rdfLiteral2838;
	static $FOLLOW_LANGTAG_in_rdfLiteral2852;
	static $FOLLOW_REFERENCE_in_rdfLiteral2869;
	static $FOLLOW_iriRef_in_rdfLiteral2871;
	static $FOLLOW_numericLiteralUnsigned_in_numericLiteral2904;
	static $FOLLOW_numericLiteralPositive_in_numericLiteral2912;
	static $FOLLOW_numericLiteralNegative_in_numericLiteral2920;
	static $FOLLOW_INTEGER_in_numericLiteralUnsigned2949;
	static $FOLLOW_DECIMAL_in_numericLiteralUnsigned2961;
	static $FOLLOW_DOUBLE_in_numericLiteralUnsigned2973;
	static $FOLLOW_INTEGER_POSITIVE_in_numericLiteralPositive3000;
	static $FOLLOW_DECIMAL_POSITIVE_in_numericLiteralPositive3012;
	static $FOLLOW_DOUBLE_POSITIVE_in_numericLiteralPositive3024;
	static $FOLLOW_INTEGER_NEGATIVE_in_numericLiteralNegative3051;
	static $FOLLOW_DECIMAL_NEGATIVE_in_numericLiteralNegative3063;
	static $FOLLOW_DOUBLE_NEGATIVE_in_numericLiteralNegative3075;
	static $FOLLOW_TRUE_in_booleanLiteral3108;
	static $FOLLOW_FALSE_in_booleanLiteral3118;
	static $FOLLOW_set_in_string0;
	static $FOLLOW_IRI_REF_in_iriRef3186;
	static $FOLLOW_prefixedName_in_iriRef3196;
	static $FOLLOW_PNAME_LN_in_prefixedName3230;
	static $FOLLOW_PNAME_NS_in_prefixedName3237;
	static $FOLLOW_BLANK_NODE_LABEL_in_blankNode3272;
	static $FOLLOW_OPEN_SQUARE_BRACE_in_blankNode3282;
	static $FOLLOW_WS_in_blankNode3285;
	static $FOLLOW_CLOSE_SQUARE_BRACE_in_blankNode3289;

	protected $dfa9;
	protected $dfa21;
	protected $dfa24;
	protected $dfa23;
	protected $dfa25;
	protected $dfa27;
	protected $dfa28;
	protected $dfa30;
	protected $dfa33;
	protected $dfa34;
	protected $dfa37;
	protected $dfa38;
	protected $dfa39;
	protected $dfa41;
	protected $dfa42;
	protected $dfa44;
	protected $dfa45;
	protected $dfa48;
	protected $dfa49;
	protected $dfa50;
	protected $dfa54;
	protected $dfa57;
	protected $dfa59;
	protected $dfa61;
	protected $dfa62;
	protected $dfa63;
	protected $dfa64;
	protected $dfa66;
	protected $dfa67;
	protected $dfa68;

	public function __construct($input, $state, $g_Sparql10 = null) {
		if ($state == null) {
			$state = new \RecognizerSharedState();
		}
		parent::__construct($input, $state, $g_Sparql10);
		$this->gSparql10 = $g_Sparql10;
		$this->gParent = $this->gSparql10;
		$this->dfa9 = new Sparql10_DFA9($this);
		$this->dfa21 = new Sparql10_DFA21($this);
		$this->dfa24 = new Sparql10_DFA24($this);
		$this->dfa23 = new Sparql10_DFA23($this);
		$this->dfa25 = new Sparql10_DFA25($this);
		$this->dfa27 = new Sparql10_DFA27($this);
		$this->dfa28 = new Sparql10_DFA28($this);
		$this->dfa30 = new Sparql10_DFA30($this);
		$this->dfa33 = new Sparql10_DFA33($this);
		$this->dfa34 = new Sparql10_DFA34($this);
		$this->dfa37 = new Sparql10_DFA37($this);
		$this->dfa38 = new Sparql10_DFA38($this);
		$this->dfa39 = new Sparql10_DFA39($this);
		$this->dfa41 = new Sparql10_DFA41($this);
		$this->dfa42 = new Sparql10_DFA42($this);
		$this->dfa44 = new Sparql10_DFA44($this);
		$this->dfa45 = new Sparql10_DFA45($this);
		$this->dfa48 = new Sparql10_DFA48($this);
		$this->dfa49 = new Sparql10_DFA49($this);
		$this->dfa50 = new Sparql10_DFA50($this);
		$this->dfa54 = new Sparql10_DFA54($this);
		$this->dfa57 = new Sparql10_DFA57($this);
		$this->dfa59 = new Sparql10_DFA59($this);
		$this->dfa61 = new Sparql10_DFA61($this);
		$this->dfa62 = new Sparql10_DFA62($this);
		$this->dfa63 = new Sparql10_DFA63($this);
		$this->dfa64 = new Sparql10_DFA64($this);
		$this->dfa66 = new Sparql10_DFA66($this);
		$this->dfa67 = new Sparql10_DFA67($this);
		$this->dfa68 = new Sparql10_DFA68($this);

	}

	public function getTokenNames() {
		return Sparql10\Sparql10Parser::$tokenNames;
	}

	public function getGrammarFileName() {
		return "Sparql10.g";
	}

	private $_q = null;
	private $_errors = array();

	public function emitErrorMessage($msg) {
		$this->_errors [] = $msg;
	}

	public static function query10_return() {
		$retval = new \ParserRuleReturnScope();
		$retval->value = null;
		$retval->errors = null;
		return $retval;
	}

	// $ANTLR start "query10"
	// Sparql10.g:17:1: query10 returns [$value, $errors] : prologue ( selectQuery | constructQuery | describeQuery | askQuery ) ;
	public function query10() {
		$retval = $this->query10_return();
		$retval->start = $this->input->LT(1);
		$retval->value = &$value;
		$retval->errors = &$errors;
		$this->_q = new Sparql\Query2();
		try {
			// Sparql10.g:19:5: ( prologue ( selectQuery | constructQuery | describeQuery | askQuery ) )
			// Sparql10.g:19:7: prologue ( selectQuery | constructQuery | describeQuery | askQuery )
			{
				$this->pushFollow(self::$FOLLOW_prologue_in_query1034);
				$this->prologue();
				$this->state->_fsp--;
				// Sparql10.g:19:16: ( selectQuery | constructQuery | describeQuery | askQuery )
				$alt1 = 4;
				$LA1 = $this->input->LA(1);
				if ($this->getToken('SELECT') == $LA1) {
					$alt1 = 1;
				}
				else {
					if ($this->getToken('CONSTRUCT') == $LA1) {
						$alt1 = 2;
					}
					else {
						if ($this->getToken('DESCRIBE') == $LA1) {
							$alt1 = 3;
						}
						else {
							if ($this->getToken('ASK') == $LA1) {
								$alt1 = 4;
							}
							else {
								$nvae =
										new \NoViableAltException("", 1, 0, $this->input);
								throw $nvae;
							}
						}
					}
				}
				switch ($alt1) {
					case 1 :
						// Sparql10.g:20:9: selectQuery
						{
						$this->pushFollow(self::$FOLLOW_selectQuery_in_query1047);
						$this->selectQuery();
						$this->state->_fsp--;
						}
						break;
					case 2 :
						// Sparql10.g:21:11: constructQuery
						{
						$this->pushFollow(self::$FOLLOW_constructQuery_in_query1059);
						$this->constructQuery();
						$this->state->_fsp--;
						}
						break;
					case 3 :
						// Sparql10.g:22:11: describeQuery
						{
						$this->pushFollow(self::$FOLLOW_describeQuery_in_query1072);
						$this->describeQuery();
						$this->state->_fsp--;
						}
						break;
					case 4 :
						// Sparql10.g:23:11: askQuery
						{
						$this->pushFollow(self::$FOLLOW_askQuery_in_query1085);
						$this->askQuery();
						$this->state->_fsp--;
						}
						break;
				}
				$value = $this->_q;
				$errors = $this->_errors;
			}
			$retval->stop = $this->input->LT(-1);
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $retval;
	}

	// $ANTLR end "query10"

	// $ANTLR start "prologue"
	// Sparql10.g:28:1: prologue : ( baseDecl )? ( prefixDecl )* ;
	public function prologue() {
		try {
			// Sparql10.g:29:5: ( ( baseDecl )? ( prefixDecl )* )
			// Sparql10.g:29:7: ( baseDecl )? ( prefixDecl )*
			{
				// Sparql10.g:29:7: ( baseDecl )?
				$alt2 = 2;
				$LA2_0 = $this->input->LA(1);
				if (($LA2_0 == $this->getToken('BASE'))) {
					$alt2 = 1;
				}
				switch ($alt2) {
					case 1 :
						// Sparql10.g:29:7: baseDecl
						{
						$this->pushFollow(self::$FOLLOW_baseDecl_in_prologue117);
						$this->baseDecl();
						$this->state->_fsp--;
						}
						break;
				}
				// Sparql10.g:29:17: ( prefixDecl )*
				//loop3:
				do {
					$alt3 = 2;
					$LA3_0 = $this->input->LA(1);
					if (($LA3_0 == $this->getToken('PREFIX'))) {
						$alt3 = 1;
					}
					switch ($alt3) {
						case 1 :
							// Sparql10.g:29:17: prefixDecl
							{
							$this->pushFollow(self::$FOLLOW_prefixDecl_in_prologue120);
							$this->prefixDecl();
							$this->state->_fsp--;
							}
							break;
						default :
							break 2;
						//loop3;
					}
				} while (true);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "prologue"

	// $ANTLR start "baseDecl"
	// Sparql10.g:33:1: baseDecl : BASE iriRef ;
	public function baseDecl() {
		$iriRef1 = null;
		try {
			// Sparql10.g:34:5: ( BASE iriRef )
			// Sparql10.g:34:7: BASE iriRef
			{
				$this->match($this->input, $this->getToken('BASE'), self::$FOLLOW_BASE_in_baseDecl140);
				$this->pushFollow(self::$FOLLOW_iriRef_in_baseDecl142);
				$iriRef1 = $this->iriRef();
				$this->state->_fsp--;
				$this->_q->setBase($iriRef1);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "baseDecl"

	// $ANTLR start "prefixDecl"
	// Sparql10.g:38:1: prefixDecl : PREFIX PNAME_NS iriRef ;
	public function prefixDecl() {
		$PNAME_NS2 = null;
		$iriRef3 = null;
		try {
			// Sparql10.g:39:5: ( PREFIX PNAME_NS iriRef )
			// Sparql10.g:39:7: PREFIX PNAME_NS iriRef
			{
				$this->match($this->input, $this->getToken('PREFIX'), self::$FOLLOW_PREFIX_in_prefixDecl163);
				$PNAME_NS2 = $this->match($this->input, $this->getToken('PNAME_NS'), self::$FOLLOW_PNAME_NS_in_prefixDecl165);
				$this->pushFollow(self::$FOLLOW_iriRef_in_prefixDecl167);
				$iriRef3 = $this->iriRef();
				$this->state->_fsp--;
				$this->_q->addPrefix(new Query2\Prefix(($PNAME_NS2 != null ? $PNAME_NS2->getText() : null), $iriRef3));
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "prefixDecl"

	// $ANTLR start "selectQuery"
	// Sparql10.g:43:1: selectQuery : SELECT ( DISTINCT | REDUCED )? ( ( variable )+ | ASTERISK ) ( datasetClause )* whereClause solutionModifier ;
	public function selectQuery() {
		try {
			// Sparql10.g:44:5: ( SELECT ( DISTINCT | REDUCED )? ( ( variable )+ | ASTERISK ) ( datasetClause )* whereClause solutionModifier )
			// Sparql10.g:44:7: SELECT ( DISTINCT | REDUCED )? ( ( variable )+ | ASTERISK ) ( datasetClause )* whereClause solutionModifier
			{
				$this->match($this->input, $this->getToken('SELECT'), self::$FOLLOW_SELECT_in_selectQuery188);
				// Sparql10.g:44:14: ( DISTINCT | REDUCED )?
				$alt4 = 3;
				$LA4_0 = $this->input->LA(1);
				if (($LA4_0 == $this->getToken('DISTINCT'))) {
					$alt4 = 1;
				}
				else {
					if (($LA4_0 == $this->getToken('REDUCED'))) {
						$alt4 = 2;
					}
				}
				switch ($alt4) {
					case 1 :
						// Sparql10.g:44:16: DISTINCT
						{
						$this->match($this->input, $this->getToken('DISTINCT'), self::$FOLLOW_DISTINCT_in_selectQuery192);
						$this->_q->setDistinct(true);
						}
						break;
					case 2 :
						// Sparql10.g:45:11: REDUCED
						{
						$this->match($this->input, $this->getToken('REDUCED'), self::$FOLLOW_REDUCED_in_selectQuery206);
						$this->_q->setReduced(true);
						}
						break;
				}
				// Sparql10.g:46:12: ( ( variable )+ | ASTERISK )
				$alt6 = 2;
				$LA6_0 = $this->input->LA(1);
				if ((($LA6_0 >= $this->getToken('VAR1') && $LA6_0 <= $this->getToken('VAR2')))) {
					$alt6 = 1;
				}
				else {
					if (($LA6_0 == $this->getToken('ASTERISK'))) {
						$alt6 = 2;
					}
					else {
						$nvae = new \NoViableAltException("", 6, 0, $this->input);
						throw $nvae;
					}
				}
				switch ($alt6) {
					case 1 :
						// Sparql10.g:46:14: ( variable )+
						{
						// Sparql10.g:46:14: ( variable )+
						$cnt5 = 0;
						//loop5:
						do {
							$alt5 = 2;
							$LA5_0 = $this->input->LA(1);
							if ((($LA5_0 >= $this->getToken('VAR1') && $LA5_0 <= $this->getToken('VAR2')))) {
								$alt5 = 1;
							}
							switch ($alt5) {
								case 1 :
									// Sparql10.g:46:14: variable
									{
									$this->pushFollow(self::$FOLLOW_variable_in_selectQuery223);
									$this->variable();
									$this->state->_fsp--;
									}
									break;
								default :
									if ($cnt5 >= 1) {
										break 2;
									} //loop5;
									throw new \EarlyExitException(5, $this->input);
							}
							$cnt5++;
						} while (true);
						}
						break;
					case 2 :
						// Sparql10.g:46:26: ASTERISK
						{
						$this->match($this->input, $this->getToken('ASTERISK'), self::$FOLLOW_ASTERISK_in_selectQuery228);
						}
						break;
				}
				// Sparql10.g:46:37: ( datasetClause )*
				//loop7:
				do {
					$alt7 = 2;
					$LA7_0 = $this->input->LA(1);
					if (($LA7_0 == $this->getToken('FROM'))) {
						$alt7 = 1;
					}
					switch ($alt7) {
						case 1 :
							// Sparql10.g:46:37: datasetClause
							{
							$this->pushFollow(self::$FOLLOW_datasetClause_in_selectQuery232);
							$this->datasetClause();
							$this->state->_fsp--;
							}
							break;
						default :
							break 2;
						//loop7;
					}
				} while (true);
				$this->pushFollow(self::$FOLLOW_whereClause_in_selectQuery235);
				$this->whereClause();
				$this->state->_fsp--;
				$this->pushFollow(self::$FOLLOW_solutionModifier_in_selectQuery237);
				$this->solutionModifier();
				$this->state->_fsp--;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "selectQuery"

	// $ANTLR start "constructQuery"
	// Sparql10.g:50:1: constructQuery : CONSTRUCT constructTemplate ( datasetClause )* whereClause solutionModifier ;
	public function constructQuery() {
		try {
			// Sparql10.g:51:5: ( CONSTRUCT constructTemplate ( datasetClause )* whereClause solutionModifier )
			// Sparql10.g:51:7: CONSTRUCT constructTemplate ( datasetClause )* whereClause solutionModifier
			{
				$this->match($this->input, $this->getToken('CONSTRUCT'), self::$FOLLOW_CONSTRUCT_in_constructQuery257);
				$this->pushFollow(self::$FOLLOW_constructTemplate_in_constructQuery259);
				$this->constructTemplate();
				$this->state->_fsp--;
				// Sparql10.g:51:35: ( datasetClause )*
				//loop8:
				do {
					$alt8 = 2;
					$LA8_0 = $this->input->LA(1);
					if (($LA8_0 == $this->getToken('FROM'))) {
						$alt8 = 1;
					}
					switch ($alt8) {
						case 1 :
							// Sparql10.g:51:35: datasetClause
							{
							$this->pushFollow(self::$FOLLOW_datasetClause_in_constructQuery261);
							$this->datasetClause();
							$this->state->_fsp--;
							}
							break;
						default :
							break 2;
						//loop8;
					}
				} while (true);
				$this->pushFollow(self::$FOLLOW_whereClause_in_constructQuery264);
				$this->whereClause();
				$this->state->_fsp--;
				$this->pushFollow(self::$FOLLOW_solutionModifier_in_constructQuery266);
				$this->solutionModifier();
				$this->state->_fsp--;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "constructQuery"

	// $ANTLR start "describeQuery"
	// Sparql10.g:55:1: describeQuery : DESCRIBE ( ( varOrIRIref )+ | ASTERISK ) ( datasetClause )* ( whereClause )? solutionModifier ;
	public function describeQuery() {
		try {
			// Sparql10.g:56:5: ( DESCRIBE ( ( varOrIRIref )+ | ASTERISK ) ( datasetClause )* ( whereClause )? solutionModifier )
			// Sparql10.g:56:7: DESCRIBE ( ( varOrIRIref )+ | ASTERISK ) ( datasetClause )* ( whereClause )? solutionModifier
			{
				$this->match($this->input, $this->getToken('DESCRIBE'), self::$FOLLOW_DESCRIBE_in_describeQuery285);
				// Sparql10.g:56:16: ( ( varOrIRIref )+ | ASTERISK )
				$alt10 = 2;
				$LA10_0 = $this->input->LA(1);
				if (($LA10_0 == $this->getToken('IRI_REF') || $LA10_0 == $this->getToken('PNAME_NS') || $LA10_0 == $this->getToken('PNAME_LN') || ($LA10_0 >= $this->getToken('VAR1') && $LA10_0 <= $this->getToken('VAR2')))) {
					$alt10 = 1;
				}
				else {
					if (($LA10_0 == $this->getToken('ASTERISK'))) {
						$alt10 = 2;
					}
					else {
						$nvae = new \NoViableAltException("", 10, 0, $this->input);
						throw $nvae;
					}
				}
				switch ($alt10) {
					case 1 :
						// Sparql10.g:56:18: ( varOrIRIref )+
						{
						// Sparql10.g:56:18: ( varOrIRIref )+
						$cnt9 = 0;
						//loop9:
						do {
							$alt9 = 2;
							$alt9 = $this->dfa9->predict($this->input);
							switch ($alt9) {
								case 1 :
									// Sparql10.g:56:18: varOrIRIref
									{
									$this->pushFollow(self::$FOLLOW_varOrIRIref_in_describeQuery289);
									$this->varOrIRIref();
									$this->state->_fsp--;
									}
									break;
								default :
									if ($cnt9 >= 1) {
										break 2;
									} //loop9;
									throw new \EarlyExitException(9, $this->input);
							}
							$cnt9++;
						} while (true);
						}
						break;
					case 2 :
						// Sparql10.g:56:33: ASTERISK
						{
						$this->match($this->input, $this->getToken('ASTERISK'), self::$FOLLOW_ASTERISK_in_describeQuery294);
						}
						break;
				}
				// Sparql10.g:56:44: ( datasetClause )*
				//loop11:
				do {
					$alt11 = 2;
					$LA11_0 = $this->input->LA(1);
					if (($LA11_0 == $this->getToken('FROM'))) {
						$alt11 = 1;
					}
					switch ($alt11) {
						case 1 :
							// Sparql10.g:56:44: datasetClause
							{
							$this->pushFollow(self::$FOLLOW_datasetClause_in_describeQuery298);
							$this->datasetClause();
							$this->state->_fsp--;
							}
							break;
						default :
							break 2;
						//loop11;
					}
				} while (true);
				// Sparql10.g:56:59: ( whereClause )?
				$alt12 = 2;
				$LA12_0 = $this->input->LA(1);
				if (($LA12_0 == $this->getToken('WHERE') || $LA12_0 == $this->getToken('OPEN_CURLY_BRACE'))) {
					$alt12 = 1;
				}
				switch ($alt12) {
					case 1 :
						// Sparql10.g:56:59: whereClause
						{
						$this->pushFollow(self::$FOLLOW_whereClause_in_describeQuery301);
						$this->whereClause();
						$this->state->_fsp--;
						}
						break;
				}
				$this->pushFollow(self::$FOLLOW_solutionModifier_in_describeQuery304);
				$this->solutionModifier();
				$this->state->_fsp--;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "describeQuery"

	// $ANTLR start "askQuery"
	// Sparql10.g:60:1: askQuery : ASK ( datasetClause )* whereClause ;
	public function askQuery() {
		$ASK4 = null;
		try {
			// Sparql10.g:61:5: ( ASK ( datasetClause )* whereClause )
			// Sparql10.g:61:7: ASK ( datasetClause )* whereClause
			{
				$ASK4 = $this->match($this->input, $this->getToken('ASK'), self::$FOLLOW_ASK_in_askQuery323);
				// Sparql10.g:61:11: ( datasetClause )*
				//loop13:
				do {
					$alt13 = 2;
					$LA13_0 = $this->input->LA(1);
					if (($LA13_0 == $this->getToken('FROM'))) {
						$alt13 = 1;
					}
					switch ($alt13) {
						case 1 :
							// Sparql10.g:61:11: datasetClause
							{
							$this->pushFollow(self::$FOLLOW_datasetClause_in_askQuery325);
							$this->datasetClause();
							$this->state->_fsp--;
							}
							break;
						default :
							break 2;
						//loop13;
					}
				} while (true);
				$this->pushFollow(self::$FOLLOW_whereClause_in_askQuery328);
				$this->whereClause();
				$this->state->_fsp--;
				$this->_q->setQueryType(($ASK4 != null ? $ASK4->getText() : null));
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "askQuery"

	// $ANTLR start "datasetClause"
	// Sparql10.g:65:1: datasetClause : FROM ( defaultGraphClause | namedGraphClause ) ;
	public function datasetClause() {
		$defaultGraphClause5 = null;
		$namedGraphClause6 = null;
		try {
			// Sparql10.g:66:5: ( FROM ( defaultGraphClause | namedGraphClause ) )
			// Sparql10.g:66:7: FROM ( defaultGraphClause | namedGraphClause )
			{
				$this->match($this->input, $this->getToken('FROM'), self::$FOLLOW_FROM_in_datasetClause349);
				// Sparql10.g:66:12: ( defaultGraphClause | namedGraphClause )
				$alt14 = 2;
				$LA14_0 = $this->input->LA(1);
				if (($LA14_0 == $this->getToken('IRI_REF') || $LA14_0 == $this->getToken('PNAME_NS') || $LA14_0 == $this->getToken('PNAME_LN'))) {
					$alt14 = 1;
				}
				else {
					if (($LA14_0 == $this->getToken('NAMED'))) {
						$alt14 = 2;
					}
					else {
						throw new \NoViableAltException("", 14, 0, $this->input);
					}
				}
				switch ($alt14) {
					case 1 :
						// Sparql10.g:66:14: defaultGraphClause
						{
						$this->pushFollow(self::$FOLLOW_defaultGraphClause_in_datasetClause353);
						$defaultGraphClause5 = $this->defaultGraphClause();
						$this->state->_fsp--;
						$this->_q->addFrom($defaultGraphClause5);
						}
						break;
					case 2 :
						// Sparql10.g:67:11: namedGraphClause
						{
						$this->pushFollow(self::$FOLLOW_namedGraphClause_in_datasetClause367);
						$namedGraphClause6 = $this->namedGraphClause();
						$this->state->_fsp--;
						$this->_q->addFrom($namedGraphClause6, true);
						}
						break;
				}
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "datasetClause"

	// $ANTLR start "defaultGraphClause"
	// Sparql10.g:72:1: defaultGraphClause returns [$value] : sourceSelector ;
	public function defaultGraphClause() {
		$value = null;
		$sourceSelector7 = null;
		try {
			// Sparql10.g:73:5: ( sourceSelector )
			// Sparql10.g:73:7: sourceSelector
			{
				$this->pushFollow(self::$FOLLOW_sourceSelector_in_defaultGraphClause402);
				$sourceSelector7 = $this->sourceSelector();
				$this->state->_fsp--;
				$value = $sourceSelector7;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "defaultGraphClause"

	// $ANTLR start "namedGraphClause"
	// Sparql10.g:77:1: namedGraphClause returns [$value] : NAMED sourceSelector ;
	public function namedGraphClause() {
		$value = null;
		$sourceSelector8 = null;
		try {
			// Sparql10.g:78:5: ( NAMED sourceSelector )
			// Sparql10.g:78:7: NAMED sourceSelector
			{
				$this->match($this->input, $this->getToken('NAMED'), self::$FOLLOW_NAMED_in_namedGraphClause427);
				$this->pushFollow(self::$FOLLOW_sourceSelector_in_namedGraphClause429);
				$sourceSelector8 = $this->sourceSelector();
				$this->state->_fsp--;
				$value = $sourceSelector8;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "namedGraphClause"

	// $ANTLR start "sourceSelector"
	// Sparql10.g:82:1: sourceSelector returns [$value] : iriRef ;
	public function sourceSelector() {
		$value = null;
		$iriRef9 = null;
		try {
			// Sparql10.g:83:5: ( iriRef )
			// Sparql10.g:83:7: iriRef
			{
				$this->pushFollow(self::$FOLLOW_iriRef_in_sourceSelector454);
				$iriRef9 = $this->iriRef();
				$this->state->_fsp--;
				$value = $iriRef9;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "sourceSelector"

	// $ANTLR start "whereClause"
	// Sparql10.g:87:1: whereClause : ( WHERE )? groupGraphPattern ;
	public function whereClause() {
		$groupGraphPattern10 = null;
		try {
			// Sparql10.g:88:5: ( ( WHERE )? groupGraphPattern )
			// Sparql10.g:88:7: ( WHERE )? groupGraphPattern
			{
				// Sparql10.g:88:7: ( WHERE )?
				$alt15 = 2;
				$LA15_0 = $this->input->LA(1);
				if (($LA15_0 == $this->getToken('WHERE'))) {
					$alt15 = 1;
				}
				switch ($alt15) {
					case 1 :
						// Sparql10.g:88:7: WHERE
						{
						$this->match($this->input, $this->getToken('WHERE'), self::$FOLLOW_WHERE_in_whereClause475);
						}
						break;
				}
				$this->pushFollow(self::$FOLLOW_groupGraphPattern_in_whereClause478);
				$groupGraphPattern10 = $this->groupGraphPattern();
				$this->state->_fsp--;
				$this->_q->setWhere($groupGraphPattern10);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "whereClause"

	// $ANTLR start "solutionModifier"
	// Sparql10.g:92:1: solutionModifier : ( orderClause )? ( limitOffsetClauses )? ;
	public function solutionModifier() {
		try {
			// Sparql10.g:93:5: ( ( orderClause )? ( limitOffsetClauses )? )
			// Sparql10.g:93:7: ( orderClause )? ( limitOffsetClauses )?
			{
				// Sparql10.g:93:7: ( orderClause )?
				$alt16 = 2;
				$LA16_0 = $this->input->LA(1);
				if (($LA16_0 == $this->getToken('ORDER'))) {
					$alt16 = 1;
				}
				switch ($alt16) {
					case 1 :
						// Sparql10.g:93:7: orderClause
						{
						$this->pushFollow(self::$FOLLOW_orderClause_in_solutionModifier499);
						$this->orderClause();
						$this->state->_fsp--;
						}
						break;
				}
				// Sparql10.g:93:20: ( limitOffsetClauses )?
				$alt17 = 2;
				$LA17_0 = $this->input->LA(1);
				if ((($LA17_0 >= $this->getToken('LIMIT') && $LA17_0 <= $this->getToken('OFFSET')))) {
					$alt17 = 1;
				}
				switch ($alt17) {
					case 1 :
						// Sparql10.g:93:20: limitOffsetClauses
						{
						$this->pushFollow(self::$FOLLOW_limitOffsetClauses_in_solutionModifier502);
						$this->limitOffsetClauses();
						$this->state->_fsp--;
						}
						break;
				}
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "solutionModifier"

	// $ANTLR start "limitOffsetClauses"
	// Sparql10.g:96:1: limitOffsetClauses : ( limitClause ( offsetClause )? | offsetClause ( limitClause )? );
	public function limitOffsetClauses() {
		try {
			// Sparql10.g:97:5: ( limitClause ( offsetClause )? | offsetClause ( limitClause )? )
			$alt20 = 2;
			$LA20_0 = $this->input->LA(1);
			if (($LA20_0 == $this->getToken('LIMIT'))) {
				$alt20 = 1;
			}
			else {
				if (($LA20_0 == $this->getToken('OFFSET'))) {
					$alt20 = 2;
				}
				else {
					$nvae = new \NoViableAltException("", 20, 0, $this->input);
					throw $nvae;
				}
			}
			switch ($alt20) {
				case 1 :
					// Sparql10.g:97:7: limitClause ( offsetClause )?
					{
					$this->pushFollow(self::$FOLLOW_limitClause_in_limitOffsetClauses521);
					$this->limitClause();
					$this->state->_fsp--;
					// Sparql10.g:97:19: ( offsetClause )?
					$alt18 = 2;
					$LA18_0 = $this->input->LA(1);
					if (($LA18_0 == $this->getToken('OFFSET'))) {
						$alt18 = 1;
					}
					switch ($alt18) {
						case 1 :
							// Sparql10.g:97:19: offsetClause
							{
							$this->pushFollow(self::$FOLLOW_offsetClause_in_limitOffsetClauses523);
							$this->offsetClause();
							$this->state->_fsp--;
							}
							break;
					}
					}
					break;
				case 2 :
					// Sparql10.g:98:7: offsetClause ( limitClause )?
					{
					$this->pushFollow(self::$FOLLOW_offsetClause_in_limitOffsetClauses533);
					$this->offsetClause();
					$this->state->_fsp--;
					// Sparql10.g:98:20: ( limitClause )?
					$alt19 = 2;
					$LA19_0 = $this->input->LA(1);
					if (($LA19_0 == $this->getToken('LIMIT'))) {
						$alt19 = 1;
					}
					switch ($alt19) {
						case 1 :
							// Sparql10.g:98:20: limitClause
							{
							$this->pushFollow(self::$FOLLOW_limitClause_in_limitOffsetClauses535);
							$this->limitClause();
							$this->state->_fsp--;
							}
							break;
					}
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "limitOffsetClauses"

	// $ANTLR start "orderClause"
	// Sparql10.g:102:1: orderClause : ORDER BY ( orderCondition )+ ;
	public function orderClause() {
		try {
			// Sparql10.g:103:5: ( ORDER BY ( orderCondition )+ )
			// Sparql10.g:103:7: ORDER BY ( orderCondition )+
			{
				$this->match($this->input, $this->getToken('ORDER'), self::$FOLLOW_ORDER_in_orderClause555);
				$this->match($this->input, $this->getToken('BY'), self::$FOLLOW_BY_in_orderClause557);
				// Sparql10.g:103:16: ( orderCondition )+
				$cnt21 = 0;
				//loop21:
				do {
					$alt21 = 2;
					$alt21 = $this->dfa21->predict($this->input);
					switch ($alt21) {
						case 1 :
							// Sparql10.g:103:16: orderCondition
							{
							$this->pushFollow(self::$FOLLOW_orderCondition_in_orderClause559);
							$this->orderCondition();
							$this->state->_fsp--;
							}
							break;
						default :
							if ($cnt21 >= 1) {
								break 2;
							} //loop21;
							throw new \EarlyExitException(21, $this->input);
					}
					$cnt21++;
				} while (true);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "orderClause"

	// $ANTLR start "orderCondition"
	// Sparql10.g:107:1: orderCondition : ( ( (o= ASC | o= DESC ) brackettedExpression ) | (v= constraint | v= variable ) );
	public function orderCondition() {
		$o = null;
		$v = null;
		$brackettedExpression11 = null;
		try {
			// Sparql10.g:108:5: ( ( (o= ASC | o= DESC ) brackettedExpression ) | (v= constraint | v= variable ) )
			$alt24 = 2;
			$alt24 = $this->dfa24->predict($this->input);
			switch ($alt24) {
				case 1 :
					// Sparql10.g:108:7: ( (o= ASC | o= DESC ) brackettedExpression )
					{
					// Sparql10.g:108:7: ( (o= ASC | o= DESC ) brackettedExpression )
					// Sparql10.g:108:9: (o= ASC | o= DESC ) brackettedExpression
						{
							// Sparql10.g:108:9: (o= ASC | o= DESC )
							$alt22 = 2;
							$LA22_0 = $this->input->LA(1);
							if (($LA22_0 == $this->getToken('ASC'))) {
								$alt22 = 1;
							}
							else {
								if (($LA22_0 == $this->getToken('DESC'))) {
									$alt22 = 2;
								}
								else {
									$nvae = new \NoViableAltException("", 22, 0, $this->input);
									throw $nvae;
								}
							}
							switch ($alt22) {
								case 1 :
									// Sparql10.g:108:11: o= ASC
									{
									$o = $this->match($this->input, $this->getToken('ASC'), self::$FOLLOW_ASC_in_orderCondition585);
									}
									break;
								case 2 :
									// Sparql10.g:108:19: o= DESC
									{
									$o = $this->match($this->input, $this->getToken('DESC'), self::$FOLLOW_DESC_in_orderCondition591);
									}
									break;
							}
							$this->pushFollow(self::$FOLLOW_brackettedExpression_in_orderCondition595);
							$brackettedExpression11 = $this->brackettedExpression();
							$this->state->_fsp--;
						}
						$this->_q->getOrder()->add($brackettedExpression11, ($o != null ? $o->getText() : null));
					}
						break;
				case 2 :
					// Sparql10.g:109:7: (v= constraint | v= variable )
					{
					// Sparql10.g:109:7: (v= constraint | v= variable )
					$alt23 = 2;
					$alt23 = $this->dfa23->predict($this->input);
					switch ($alt23) {
						case 1 :
							// Sparql10.g:109:9: v= constraint
							{
							$this->pushFollow(self::$FOLLOW_constraint_in_orderCondition611);
							$v = $this->constraint();
							$this->state->_fsp--;
							}
							break;
						case 2 :
							// Sparql10.g:109:24: v= variable
							{
							$this->pushFollow(self::$FOLLOW_variable_in_orderCondition617);
							$v = $this->variable();
							$this->state->_fsp--;
							}
							break;
					}
					$this->_q->getOrder()->add($v);
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "orderCondition"

	// $ANTLR start "limitClause"
	// Sparql10.g:113:1: limitClause : LIMIT INTEGER ;
	public function limitClause() {
		$INTEGER12 = null;
		try {
			// Sparql10.g:114:5: ( LIMIT INTEGER )
			// Sparql10.g:114:7: LIMIT INTEGER
			{
				$this->match($this->input, $this->getToken('LIMIT'), self::$FOLLOW_LIMIT_in_limitClause639);
				$INTEGER12 = $this->match($this->input, $this->getToken('INTEGER'), self::$FOLLOW_INTEGER_in_limitClause641);
				$this->_q->setLimit(($INTEGER12 != null ? $INTEGER12->getText() : null));
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "limitClause"

	// $ANTLR start "offsetClause"
	// Sparql10.g:118:1: offsetClause : OFFSET INTEGER ;
	public function offsetClause() {
		$INTEGER13 = null;
		try {
			// Sparql10.g:119:5: ( OFFSET INTEGER )
			// Sparql10.g:119:7: OFFSET INTEGER
			{
				$this->match($this->input, $this->getToken('OFFSET'), self::$FOLLOW_OFFSET_in_offsetClause662);
				$INTEGER13 = $this->match($this->input, $this->getToken('INTEGER'), self::$FOLLOW_INTEGER_in_offsetClause664);
				$this->_q->setOffset(($INTEGER13 != null ? $INTEGER13->getText() : null));
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return;
	}

	// $ANTLR end "offsetClause"

	// $ANTLR start "groupGraphPattern"
	// Sparql10.g:123:1: groupGraphPattern returns [$value] : OPEN_CURLY_BRACE (t1= triplesBlock )? ( (v= graphPatternNotTriples | v= filter ) ( DOT )? (t2= triplesBlock )? )* CLOSE_CURLY_BRACE ;
	public function groupGraphPattern() {
		$value = null;
		$t1 = null;
		$v = null;
		$t2 = null;
		$value = new Query2\GroupGraphPattern();
		try {
			// Sparql10.g:127:3: ( OPEN_CURLY_BRACE (t1= triplesBlock )? ( (v= graphPatternNotTriples | v= filter ) ( DOT )? (t2= triplesBlock )? )* CLOSE_CURLY_BRACE )
			// Sparql10.g:127:5: OPEN_CURLY_BRACE (t1= triplesBlock )? ( (v= graphPatternNotTriples | v= filter ) ( DOT )? (t2= triplesBlock )? )* CLOSE_CURLY_BRACE
			{
				$this->match($this->input, $this->getToken('OPEN_CURLY_BRACE'), self::$FOLLOW_OPEN_CURLY_BRACE_in_groupGraphPattern691);
				// Sparql10.g:127:22: (t1= triplesBlock )?
				$alt25 = 2;
				$alt25 = $this->dfa25->predict($this->input);
				switch ($alt25) {
					case 1 :
						// Sparql10.g:127:23: t1= triplesBlock
						{
						$this->pushFollow(self::$FOLLOW_triplesBlock_in_groupGraphPattern696);
						$t1 = $this->triplesBlock();
						$this->state->_fsp--;
						$value->addElements($t1);
						}
						break;
				}
				// Sparql10.g:128:3: ( (v= graphPatternNotTriples | v= filter ) ( DOT )? (t2= triplesBlock )? )*
				//loop29:
				do {
					$alt29 = 2;
					$LA29_0 = $this->input->LA(1);
					if ((($LA29_0 >= $this->getToken('OPTIONAL') && $LA29_0 <= $this->getToken('GRAPH')) || $LA29_0 == $this->getToken('FILTER') || $LA29_0 == $this->getToken('OPEN_CURLY_BRACE'))) {
						$alt29 = 1;
					}
					switch ($alt29) {
						case 1 :
							// Sparql10.g:128:5: (v= graphPatternNotTriples | v= filter ) ( DOT )? (t2= triplesBlock )?
							{
							// Sparql10.g:128:5: (v= graphPatternNotTriples | v= filter )
							$alt26 = 2;
							$LA26_0 = $this->input->LA(1);
							if ((($LA26_0 >= $this->getToken('OPTIONAL') && $LA26_0 <= $this->getToken('GRAPH')) || $LA26_0 == $this->getToken('OPEN_CURLY_BRACE'))) {
								$alt26 = 1;
							}
							else {
								if (($LA26_0 == $this->getToken('FILTER'))) {
									$alt26 = 2;
								}
								else {
									$nvae = new \NoViableAltException("", 26, 0, $this->input);
									throw $nvae;
								}
							}
							switch ($alt26) {
								case 1 :
									// Sparql10.g:128:7: v= graphPatternNotTriples
									{
									$this->pushFollow(self::$FOLLOW_graphPatternNotTriples_in_groupGraphPattern710);
									$v = $this->graphPatternNotTriples();
									$this->state->_fsp--;
									}
									break;
								case 2 :
									// Sparql10.g:128:34: v= filter
									{
									$this->pushFollow(self::$FOLLOW_filter_in_groupGraphPattern716);
									$v = $this->filter();
									$this->state->_fsp--;
									}
									break;
							}
							$value->addElement($v);
							// Sparql10.g:129:13: ( DOT )?
							$alt27 = 2;
							$alt27 = $this->dfa27->predict($this->input);
							switch ($alt27) {
								case 1 :
									// Sparql10.g:129:13: DOT
									{
									$this->match($this->input, $this->getToken('DOT'), self::$FOLLOW_DOT_in_groupGraphPattern734);
									}
									break;
							}
							// Sparql10.g:129:18: (t2= triplesBlock )?
							$alt28 = 2;
							$alt28 = $this->dfa28->predict($this->input);
							switch ($alt28) {
								case 1 :
									// Sparql10.g:129:19: t2= triplesBlock
									{
									$this->pushFollow(self::$FOLLOW_triplesBlock_in_groupGraphPattern740);
									$t2 = $this->triplesBlock();
									$this->state->_fsp--;
									$value->addElements($t2);
									}
									break;
							}
							}
							break;
						default :
							break 2;
						//loop29;
					}
				} while (true);
				$this->match($this->input, $this->getToken('CLOSE_CURLY_BRACE'), self::$FOLLOW_CLOSE_CURLY_BRACE_in_groupGraphPattern749);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "groupGraphPattern"

	// $ANTLR start "triplesBlock"
	// Sparql10.g:133:1: triplesBlock returns [$value] : triplesSameSubject ( DOT (t= triplesBlock )? )? ;
	public function triplesBlock() {
		$value = null;
		$t = null;
		$triplesSameSubject14 = null;
		$value = array();
		try {
			// Sparql10.g:137:5: ( triplesSameSubject ( DOT (t= triplesBlock )? )? )
			// Sparql10.g:137:7: triplesSameSubject ( DOT (t= triplesBlock )? )?
			{
				$this->pushFollow(self::$FOLLOW_triplesSameSubject_in_triplesBlock776);
				$triplesSameSubject14 = $this->triplesSameSubject();
				$this->state->_fsp--;
				$value[] = $triplesSameSubject14;
				// Sparql10.g:137:65: ( DOT (t= triplesBlock )? )?
				$alt31 = 2;
				$LA31_0 = $this->input->LA(1);
				if (($LA31_0 == $this->getToken('DOT'))) {
					$alt31 = 1;
				}
				switch ($alt31) {
					case 1 :
						// Sparql10.g:137:67: DOT (t= triplesBlock )?
						{
						$this->match($this->input, $this->getToken('DOT'), self::$FOLLOW_DOT_in_triplesBlock782);
						// Sparql10.g:137:71: (t= triplesBlock )?
						$alt30 = 2;
						$alt30 = $this->dfa30->predict($this->input);
						switch ($alt30) {
							case 1 :
								// Sparql10.g:137:72: t= triplesBlock
								{
								$this->pushFollow(self::$FOLLOW_triplesBlock_in_triplesBlock787);
								$t = $this->triplesBlock();
								$this->state->_fsp--;
								$value = array_merge($value, $t);
								}
								break;
						}
						}
						break;
				}
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "triplesBlock"

	// $ANTLR start "graphPatternNotTriples"
	// Sparql10.g:141:1: graphPatternNotTriples returns [$value] : (v= optionalGraphPattern | v= groupOrUnionGraphPattern | v= graphGraphPattern );
	public function graphPatternNotTriples() {
		$value = null;
		$v = null;
		try {
			// Sparql10.g:143:5: (v= optionalGraphPattern | v= groupOrUnionGraphPattern | v= graphGraphPattern )
			$alt32 = 3;
			$LA32 = $this->input->LA(1);
			if ($this->getToken('OPTIONAL') == $LA32) {
				$alt32 = 1;
			}
			else {
				if ($this->getToken('OPEN_CURLY_BRACE') == $LA32) {
					$alt32 = 2;
				}
				else {
					if ($this->getToken('GRAPH') == $LA32) {
						$alt32 = 3;
					}
					else {
						$nvae =
								new \NoViableAltException("", 32, 0, $this->input);
						throw $nvae;
					}
				}
			}
			switch ($alt32) {
				case 1 :
					// Sparql10.g:143:7: v= optionalGraphPattern
					{
					$this->pushFollow(self::$FOLLOW_optionalGraphPattern_in_graphPatternNotTriples824);
					$v = $this->optionalGraphPattern();
					$this->state->_fsp--;
					$v = $v;
					}
					break;
				case 2 :
					// Sparql10.g:144:7: v= groupOrUnionGraphPattern
					{
					$this->pushFollow(self::$FOLLOW_groupOrUnionGraphPattern_in_graphPatternNotTriples836);
					$v = $this->groupOrUnionGraphPattern();
					$this->state->_fsp--;
					$v = $v;
					}
					break;
				case 3 :
					// Sparql10.g:145:7: v= graphGraphPattern
					{
					$this->pushFollow(self::$FOLLOW_graphGraphPattern_in_graphPatternNotTriples848);
					$v = $this->graphGraphPattern();
					$this->state->_fsp--;
					$v = $v;
					}
					break;
			}
			$value = $v;
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "graphPatternNotTriples"

	// $ANTLR start "optionalGraphPattern"
	// Sparql10.g:149:1: optionalGraphPattern returns [$value] : OPTIONAL groupGraphPattern ;
	public function optionalGraphPattern() {
		$value = null;
		$groupGraphPattern15 = null;
		try {
			// Sparql10.g:150:5: ( OPTIONAL groupGraphPattern )
			// Sparql10.g:150:7: OPTIONAL groupGraphPattern
			{
				$this->match($this->input, $this->getToken('OPTIONAL'), self::$FOLLOW_OPTIONAL_in_optionalGraphPattern873);
				$this->pushFollow(self::$FOLLOW_groupGraphPattern_in_optionalGraphPattern875);
				$groupGraphPattern15 = $this->groupGraphPattern();
				$this->state->_fsp--;
				$value = new Query2\OptionalGraphPattern();
				$value->addElement($groupGraphPattern15);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "optionalGraphPattern"

	// $ANTLR start "graphGraphPattern"
	// Sparql10.g:154:1: graphGraphPattern returns [$value] : GRAPH varOrIRIref groupGraphPattern ;
	public function graphGraphPattern() {
		$value = null;
		$varOrIRIref16 = null;
		$groupGraphPattern17 = null;
		try {
			// Sparql10.g:155:5: ( GRAPH varOrIRIref groupGraphPattern )
			// Sparql10.g:155:7: GRAPH varOrIRIref groupGraphPattern
			{
				$this->match($this->input, $this->getToken('GRAPH'), self::$FOLLOW_GRAPH_in_graphGraphPattern900);
				$this->pushFollow(self::$FOLLOW_varOrIRIref_in_graphGraphPattern902);
				$varOrIRIref16 = $this->varOrIRIref();
				$this->state->_fsp--;
				$this->pushFollow(self::$FOLLOW_groupGraphPattern_in_graphGraphPattern904);
				$groupGraphPattern17 = $this->groupGraphPattern();
				$this->state->_fsp--;
				$value = new Query2\GraphGraphPattern($varOrIRIref16);
				$value->addElement($groupGraphPattern17);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "graphGraphPattern"

	// $ANTLR start "groupOrUnionGraphPattern"
	// Sparql10.g:159:1: groupOrUnionGraphPattern returns [$value] : v1= groupGraphPattern ( UNION v2= groupGraphPattern )* ;
	public function groupOrUnionGraphPattern() {
		$value = null;
		$v1 = null;
		$v2 = null;
		$value = new Query2\GroupOrUnionGraphPattern();
		try {
			// Sparql10.g:161:5: (v1= groupGraphPattern ( UNION v2= groupGraphPattern )* )
			// Sparql10.g:161:7: v1= groupGraphPattern ( UNION v2= groupGraphPattern )*
			{
				$this->pushFollow(self::$FOLLOW_groupGraphPattern_in_groupOrUnionGraphPattern935);
				$v1 = $this->groupGraphPattern();
				$this->state->_fsp--;
				$value->addElement($v1);
				// Sparql10.g:161:62: ( UNION v2= groupGraphPattern )*
				//loop33:
				do {
					$alt33 = 2;
					$alt33 = $this->dfa33->predict($this->input);
					switch ($alt33) {
						case 1 :
							// Sparql10.g:161:64: UNION v2= groupGraphPattern
							{
							$this->match($this->input, $this->getToken('UNION'), self::$FOLLOW_UNION_in_groupOrUnionGraphPattern941);
							$this->pushFollow(self::$FOLLOW_groupGraphPattern_in_groupOrUnionGraphPattern945);
							$v2 = $this->groupGraphPattern();
							$this->state->_fsp--;
							$value->addElement($v2);
							}
							break;
						default :
							break 2;
						//loop33;
					}
				} while (true);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "groupOrUnionGraphPattern"

	// $ANTLR start "filter"
	// Sparql10.g:165:1: filter returns [$value] : FILTER constraint ;
	public function filter() {
		$value = null;
		$constraint18 = null;
		try {
			// Sparql10.g:166:5: ( FILTER constraint )
			// Sparql10.g:166:7: FILTER constraint
			{
				$this->match($this->input, $this->getToken('FILTER'), self::$FOLLOW_FILTER_in_filter973);
				$this->pushFollow(self::$FOLLOW_constraint_in_filter975);
				$constraint18 = $this->constraint();
				$this->state->_fsp--;
				$value = new Query2\Filter($constraint18);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "filter"

	// $ANTLR start "constraint"
	// Sparql10.g:170:1: constraint returns [$value] : (v= brackettedExpression | v= builtInCall | v= functionCall );
	public function constraint() {
		$value = null;
		$v = null;
		try {
			// Sparql10.g:172:5: (v= brackettedExpression | v= builtInCall | v= functionCall )
			$alt34 = 3;
			$alt34 = $this->dfa34->predict($this->input);
			switch ($alt34) {
				case 1 :
					// Sparql10.g:172:7: v= brackettedExpression
					{
					$this->pushFollow(self::$FOLLOW_brackettedExpression_in_constraint1006);
					$v = $this->brackettedExpression();
					$this->state->_fsp--;
					}
					break;
				case 2 :
					// Sparql10.g:173:7: v= builtInCall
					{
					$this->pushFollow(self::$FOLLOW_builtInCall_in_constraint1016);
					$v = $this->builtInCall();
					$this->state->_fsp--;
					}
					break;
				case 3 :
					// Sparql10.g:174:7: v= functionCall
					{
					$this->pushFollow(self::$FOLLOW_functionCall_in_constraint1026);
					$v = $this->functionCall();
					$this->state->_fsp--;
					}
					break;
			}
			$value = $v;
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "constraint"

	// $ANTLR start "functionCall"
	// Sparql10.g:177:1: functionCall returns [$value] : iriRef argList ;
	public function functionCall() {
		$value = null;
		$iriRef19 = null;
		$argList20 = null;
		try {
			// Sparql10.g:178:5: ( iriRef argList )
			// Sparql10.g:178:7: iriRef argList
			{
				$this->pushFollow(self::$FOLLOW_iriRef_in_functionCall1048);
				$iriRef19 = $this->iriRef();
				$this->state->_fsp--;
				$this->pushFollow(self::$FOLLOW_argList_in_functionCall1050);
				$argList20 = $this->argList();
				$this->state->_fsp--;
				$value = new Query2\UserFunction($iriRef19, $argList20);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "functionCall"

	// $ANTLR start "argList"
	// Sparql10.g:182:1: argList returns [$value] : ( OPEN_BRACE ( WS )* CLOSE_BRACE | OPEN_BRACE e1= expression ( COMMA e2= expression )* CLOSE_BRACE );
	public function argList() {
		$value = null;
		$e1 = null;
		$e2 = null;
		$value = array();
		try {
			// Sparql10.g:184:5: ( OPEN_BRACE ( WS )* CLOSE_BRACE | OPEN_BRACE e1= expression ( COMMA e2= expression )* CLOSE_BRACE )
			$alt37 = 2;
			$alt37 = $this->dfa37->predict($this->input);
			switch ($alt37) {
				case 1 :
					// Sparql10.g:184:7: OPEN_BRACE ( WS )* CLOSE_BRACE
					{
					$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_argList1079);
					// Sparql10.g:184:18: ( WS )*
					//loop35:
					do {
						$alt35 = 2;
						$LA35_0 = $this->input->LA(1);
						if (($LA35_0 == $this->getToken('WS'))) {
							$alt35 = 1;
						}
						switch ($alt35) {
							case 1 :
								// Sparql10.g:184:18: WS
								{
								$this->match($this->input, $this->getToken('WS'), self::$FOLLOW_WS_in_argList1081);
								}
								break;
							default :
								break 2;
							//loop35;
						}
					} while (true);
					$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_argList1084);
					}
					break;
				case 2 :
					// Sparql10.g:185:7: OPEN_BRACE e1= expression ( COMMA e2= expression )* CLOSE_BRACE
					{
					$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_argList1092);
					$this->pushFollow(self::$FOLLOW_expression_in_argList1096);
					$e1 = $this->expression();
					$this->state->_fsp--;
					$value [] = $e1;
					// Sparql10.g:186:9: ( COMMA e2= expression )*
					//loop36:
					do {
						$alt36 = 2;
						$LA36_0 = $this->input->LA(1);
						if (($LA36_0 == $this->getToken('COMMA'))) {
							$alt36 = 1;
						}
						switch ($alt36) {
							case 1 :
								// Sparql10.g:186:11: COMMA e2= expression
								{
								$this->match($this->input, $this->getToken('COMMA'), self::$FOLLOW_COMMA_in_argList1110);
								$this->pushFollow(self::$FOLLOW_expression_in_argList1114);
								$e2 = $this->expression();
								$this->state->_fsp--;
								$value [] = $e2;
								}
								break;
							default :
								break 2;
							//loop36;
						}
					} while (true);
					$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_argList1120);
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "argList"

	// $ANTLR start "constructTemplate"
	// Sparql10.g:190:1: constructTemplate returns [$value] : OPEN_CURLY_BRACE ( constructTriples )? CLOSE_CURLY_BRACE ;
	public function constructTemplate() {
		$value = null;
		$constructTriples21 = null;
		$value = new Query2\ConstructTemplate();
		try {
			// Sparql10.g:192:5: ( OPEN_CURLY_BRACE ( constructTriples )? CLOSE_CURLY_BRACE )
			// Sparql10.g:192:7: OPEN_CURLY_BRACE ( constructTriples )? CLOSE_CURLY_BRACE
			{
				$this->match($this->input, $this->getToken('OPEN_CURLY_BRACE'), self::$FOLLOW_OPEN_CURLY_BRACE_in_constructTemplate1147);
				// Sparql10.g:192:24: ( constructTriples )?
				$alt38 = 2;
				$alt38 = $this->dfa38->predict($this->input);
				switch ($alt38) {
					case 1 :
						// Sparql10.g:192:25: constructTriples
						{
						$this->pushFollow(self::$FOLLOW_constructTriples_in_constructTemplate1150);
						$constructTriples21 = $this->constructTriples();
						$this->state->_fsp--;
						$value->setElements($constructTriples21);
						}
						break;
				}
				$this->match($this->input, $this->getToken('CLOSE_CURLY_BRACE'), self::$FOLLOW_CLOSE_CURLY_BRACE_in_constructTemplate1156);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "constructTemplate"

	// $ANTLR start "constructTriples"
	// Sparql10.g:196:1: constructTriples returns [$value] : triplesSameSubject ( DOT (c= constructTriples )? )? ;
	public function constructTriples() {
		$value = null;
		$c = null;
		$triplesSameSubject22 = null;
		$value = array();
		try {
			// Sparql10.g:198:5: ( triplesSameSubject ( DOT (c= constructTriples )? )? )
			// Sparql10.g:198:7: triplesSameSubject ( DOT (c= constructTriples )? )?
			{
				$this->pushFollow(self::$FOLLOW_triplesSameSubject_in_constructTriples1183);
				$triplesSameSubject22 = $this->triplesSameSubject();
				$this->state->_fsp--;
				$value [] = $triplesSameSubject22;
				// Sparql10.g:198:67: ( DOT (c= constructTriples )? )?
				$alt40 = 2;
				$LA40_0 = $this->input->LA(1);
				if (($LA40_0 == $this->getToken('DOT'))) {
					$alt40 = 1;
				}
				switch ($alt40) {
					case 1 :
						// Sparql10.g:198:69: DOT (c= constructTriples )?
						{
						$this->match($this->input, $this->getToken('DOT'), self::$FOLLOW_DOT_in_constructTriples1189);
						// Sparql10.g:198:73: (c= constructTriples )?
						$alt39 = 2;
						$alt39 = $this->dfa39->predict($this->input);
						switch ($alt39) {
							case 1 :
								// Sparql10.g:198:74: c= constructTriples
								{
								$this->pushFollow(self::$FOLLOW_constructTriples_in_constructTriples1194);
								$c = $this->constructTriples();
								$this->state->_fsp--;
								$value = array_merge($value, $c);
								}
								break;
						}
						}
						break;
				}
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "constructTriples"

	// $ANTLR start "triplesSameSubject"
	// Sparql10.g:202:1: triplesSameSubject returns [$value] : ( varOrTerm propertyListNotEmpty | triplesNode propertyList );
	public function triplesSameSubject() {
		$value = null;
		$varOrTerm23 = null;
		$propertyListNotEmpty24 = null;
		$triplesNode25 = null;
		$propertyList26 = null;
		try {
			// Sparql10.g:203:5: ( varOrTerm propertyListNotEmpty | triplesNode propertyList )
			$alt41 = 2;
			$alt41 = $this->dfa41->predict($this->input);
			switch ($alt41) {
				case 1 :
					// Sparql10.g:203:7: varOrTerm propertyListNotEmpty
					{
					$this->pushFollow(self::$FOLLOW_varOrTerm_in_triplesSameSubject1224);
					$varOrTerm23 = $this->varOrTerm();
					$this->state->_fsp--;
					$this->pushFollow(self::$FOLLOW_propertyListNotEmpty_in_triplesSameSubject1226);
					$propertyListNotEmpty24 = $this->propertyListNotEmpty();
					$this->state->_fsp--;
					$value = new Query2\TriplesSameSubject($varOrTerm23, $propertyListNotEmpty24);
					}
					break;
				case 2 :
					// Sparql10.g:204:7: triplesNode propertyList
					{
					$this->pushFollow(self::$FOLLOW_triplesNode_in_triplesSameSubject1236);
					$triplesNode25 = $this->triplesNode();
					$this->state->_fsp--;
					$this->pushFollow(self::$FOLLOW_propertyList_in_triplesSameSubject1238);
					$propertyList26 = $this->propertyList();
					$this->state->_fsp--;
					$value = new Query2\TriplesSameSubject($triplesNode25, $propertyList26);
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "triplesSameSubject"

	// $ANTLR start "propertyListNotEmpty"
	// Sparql10.g:208:1: propertyListNotEmpty returns [$value] : v1= verb ol1= objectList ( SEMICOLON (v2= verb ol2= objectList )? )* ;
	public function propertyListNotEmpty() {
		$value = null;
		$v1 = null;
		$ol1 = null;
		$v2 = null;
		$ol2 = null;
		$value = new Query2\PropertyList();
		try {
			// Sparql10.g:210:5: (v1= verb ol1= objectList ( SEMICOLON (v2= verb ol2= objectList )? )* )
			// Sparql10.g:210:7: v1= verb ol1= objectList ( SEMICOLON (v2= verb ol2= objectList )? )*
			{
				$this->pushFollow(self::$FOLLOW_verb_in_propertyListNotEmpty1269);
				$v1 = $this->verb();
				$this->state->_fsp--;
				$this->pushFollow(self::$FOLLOW_objectList_in_propertyListNotEmpty1273);
				$ol1 = $this->objectList();
				$this->state->_fsp--;
				$value->addProperty($v1, $ol1);
				// Sparql10.g:211:9: ( SEMICOLON (v2= verb ol2= objectList )? )*
				//loop43:
				do {
					$alt43 = 2;
					$LA43_0 = $this->input->LA(1);
					if (($LA43_0 == $this->getToken('SEMICOLON'))) {
						$alt43 = 1;
					}
					switch ($alt43) {
						case 1 :
							// Sparql10.g:211:11: SEMICOLON (v2= verb ol2= objectList )?
							{
							$this->match($this->input, $this->getToken('SEMICOLON'), self::$FOLLOW_SEMICOLON_in_propertyListNotEmpty1287);
							// Sparql10.g:211:21: (v2= verb ol2= objectList )?
							$alt42 = 2;
							$alt42 = $this->dfa42->predict($this->input);
							switch ($alt42) {
								case 1 :
									// Sparql10.g:211:23: v2= verb ol2= objectList
									{
									$this->pushFollow(self::$FOLLOW_verb_in_propertyListNotEmpty1293);
									$v2 = $this->verb();
									$this->state->_fsp--;
									$this->pushFollow(self::$FOLLOW_objectList_in_propertyListNotEmpty1297);
									$ol2 = $this->objectList();
									$this->state->_fsp--;
									$value->addProperty($v2, $ol2);
									}
									break;
							}
							}
							break;
						default :
							break 2;
						//loop43;
					}
				} while (true);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "propertyListNotEmpty"

	// $ANTLR start "propertyList"
	// Sparql10.g:215:1: propertyList returns [$value] : ( propertyListNotEmpty )? ;
	public function propertyList() {
		$value = null;
		$propertyListNotEmpty27 = null;
		$v = null;
		try {
			// Sparql10.g:218:5: ( ( propertyListNotEmpty )? )
			// Sparql10.g:218:7: ( propertyListNotEmpty )?
			{
				// Sparql10.g:218:7: ( propertyListNotEmpty )?
				$alt44 = 2;
				$alt44 = $this->dfa44->predict($this->input);
				switch ($alt44) {
					case 1 :
						// Sparql10.g:218:8: propertyListNotEmpty
						{
						$this->pushFollow(self::$FOLLOW_propertyListNotEmpty_in_propertyList1336);
						$propertyListNotEmpty27 = $this->propertyListNotEmpty();
						$this->state->_fsp--;
						$v = $propertyListNotEmpty27;
						}
						break;
				}
			}
			$value = $v ? $v : new Query2\PropertyList();
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "propertyList"

	// $ANTLR start "objectList"
	// Sparql10.g:222:1: objectList returns [$value] : o1= object ( COMMA o2= object )* ;
	public function objectList() {
		$value = null;
		$o1 = null;
		$o2 = null;
		try {
			// Sparql10.g:223:5: (o1= object ( COMMA o2= object )* )
			// Sparql10.g:223:7: o1= object ( COMMA o2= object )*
			{
				$this->pushFollow(self::$FOLLOW_object_in_objectList1365);
				$o1 = $this->object();
				$this->state->_fsp--;
				$value = new Query2\ObjectList(array($o1));
				// Sparql10.g:224:9: ( COMMA o2= object )*
				//loop45:
				do {
					$alt45 = 2;
					$alt45 = $this->dfa45->predict($this->input);
					switch ($alt45) {
						case 1 :
							// Sparql10.g:224:11: COMMA o2= object
							{
							$this->match($this->input, $this->getToken('COMMA'), self::$FOLLOW_COMMA_in_objectList1379);
							$this->pushFollow(self::$FOLLOW_object_in_objectList1383);
							$o2 = $this->object();
							$this->state->_fsp--;
							$value->addElement($o2);
							}
							break;
						default :
							break 2;
						//loop45;
					}
				} while (true);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "objectList"

	// $ANTLR start "object"
	// Sparql10.g:228:1: object returns [$value] : graphNode ;
	public function object() {
		$value = null;
		$graphNode28 = null;
		try {
			// Sparql10.g:229:5: ( graphNode )
			// Sparql10.g:229:7: graphNode
			{
				$this->pushFollow(self::$FOLLOW_graphNode_in_object1411);
				$graphNode28 = $this->graphNode();
				$this->state->_fsp--;
				$value = $graphNode28;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "object"

	// $ANTLR start "verb"
	// Sparql10.g:233:1: verb returns [$value] : ( varOrIRIref | A );
	public function verb() {
		$value = null;
		$varOrIRIref29 = null;
		try {
			// Sparql10.g:234:5: ( varOrIRIref | A )
			$alt46 = 2;
			$LA46_0 = $this->input->LA(1);
			if (($LA46_0 == $this->getToken('IRI_REF') || $LA46_0 == $this->getToken('PNAME_NS') || $LA46_0 == $this->getToken('PNAME_LN') || ($LA46_0 >= $this->getToken('VAR1') && $LA46_0 <= $this->getToken('VAR2')))) {
				$alt46 = 1;
			}
			else {
				if (($LA46_0 == $this->getToken('A'))) {
					$alt46 = 2;
				}
				else {
					$nvae = new \NoViableAltException("", 46, 0, $this->input);
					throw $nvae;
				}
			}
			switch ($alt46) {
				case 1 :
					// Sparql10.g:234:7: varOrIRIref
					{
					$this->pushFollow(self::$FOLLOW_varOrIRIref_in_verb1436);
					$varOrIRIref29 = $this->varOrIRIref();
					$this->state->_fsp--;
					$value = $varOrIRIref29;
					}
					break;
				case 2 :
					// Sparql10.g:235:7: A
					{
					$this->match($this->input, $this->getToken('A'), self::$FOLLOW_A_in_verb1446);
					$value = new Query2\A();
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "verb"

	// $ANTLR start "triplesNode"
	// Sparql10.g:239:1: triplesNode returns [$value] : ( collection | blankNodePropertyList );
	public function triplesNode() {
		$value = null;
		$collection30 = null;
		$blankNodePropertyList31 = null;
		try {
			// Sparql10.g:240:5: ( collection | blankNodePropertyList )
			$alt47 = 2;
			$LA47_0 = $this->input->LA(1);
			if (($LA47_0 == $this->getToken('OPEN_BRACE'))) {
				$alt47 = 1;
			}
			else {
				if (($LA47_0 == $this->getToken('OPEN_SQUARE_BRACE'))) {
					$alt47 = 2;
				}
				else {
					$nvae = new \NoViableAltException("", 47, 0, $this->input);
					throw $nvae;
				}
			}
			switch ($alt47) {
				case 1 :
					// Sparql10.g:240:7: collection
					{
					$this->pushFollow(self::$FOLLOW_collection_in_triplesNode1471);
					$collection30 = $this->collection();
					$this->state->_fsp--;
					$value = $collection30;
					}
					break;
				case 2 :
					// Sparql10.g:241:7: blankNodePropertyList
					{
					$this->pushFollow(self::$FOLLOW_blankNodePropertyList_in_triplesNode1481);
					$blankNodePropertyList31 = $this->blankNodePropertyList();
					$this->state->_fsp--;
					$value = $blankNodePropertyList31;
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "triplesNode"

	// $ANTLR start "blankNodePropertyList"
	// Sparql10.g:245:1: blankNodePropertyList returns [$value] : OPEN_SQUARE_BRACE propertyListNotEmpty CLOSE_SQUARE_BRACE ;
	public function blankNodePropertyList() {
		$value = null;
		$propertyListNotEmpty32 = null;
		try {
			// Sparql10.g:246:5: ( OPEN_SQUARE_BRACE propertyListNotEmpty CLOSE_SQUARE_BRACE )
			// Sparql10.g:246:7: OPEN_SQUARE_BRACE propertyListNotEmpty CLOSE_SQUARE_BRACE
			{
				$this->match($this->input, $this->getToken('OPEN_SQUARE_BRACE'), self::$FOLLOW_OPEN_SQUARE_BRACE_in_blankNodePropertyList1506);
				$this->pushFollow(self::$FOLLOW_propertyListNotEmpty_in_blankNodePropertyList1508);
				$propertyListNotEmpty32 = $this->propertyListNotEmpty();
				$this->state->_fsp--;
				$this->match($this->input, $this->getToken('CLOSE_SQUARE_BRACE'), self::$FOLLOW_CLOSE_SQUARE_BRACE_in_blankNodePropertyList1510);
				$value = new Query2\BlankNodePropertyList($propertyListNotEmpty32);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "blankNodePropertyList"

	// $ANTLR start "collection"
	// Sparql10.g:250:1: collection returns [$value] : OPEN_BRACE ( graphNode )+ CLOSE_BRACE ;
	public function collection() {
		$value = null;
		$graphNode33 = null;
		$list = array();
		try {
			// Sparql10.g:253:5: ( OPEN_BRACE ( graphNode )+ CLOSE_BRACE )
			// Sparql10.g:253:7: OPEN_BRACE ( graphNode )+ CLOSE_BRACE
			{
				$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_collection1543);
				// Sparql10.g:253:18: ( graphNode )+
				$cnt48 = 0;
				//loop48:
				do {
					$alt48 = 2;
					$alt48 = $this->dfa48->predict($this->input);
					switch ($alt48) {
						case 1 :
							// Sparql10.g:253:19: graphNode
							{
							$this->pushFollow(self::$FOLLOW_graphNode_in_collection1546);
							$graphNode33 = $this->graphNode();
							$this->state->_fsp--;
							$list [] = $graphNode33;
							}
							break;
						default :
							if ($cnt48 >= 1) {
								break 2;
							} //loop48;
							throw new \EarlyExitException(48, $this->input);
					}
					$cnt48++;
				} while (true);
				$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_collection1552);
			}
			$value = new Query2\Collection($list);
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "collection"

	// $ANTLR start "graphNode"
	// Sparql10.g:257:1: graphNode returns [$value] : ( varOrTerm | triplesNode );
	public function graphNode() {
		$value = null;
		$varOrTerm34 = null;
		$triplesNode35 = null;
		try {
			// Sparql10.g:258:5: ( varOrTerm | triplesNode )
			$alt49 = 2;
			$alt49 = $this->dfa49->predict($this->input);
			switch ($alt49) {
				case 1 :
					// Sparql10.g:258:7: varOrTerm
					{
					$this->pushFollow(self::$FOLLOW_varOrTerm_in_graphNode1575);
					$varOrTerm34 = $this->varOrTerm();
					$this->state->_fsp--;
					$value = $varOrTerm34;
					}
					break;
				case 2 :
					// Sparql10.g:259:7: triplesNode
					{
					$this->pushFollow(self::$FOLLOW_triplesNode_in_graphNode1585);
					$triplesNode35 = $this->triplesNode();
					$this->state->_fsp--;
					$value = $triplesNode35;
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "graphNode"

	// $ANTLR start "varOrTerm"
	// Sparql10.g:263:1: varOrTerm returns [$value] : ( variable | graphTerm );
	public function varOrTerm() {
		$value = null;
		$variable36 = null;
		$graphTerm37 = null;
		try {
			// Sparql10.g:264:5: ( variable | graphTerm )
			$alt50 = 2;
			$alt50 = $this->dfa50->predict($this->input);
			switch ($alt50) {
				case 1 :
					// Sparql10.g:264:7: variable
					{
					$this->pushFollow(self::$FOLLOW_variable_in_varOrTerm1610);
					$variable36 = $this->variable();
					$this->state->_fsp--;
					$value = $variable36;
					}
					break;
				case 2 :
					// Sparql10.g:265:7: graphTerm
					{
					$this->pushFollow(self::$FOLLOW_graphTerm_in_varOrTerm1620);
					$graphTerm37 = $this->graphTerm();
					$this->state->_fsp--;
					$value = $graphTerm37;
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "varOrTerm"

	// $ANTLR start "varOrIRIref"
	// Sparql10.g:269:1: varOrIRIref returns [$value] : ( variable | iriRef );
	public function varOrIRIref() {
		$value = null;
		$variable38 = null;
		$iriRef39 = null;
		try {
			// Sparql10.g:270:5: ( variable | iriRef )
			$alt51 = 2;
			$LA51_0 = $this->input->LA(1);
			if ((($LA51_0 >= $this->getToken('VAR1') && $LA51_0 <= $this->getToken('VAR2')))) {
				$alt51 = 1;
			}
			else {
				if (($LA51_0 == $this->getToken('IRI_REF') || $LA51_0 == $this->getToken('PNAME_NS') || $LA51_0 == $this->getToken('PNAME_LN'))) {
					$alt51 = 2;
				}
				else {
					$nvae = new \NoViableAltException("", 51, 0, $this->input);
					throw $nvae;
				}
			}
			switch ($alt51) {
				case 1 :
					// Sparql10.g:270:7: variable
					{
					$this->pushFollow(self::$FOLLOW_variable_in_varOrIRIref1645);
					$variable38 = $this->variable();
					$this->state->_fsp--;
					$value = $variable38;
					}
					break;
				case 2 :
					// Sparql10.g:271:7: iriRef
					{
					$this->pushFollow(self::$FOLLOW_iriRef_in_varOrIRIref1655);
					$iriRef39 = $this->iriRef();
					$this->state->_fsp--;
					$value = $iriRef39;
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "varOrIRIref"

	// $ANTLR start "variable"
	// Sparql10.g:275:1: variable returns [$value] : (v= VAR1 | v= VAR2 );
	public function variable() {
		$value = null;
		$v = null;
		try {
			// Sparql10.g:277:5: (v= VAR1 | v= VAR2 )
			$alt52 = 2;
			$LA52_0 = $this->input->LA(1);
			if (($LA52_0 == $this->getToken('VAR1'))) {
				$alt52 = 1;
			}
			else {
				if (($LA52_0 == $this->getToken('VAR2'))) {
					$alt52 = 2;
				}
				else {
					$nvae = new \NoViableAltException("", 52, 0, $this->input);
					throw $nvae;
				}
			}
			switch ($alt52) {
				case 1 :
					// Sparql10.g:277:7: v= VAR1
					{
					$v = $this->match($this->input, $this->getToken('VAR1'), self::$FOLLOW_VAR1_in_variable1686);
					$vartype = "?";
					}
					break;
				case 2 :
					// Sparql10.g:278:7: v= VAR2
					{
					$v = $this->match($this->input, $this->getToken('VAR2'), self::$FOLLOW_VAR2_in_variable1698);
					$vartype = "$";
					}
					break;
			}
			$value = new Query2\Variable(($v != null ? $v->getText() : null));
			$value->setVarLabelType($vartype);
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "variable"

	// $ANTLR start "graphTerm"
	// Sparql10.g:282:1: graphTerm returns [$value] : (v= iriRef | v= rdfLiteral | v= numericLiteral | v= booleanLiteral | v= blankNode | OPEN_BRACE ( WS )* CLOSE_BRACE );
	public function graphTerm() {
		$value = null;
		$v = null;
		try {
			// Sparql10.g:283:5: (v= iriRef | v= rdfLiteral | v= numericLiteral | v= booleanLiteral | v= blankNode | OPEN_BRACE ( WS )* CLOSE_BRACE )
			$alt54 = 6;
			$alt54 = $this->dfa54->predict($this->input);
			switch ($alt54) {
				case 1 :
					// Sparql10.g:283:7: v= iriRef
					{
					$this->pushFollow(self::$FOLLOW_iriRef_in_graphTerm1725);
					$v = $this->iriRef();
					$this->state->_fsp--;
					$value = $v;
					}
					break;
				case 2 :
					// Sparql10.g:284:7: v= rdfLiteral
					{
					$this->pushFollow(self::$FOLLOW_rdfLiteral_in_graphTerm1737);
					$v = $this->rdfLiteral();
					$this->state->_fsp--;
					$value = $v;
					}
					break;
				case 3 :
					// Sparql10.g:285:7: v= numericLiteral
					{
					$this->pushFollow(self::$FOLLOW_numericLiteral_in_graphTerm1749);
					$v = $this->numericLiteral();
					$this->state->_fsp--;
					$value = $v;
					}
					break;
				case 4 :
					// Sparql10.g:286:7: v= booleanLiteral
					{
					$this->pushFollow(self::$FOLLOW_booleanLiteral_in_graphTerm1761);
					$v = $this->booleanLiteral();
					$this->state->_fsp--;
					$value = $v;
					}
					break;
				case 5 :
					// Sparql10.g:287:7: v= blankNode
					{
					$this->pushFollow(self::$FOLLOW_blankNode_in_graphTerm1773);
					$v = $this->blankNode();
					$this->state->_fsp--;
					$value = $v;
					}
					break;
				case 6 :
					// Sparql10.g:288:7: OPEN_BRACE ( WS )* CLOSE_BRACE
					{
					$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_graphTerm1783);
					// Sparql10.g:288:18: ( WS )*
					//loop53:
					do {
						$alt53 = 2;
						$LA53_0 = $this->input->LA(1);
						if (($LA53_0 == $this->getToken('WS'))) {
							$alt53 = 1;
						}
						switch ($alt53) {
							case 1 :
								// Sparql10.g:288:18: WS
								{
								$this->match($this->input, $this->getToken('WS'), self::$FOLLOW_WS_in_graphTerm1785);
								}
								break;
							default :
								break 2;
							//loop53;
						}
					} while (true);
					$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_graphTerm1788);
					$value = new Query2\Nil();
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "graphTerm"

	// $ANTLR start "expression"
	// Sparql10.g:292:1: expression returns [$value] : conditionalOrExpression ;
	public function expression() {
		$value = null;
		$conditionalOrExpression40 = null;
		try {
			// Sparql10.g:293:5: ( conditionalOrExpression )
			// Sparql10.g:293:7: conditionalOrExpression
			{
				$this->pushFollow(self::$FOLLOW_conditionalOrExpression_in_expression1813);
				$conditionalOrExpression40 = $this->conditionalOrExpression();
				$this->state->_fsp--;
				$value = $conditionalOrExpression40;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "expression"

	// $ANTLR start "conditionalOrExpression"
	// Sparql10.g:297:1: conditionalOrExpression returns [$value] : c1= conditionalAndExpression ( OR c2= conditionalAndExpression )* ;
	public function conditionalOrExpression() {
		$value = null;
		$c1 = null;
		$c2 = null;
		$v = array();
		try {
			// Sparql10.g:300:5: (c1= conditionalAndExpression ( OR c2= conditionalAndExpression )* )
			// Sparql10.g:300:7: c1= conditionalAndExpression ( OR c2= conditionalAndExpression )*
			{
				$this->pushFollow(self::$FOLLOW_conditionalAndExpression_in_conditionalOrExpression1848);
				$c1 = $this->conditionalAndExpression();
				$this->state->_fsp--;
				$v[] = $c1;
				// Sparql10.g:301:5: ( OR c2= conditionalAndExpression )*
				//loop55:
				do {
					$alt55 = 2;
					$LA55_0 = $this->input->LA(1);
					if (($LA55_0 == $this->getToken('OR'))) {
						$alt55 = 1;
					}
					switch ($alt55) {
						case 1 :
							// Sparql10.g:301:7: OR c2= conditionalAndExpression
							{
							$this->match($this->input, $this->getToken('OR'), self::$FOLLOW_OR_in_conditionalOrExpression1858);
							$this->pushFollow(self::$FOLLOW_conditionalAndExpression_in_conditionalOrExpression1862);
							$c2 = $this->conditionalAndExpression();
							$this->state->_fsp--;
							$v[] = $c2;
							}
							break;
						default :
							break 2;
						//loop55;
					}
				} while (true);
			}
			$value = new Query2\ConditionalOrExpression($v);
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "conditionalOrExpression"

	// $ANTLR start "conditionalAndExpression"
	// Sparql10.g:305:1: conditionalAndExpression returns [$value] : v1= valueLogical ( AND v2= valueLogical )* ;
	public function conditionalAndExpression() {
		$value = null;
		$v1 = null;
		$v2 = null;
		$v = array();
		try {
			// Sparql10.g:308:5: (v1= valueLogical ( AND v2= valueLogical )* )
			// Sparql10.g:308:7: v1= valueLogical ( AND v2= valueLogical )*
			{
				$this->pushFollow(self::$FOLLOW_valueLogical_in_conditionalAndExpression1899);
				$v1 = $this->valueLogical();
				$this->state->_fsp--;
				$v[] = $v1;
				// Sparql10.g:308:44: ( AND v2= valueLogical )*
				//loop56:
				do {
					$alt56 = 2;
					$LA56_0 = $this->input->LA(1);
					if (($LA56_0 == $this->getToken('AND'))) {
						$alt56 = 1;
					}
					switch ($alt56) {
						case 1 :
							// Sparql10.g:308:46: AND v2= valueLogical
							{
							$this->match($this->input, $this->getToken('AND'), self::$FOLLOW_AND_in_conditionalAndExpression1905);
							$this->pushFollow(self::$FOLLOW_valueLogical_in_conditionalAndExpression1909);
							$v2 = $this->valueLogical();
							$this->state->_fsp--;
							$v[] = $v2;
							}
							break;
						default :
							break 2;
						//loop56;
					}
				} while (true);
			}
			$value = new Query2\ConditionalAndExpression($v);
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "conditionalAndExpression"

	// $ANTLR start "valueLogical"
	// Sparql10.g:312:1: valueLogical returns [$value] : relationalExpression ;
	public function valueLogical() {
		$value = null;
		$relationalExpression41 = null;
		try {
			// Sparql10.g:313:5: ( relationalExpression )
			// Sparql10.g:313:7: relationalExpression
			{
				$this->pushFollow(self::$FOLLOW_relationalExpression_in_valueLogical1937);
				$relationalExpression41 = $this->relationalExpression();
				$this->state->_fsp--;
				$value = $relationalExpression41;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "valueLogical"

	// $ANTLR start "relationalExpression"
	// Sparql10.g:317:1: relationalExpression returns [$value] : n1= numericExpression ( EQUAL n2= numericExpression | NOT_EQUAL n2= numericExpression | LESS n2= numericExpression | GREATER n2= numericExpression | LESS_EQUAL n2= numericExpression | GREATER_EQUAL n2= numericExpression )? ;
	public function relationalExpression() {
		$value = null;
		$n1 = null;
		$n2 = null;
		try {
			// Sparql10.g:318:5: (n1= numericExpression ( EQUAL n2= numericExpression | NOT_EQUAL n2= numericExpression | LESS n2= numericExpression | GREATER n2= numericExpression | LESS_EQUAL n2= numericExpression | GREATER_EQUAL n2= numericExpression )? )
			// Sparql10.g:318:7: n1= numericExpression ( EQUAL n2= numericExpression | NOT_EQUAL n2= numericExpression | LESS n2= numericExpression | GREATER n2= numericExpression | LESS_EQUAL n2= numericExpression | GREATER_EQUAL n2= numericExpression )?
			{
				$this->pushFollow(self::$FOLLOW_numericExpression_in_relationalExpression1964);
				$n1 = $this->numericExpression();
				$this->state->_fsp--;
				$value = $n1;
				// Sparql10.g:319:9: ( EQUAL n2= numericExpression | NOT_EQUAL n2= numericExpression | LESS n2= numericExpression | GREATER n2= numericExpression | LESS_EQUAL n2= numericExpression | GREATER_EQUAL n2= numericExpression )?
				$alt57 = 7;
				$alt57 = $this->dfa57->predict($this->input);
				switch ($alt57) {
					case 1 :
						// Sparql10.g:319:11: EQUAL n2= numericExpression
						{
						$this->match($this->input, $this->getToken('EQUAL'), self::$FOLLOW_EQUAL_in_relationalExpression1978);
						$this->pushFollow(self::$FOLLOW_numericExpression_in_relationalExpression1982);
						$n2 = $this->numericExpression();
						$this->state->_fsp--;
						$value = new Query2\Equals($n1, $n2);
						}
						break;
					case 2 :
						// Sparql10.g:320:11: NOT_EQUAL n2= numericExpression
						{
						$this->match($this->input, $this->getToken('NOT_EQUAL'), self::$FOLLOW_NOT_EQUAL_in_relationalExpression1996);
						$this->pushFollow(self::$FOLLOW_numericExpression_in_relationalExpression2000);
						$n2 = $this->numericExpression();
						$this->state->_fsp--;
						$value = new Query2\NotEquals($n1, $n2);
						}
						break;
					case 3 :
						// Sparql10.g:321:11: LESS n2= numericExpression
						{
						$this->match($this->input, $this->getToken('LESS'), self::$FOLLOW_LESS_in_relationalExpression2014);
						$this->pushFollow(self::$FOLLOW_numericExpression_in_relationalExpression2018);
						$n2 = $this->numericExpression();
						$this->state->_fsp--;
						$value = new Query2\Smaller($n1, $n2);
						}
						break;
					case 4 :
						// Sparql10.g:322:11: GREATER n2= numericExpression
						{
						$this->match($this->input, $this->getToken('GREATER'), self::$FOLLOW_GREATER_in_relationalExpression2032);
						$this->pushFollow(self::$FOLLOW_numericExpression_in_relationalExpression2036);
						$n2 = $this->numericExpression();
						$this->state->_fsp--;
						$value = new Query2\Larger($n1, $n2);
						}
						break;
					case 5 :
						// Sparql10.g:323:11: LESS_EQUAL n2= numericExpression
						{
						$this->match($this->input, $this->getToken('LESS_EQUAL'), self::$FOLLOW_LESS_EQUAL_in_relationalExpression2050);
						$this->pushFollow(self::$FOLLOW_numericExpression_in_relationalExpression2054);
						$n2 = $this->numericExpression();
						$this->state->_fsp--;
						$value = new Query2\SmallerEqual($n1, $n2);
						}
						break;
					case 6 :
						// Sparql10.g:324:11: GREATER_EQUAL n2= numericExpression
						{
						$this->match($this->input, $this->getToken('GREATER_EQUAL'), self::$FOLLOW_GREATER_EQUAL_in_relationalExpression2068);
						$this->pushFollow(self::$FOLLOW_numericExpression_in_relationalExpression2072);
						$n2 = $this->numericExpression();
						$this->state->_fsp--;
						$value = new Query2\LargerEqual($n1, $n2);
						}
						break;
				}
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "relationalExpression"

	// $ANTLR start "numericExpression"
	// Sparql10.g:329:1: numericExpression returns [$value] : additiveExpression ;
	public function numericExpression() {
		$value = null;
		$additiveExpression42 = null;
		try {
			// Sparql10.g:330:5: ( additiveExpression )
			// Sparql10.g:330:7: additiveExpression
			{
				$this->pushFollow(self::$FOLLOW_additiveExpression_in_numericExpression2107);
				$additiveExpression42 = $this->additiveExpression();
				$this->state->_fsp--;
				$value = $additiveExpression42;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "numericExpression"

	// $ANTLR start "additiveExpression"
	// Sparql10.g:334:1: additiveExpression returns [$value] : m1= multiplicativeExpression ( (op= PLUS m2= multiplicativeExpression | op= MINUS m2= multiplicativeExpression | n= numericLiteralPositive | n= numericLiteralNegative ) )* ;
	public function additiveExpression() {
		$value = null;
		$op = null;
		$m1 = null;
		$m2 = null;
		$n = null;
		$value = new Query2\AdditiveExpression();
		$op = null;
		$v2 = null;
		try {
			// Sparql10.g:336:5: (m1= multiplicativeExpression ( (op= PLUS m2= multiplicativeExpression | op= MINUS m2= multiplicativeExpression | n= numericLiteralPositive | n= numericLiteralNegative ) )* )
			// Sparql10.g:336:7: m1= multiplicativeExpression ( (op= PLUS m2= multiplicativeExpression | op= MINUS m2= multiplicativeExpression | n= numericLiteralPositive | n= numericLiteralNegative ) )*
			{
				$this->pushFollow(self::$FOLLOW_multiplicativeExpression_in_additiveExpression2138);
				$m1 = $this->multiplicativeExpression();
				$this->state->_fsp--;
				$value->addElement('+', $m1);
				// Sparql10.g:337:9: ( (op= PLUS m2= multiplicativeExpression | op= MINUS m2= multiplicativeExpression | n= numericLiteralPositive | n= numericLiteralNegative ) )*
				//loop59:
				do {
					$alt59 = 2;
					$alt59 = $this->dfa59->predict($this->input);
					switch ($alt59) {
						case 1 :
							// Sparql10.g:337:10: (op= PLUS m2= multiplicativeExpression | op= MINUS m2= multiplicativeExpression | n= numericLiteralPositive | n= numericLiteralNegative )
							{
							// Sparql10.g:337:10: (op= PLUS m2= multiplicativeExpression | op= MINUS m2= multiplicativeExpression | n= numericLiteralPositive | n= numericLiteralNegative )
							$alt58 = 4;
							$LA58 = $this->input->LA(1);
							if ($this->getToken('PLUS') == $LA58) {
								$alt58 = 1;
							}
							else {
								if ($this->getToken('MINUS') == $LA58) {
									$alt58 = 2;
								}
								else {
									if ($this->getToken('INTEGER_POSITIVE') == $LA58 || $this->getToken('DECIMAL_POSITIVE') == $LA58 || $this->getToken('DOUBLE_POSITIVE') == $LA58) {
										$alt58 = 3;
									}
									else {
										if ($this->getToken('INTEGER_NEGATIVE') == $LA58 || $this->getToken('DECIMAL_NEGATIVE') == $LA58 || $this->getToken('DOUBLE_NEGATIVE') == $LA58) {
											$alt58 = 4;
										}
										else {
											$nvae =
													new \NoViableAltException("", 58, 0, $this->input);
											throw $nvae;
										}
									}
								}
							}
							switch ($alt58) {
								case 1 :
									// Sparql10.g:337:12: op= PLUS m2= multiplicativeExpression
									{
									$op = $this->match($this->input, $this->getToken('PLUS'), self::$FOLLOW_PLUS_in_additiveExpression2155);
									$this->pushFollow(self::$FOLLOW_multiplicativeExpression_in_additiveExpression2159);
									$m2 = $this->multiplicativeExpression();
									$this->state->_fsp--;
									$op = ($op != null ? $op->getText() : null);
									$v2 = $m2;
									}
									break;
								case 2 :
									// Sparql10.g:338:11: op= MINUS m2= multiplicativeExpression
									{
									$op = $this->match($this->input, $this->getToken('MINUS'), self::$FOLLOW_MINUS_in_additiveExpression2175);
									$this->pushFollow(self::$FOLLOW_multiplicativeExpression_in_additiveExpression2179);
									$m2 = $this->multiplicativeExpression();
									$this->state->_fsp--;
									$op = ($op != null ? $op->getText() : null);
									$v2 = $m2;
									}
									break;
								case 3 :
									// Sparql10.g:339:11: n= numericLiteralPositive
									{
									$this->pushFollow(self::$FOLLOW_numericLiteralPositive_in_additiveExpression2195);
									$n = $this->numericLiteralPositive();
									$this->state->_fsp--;
									$op = '+';
									$v2 = $n;
									}
									break;
								case 4 :
									// Sparql10.g:340:11: n= numericLiteralNegative
									{
									$this->pushFollow(self::$FOLLOW_numericLiteralNegative_in_additiveExpression2211);
									$n = $this->numericLiteralNegative();
									$this->state->_fsp--;
									$op = '-';
									$v2 = $n;
									}
									break;
							}
							$value->addElement($op, $v2);
							}
							break;
						default :
							break 2;
						//loop59;
					}
				} while (true);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "additiveExpression"

	// $ANTLR start "multiplicativeExpression"
	// Sparql10.g:345:1: multiplicativeExpression returns [$value] : u1= unaryExpression ( (op= ASTERISK u2= unaryExpression | op= DIVIDE u2= unaryExpression ) )* ;
	public function multiplicativeExpression() {
		$value = null;
		$op = null;
		$u1 = null;
		$u2 = null;
		$value = new Query2\MultiplicativeExpression();
		try {
			// Sparql10.g:347:5: (u1= unaryExpression ( (op= ASTERISK u2= unaryExpression | op= DIVIDE u2= unaryExpression ) )* )
			// Sparql10.g:347:7: u1= unaryExpression ( (op= ASTERISK u2= unaryExpression | op= DIVIDE u2= unaryExpression ) )*
			{
				$this->pushFollow(self::$FOLLOW_unaryExpression_in_multiplicativeExpression2259);
				$u1 = $this->unaryExpression();
				$this->state->_fsp--;
				$value->addElement('*', $u1);
				// Sparql10.g:348:9: ( (op= ASTERISK u2= unaryExpression | op= DIVIDE u2= unaryExpression ) )*
				//loop61:
				do {
					$alt61 = 2;
					$alt61 = $this->dfa61->predict($this->input);
					switch ($alt61) {
						case 1 :
							// Sparql10.g:348:10: (op= ASTERISK u2= unaryExpression | op= DIVIDE u2= unaryExpression )
							{
							// Sparql10.g:348:10: (op= ASTERISK u2= unaryExpression | op= DIVIDE u2= unaryExpression )
							$alt60 = 2;
							$LA60_0 = $this->input->LA(1);
							if (($LA60_0 == $this->getToken('ASTERISK'))) {
								$alt60 = 1;
							}
							else {
								if (($LA60_0 == $this->getToken('DIVIDE'))) {
									$alt60 = 2;
								}
								else {
									$nvae = new \NoViableAltException("", 60, 0, $this->input);
									throw $nvae;
								}
							}
							switch ($alt60) {
								case 1 :
									// Sparql10.g:348:12: op= ASTERISK u2= unaryExpression
									{
									$op = $this->match($this->input, $this->getToken('ASTERISK'), self::$FOLLOW_ASTERISK_in_multiplicativeExpression2276);
									$this->pushFollow(self::$FOLLOW_unaryExpression_in_multiplicativeExpression2280);
									$u2 = $this->unaryExpression();
									$this->state->_fsp--;
									}
									break;
								case 2 :
									// Sparql10.g:348:45: op= DIVIDE u2= unaryExpression
									{
									$op = $this->match($this->input, $this->getToken('DIVIDE'), self::$FOLLOW_DIVIDE_in_multiplicativeExpression2286);
									$this->pushFollow(self::$FOLLOW_unaryExpression_in_multiplicativeExpression2290);
									$u2 = $this->unaryExpression();
									$this->state->_fsp--;
									}
									break;
							}
							$value->addElement(($op != null ? $op->getText() : null), $u2);
							}
							break;
						default :
							break 2;
						//loop61;
					}
				} while (true);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "multiplicativeExpression"

	// $ANTLR start "unaryExpression"
	// Sparql10.g:352:1: unaryExpression returns [$value] : ( NOT_SIGN e= primaryExpression | PLUS e= primaryExpression | MINUS e= primaryExpression | e= primaryExpression );
	public function unaryExpression() {
		$value = null;
		$e = null;
		try {
			// Sparql10.g:353:5: ( NOT_SIGN e= primaryExpression | PLUS e= primaryExpression | MINUS e= primaryExpression | e= primaryExpression )
			$alt62 = 4;
			$alt62 = $this->dfa62->predict($this->input);
			switch ($alt62) {
				case 1 :
					// Sparql10.g:353:7: NOT_SIGN e= primaryExpression
					{
					$this->match($this->input, $this->getToken('NOT_SIGN'), self::$FOLLOW_NOT_SIGN_in_unaryExpression2318);
					$this->pushFollow(self::$FOLLOW_primaryExpression_in_unaryExpression2322);
					$e = $this->primaryExpression();
					$this->state->_fsp--;
					$value = new Query2\UnaryExpressionNot($e);
					}
					break;
				case 2 :
					// Sparql10.g:354:7: PLUS e= primaryExpression
					{
					$this->match($this->input, $this->getToken('PLUS'), self::$FOLLOW_PLUS_in_unaryExpression2332);
					$this->pushFollow(self::$FOLLOW_primaryExpression_in_unaryExpression2336);
					$e = $this->primaryExpression();
					$this->state->_fsp--;
					$value = new Query2\UnaryExpressionPlus($e);
					}
					break;
				case 3 :
					// Sparql10.g:355:7: MINUS e= primaryExpression
					{
					$this->match($this->input, $this->getToken('MINUS'), self::$FOLLOW_MINUS_in_unaryExpression2346);
					$this->pushFollow(self::$FOLLOW_primaryExpression_in_unaryExpression2350);
					$e = $this->primaryExpression();
					$this->state->_fsp--;
					$value = new Query2\UnaryExpressionMinus($e);
					}
					break;
				case 4 :
					// Sparql10.g:356:7: e= primaryExpression
					{
					$this->pushFollow(self::$FOLLOW_primaryExpression_in_unaryExpression2362);
					$e = $this->primaryExpression();
					$this->state->_fsp--;
					$value = $e;
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "unaryExpression"

	// $ANTLR start "primaryExpression"
	// Sparql10.g:360:1: primaryExpression returns [$value] : (v= brackettedExpression | v= builtInCall | v= iriRefOrFunction | v= rdfLiteral | v= numericLiteral | v= booleanLiteral | v= variable );
	public function primaryExpression() {
		$value = null;
		$v = null;
		try {
			// Sparql10.g:362:5: (v= brackettedExpression | v= builtInCall | v= iriRefOrFunction | v= rdfLiteral | v= numericLiteral | v= booleanLiteral | v= variable )
			$alt63 = 7;
			$alt63 = $this->dfa63->predict($this->input);
			switch ($alt63) {
				case 1 :
					// Sparql10.g:362:7: v= brackettedExpression
					{
					$this->pushFollow(self::$FOLLOW_brackettedExpression_in_primaryExpression2393);
					$v = $this->brackettedExpression();
					$this->state->_fsp--;
					$v = $v;
					}
					break;
				case 2 :
					// Sparql10.g:363:7: v= builtInCall
					{
					$this->pushFollow(self::$FOLLOW_builtInCall_in_primaryExpression2405);
					$v = $this->builtInCall();
					$this->state->_fsp--;
					$v = $v;
					}
					break;
				case 3 :
					// Sparql10.g:364:7: v= iriRefOrFunction
					{
					$this->pushFollow(self::$FOLLOW_iriRefOrFunction_in_primaryExpression2417);
					$v = $this->iriRefOrFunction();
					$this->state->_fsp--;
					$v = $v;
					}
					break;
				case 4 :
					// Sparql10.g:365:7: v= rdfLiteral
					{
					$this->pushFollow(self::$FOLLOW_rdfLiteral_in_primaryExpression2429);
					$v = $this->rdfLiteral();
					$this->state->_fsp--;
					$v = $v;
					}
					break;
				case 5 :
					// Sparql10.g:366:7: v= numericLiteral
					{
					$this->pushFollow(self::$FOLLOW_numericLiteral_in_primaryExpression2441);
					$v = $this->numericLiteral();
					$this->state->_fsp--;
					$v = $v;
					}
					break;
				case 6 :
					// Sparql10.g:367:7: v= booleanLiteral
					{
					$this->pushFollow(self::$FOLLOW_booleanLiteral_in_primaryExpression2453);
					$v = $this->booleanLiteral();
					$this->state->_fsp--;
					$v = $v;
					}
					break;
				case 7 :
					// Sparql10.g:368:7: v= variable
					{
					$this->pushFollow(self::$FOLLOW_variable_in_primaryExpression2465);
					$v = $this->variable();
					$this->state->_fsp--;
					$v = $v;
					}
					break;
			}
			$value = $v;
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "primaryExpression"

	// $ANTLR start "brackettedExpression"
	// Sparql10.g:372:1: brackettedExpression returns [$value] : OPEN_BRACE e= expression CLOSE_BRACE ;
	public function brackettedExpression() {
		$value = null;
		$e = null;
		try {
			// Sparql10.g:373:5: ( OPEN_BRACE e= expression CLOSE_BRACE )
			// Sparql10.g:373:7: OPEN_BRACE e= expression CLOSE_BRACE
			{
				$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_brackettedExpression2490);
				$this->pushFollow(self::$FOLLOW_expression_in_brackettedExpression2494);
				$e = $this->expression();
				$this->state->_fsp--;
				$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_brackettedExpression2496);
				$value = new Query2\BrackettedExpression($e);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "brackettedExpression"

	// $ANTLR start "builtInCall"
	// Sparql10.g:377:1: builtInCall returns [$value] : ( STR OPEN_BRACE e= expression CLOSE_BRACE | LANG OPEN_BRACE e= expression CLOSE_BRACE | LANGMATCHES OPEN_BRACE e1= expression COMMA e2= expression CLOSE_BRACE | DATATYPE OPEN_BRACE e= expression CLOSE_BRACE | BOUND OPEN_BRACE variable CLOSE_BRACE | SAMETERM OPEN_BRACE e1= expression COMMA e2= expression CLOSE_BRACE | ISIRI OPEN_BRACE e= expression CLOSE_BRACE | ISURI OPEN_BRACE e= expression CLOSE_BRACE | ISBLANK OPEN_BRACE e= expression CLOSE_BRACE | ISLITERAL OPEN_BRACE e= expression CLOSE_BRACE | regexExpression );
	public function builtInCall() {
		$value = null;
		$e = null;
		$e1 = null;
		$e2 = null;
		$variable43 = null;
		$regexExpression44 = null;
		try {
			// Sparql10.g:378:5: ( STR OPEN_BRACE e= expression CLOSE_BRACE | LANG OPEN_BRACE e= expression CLOSE_BRACE | LANGMATCHES OPEN_BRACE e1= expression COMMA e2= expression CLOSE_BRACE | DATATYPE OPEN_BRACE e= expression CLOSE_BRACE | BOUND OPEN_BRACE variable CLOSE_BRACE | SAMETERM OPEN_BRACE e1= expression COMMA e2= expression CLOSE_BRACE | ISIRI OPEN_BRACE e= expression CLOSE_BRACE | ISURI OPEN_BRACE e= expression CLOSE_BRACE | ISBLANK OPEN_BRACE e= expression CLOSE_BRACE | ISLITERAL OPEN_BRACE e= expression CLOSE_BRACE | regexExpression )
			$alt64 = 11;
			$alt64 = $this->dfa64->predict($this->input);
			switch ($alt64) {
				case 1 :
					// Sparql10.g:378:7: STR OPEN_BRACE e= expression CLOSE_BRACE
					{
					$this->match($this->input, $this->getToken('STR'), self::$FOLLOW_STR_in_builtInCall2521);
					$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_builtInCall2523);
					$this->pushFollow(self::$FOLLOW_expression_in_builtInCall2527);
					$e = $this->expression();
					$this->state->_fsp--;
					$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_builtInCall2529);
					$value = new Query2\Str($e);
					}
					break;
				case 2 :
					// Sparql10.g:379:7: LANG OPEN_BRACE e= expression CLOSE_BRACE
					{
					$this->match($this->input, $this->getToken('LANG'), self::$FOLLOW_LANG_in_builtInCall2539);
					$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_builtInCall2541);
					$this->pushFollow(self::$FOLLOW_expression_in_builtInCall2545);
					$e = $this->expression();
					$this->state->_fsp--;
					$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_builtInCall2547);
					$value = new Query2\Lang($e);
					}
					break;
				case 3 :
					// Sparql10.g:380:7: LANGMATCHES OPEN_BRACE e1= expression COMMA e2= expression CLOSE_BRACE
					{
					$this->match($this->input, $this->getToken('LANGMATCHES'), self::$FOLLOW_LANGMATCHES_in_builtInCall2557);
					$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_builtInCall2559);
					$this->pushFollow(self::$FOLLOW_expression_in_builtInCall2563);
					$e1 = $this->expression();
					$this->state->_fsp--;
					$this->match($this->input, $this->getToken('COMMA'), self::$FOLLOW_COMMA_in_builtInCall2565);
					$this->pushFollow(self::$FOLLOW_expression_in_builtInCall2569);
					$e2 = $this->expression();
					$this->state->_fsp--;
					$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_builtInCall2571);
					$value = new Query2\LangMatches($e1, $e2);
					}
					break;
				case 4 :
					// Sparql10.g:381:7: DATATYPE OPEN_BRACE e= expression CLOSE_BRACE
					{
					$this->match($this->input, $this->getToken('DATATYPE'), self::$FOLLOW_DATATYPE_in_builtInCall2581);
					$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_builtInCall2583);
					$this->pushFollow(self::$FOLLOW_expression_in_builtInCall2587);
					$e = $this->expression();
					$this->state->_fsp--;
					$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_builtInCall2589);
					$value = new Query2\Datatype($e);
					}
					break;
				case 5 :
					// Sparql10.g:382:7: BOUND OPEN_BRACE variable CLOSE_BRACE
					{
					$this->match($this->input, $this->getToken('BOUND'), self::$FOLLOW_BOUND_in_builtInCall2599);
					$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_builtInCall2601);
					$this->pushFollow(self::$FOLLOW_variable_in_builtInCall2603);
					$variable43 = $this->variable();
					$this->state->_fsp--;
					$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_builtInCall2605);
					$value = new Query2\bound($variable43);
					}
					break;
				case 6 :
					// Sparql10.g:383:7: SAMETERM OPEN_BRACE e1= expression COMMA e2= expression CLOSE_BRACE
					{
					$this->match($this->input, $this->getToken('SAMETERM'), self::$FOLLOW_SAMETERM_in_builtInCall2615);
					$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_builtInCall2617);
					$this->pushFollow(self::$FOLLOW_expression_in_builtInCall2621);
					$e1 = $this->expression();
					$this->state->_fsp--;
					$this->match($this->input, $this->getToken('COMMA'), self::$FOLLOW_COMMA_in_builtInCall2623);
					$this->pushFollow(self::$FOLLOW_expression_in_builtInCall2627);
					$e2 = $this->expression();
					$this->state->_fsp--;
					$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_builtInCall2629);
					$value = new Query2\sameTerm($e1, $e2);
					}
					break;
				case 7 :
					// Sparql10.g:384:7: ISIRI OPEN_BRACE e= expression CLOSE_BRACE
					{
					$this->match($this->input, $this->getToken('ISIRI'), self::$FOLLOW_ISIRI_in_builtInCall2639);
					$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_builtInCall2641);
					$this->pushFollow(self::$FOLLOW_expression_in_builtInCall2645);
					$e = $this->expression();
					$this->state->_fsp--;
					$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_builtInCall2647);
					$value = new Query2\isIri($e);
					}
					break;
				case 8 :
					// Sparql10.g:385:7: ISURI OPEN_BRACE e= expression CLOSE_BRACE
					{
					$this->match($this->input, $this->getToken('ISURI'), self::$FOLLOW_ISURI_in_builtInCall2657);
					$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_builtInCall2659);
					$this->pushFollow(self::$FOLLOW_expression_in_builtInCall2663);
					$e = $this->expression();
					$this->state->_fsp--;
					$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_builtInCall2665);
					$value = new Query2\isUri($e);
					}
					break;
				case 9 :
					// Sparql10.g:386:7: ISBLANK OPEN_BRACE e= expression CLOSE_BRACE
					{
					$this->match($this->input, $this->getToken('ISBLANK'), self::$FOLLOW_ISBLANK_in_builtInCall2675);
					$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_builtInCall2677);
					$this->pushFollow(self::$FOLLOW_expression_in_builtInCall2681);
					$e = $this->expression();
					$this->state->_fsp--;
					$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_builtInCall2683);
					$value = new Query2\isBlank($e);
					}
					break;
				case 10 :
					// Sparql10.g:387:7: ISLITERAL OPEN_BRACE e= expression CLOSE_BRACE
					{
					$this->match($this->input, $this->getToken('ISLITERAL'), self::$FOLLOW_ISLITERAL_in_builtInCall2693);
					$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_builtInCall2695);
					$this->pushFollow(self::$FOLLOW_expression_in_builtInCall2699);
					$e = $this->expression();
					$this->state->_fsp--;
					$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_builtInCall2701);
					$value = new Query2\isLiteral($e);
					}
					break;
				case 11 :
					// Sparql10.g:388:7: regexExpression
					{
					$this->pushFollow(self::$FOLLOW_regexExpression_in_builtInCall2711);
					$regexExpression44 = $this->regexExpression();
					$this->state->_fsp--;
					$value = $regexExpression44;
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "builtInCall"

	// $ANTLR start "regexExpression"
	// Sparql10.g:392:1: regexExpression returns [$value] : REGEX OPEN_BRACE e1= expression COMMA e2= expression ( COMMA e3= expression )? CLOSE_BRACE ;
	public function regexExpression() {
		$value = null;
		$e1 = null;
		$e2 = null;
		$e3 = null;
		try {
			// Sparql10.g:393:5: ( REGEX OPEN_BRACE e1= expression COMMA e2= expression ( COMMA e3= expression )? CLOSE_BRACE )
			// Sparql10.g:393:7: REGEX OPEN_BRACE e1= expression COMMA e2= expression ( COMMA e3= expression )? CLOSE_BRACE
			{
				$this->match($this->input, $this->getToken('REGEX'), self::$FOLLOW_REGEX_in_regexExpression2736);
				$this->match($this->input, $this->getToken('OPEN_BRACE'), self::$FOLLOW_OPEN_BRACE_in_regexExpression2738);
				$this->pushFollow(self::$FOLLOW_expression_in_regexExpression2742);
				$e1 = $this->expression();
				$this->state->_fsp--;
				$this->match($this->input, $this->getToken('COMMA'), self::$FOLLOW_COMMA_in_regexExpression2744);
				$this->pushFollow(self::$FOLLOW_expression_in_regexExpression2748);
				$e2 = $this->expression();
				$this->state->_fsp--;
				// Sparql10.g:393:58: ( COMMA e3= expression )?
				$alt65 = 2;
				$LA65_0 = $this->input->LA(1);
				if (($LA65_0 == $this->getToken('COMMA'))) {
					$alt65 = 1;
				}
				switch ($alt65) {
					case 1 :
						// Sparql10.g:393:60: COMMA e3= expression
						{
						$this->match($this->input, $this->getToken('COMMA'), self::$FOLLOW_COMMA_in_regexExpression2752);
						$this->pushFollow(self::$FOLLOW_expression_in_regexExpression2756);
						$e3 = $this->expression();
						$this->state->_fsp--;
						}
						break;
				}
				$this->match($this->input, $this->getToken('CLOSE_BRACE'), self::$FOLLOW_CLOSE_BRACE_in_regexExpression2761);
				$value = new Query2\Regex($e1, $e2, $e3);
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "regexExpression"

	// $ANTLR start "iriRefOrFunction"
	// Sparql10.g:398:1: iriRefOrFunction returns [$value] : iriRef ( argList )? ;
	public function iriRefOrFunction() {
		$value = null;
		$iriRef45 = null;
		$argList46 = null;
		$al = null;
		$i = null;
		try {
			// Sparql10.g:405:5: ( iriRef ( argList )? )
			// Sparql10.g:405:7: iriRef ( argList )?
			{
				$this->pushFollow(self::$FOLLOW_iriRef_in_iriRefOrFunction2798);
				$iriRef45 = $this->iriRef();
				$this->state->_fsp--;
				$i = $iriRef45;
				// Sparql10.g:406:9: ( argList )?
				$alt66 = 2;
				$alt66 = $this->dfa66->predict($this->input);
				switch ($alt66) {
					case 1 :
						// Sparql10.g:406:10: argList
						{
						$this->pushFollow(self::$FOLLOW_argList_in_iriRefOrFunction2811);
						$argList46 = $this->argList();
						$this->state->_fsp--;
						$al = $argList46;
						}
						break;
				}
			}
			if (isset($al)) {
				$value = new Query2\UserFunction($i, $al);
			} else {
				$value = $i;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "iriRefOrFunction"

	// $ANTLR start "rdfLiteral"
	// Sparql10.g:410:1: rdfLiteral returns [$value] : string ( LANGTAG | ( REFERENCE iriRef ) )? ;
	public function rdfLiteral() {
		$value = null;
		$LANGTAG48 = null;
		$string47 = null;
		$iriRef49 = null;
		try {
			// Sparql10.g:411:5: ( string ( LANGTAG | ( REFERENCE iriRef ) )? )
			// Sparql10.g:411:7: string ( LANGTAG | ( REFERENCE iriRef ) )?
			{
				$this->pushFollow(self::$FOLLOW_string_in_rdfLiteral2838);
				$string47 = $this->string();
				$this->state->_fsp--;
				$value = new Query2\RDFLiteral(($string47 != null ? $this->input->toStringBetweenTokens($string47->start, $string47->stop) : null), null, "");
				// Sparql10.g:412:9: ( LANGTAG | ( REFERENCE iriRef ) )?
				$alt67 = 3;
				$alt67 = $this->dfa67->predict($this->input);
				switch ($alt67) {
					case 1 :
						// Sparql10.g:412:11: LANGTAG
						{
						$LANGTAG48 = $this->match($this->input, $this->getToken('LANGTAG'), self::$FOLLOW_LANGTAG_in_rdfLiteral2852);
						$value->setLanguageTag(($LANGTAG48 != null ? $LANGTAG48->getText() : null));
						}
						break;
					case 2 :
						// Sparql10.g:413:11: ( REFERENCE iriRef )
						{
						// Sparql10.g:413:11: ( REFERENCE iriRef )
						// Sparql10.g:413:13: REFERENCE iriRef
							{
								$this->match($this->input, $this->getToken('REFERENCE'), self::$FOLLOW_REFERENCE_in_rdfLiteral2869);
								$this->pushFollow(self::$FOLLOW_iriRef_in_rdfLiteral2871);
								$iriRef49 = $this->iriRef();
								$this->state->_fsp--;
								$value->setDatatype($iriRef49);
							}
						}
							break;
				}
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "rdfLiteral"

	// $ANTLR start "numericLiteral"
	// Sparql10.g:417:1: numericLiteral returns [$value] : (n= numericLiteralUnsigned | n= numericLiteralPositive | n= numericLiteralNegative ) ;
	public function numericLiteral() {
		$value = null;
		$n = null;
		try {
			// Sparql10.g:418:5: ( (n= numericLiteralUnsigned | n= numericLiteralPositive | n= numericLiteralNegative ) )
			// Sparql10.g:418:7: (n= numericLiteralUnsigned | n= numericLiteralPositive | n= numericLiteralNegative )
			{
				// Sparql10.g:418:7: (n= numericLiteralUnsigned | n= numericLiteralPositive | n= numericLiteralNegative )
				$alt68 = 3;
				$alt68 = $this->dfa68->predict($this->input);
				switch ($alt68) {
					case 1 :
						// Sparql10.g:418:8: n= numericLiteralUnsigned
						{
						$this->pushFollow(self::$FOLLOW_numericLiteralUnsigned_in_numericLiteral2904);
						$n = $this->numericLiteralUnsigned();
						$this->state->_fsp--;
						}
						break;
					case 2 :
						// Sparql10.g:419:5: n= numericLiteralPositive
						{
						$this->pushFollow(self::$FOLLOW_numericLiteralPositive_in_numericLiteral2912);
						$n = $this->numericLiteralPositive();
						$this->state->_fsp--;
						}
						break;
					case 3 :
						// Sparql10.g:420:5: n= numericLiteralNegative
						{
						$this->pushFollow(self::$FOLLOW_numericLiteralNegative_in_numericLiteral2920);
						$n = $this->numericLiteralNegative();
						$this->state->_fsp--;
						}
						break;
				}
				$value = $n;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "numericLiteral"

	// $ANTLR start "numericLiteralUnsigned"
	// Sparql10.g:424:1: numericLiteralUnsigned returns [$value] : (v= INTEGER | v= DECIMAL | v= DOUBLE );
	public function numericLiteralUnsigned() {
		$value = null;
		$v = null;
		try {
			// Sparql10.g:425:5: (v= INTEGER | v= DECIMAL | v= DOUBLE )
			$alt69 = 3;
			$LA69 = $this->input->LA(1);
			if ($this->getToken('INTEGER') == $LA69) {
				$alt69 = 1;
			}
			else {
				if ($this->getToken('DECIMAL') == $LA69) {
					$alt69 = 2;
				}
				else {
					if ($this->getToken('DOUBLE') == $LA69) {
						$alt69 = 3;
					}
					else {
						$nvae =
								new \NoViableAltException("", 69, 0, $this->input);
						throw $nvae;
					}
				}
			}
			switch ($alt69) {
				case 1 :
					// Sparql10.g:425:7: v= INTEGER
					{
					$v = $this->match($this->input, $this->getToken('INTEGER'), self::$FOLLOW_INTEGER_in_numericLiteralUnsigned2949);
					$value = new Query2\NumericLiteral((int)($v != null ? $v->getText() : null));
					}
					break;
				case 2 :
					// Sparql10.g:426:7: v= DECIMAL
					{
					$v = $this->match($this->input, $this->getToken('DECIMAL'), self::$FOLLOW_DECIMAL_in_numericLiteralUnsigned2961);
					$value = new Query2\NumericLiteral((float)($v != null ? $v->getText() : null));
					}
					break;
				case 3 :
					// Sparql10.g:427:7: v= DOUBLE
					{
					$v = $this->match($this->input, $this->getToken('DOUBLE'), self::$FOLLOW_DOUBLE_in_numericLiteralUnsigned2973);
					$value = new Query2\NumericLiteral((double)($v != null ? $v->getText() : null));
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "numericLiteralUnsigned"

	// $ANTLR start "numericLiteralPositive"
	// Sparql10.g:431:1: numericLiteralPositive returns [$value] : (v= INTEGER_POSITIVE | v= DECIMAL_POSITIVE | v= DOUBLE_POSITIVE );
	public function numericLiteralPositive() {
		$value = null;
		$v = null;
		try {
			// Sparql10.g:432:5: (v= INTEGER_POSITIVE | v= DECIMAL_POSITIVE | v= DOUBLE_POSITIVE )
			$alt70 = 3;
			$LA70 = $this->input->LA(1);
			if ($this->getToken('INTEGER_POSITIVE') == $LA70) {
				$alt70 = 1;
			}
			else {
				if ($this->getToken('DECIMAL_POSITIVE') == $LA70) {
					$alt70 = 2;
				}
				else {
					if ($this->getToken('DOUBLE_POSITIVE') == $LA70) {
						$alt70 = 3;
					}
					else {
						$nvae =
								new \NoViableAltException("", 70, 0, $this->input);
						throw $nvae;
					}
				}
			}
			switch ($alt70) {
				case 1 :
					// Sparql10.g:432:7: v= INTEGER_POSITIVE
					{
					$v = $this->match($this->input, $this->getToken('INTEGER_POSITIVE'), self::$FOLLOW_INTEGER_POSITIVE_in_numericLiteralPositive3000);
					$value = new Query2\NumericLiteral((int)($v != null ? $v->getText() : null));
					}
					break;
				case 2 :
					// Sparql10.g:433:7: v= DECIMAL_POSITIVE
					{
					$v = $this->match($this->input, $this->getToken('DECIMAL_POSITIVE'), self::$FOLLOW_DECIMAL_POSITIVE_in_numericLiteralPositive3012);
					$value = new Query2\NumericLiteral((float)($v != null ? $v->getText() : null));
					}
					break;
				case 3 :
					// Sparql10.g:434:7: v= DOUBLE_POSITIVE
					{
					$v = $this->match($this->input, $this->getToken('DOUBLE_POSITIVE'), self::$FOLLOW_DOUBLE_POSITIVE_in_numericLiteralPositive3024);
					$value = new Query2\NumericLiteral((double)($v != null ? $v->getText() : null));
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "numericLiteralPositive"

	// $ANTLR start "numericLiteralNegative"
	// Sparql10.g:438:1: numericLiteralNegative returns [$value] : (v= INTEGER_NEGATIVE | v= DECIMAL_NEGATIVE | v= DOUBLE_NEGATIVE );
	public function numericLiteralNegative() {
		$value = null;
		$v = null;
		try {
			// Sparql10.g:439:5: (v= INTEGER_NEGATIVE | v= DECIMAL_NEGATIVE | v= DOUBLE_NEGATIVE )
			$alt71 = 3;
			$LA71 = $this->input->LA(1);
			if ($this->getToken('INTEGER_NEGATIVE') == $LA71) {
				$alt71 = 1;
			}
			else {
				if ($this->getToken('DECIMAL_NEGATIVE') == $LA71) {
					$alt71 = 2;
				}
				else {
					if ($this->getToken('DOUBLE_NEGATIVE') == $LA71) {
						$alt71 = 3;
					}
					else {
						$nvae =
								new \NoViableAltException("", 71, 0, $this->input);
						throw $nvae;
					}
				}
			}
			switch ($alt71) {
				case 1 :
					// Sparql10.g:439:7: v= INTEGER_NEGATIVE
					{
					$v = $this->match($this->input, $this->getToken('INTEGER_NEGATIVE'), self::$FOLLOW_INTEGER_NEGATIVE_in_numericLiteralNegative3051);
					$value = new Query2\NumericLiteral((int)($v != null ? $v->getText() : null));
					}
					break;
				case 2 :
					// Sparql10.g:440:7: v= DECIMAL_NEGATIVE
					{
					$v = $this->match($this->input, $this->getToken('DECIMAL_NEGATIVE'), self::$FOLLOW_DECIMAL_NEGATIVE_in_numericLiteralNegative3063);
					$value = new Query2\NumericLiteral((float)($v != null ? $v->getText() : null));
					}
					break;
				case 3 :
					// Sparql10.g:441:7: v= DOUBLE_NEGATIVE
					{
					$v = $this->match($this->input, $this->getToken('DOUBLE_NEGATIVE'), self::$FOLLOW_DOUBLE_NEGATIVE_in_numericLiteralNegative3075);
					$value = new Query2\NumericLiteral((double)($v != null ? $v->getText() : null));
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "numericLiteralNegative"

	// $ANTLR start "booleanLiteral"
	// Sparql10.g:445:1: booleanLiteral returns [$value] : ( TRUE | FALSE );
	public function booleanLiteral() {
		$value = null;
		$v = null;
		try {
			// Sparql10.g:448:5: ( TRUE | FALSE )
			$alt72 = 2;
			$LA72_0 = $this->input->LA(1);
			if (($LA72_0 == $this->getToken('TRUE'))) {
				$alt72 = 1;
			}
			else {
				if (($LA72_0 == $this->getToken('FALSE'))) {
					$alt72 = 2;
				}
				else {
					$nvae = new \NoViableAltException("", 72, 0, $this->input);
					throw $nvae;
				}
			}
			switch ($alt72) {
				case 1 :
					// Sparql10.g:448:7: TRUE
					{
					$this->match($this->input, $this->getToken('TRUE'), self::$FOLLOW_TRUE_in_booleanLiteral3108);
					$v = 1;
					}
					break;
				case 2 :
					// Sparql10.g:449:7: FALSE
					{
					$this->match($this->input, $this->getToken('FALSE'), self::$FOLLOW_FALSE_in_booleanLiteral3118);
					$v = 0;
					}
					break;
			}
			$value = new Query2\BooleanLiteral((bool)$v);
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "booleanLiteral"

	public static function string_return() {
		$retval = new \ParserRuleReturnScope();
		return $retval;
	}

	// $ANTLR start "string"
	// Sparql10.g:453:1: string : ( STRING_LITERAL1 | STRING_LITERAL2 | STRING_LITERAL_LONG1 | STRING_LITERAL_LONG2 );
	public function string() {
		$retval = $this->string_return();
		$retval->start = $this->input->LT(1);
		try {
			// Sparql10.g:454:5: ( STRING_LITERAL1 | STRING_LITERAL2 | STRING_LITERAL_LONG1 | STRING_LITERAL_LONG2 )
			// Sparql10.g:
			{
				if (($this->input->LA(1) >= $this->getToken('STRING_LITERAL1') && $this->input->LA(1) <= $this->getToken('STRING_LITERAL_LONG2'))) {
					$this->input->consume();
					$this->state->errorRecovery = false;
				}
				else {
					$mse = new \MismatchedSetException(null, $this->input);
					throw $mse;
				}
			}
			$retval->stop = $this->input->LT(-1);
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $retval;
	}

	// $ANTLR end "string"

	// $ANTLR start "iriRef"
	// Sparql10.g:461:1: iriRef returns [$value] : ( IRI_REF | prefixedName );
	public function iriRef() {
		$value = null;
		$IRI_REF50 = null;
		$prefixedName51 = null;
		try {
			// Sparql10.g:462:5: ( IRI_REF | prefixedName )
			$alt73 = 2;
			$LA73_0 = $this->input->LA(1);
			if (($LA73_0 == $this->getToken('IRI_REF'))) {
				$alt73 = 1;
			}
			else {
				if (($LA73_0 == $this->getToken('PNAME_NS') || $LA73_0 == $this->getToken('PNAME_LN'))) {
					$alt73 = 2;
				}
				else {
					$nvae = new \NoViableAltException("", 73, 0, $this->input);
					throw $nvae;
				}
			}
			switch ($alt73) {
				case 1 :
					// Sparql10.g:462:7: IRI_REF
					{
					$IRI_REF50 = $this->match($this->input, $this->getToken('IRI_REF'), self::$FOLLOW_IRI_REF_in_iriRef3186);
					$value = new Query2\IriRef(($IRI_REF50 != null ? $IRI_REF50->getText() : null));
					}
					break;
				case 2 :
					// Sparql10.g:463:7: prefixedName
					{
					$this->pushFollow(self::$FOLLOW_prefixedName_in_iriRef3196);
					$prefixedName51 = $this->prefixedName();
					$this->state->_fsp--;
					$value = $prefixedName51;
					}
					break;
			}
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "iriRef"

	// $ANTLR start "prefixedName"
	// Sparql10.g:467:1: prefixedName returns [$value] : ( PNAME_LN | PNAME_NS );
	public function prefixedName() {
		$value = null;
		$PNAME_LN52 = null;
		$PNAME_NS53 = null;
		$ns = "";
		$local = "";
		try {
			// Sparql10.g:471:5: ( PNAME_LN | PNAME_NS )
			$alt74 = 2;
			$LA74_0 = $this->input->LA(1);
			if (($LA74_0 == $this->getToken('PNAME_LN'))) {
				$alt74 = 1;
			}
			else {
				if (($LA74_0 == $this->getToken('PNAME_NS'))) {
					$alt74 = 2;
				}
				else {
					$nvae = new \NoViableAltException("", 74, 0, $this->input);
					throw $nvae;
				}
			}
			switch ($alt74) {
				case 1 :
					// Sparql10.g:472:2: PNAME_LN
					{
					$PNAME_LN52 = $this->match($this->input, $this->getToken('PNAME_LN'), self::$FOLLOW_PNAME_LN_in_prefixedName3230);
					$pos = strpos(($PNAME_LN52 != null ? $PNAME_LN52->getText() : null), ":");
					$local = substr(($PNAME_LN52 != null ? $PNAME_LN52->getText() : null), $pos + 2);
					$ns = substr(($PNAME_LN52 != null ? $PNAME_LN52->getText() : null), 0, $pos);
					}
					break;
				case 2 :
					// Sparql10.g:475:4: PNAME_NS
					{
					$PNAME_NS53 = $this->match($this->input, $this->getToken('PNAME_NS'), self::$FOLLOW_PNAME_NS_in_prefixedName3237);
					$ns = rtrim(($PNAME_NS53 != null ? $PNAME_NS53->getText() : null));
					}
					break;
			}
			$value = new Query2\IriRef($local, null, $ns);
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}

	// $ANTLR end "prefixedName"

	// $ANTLR start "blankNode"
	// Sparql10.g:479:1: blankNode returns [$value] : (v= BLANK_NODE_LABEL | OPEN_SQUARE_BRACE ( WS )* CLOSE_SQUARE_BRACE );
	public function blankNode() {
		$value = null;
		$v = null;
		$v = null;
		try {
			// Sparql10.g:482:5: (v= BLANK_NODE_LABEL | OPEN_SQUARE_BRACE ( WS )* CLOSE_SQUARE_BRACE )
			$alt76 = 2;
			$LA76_0 = $this->input->LA(1);
			if (($LA76_0 == $this->getToken('BLANK_NODE_LABEL'))) {
				$alt76 = 1;
			}
			else {
				if (($LA76_0 == $this->getToken('OPEN_SQUARE_BRACE'))) {
					$alt76 = 2;
				}
				else {
					$nvae = new \NoViableAltException("", 76, 0, $this->input);
					throw $nvae;
				}
			}
			switch ($alt76) {
				case 1 :
					// Sparql10.g:482:7: v= BLANK_NODE_LABEL
					{
					$v = $this->match($this->input, $this->getToken('BLANK_NODE_LABEL'), self::$FOLLOW_BLANK_NODE_LABEL_in_blankNode3272);
					$v = ($v != null ? $v->getText() : null);
					}
					break;
				case 2 :
					// Sparql10.g:483:7: OPEN_SQUARE_BRACE ( WS )* CLOSE_SQUARE_BRACE
					{
					$this->match($this->input, $this->getToken('OPEN_SQUARE_BRACE'), self::$FOLLOW_OPEN_SQUARE_BRACE_in_blankNode3282);
					// Sparql10.g:483:25: ( WS )*
					//loop75:
					do {
						$alt75 = 2;
						$LA75_0 = $this->input->LA(1);
						if (($LA75_0 == $this->getToken('WS'))) {
							$alt75 = 1;
						}
						switch ($alt75) {
							case 1 :
								// Sparql10.g:483:26: WS
								{
								$this->match($this->input, $this->getToken('WS'), self::$FOLLOW_WS_in_blankNode3285);
								}
								break;
							default :
								break 2;
							//loop75;
						}
					} while (true);
					$this->match($this->input, $this->getToken('CLOSE_SQUARE_BRACE'), self::$FOLLOW_CLOSE_SQUARE_BRACE_in_blankNode3289);
					$v = '';
					}
					break;
			}
			$value = new Query2\BlankNode($v);
		}
		catch (\RecognitionException $re) {
			$this->reportError($re);
			$this->recover($this->input, $re);
		}
		catch (\Exception $e) {
			throw $e;
		}
		return $value;
	}
	// $ANTLR end "blankNode"

	// Delegated rules

}

class Sparql10_DFA9_static {

	static function getValues() {
		$eot = array(13, 65535);
		$eof = array(1, 1, 12, 65535);
		$min = array(1, 13, 12, 65535);
		$max = array(1, 53, 12, 65535);
		$accept = array(1, 65535, 1, 2, 6, 65535, 1, 1, 4, 65535);
		$special = array(13, 65535);
		$transitionS = array(array(1, 1, 1, 65535, 2, 1, 4, 65535, 2, 1, 21, 65535,
								   1, 1, 1, 65535, 1, 8, 1, 65535, 1, 8, 1, 65535, 1, 8, 1, 65535, 2, 8),
							 array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA9 = Sparql10_DFA9_static();

class Sparql10_DFA9 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA9;
		//        $DFA = $Sparql10_DFA9;
		$DFA = Sparql10_DFA9_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 9;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "()+ loopback of 56:18: ( varOrIRIref )+";
	}
}

class Sparql10_DFA21_static {

	static function getValues() {
		$eot = array(23, 65535);
		$eof = array(1, 1, 22, 65535);
		$min = array(1, 19, 22, 65535);
		$max = array(1, 93, 22, 65535);
		$accept = array(1, 65535, 1, 2, 2, 65535, 1, 1, 18, 65535);
		$special = array(23, 65535);
		$transitionS = array(array(2, 4, 2, 1, 6, 65535, 11, 4, 6, 65535, 1, 4,
								   1, 65535, 1, 4, 1, 65535, 1, 4, 1, 65535, 2, 4, 39, 65535, 1, 4), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA21 = Sparql10_DFA21_static();

class Sparql10_DFA21 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA21;
		//        $DFA = $Sparql10_DFA21;
		$DFA = Sparql10_DFA21_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 21;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "()+ loopback of 103:16: ( orderCondition )+";
	}
}

class Sparql10_DFA24_static {

	static function getValues() {
		$eot = array(20, 65535);
		$eof = array(20, 65535);
		$min = array(1, 19, 19, 65535);
		$max = array(1, 93, 19, 65535);
		$accept = array(1, 65535, 1, 1, 1, 65535, 1, 2, 16, 65535);
		$special = array(20, 65535);
		$transitionS = array(array(2, 1, 8, 65535, 11, 3, 6, 65535, 1, 3, 1, 65535,
								   1, 3, 1, 65535, 1, 3, 1, 65535, 2, 3, 39, 65535, 1, 3), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA24 = Sparql10_DFA24_static();

class Sparql10_DFA24 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA24;
		//        $DFA = $Sparql10_DFA24;
		$DFA = Sparql10_DFA24_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 24;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "107:1: orderCondition : ( ( (o= ASC | o= DESC ) brackettedExpression ) | (v= constraint | v= variable ) );";
	}
}

class Sparql10_DFA23_static {

	static function getValues() {
		$eot = array(18, 65535);
		$eof = array(18, 65535);
		$min = array(1, 29, 17, 65535);
		$max = array(1, 93, 17, 65535);
		$accept = array(1, 65535, 1, 1, 14, 65535, 1, 2, 1, 65535);
		$special = array(18, 65535);
		$transitionS = array(array(11, 1, 6, 65535, 1, 1, 1, 65535, 1, 1, 1, 65535,
								   1, 1, 1, 65535, 2, 16, 39, 65535, 1, 1), array(), array(), array(),
							 array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA23 = Sparql10_DFA23_static();

class Sparql10_DFA23 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA23;
		//        $DFA = $Sparql10_DFA23;
		$DFA = Sparql10_DFA23_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 23;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "109:7: (v= constraint | v= variable )";
	}
}

class Sparql10_DFA25_static {

	static function getValues() {
		$eot = array(26, 65535);
		$eof = array(26, 65535);
		$min = array(1, 23, 25, 65535);
		$max = array(1, 98, 25, 65535);
		$accept = array(1, 65535, 1, 1, 19, 65535, 1, 2, 4, 65535);
		$special = array(26, 65535);
		$transitionS = array(array(2, 21, 1, 65535, 1, 21, 13, 65535, 2, 1, 2,
								   65535, 2, 21, 1, 1, 1, 65535, 1, 1, 1, 65535, 1, 1, 1, 65535, 2, 1,
								   2, 65535, 1, 1, 1, 65535, 1, 1, 2, 65535, 1, 1, 1, 65535, 6, 1, 2, 65535,
								   4, 1, 6, 65535, 1, 1, 11, 65535, 1, 1, 4, 65535, 1, 1), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA25 = Sparql10_DFA25_static();

class Sparql10_DFA25 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA25;
		//        $DFA = $Sparql10_DFA25;
		$DFA = Sparql10_DFA25_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 25;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "127:22: (t1= triplesBlock )?";
	}
}

class Sparql10_DFA27_static {

	static function getValues() {
		$eot = array(27, 65535);
		$eof = array(27, 65535);
		$min = array(1, 23, 26, 65535);
		$max = array(1, 98, 26, 65535);
		$accept = array(1, 65535, 1, 1, 1, 2, 24, 65535);
		$special = array(27, 65535);
		$transitionS = array(array(2, 2, 1, 65535, 1, 2, 13, 65535, 2, 2, 2, 65535,
								   3, 2, 1, 65535, 1, 2, 1, 65535, 1, 2, 1, 65535, 2, 2, 2, 65535, 1, 2,
								   1, 1, 1, 2, 2, 65535, 1, 2, 1, 65535, 6, 2, 2, 65535, 4, 2, 6, 65535,
								   1, 2, 11, 65535, 1, 2, 4, 65535, 1, 2), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA27 = Sparql10_DFA27_static();

class Sparql10_DFA27 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA27;
		//        $DFA = $Sparql10_DFA27;
		$DFA = Sparql10_DFA27_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 27;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "129:13: ( DOT )?";
	}
}

class Sparql10_DFA28_static {

	static function getValues() {
		$eot = array(26, 65535);
		$eof = array(26, 65535);
		$min = array(1, 23, 25, 65535);
		$max = array(1, 98, 25, 65535);
		$accept = array(1, 65535, 1, 1, 19, 65535, 1, 2, 4, 65535);
		$special = array(26, 65535);
		$transitionS = array(array(2, 21, 1, 65535, 1, 21, 13, 65535, 2, 1, 2,
								   65535, 2, 21, 1, 1, 1, 65535, 1, 1, 1, 65535, 1, 1, 1, 65535, 2, 1,
								   2, 65535, 1, 1, 1, 65535, 1, 1, 2, 65535, 1, 1, 1, 65535, 6, 1, 2, 65535,
								   4, 1, 6, 65535, 1, 1, 11, 65535, 1, 1, 4, 65535, 1, 1), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA28 = Sparql10_DFA28_static();

class Sparql10_DFA28 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA28;
		//        $DFA = $Sparql10_DFA28;
		$DFA = Sparql10_DFA28_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 28;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "129:18: (t2= triplesBlock )?";
	}
}

class Sparql10_DFA30_static {

	static function getValues() {
		$eot = array(26, 65535);
		$eof = array(26, 65535);
		$min = array(1, 23, 25, 65535);
		$max = array(1, 98, 25, 65535);
		$accept = array(1, 65535, 1, 1, 19, 65535, 1, 2, 4, 65535);
		$special = array(26, 65535);
		$transitionS = array(array(2, 21, 1, 65535, 1, 21, 13, 65535, 2, 1, 2,
								   65535, 2, 21, 1, 1, 1, 65535, 1, 1, 1, 65535, 1, 1, 1, 65535, 2, 1,
								   2, 65535, 1, 1, 1, 65535, 1, 1, 2, 65535, 1, 1, 1, 65535, 6, 1, 2, 65535,
								   4, 1, 6, 65535, 1, 1, 11, 65535, 1, 1, 4, 65535, 1, 1), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA30 = Sparql10_DFA30_static();

class Sparql10_DFA30 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA30;
		//        $DFA = $Sparql10_DFA30;
		$DFA = Sparql10_DFA30_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 30;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "137:71: (t= triplesBlock )?";
	}
}

class Sparql10_DFA33_static {

	static function getValues() {
		$eot = array(28, 65535);
		$eof = array(28, 65535);
		$min = array(1, 23, 27, 65535);
		$max = array(1, 98, 27, 65535);
		$accept = array(1, 65535, 1, 2, 25, 65535, 1, 1);
		$special = array(28, 65535);
		$transitionS = array(array(2, 1, 1, 27, 1, 1, 13, 65535, 2, 1, 2, 65535,
								   3, 1, 1, 65535, 1, 1, 1, 65535, 1, 1, 1, 65535, 2, 1, 2, 65535, 3, 1,
								   2, 65535, 1, 1, 1, 65535, 6, 1, 2, 65535, 4, 1, 6, 65535, 1, 1, 11,
								   65535, 1, 1, 4, 65535, 1, 1), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA33 = Sparql10_DFA33_static();

class Sparql10_DFA33 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA33;
		//        $DFA = $Sparql10_DFA33;
		$DFA = Sparql10_DFA33_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 33;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "()* loopback of 161:62: ( UNION v2= groupGraphPattern )*";
	}
}

class Sparql10_DFA34_static {

	static function getValues() {
		$eot = array(16, 65535);
		$eof = array(16, 65535);
		$min = array(1, 29, 15, 65535);
		$max = array(1, 93, 15, 65535);
		$accept = array(1, 65535, 1, 1, 1, 2, 10, 65535, 1, 3, 2, 65535);
		$special = array(16, 65535);
		$transitionS = array(array(11, 2, 6, 65535, 1, 13, 1, 65535, 1, 13, 1,
								   65535, 1, 13, 42, 65535, 1, 1), array(), array(), array(), array(),
							 array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA34 = Sparql10_DFA34_static();

class Sparql10_DFA34 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA34;
		//        $DFA = $Sparql10_DFA34;
		$DFA = Sparql10_DFA34_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 34;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "170:1: constraint returns [$value] : (v= brackettedExpression | v= builtInCall | v= functionCall );";
	}
}

class Sparql10_DFA37_static {

	static function getValues() {
		$eot = array(36, 65535);
		$eof = array(36, 65535);
		$min = array(1, 93, 1, 29, 34, 65535);
		$max = array(1, 93, 1, 94, 34, 65535);
		$accept = array(2, 65535, 1, 1, 1, 65535, 1, 2, 31, 65535);
		$special = array(36, 65535);
		$transitionS = array(array(1, 1), array(13, 4, 4, 65535, 1, 4, 1, 65535,
												1, 4, 1, 65535, 1, 4, 1, 65535, 3, 4, 1, 65535, 1, 4, 1, 65535, 1, 4,
												2, 65535, 8, 4, 2, 65535, 4, 4, 2, 65535, 1, 2, 12, 65535, 1, 4, 2,
												65535, 1, 4, 1, 2), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA37 = Sparql10_DFA37_static();

class Sparql10_DFA37 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA37;
		//        $DFA = $Sparql10_DFA37;
		$DFA = Sparql10_DFA37_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 37;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "182:1: argList returns [$value] : ( OPEN_BRACE ( WS )* CLOSE_BRACE | OPEN_BRACE e1= expression ( COMMA e2= expression )* CLOSE_BRACE );";
	}
}

class Sparql10_DFA38_static {

	static function getValues() {
		$eot = array(22, 65535);
		$eof = array(22, 65535);
		$min = array(1, 40, 21, 65535);
		$max = array(1, 98, 21, 65535);
		$accept = array(1, 65535, 1, 1, 19, 65535, 1, 2);
		$special = array(22, 65535);
		$transitionS = array(array(2, 1, 3, 65535, 1, 21, 1, 1, 1, 65535, 1, 1,
								   1, 65535, 1, 1, 1, 65535, 2, 1, 2, 65535, 1, 1, 1, 65535, 1, 1, 2, 65535,
								   1, 1, 1, 65535, 6, 1, 2, 65535, 4, 1, 6, 65535, 1, 1, 11, 65535, 1,
								   1, 4, 65535, 1, 1), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA38 = Sparql10_DFA38_static();

class Sparql10_DFA38 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA38;
		//        $DFA = $Sparql10_DFA38;
		$DFA = Sparql10_DFA38_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 38;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "192:24: ( constructTriples )?";
	}
}

class Sparql10_DFA39_static {

	static function getValues() {
		$eot = array(22, 65535);
		$eof = array(22, 65535);
		$min = array(1, 40, 21, 65535);
		$max = array(1, 98, 21, 65535);
		$accept = array(1, 65535, 1, 1, 19, 65535, 1, 2);
		$special = array(22, 65535);
		$transitionS = array(array(2, 1, 3, 65535, 1, 21, 1, 1, 1, 65535, 1, 1,
								   1, 65535, 1, 1, 1, 65535, 2, 1, 2, 65535, 1, 1, 1, 65535, 1, 1, 2, 65535,
								   1, 1, 1, 65535, 6, 1, 2, 65535, 4, 1, 6, 65535, 1, 1, 11, 65535, 1,
								   1, 4, 65535, 1, 1), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA39 = Sparql10_DFA39_static();

class Sparql10_DFA39 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA39;
		//        $DFA = $Sparql10_DFA39;
		$DFA = Sparql10_DFA39_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 39;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "198:73: (c= constructTriples )?";
	}
}

class Sparql10_DFA41_static {

	static function getValues() {
		$eot = array(51, 65535);
		$eof = array(51, 65535);
		$min = array(1, 40, 18, 65535, 1, 27, 1, 40, 30, 65535);
		$max = array(1, 98, 18, 65535, 1, 99, 1, 98, 30, 65535);
		$accept = array(1, 65535, 1, 1, 19, 65535, 1, 2, 29, 65535);
		$special = array(51, 65535);
		$transitionS = array(array(2, 1, 4, 65535, 1, 1, 1, 65535, 1, 1, 1, 65535,
								   1, 1, 1, 65535, 2, 1, 2, 65535, 1, 1, 1, 65535, 1, 1, 2, 65535, 1, 1,
								   1, 65535, 6, 1, 2, 65535, 4, 1, 6, 65535, 1, 1, 11, 65535, 1, 20, 4,
								   65535, 1, 19), array(), array(), array(), array(), array(), array(),
							 array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array(), array(1, 21, 18, 65535, 1, 21,
														 1, 65535, 1, 21, 1, 65535, 1, 21, 1, 65535, 2, 21, 23, 65535, 1, 1,
														 21, 65535, 1, 1), array(2, 21, 4, 65535, 1, 21, 1, 65535, 1, 21, 1,
																				 65535, 1, 21, 1, 65535, 2, 21, 2, 65535, 1, 21, 1, 65535, 1, 21, 2,
																				 65535, 1, 21, 1, 65535, 6, 21, 2, 65535, 4, 21, 2, 65535, 1, 1, 3, 65535,
																				 1, 21, 11, 65535, 1, 21, 1, 1, 3, 65535, 1, 21), array(), array(), array(
			), array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA41 = Sparql10_DFA41_static();

class Sparql10_DFA41 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA41;
		//        $DFA = $Sparql10_DFA41;
		$DFA = Sparql10_DFA41_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 41;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "202:1: triplesSameSubject returns [$value] : ( varOrTerm propertyListNotEmpty | triplesNode propertyList );";
	}
}

class Sparql10_DFA42_static {

	static function getValues() {
		$eot = array(15, 65535);
		$eof = array(15, 65535);
		$min = array(1, 23, 14, 65535);
		$max = array(1, 99, 14, 65535);
		$accept = array(1, 65535, 1, 1, 5, 65535, 1, 2, 7, 65535);
		$special = array(15, 65535);
		$transitionS = array(array(2, 7, 1, 65535, 1, 7, 1, 1, 16, 65535, 2, 7,
								   1, 1, 1, 65535, 1, 1, 1, 65535, 1, 1, 1, 65535, 2, 1, 3, 65535, 1, 7,
								   29, 65535, 1, 7, 11, 65535, 1, 7), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA42 = Sparql10_DFA42_static();

class Sparql10_DFA42 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA42;
		//        $DFA = $Sparql10_DFA42;
		$DFA = Sparql10_DFA42_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 42;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "211:21: (v2= verb ol2= objectList )?";
	}
}

class Sparql10_DFA44_static {

	static function getValues() {
		$eot = array(13, 65535);
		$eof = array(13, 65535);
		$min = array(1, 23, 12, 65535);
		$max = array(1, 57, 12, 65535);
		$accept = array(1, 65535, 1, 1, 5, 65535, 1, 2, 5, 65535);
		$special = array(13, 65535);
		$transitionS = array(array(2, 7, 1, 65535, 1, 7, 1, 1, 16, 65535, 2, 7,
								   1, 1, 1, 65535, 1, 1, 1, 65535, 1, 1, 1, 65535, 2, 1, 3, 65535, 1, 7),
							 array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA44 = Sparql10_DFA44_static();

class Sparql10_DFA44 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA44;
		//        $DFA = $Sparql10_DFA44;
		$DFA = Sparql10_DFA44_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 44;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "218:7: ( propertyListNotEmpty )?";
	}
}

class Sparql10_DFA45_static {

	static function getValues() {
		$eot = array(10, 65535);
		$eof = array(10, 65535);
		$min = array(1, 23, 9, 65535);
		$max = array(1, 99, 9, 65535);
		$accept = array(1, 65535, 1, 2, 7, 65535, 1, 1);
		$special = array(10, 65535);
		$transitionS = array(array(2, 1, 1, 65535, 1, 1, 17, 65535, 2, 1, 11,
								   65535, 1, 1, 29, 65535, 1, 1, 1, 65535, 1, 9, 9, 65535, 1, 1), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		));
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA45 = Sparql10_DFA45_static();

class Sparql10_DFA45 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA45;
		//        $DFA = $Sparql10_DFA45;
		$DFA = Sparql10_DFA45_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 45;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "()* loopback of 224:9: ( COMMA o2= object )*";
	}
}

class Sparql10_DFA48_static {

	static function getValues() {
		$eot = array(22, 65535);
		$eof = array(22, 65535);
		$min = array(1, 40, 21, 65535);
		$max = array(1, 98, 21, 65535);
		$accept = array(1, 65535, 1, 2, 1, 1, 19, 65535);
		$special = array(22, 65535);
		$transitionS = array(array(2, 2, 4, 65535, 1, 2, 1, 65535, 1, 2, 1, 65535,
								   1, 2, 1, 65535, 2, 2, 2, 65535, 1, 2, 1, 65535, 1, 2, 2, 65535, 1, 2,
								   1, 65535, 6, 2, 2, 65535, 4, 2, 6, 65535, 1, 2, 11, 65535, 1, 2, 1,
								   1, 3, 65535, 1, 2), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA48 = Sparql10_DFA48_static();

class Sparql10_DFA48 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA48;
		//        $DFA = $Sparql10_DFA48;
		$DFA = Sparql10_DFA48_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 48;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "()+ loopback of 253:18: ( graphNode )+";
	}
}

class Sparql10_DFA49_static {

	static function getValues() {
		$eot = array(51, 65535);
		$eof = array(51, 65535);
		$min = array(1, 40, 18, 65535, 1, 27, 1, 40, 30, 65535);
		$max = array(1, 98, 18, 65535, 1, 99, 1, 98, 30, 65535);
		$accept = array(1, 65535, 1, 1, 19, 65535, 1, 2, 29, 65535);
		$special = array(51, 65535);
		$transitionS = array(array(2, 1, 4, 65535, 1, 1, 1, 65535, 1, 1, 1, 65535,
								   1, 1, 1, 65535, 2, 1, 2, 65535, 1, 1, 1, 65535, 1, 1, 2, 65535, 1, 1,
								   1, 65535, 6, 1, 2, 65535, 4, 1, 6, 65535, 1, 1, 11, 65535, 1, 20, 4,
								   65535, 1, 19), array(), array(), array(), array(), array(), array(),
							 array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array(), array(1, 21, 18, 65535, 1, 21,
														 1, 65535, 1, 21, 1, 65535, 1, 21, 1, 65535, 2, 21, 23, 65535, 1, 1,
														 21, 65535, 1, 1), array(2, 21, 4, 65535, 1, 21, 1, 65535, 1, 21, 1,
																				 65535, 1, 21, 1, 65535, 2, 21, 2, 65535, 1, 21, 1, 65535, 1, 21, 2,
																				 65535, 1, 21, 1, 65535, 6, 21, 2, 65535, 4, 21, 2, 65535, 1, 1, 3, 65535,
																				 1, 21, 11, 65535, 1, 21, 1, 1, 3, 65535, 1, 21), array(), array(), array(
			), array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA49 = Sparql10_DFA49_static();

class Sparql10_DFA49 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA49;
		//        $DFA = $Sparql10_DFA49;
		$DFA = Sparql10_DFA49_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 49;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "257:1: graphNode returns [$value] : ( varOrTerm | triplesNode );";
	}
}

class Sparql10_DFA50_static {

	static function getValues() {
		$eot = array(21, 65535);
		$eof = array(21, 65535);
		$min = array(1, 40, 20, 65535);
		$max = array(1, 98, 20, 65535);
		$accept = array(1, 65535, 1, 1, 1, 65535, 1, 2, 17, 65535);
		$special = array(21, 65535);
		$transitionS = array(array(2, 3, 4, 65535, 1, 3, 1, 65535, 1, 3, 1, 65535,
								   1, 3, 1, 65535, 2, 1, 2, 65535, 1, 3, 1, 65535, 1, 3, 2, 65535, 1, 3,
								   1, 65535, 6, 3, 2, 65535, 4, 3, 6, 65535, 1, 3, 11, 65535, 1, 3, 4,
								   65535, 1, 3), array(), array(), array(), array(), array(), array(),
							 array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA50 = Sparql10_DFA50_static();

class Sparql10_DFA50 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA50;
		//        $DFA = $Sparql10_DFA50;
		$DFA = Sparql10_DFA50_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 50;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "263:1: varOrTerm returns [$value] : ( variable | graphTerm );";
	}
}

class Sparql10_DFA54_static {

	static function getValues() {
		$eot = array(19, 65535);
		$eof = array(19, 65535);
		$min = array(1, 40, 18, 65535);
		$max = array(1, 98, 18, 65535);
		$accept = array(1, 65535, 1, 1, 2, 65535, 1, 2, 1, 3, 8, 65535, 1, 4,
						1, 65535, 1, 5, 1, 65535, 1, 6);
		$special = array(19, 65535);
		$transitionS = array(array(2, 14, 4, 65535, 1, 1, 1, 65535, 1, 1, 1, 65535,
								   1, 1, 5, 65535, 1, 5, 1, 65535, 1, 5, 2, 65535, 1, 5, 1, 65535, 6, 5,
								   2, 65535, 4, 4, 6, 65535, 1, 16, 11, 65535, 1, 18, 4, 65535, 1, 16),
							 array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA54 = Sparql10_DFA54_static();

class Sparql10_DFA54 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA54;
		//        $DFA = $Sparql10_DFA54;
		$DFA = Sparql10_DFA54_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 54;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "282:1: graphTerm returns [$value] : (v= iriRef | v= rdfLiteral | v= numericLiteral | v= booleanLiteral | v= blankNode | OPEN_BRACE ( WS )* CLOSE_BRACE );";
	}
}

class Sparql10_DFA57_static {

	static function getValues() {
		$eot = array(11, 65535);
		$eof = array(11, 65535);
		$min = array(1, 42, 10, 65535);
		$max = array(1, 97, 10, 65535);
		$accept = array(1, 65535, 1, 1, 1, 2, 1, 3, 1, 4, 1, 5, 1, 6, 1, 7, 3,
						65535);
		$special = array(11, 65535);
		$transitionS = array(array(1, 3, 1, 4, 39, 65535, 2, 7, 4, 65535, 1, 7,
								   2, 65535, 1, 1, 1, 65535, 1, 7, 1, 5, 1, 6, 1, 2), array(), array(),
							 array(), array(), array(), array(), array(), array(), array(), array(
			));
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA57 = Sparql10_DFA57_static();

class Sparql10_DFA57 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA57;
		//        $DFA = $Sparql10_DFA57;
		$DFA = Sparql10_DFA57_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 57;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "319:9: ( EQUAL n2= numericExpression | NOT_EQUAL n2= numericExpression | LESS n2= numericExpression | GREATER n2= numericExpression | LESS_EQUAL n2= numericExpression | GREATER_EQUAL n2= numericExpression )?";
	}
}

class Sparql10_DFA59_static {

	static function getValues() {
		$eot = array(19, 65535);
		$eof = array(19, 65535);
		$min = array(1, 42, 18, 65535);
		$max = array(1, 97, 18, 65535);
		$accept = array(1, 65535, 1, 2, 9, 65535, 1, 1, 7, 65535);
		$special = array(19, 65535);
		$transitionS = array(array(2, 1, 10, 65535, 1, 11, 7, 65535, 7, 11, 14,
								   65535, 2, 1, 4, 65535, 1, 1, 2, 65535, 1, 1, 1, 65535, 4, 1), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA59 = Sparql10_DFA59_static();

class Sparql10_DFA59 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA59;
		//        $DFA = $Sparql10_DFA59;
		$DFA = Sparql10_DFA59_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 59;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "()* loopback of 337:9: ( (op= PLUS m2= multiplicativeExpression | op= MINUS m2= multiplicativeExpression | n= numericLiteralPositive | n= numericLiteralNegative ) )*";
	}
}

class Sparql10_DFA61_static {

	static function getValues() {
		$eot = array(21, 65535);
		$eof = array(21, 65535);
		$min = array(1, 42, 20, 65535);
		$max = array(1, 97, 20, 65535);
		$accept = array(1, 65535, 1, 2, 17, 65535, 1, 1, 1, 65535);
		$special = array(21, 65535);
		$transitionS = array(array(2, 1, 10, 65535, 1, 1, 7, 65535, 7, 1, 14,
								   65535, 2, 1, 3, 65535, 1, 19, 1, 1, 1, 65535, 1, 19, 1, 1, 1, 65535,
								   4, 1), array(), array(), array(), array(), array(), array(), array(),
							 array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA61 = Sparql10_DFA61_static();

class Sparql10_DFA61 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA61;
		//        $DFA = $Sparql10_DFA61;
		$DFA = Sparql10_DFA61_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 61;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "()* loopback of 348:9: ( (op= ASTERISK u2= unaryExpression | op= DIVIDE u2= unaryExpression ) )*";
	}
}

class Sparql10_DFA62_static {

	static function getValues() {
		$eot = array(33, 65535);
		$eof = array(33, 65535);
		$min = array(1, 29, 32, 65535);
		$max = array(1, 93, 32, 65535);
		$accept = array(1, 65535, 1, 1, 1, 2, 1, 3, 1, 4, 28, 65535);
		$special = array(33, 65535);
		$transitionS = array(array(13, 4, 4, 65535, 1, 4, 1, 65535, 1, 4, 1, 65535,
								   1, 4, 1, 65535, 2, 4, 1, 3, 1, 65535, 1, 4, 1, 65535, 1, 4, 2, 65535,
								   1, 4, 1, 2, 6, 4, 2, 65535, 4, 4, 15, 65535, 1, 1, 2, 65535, 1, 4),
							 array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array(), array(), array(), array(), array(
			), array(), array(), array(), array(), array(), array(), array(), array(
			));
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA62 = Sparql10_DFA62_static();

class Sparql10_DFA62 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA62;
		//        $DFA = $Sparql10_DFA62;
		$DFA = Sparql10_DFA62_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 62;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "352:1: unaryExpression returns [$value] : ( NOT_SIGN e= primaryExpression | PLUS e= primaryExpression | MINUS e= primaryExpression | e= primaryExpression );";
	}
}

class Sparql10_DFA63_static {

	static function getValues() {
		$eot = array(30, 65535);
		$eof = array(30, 65535);
		$min = array(1, 29, 29, 65535);
		$max = array(1, 93, 29, 65535);
		$accept = array(1, 65535, 1, 1, 1, 2, 10, 65535, 1, 3, 2, 65535, 1, 4,
						1, 5, 8, 65535, 1, 6, 1, 65535, 1, 7, 1, 65535);
		$special = array(30, 65535);
		$transitionS = array(array(11, 2, 2, 26, 4, 65535, 1, 13, 1, 65535, 1,
								   13, 1, 65535, 1, 13, 1, 65535, 2, 28, 2, 65535, 1, 17, 1, 65535, 1,
								   17, 2, 65535, 1, 17, 1, 65535, 6, 17, 2, 65535, 4, 16, 18, 65535, 1,
								   1), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA63 = Sparql10_DFA63_static();

class Sparql10_DFA63 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA63;
		//        $DFA = $Sparql10_DFA63;
		$DFA = Sparql10_DFA63_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 63;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "360:1: primaryExpression returns [$value] : (v= brackettedExpression | v= builtInCall | v= iriRefOrFunction | v= rdfLiteral | v= numericLiteral | v= booleanLiteral | v= variable );";
	}
}

class Sparql10_DFA64_static {

	static function getValues() {
		$eot = array(12, 65535);
		$eof = array(12, 65535);
		$min = array(1, 29, 11, 65535);
		$max = array(1, 39, 11, 65535);
		$accept = array(1, 65535, 1, 1, 1, 2, 1, 3, 1, 4, 1, 5, 1, 6, 1, 7, 1,
						8, 1, 9, 1, 10, 1, 11);
		$special = array(12, 65535);
		$transitionS = array(array(1, 1, 1, 2, 1, 3, 1, 4, 1, 5, 1, 6, 1, 7, 1,
								   8, 1, 9, 1, 10, 1, 11), array(), array(), array(), array(), array(),
							 array(), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA64 = Sparql10_DFA64_static();

class Sparql10_DFA64 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA64;
		//        $DFA = $Sparql10_DFA64;
		$DFA = Sparql10_DFA64_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 64;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "377:1: builtInCall returns [$value] : ( STR OPEN_BRACE e= expression CLOSE_BRACE | LANG OPEN_BRACE e= expression CLOSE_BRACE | LANGMATCHES OPEN_BRACE e1= expression COMMA e2= expression CLOSE_BRACE | DATATYPE OPEN_BRACE e= expression CLOSE_BRACE | BOUND OPEN_BRACE variable CLOSE_BRACE | SAMETERM OPEN_BRACE e1= expression COMMA e2= expression CLOSE_BRACE | ISIRI OPEN_BRACE e= expression CLOSE_BRACE | ISURI OPEN_BRACE e= expression CLOSE_BRACE | ISBLANK OPEN_BRACE e= expression CLOSE_BRACE | ISLITERAL OPEN_BRACE e= expression CLOSE_BRACE | regexExpression );";
	}
}

class Sparql10_DFA66_static {

	static function getValues() {
		$eot = array(22, 65535);
		$eof = array(22, 65535);
		$min = array(1, 42, 21, 65535);
		$max = array(1, 97, 21, 65535);
		$accept = array(1, 65535, 1, 1, 1, 2, 19, 65535);
		$special = array(22, 65535);
		$transitionS = array(array(2, 2, 10, 65535, 1, 2, 7, 65535, 7, 2, 14,
								   65535, 2, 2, 3, 65535, 2, 2, 1, 65535, 2, 2, 1, 1, 4, 2), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA66 = Sparql10_DFA66_static();

class Sparql10_DFA66 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA66;
		//        $DFA = $Sparql10_DFA66;
		$DFA = Sparql10_DFA66_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 66;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "406:9: ( argList )?";
	}
}

class Sparql10_DFA67_static {

	static function getValues() {
		$eot = array(46, 65535);
		$eof = array(46, 65535);
		$min = array(1, 23, 45, 65535);
		$max = array(1, 99, 45, 65535);
		$accept = array(1, 65535, 1, 1, 1, 2, 1, 3, 42, 65535);
		$special = array(46, 65535);
		$transitionS = array(array(2, 3, 1, 65535, 2, 3, 12, 65535, 7, 3, 1, 65535,
								   1, 3, 1, 65535, 1, 3, 1, 65535, 3, 3, 1, 1, 3, 3, 2, 65535, 8, 3, 2,
								   65535, 4, 3, 6, 65535, 1, 3, 1, 2, 2, 3, 2, 65535, 3, 3, 1, 65535, 9,
								   3), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array(), array(), array(), array(
		), array(), array(), array(), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA67 = Sparql10_DFA67_static();

class Sparql10_DFA67 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA67;
		//        $DFA = $Sparql10_DFA67;
		$DFA = Sparql10_DFA67_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 67;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "412:9: ( LANGTAG | ( REFERENCE iriRef ) )?";
	}
}

class Sparql10_DFA68_static {

	static function getValues() {
		$eot = array(10, 65535);
		$eof = array(10, 65535);
		$min = array(1, 56, 9, 65535);
		$max = array(1, 68, 9, 65535);
		$accept = array(1, 65535, 1, 1, 2, 65535, 1, 2, 2, 65535, 1, 3, 2, 65535);
		$special = array(10, 65535);
		$transitionS = array(array(1, 1, 1, 65535, 1, 1, 2, 65535, 1, 1, 1, 65535,
								   3, 4, 3, 7), array(), array(), array(), array(), array(), array(), array(
		), array(), array());
		$arr = array();
		$arr['eot'] = \DFA::unpackRLE($eot);
		$arr['eof'] = \DFA::unpackRLE($eof);
		$arr['min'] = \DFA::unpackRLE($min, true);
		$arr['max'] = \DFA::unpackRLE($max, true);
		$arr['accept'] = \DFA::unpackRLE($accept);
		$arr['special'] = \DFA::unpackRLE($special);
		$numStates = sizeof($transitionS);
		$arr['transition'] = array();
		for ($i = 0; $i < $numStates; $i++) {
			$arr['transition'][$i] = \DFA::unpackRLE($transitionS[$i]);
		}
		return $arr;
	}
}

//$Sparql10_DFA68 = Sparql10_DFA68_static();

class Sparql10_DFA68 extends \DFA {

	public function __construct($recognizer) {
		//        global $Sparql10_DFA68;
		//        $DFA = $Sparql10_DFA68;
		$DFA = Sparql10_DFA68_static::getValues();
		$this->recognizer = $recognizer;
		$this->decisionNumber = 68;
		$this->eot = $DFA['eot'];
		$this->eof = $DFA['eof'];
		$this->min = $DFA['min'];
		$this->max = $DFA['max'];
		$this->accept = $DFA['accept'];
		$this->special = $DFA['special'];
		$this->transition = $DFA['transition'];
	}

	public function getDescription() {
		return "418:7: (n= numericLiteralUnsigned | n= numericLiteralPositive | n= numericLiteralNegative )";
	}
}

Sparql10::$FOLLOW_prologue_in_query1034 = new \Set(array(7, 10, 11, 12));
Sparql10::$FOLLOW_selectQuery_in_query1047 = new \Set(array(1));
Sparql10::$FOLLOW_constructQuery_in_query1059 = new \Set(array(1));
Sparql10::$FOLLOW_describeQuery_in_query1072 = new \Set(array(1));
Sparql10::$FOLLOW_askQuery_in_query1085 = new \Set(array(1));
Sparql10::$FOLLOW_baseDecl_in_prologue117 = new \Set(array(1, 5));
Sparql10::$FOLLOW_prefixDecl_in_prologue120 = new \Set(array(1, 5));
Sparql10::$FOLLOW_BASE_in_baseDecl140 = new \Set(array(46, 48, 50));
Sparql10::$FOLLOW_iriRef_in_baseDecl142 = new \Set(array(1));
Sparql10::$FOLLOW_PREFIX_in_prefixDecl163 = new \Set(array(48));
Sparql10::$FOLLOW_PNAME_NS_in_prefixDecl165 = new \Set(array(46, 48, 50));
Sparql10::$FOLLOW_iriRef_in_prefixDecl167 = new \Set(array(1));
Sparql10::$FOLLOW_SELECT_in_selectQuery188 = new \Set(array(8, 9, 52, 53, 88));
Sparql10::$FOLLOW_DISTINCT_in_selectQuery192 = new \Set(array(52, 53, 88));
Sparql10::$FOLLOW_REDUCED_in_selectQuery206 = new \Set(array(52, 53, 88));
Sparql10::$FOLLOW_variable_in_selectQuery223 = new \Set(array(13, 15, 44, 52, 53));
Sparql10::$FOLLOW_ASTERISK_in_selectQuery228 = new \Set(array(13, 15, 44));
Sparql10::$FOLLOW_datasetClause_in_selectQuery232 = new \Set(array(13, 15, 44));
Sparql10::$FOLLOW_whereClause_in_selectQuery235 = new \Set(array(16, 21, 22));
Sparql10::$FOLLOW_solutionModifier_in_selectQuery237 = new \Set(array(1));
Sparql10::$FOLLOW_CONSTRUCT_in_constructQuery257 = new \Set(array(44));
Sparql10::$FOLLOW_constructTemplate_in_constructQuery259 = new \Set(array(13, 15, 44));
Sparql10::$FOLLOW_datasetClause_in_constructQuery261 = new \Set(array(13, 15, 44));
Sparql10::$FOLLOW_whereClause_in_constructQuery264 = new \Set(array(16, 21, 22));
Sparql10::$FOLLOW_solutionModifier_in_constructQuery266 = new \Set(array(1));
Sparql10::$FOLLOW_DESCRIBE_in_describeQuery285 = new \Set(array(46, 48, 50, 52, 53, 88));
Sparql10::$FOLLOW_varOrIRIref_in_describeQuery289 = new \Set(array(13, 15, 16, 21, 22, 44, 46, 48, 50, 52, 53));
Sparql10::$FOLLOW_ASTERISK_in_describeQuery294 = new \Set(array(13, 15, 16, 21, 22, 44));
Sparql10::$FOLLOW_datasetClause_in_describeQuery298 = new \Set(array(13, 15, 16, 21, 22, 44));
Sparql10::$FOLLOW_whereClause_in_describeQuery301 = new \Set(array(16, 21, 22));
Sparql10::$FOLLOW_solutionModifier_in_describeQuery304 = new \Set(array(1));
Sparql10::$FOLLOW_ASK_in_askQuery323 = new \Set(array(13, 15, 44));
Sparql10::$FOLLOW_datasetClause_in_askQuery325 = new \Set(array(13, 15, 44));
Sparql10::$FOLLOW_whereClause_in_askQuery328 = new \Set(array(1));
Sparql10::$FOLLOW_FROM_in_datasetClause349 = new \Set(array(14, 46, 48, 50));
Sparql10::$FOLLOW_defaultGraphClause_in_datasetClause353 = new \Set(array(1));
Sparql10::$FOLLOW_namedGraphClause_in_datasetClause367 = new \Set(array(1));
Sparql10::$FOLLOW_sourceSelector_in_defaultGraphClause402 = new \Set(array(1));
Sparql10::$FOLLOW_NAMED_in_namedGraphClause427 = new \Set(array(46, 48, 50));
Sparql10::$FOLLOW_sourceSelector_in_namedGraphClause429 = new \Set(array(1));
Sparql10::$FOLLOW_iriRef_in_sourceSelector454 = new \Set(array(1));
Sparql10::$FOLLOW_WHERE_in_whereClause475 = new \Set(array(13, 15, 44));
Sparql10::$FOLLOW_groupGraphPattern_in_whereClause478 = new \Set(array(1));
Sparql10::$FOLLOW_orderClause_in_solutionModifier499 = new \Set(array(1, 21, 22));
Sparql10::$FOLLOW_limitOffsetClauses_in_solutionModifier502 = new \Set(array(1));
Sparql10::$FOLLOW_limitClause_in_limitOffsetClauses521 = new \Set(array(1, 21, 22));
Sparql10::$FOLLOW_offsetClause_in_limitOffsetClauses523 = new \Set(array(1));
Sparql10::$FOLLOW_offsetClause_in_limitOffsetClauses533 = new \Set(array(1, 21));
Sparql10::$FOLLOW_limitClause_in_limitOffsetClauses535 = new \Set(array(1));
Sparql10::$FOLLOW_ORDER_in_orderClause555 = new \Set(array(18));
Sparql10::$FOLLOW_BY_in_orderClause557 = new \Set(array(19, 20, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 46, 48, 50, 52, 53, 93));
Sparql10::$FOLLOW_orderCondition_in_orderClause559 = new \Set(array(1, 19, 20, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 46, 48, 50, 52, 53, 93));
Sparql10::$FOLLOW_ASC_in_orderCondition585 = new \Set(array(93));
Sparql10::$FOLLOW_DESC_in_orderCondition591 = new \Set(array(93));
Sparql10::$FOLLOW_brackettedExpression_in_orderCondition595 = new \Set(array(1));
Sparql10::$FOLLOW_constraint_in_orderCondition611 = new \Set(array(1));
Sparql10::$FOLLOW_variable_in_orderCondition617 = new \Set(array(1));
Sparql10::$FOLLOW_LIMIT_in_limitClause639 = new \Set(array(56));
Sparql10::$FOLLOW_INTEGER_in_limitClause641 = new \Set(array(1));
Sparql10::$FOLLOW_OFFSET_in_offsetClause662 = new \Set(array(56));
Sparql10::$FOLLOW_INTEGER_in_offsetClause664 = new \Set(array(1));
Sparql10::$FOLLOW_OPEN_CURLY_BRACE_in_groupGraphPattern691 = new \Set(array(13, 15, 23, 24, 26, 40, 41, 44, 45, 46, 48, 50, 52, 53, 56, 58, 61, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 81, 93, 98));
Sparql10::$FOLLOW_triplesBlock_in_groupGraphPattern696 = new \Set(array(13, 15, 23, 24, 26, 44, 45));
Sparql10::$FOLLOW_graphPatternNotTriples_in_groupGraphPattern710 = new \Set(array(13, 15, 23, 24, 26, 40, 41, 44, 45, 46, 48, 50, 52, 53, 56, 57, 58, 61, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 81, 93, 98));
Sparql10::$FOLLOW_filter_in_groupGraphPattern716 = new \Set(array(13, 15, 23, 24, 26, 40, 41, 44, 45, 46, 48, 50, 52, 53, 56, 57, 58, 61, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 81, 93, 98));
Sparql10::$FOLLOW_DOT_in_groupGraphPattern734 = new \Set(array(13, 15, 23, 24, 26, 40, 41, 44, 45, 46, 48, 50, 52, 53, 56, 58, 61, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 81, 93, 98));
Sparql10::$FOLLOW_triplesBlock_in_groupGraphPattern740 = new \Set(array(13, 15, 23, 24, 26, 44, 45));
Sparql10::$FOLLOW_CLOSE_CURLY_BRACE_in_groupGraphPattern749 = new \Set(array(1));
Sparql10::$FOLLOW_triplesSameSubject_in_triplesBlock776 = new \Set(array(1, 57));
Sparql10::$FOLLOW_DOT_in_triplesBlock782 = new \Set(array(1, 40, 41, 46, 48, 50, 52, 53, 56, 58, 61, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 81, 93, 98));
Sparql10::$FOLLOW_triplesBlock_in_triplesBlock787 = new \Set(array(1));
Sparql10::$FOLLOW_optionalGraphPattern_in_graphPatternNotTriples824 = new \Set(array(1));
Sparql10::$FOLLOW_groupOrUnionGraphPattern_in_graphPatternNotTriples836 = new \Set(array(1));
Sparql10::$FOLLOW_graphGraphPattern_in_graphPatternNotTriples848 = new \Set(array(1));
Sparql10::$FOLLOW_OPTIONAL_in_optionalGraphPattern873 = new \Set(array(13, 15, 44));
Sparql10::$FOLLOW_groupGraphPattern_in_optionalGraphPattern875 = new \Set(array(1));
Sparql10::$FOLLOW_GRAPH_in_graphGraphPattern900 = new \Set(array(46, 48, 50, 52, 53));
Sparql10::$FOLLOW_varOrIRIref_in_graphGraphPattern902 = new \Set(array(13, 15, 44));
Sparql10::$FOLLOW_groupGraphPattern_in_graphGraphPattern904 = new \Set(array(1));
Sparql10::$FOLLOW_groupGraphPattern_in_groupOrUnionGraphPattern935 = new \Set(array(1, 25));
Sparql10::$FOLLOW_UNION_in_groupOrUnionGraphPattern941 = new \Set(array(13, 15, 44));
Sparql10::$FOLLOW_groupGraphPattern_in_groupOrUnionGraphPattern945 = new \Set(array(1, 25));
Sparql10::$FOLLOW_FILTER_in_filter973 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 46, 48, 50, 93));
Sparql10::$FOLLOW_constraint_in_filter975 = new \Set(array(1));
Sparql10::$FOLLOW_brackettedExpression_in_constraint1006 = new \Set(array(1));
Sparql10::$FOLLOW_builtInCall_in_constraint1016 = new \Set(array(1));
Sparql10::$FOLLOW_functionCall_in_constraint1026 = new \Set(array(1));
Sparql10::$FOLLOW_iriRef_in_functionCall1048 = new \Set(array(93));
Sparql10::$FOLLOW_argList_in_functionCall1050 = new \Set(array(1));
Sparql10::$FOLLOW_OPEN_BRACE_in_argList1079 = new \Set(array(77, 94));
Sparql10::$FOLLOW_WS_in_argList1081 = new \Set(array(77, 94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_argList1084 = new \Set(array(1));
Sparql10::$FOLLOW_OPEN_BRACE_in_argList1092 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_argList1096 = new \Set(array(89, 94));
Sparql10::$FOLLOW_COMMA_in_argList1110 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_argList1114 = new \Set(array(89, 94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_argList1120 = new \Set(array(1));
Sparql10::$FOLLOW_OPEN_CURLY_BRACE_in_constructTemplate1147 = new \Set(array(40, 41, 45, 46, 48, 50, 52, 53, 56, 58, 61, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 81, 93, 98));
Sparql10::$FOLLOW_constructTriples_in_constructTemplate1150 = new \Set(array(45));
Sparql10::$FOLLOW_CLOSE_CURLY_BRACE_in_constructTemplate1156 = new \Set(array(1));
Sparql10::$FOLLOW_triplesSameSubject_in_constructTriples1183 = new \Set(array(1, 57));
Sparql10::$FOLLOW_DOT_in_constructTriples1189 = new \Set(array(1, 40, 41, 46, 48, 50, 52, 53, 56, 58, 61, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 81, 93, 98));
Sparql10::$FOLLOW_constructTriples_in_constructTriples1194 = new \Set(array(1));
Sparql10::$FOLLOW_varOrTerm_in_triplesSameSubject1224 = new \Set(array(27, 46, 48, 50, 52, 53));
Sparql10::$FOLLOW_propertyListNotEmpty_in_triplesSameSubject1226 = new \Set(array(1));
Sparql10::$FOLLOW_triplesNode_in_triplesSameSubject1236 = new \Set(array(27, 46, 48, 50, 52, 53));
Sparql10::$FOLLOW_propertyList_in_triplesSameSubject1238 = new \Set(array(1));
Sparql10::$FOLLOW_verb_in_propertyListNotEmpty1269 = new \Set(array(40, 41, 46, 48, 50, 52, 53, 56, 58, 61, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 81, 93, 98));
Sparql10::$FOLLOW_objectList_in_propertyListNotEmpty1273 = new \Set(array(1, 87));
Sparql10::$FOLLOW_SEMICOLON_in_propertyListNotEmpty1287 = new \Set(array(1, 27, 46, 48, 50, 52, 53, 87));
Sparql10::$FOLLOW_verb_in_propertyListNotEmpty1293 = new \Set(array(40, 41, 46, 48, 50, 52, 53, 56, 58, 61, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 81, 93, 98));
Sparql10::$FOLLOW_objectList_in_propertyListNotEmpty1297 = new \Set(array(1, 87));
Sparql10::$FOLLOW_propertyListNotEmpty_in_propertyList1336 = new \Set(array(1));
Sparql10::$FOLLOW_object_in_objectList1365 = new \Set(array(1, 89));
Sparql10::$FOLLOW_COMMA_in_objectList1379 = new \Set(array(40, 41, 46, 48, 50, 52, 53, 56, 58, 61, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 81, 93, 98));
Sparql10::$FOLLOW_object_in_objectList1383 = new \Set(array(1, 89));
Sparql10::$FOLLOW_graphNode_in_object1411 = new \Set(array(1));
Sparql10::$FOLLOW_varOrIRIref_in_verb1436 = new \Set(array(1));
Sparql10::$FOLLOW_A_in_verb1446 = new \Set(array(1));
Sparql10::$FOLLOW_collection_in_triplesNode1471 = new \Set(array(1));
Sparql10::$FOLLOW_blankNodePropertyList_in_triplesNode1481 = new \Set(array(1));
Sparql10::$FOLLOW_OPEN_SQUARE_BRACE_in_blankNodePropertyList1506 = new \Set(array(27, 46, 48, 50, 52, 53));
Sparql10::$FOLLOW_propertyListNotEmpty_in_blankNodePropertyList1508 = new \Set(array(99));
Sparql10::$FOLLOW_CLOSE_SQUARE_BRACE_in_blankNodePropertyList1510 = new \Set(array(1));
Sparql10::$FOLLOW_OPEN_BRACE_in_collection1543 = new \Set(array(40, 41, 46, 48, 50, 52, 53, 56, 58, 61, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 81, 93, 98));
Sparql10::$FOLLOW_graphNode_in_collection1546 = new \Set(array(40, 41, 46, 48, 50, 52, 53, 56, 58, 61, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 81, 93, 94, 98));
Sparql10::$FOLLOW_CLOSE_BRACE_in_collection1552 = new \Set(array(1));
Sparql10::$FOLLOW_varOrTerm_in_graphNode1575 = new \Set(array(1));
Sparql10::$FOLLOW_triplesNode_in_graphNode1585 = new \Set(array(1));
Sparql10::$FOLLOW_variable_in_varOrTerm1610 = new \Set(array(1));
Sparql10::$FOLLOW_graphTerm_in_varOrTerm1620 = new \Set(array(1));
Sparql10::$FOLLOW_variable_in_varOrIRIref1645 = new \Set(array(1));
Sparql10::$FOLLOW_iriRef_in_varOrIRIref1655 = new \Set(array(1));
Sparql10::$FOLLOW_VAR1_in_variable1686 = new \Set(array(1));
Sparql10::$FOLLOW_VAR2_in_variable1698 = new \Set(array(1));
Sparql10::$FOLLOW_iriRef_in_graphTerm1725 = new \Set(array(1));
Sparql10::$FOLLOW_rdfLiteral_in_graphTerm1737 = new \Set(array(1));
Sparql10::$FOLLOW_numericLiteral_in_graphTerm1749 = new \Set(array(1));
Sparql10::$FOLLOW_booleanLiteral_in_graphTerm1761 = new \Set(array(1));
Sparql10::$FOLLOW_blankNode_in_graphTerm1773 = new \Set(array(1));
Sparql10::$FOLLOW_OPEN_BRACE_in_graphTerm1783 = new \Set(array(77, 94));
Sparql10::$FOLLOW_WS_in_graphTerm1785 = new \Set(array(77, 94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_graphTerm1788 = new \Set(array(1));
Sparql10::$FOLLOW_conditionalOrExpression_in_expression1813 = new \Set(array(1));
Sparql10::$FOLLOW_conditionalAndExpression_in_conditionalOrExpression1848 = new \Set(array(1, 84));
Sparql10::$FOLLOW_OR_in_conditionalOrExpression1858 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_conditionalAndExpression_in_conditionalOrExpression1862 = new \Set(array(1, 84));
Sparql10::$FOLLOW_valueLogical_in_conditionalAndExpression1899 = new \Set(array(1, 83));
Sparql10::$FOLLOW_AND_in_conditionalAndExpression1905 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_valueLogical_in_conditionalAndExpression1909 = new \Set(array(1, 83));
Sparql10::$FOLLOW_relationalExpression_in_valueLogical1937 = new \Set(array(1));
Sparql10::$FOLLOW_numericExpression_in_relationalExpression1964 = new \Set(array(1, 42, 43, 92, 95, 96, 97));
Sparql10::$FOLLOW_EQUAL_in_relationalExpression1978 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_numericExpression_in_relationalExpression1982 = new \Set(array(1));
Sparql10::$FOLLOW_NOT_EQUAL_in_relationalExpression1996 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_numericExpression_in_relationalExpression2000 = new \Set(array(1));
Sparql10::$FOLLOW_LESS_in_relationalExpression2014 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_numericExpression_in_relationalExpression2018 = new \Set(array(1));
Sparql10::$FOLLOW_GREATER_in_relationalExpression2032 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_numericExpression_in_relationalExpression2036 = new \Set(array(1));
Sparql10::$FOLLOW_LESS_EQUAL_in_relationalExpression2050 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_numericExpression_in_relationalExpression2054 = new \Set(array(1));
Sparql10::$FOLLOW_GREATER_EQUAL_in_relationalExpression2068 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_numericExpression_in_relationalExpression2072 = new \Set(array(1));
Sparql10::$FOLLOW_additiveExpression_in_numericExpression2107 = new \Set(array(1));
Sparql10::$FOLLOW_multiplicativeExpression_in_additiveExpression2138 = new \Set(array(1, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68));
Sparql10::$FOLLOW_PLUS_in_additiveExpression2155 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_multiplicativeExpression_in_additiveExpression2159 = new \Set(array(1, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68));
Sparql10::$FOLLOW_MINUS_in_additiveExpression2175 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_multiplicativeExpression_in_additiveExpression2179 = new \Set(array(1, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68));
Sparql10::$FOLLOW_numericLiteralPositive_in_additiveExpression2195 = new \Set(array(1, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68));
Sparql10::$FOLLOW_numericLiteralNegative_in_additiveExpression2211 = new \Set(array(1, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68));
Sparql10::$FOLLOW_unaryExpression_in_multiplicativeExpression2259 = new \Set(array(1, 88, 91));
Sparql10::$FOLLOW_ASTERISK_in_multiplicativeExpression2276 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_unaryExpression_in_multiplicativeExpression2280 = new \Set(array(1, 88, 91));
Sparql10::$FOLLOW_DIVIDE_in_multiplicativeExpression2286 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_unaryExpression_in_multiplicativeExpression2290 = new \Set(array(1, 88, 91));
Sparql10::$FOLLOW_NOT_SIGN_in_unaryExpression2318 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_primaryExpression_in_unaryExpression2322 = new \Set(array(1));
Sparql10::$FOLLOW_PLUS_in_unaryExpression2332 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_primaryExpression_in_unaryExpression2336 = new \Set(array(1));
Sparql10::$FOLLOW_MINUS_in_unaryExpression2346 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_primaryExpression_in_unaryExpression2350 = new \Set(array(1));
Sparql10::$FOLLOW_primaryExpression_in_unaryExpression2362 = new \Set(array(1));
Sparql10::$FOLLOW_brackettedExpression_in_primaryExpression2393 = new \Set(array(1));
Sparql10::$FOLLOW_builtInCall_in_primaryExpression2405 = new \Set(array(1));
Sparql10::$FOLLOW_iriRefOrFunction_in_primaryExpression2417 = new \Set(array(1));
Sparql10::$FOLLOW_rdfLiteral_in_primaryExpression2429 = new \Set(array(1));
Sparql10::$FOLLOW_numericLiteral_in_primaryExpression2441 = new \Set(array(1));
Sparql10::$FOLLOW_booleanLiteral_in_primaryExpression2453 = new \Set(array(1));
Sparql10::$FOLLOW_variable_in_primaryExpression2465 = new \Set(array(1));
Sparql10::$FOLLOW_OPEN_BRACE_in_brackettedExpression2490 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_brackettedExpression2494 = new \Set(array(94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_brackettedExpression2496 = new \Set(array(1));
Sparql10::$FOLLOW_STR_in_builtInCall2521 = new \Set(array(93));
Sparql10::$FOLLOW_OPEN_BRACE_in_builtInCall2523 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_builtInCall2527 = new \Set(array(94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_builtInCall2529 = new \Set(array(1));
Sparql10::$FOLLOW_LANG_in_builtInCall2539 = new \Set(array(93));
Sparql10::$FOLLOW_OPEN_BRACE_in_builtInCall2541 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_builtInCall2545 = new \Set(array(94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_builtInCall2547 = new \Set(array(1));
Sparql10::$FOLLOW_LANGMATCHES_in_builtInCall2557 = new \Set(array(93));
Sparql10::$FOLLOW_OPEN_BRACE_in_builtInCall2559 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_builtInCall2563 = new \Set(array(89));
Sparql10::$FOLLOW_COMMA_in_builtInCall2565 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_builtInCall2569 = new \Set(array(94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_builtInCall2571 = new \Set(array(1));
Sparql10::$FOLLOW_DATATYPE_in_builtInCall2581 = new \Set(array(93));
Sparql10::$FOLLOW_OPEN_BRACE_in_builtInCall2583 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_builtInCall2587 = new \Set(array(94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_builtInCall2589 = new \Set(array(1));
Sparql10::$FOLLOW_BOUND_in_builtInCall2599 = new \Set(array(93));
Sparql10::$FOLLOW_OPEN_BRACE_in_builtInCall2601 = new \Set(array(52, 53));
Sparql10::$FOLLOW_variable_in_builtInCall2603 = new \Set(array(94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_builtInCall2605 = new \Set(array(1));
Sparql10::$FOLLOW_SAMETERM_in_builtInCall2615 = new \Set(array(93));
Sparql10::$FOLLOW_OPEN_BRACE_in_builtInCall2617 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_builtInCall2621 = new \Set(array(89));
Sparql10::$FOLLOW_COMMA_in_builtInCall2623 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_builtInCall2627 = new \Set(array(94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_builtInCall2629 = new \Set(array(1));
Sparql10::$FOLLOW_ISIRI_in_builtInCall2639 = new \Set(array(93));
Sparql10::$FOLLOW_OPEN_BRACE_in_builtInCall2641 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_builtInCall2645 = new \Set(array(94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_builtInCall2647 = new \Set(array(1));
Sparql10::$FOLLOW_ISURI_in_builtInCall2657 = new \Set(array(93));
Sparql10::$FOLLOW_OPEN_BRACE_in_builtInCall2659 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_builtInCall2663 = new \Set(array(94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_builtInCall2665 = new \Set(array(1));
Sparql10::$FOLLOW_ISBLANK_in_builtInCall2675 = new \Set(array(93));
Sparql10::$FOLLOW_OPEN_BRACE_in_builtInCall2677 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_builtInCall2681 = new \Set(array(94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_builtInCall2683 = new \Set(array(1));
Sparql10::$FOLLOW_ISLITERAL_in_builtInCall2693 = new \Set(array(93));
Sparql10::$FOLLOW_OPEN_BRACE_in_builtInCall2695 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_builtInCall2699 = new \Set(array(94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_builtInCall2701 = new \Set(array(1));
Sparql10::$FOLLOW_regexExpression_in_builtInCall2711 = new \Set(array(1));
Sparql10::$FOLLOW_REGEX_in_regexExpression2736 = new \Set(array(93));
Sparql10::$FOLLOW_OPEN_BRACE_in_regexExpression2738 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_regexExpression2742 = new \Set(array(89));
Sparql10::$FOLLOW_COMMA_in_regexExpression2744 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_regexExpression2748 = new \Set(array(89, 94));
Sparql10::$FOLLOW_COMMA_in_regexExpression2752 = new \Set(array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 46, 48, 50, 52, 53, 54, 56, 58, 61, 62, 63, 64, 65, 66, 67, 68, 71, 72, 73, 74, 90, 93));
Sparql10::$FOLLOW_expression_in_regexExpression2756 = new \Set(array(94));
Sparql10::$FOLLOW_CLOSE_BRACE_in_regexExpression2761 = new \Set(array(1));
Sparql10::$FOLLOW_iriRef_in_iriRefOrFunction2798 = new \Set(array(1, 93));
Sparql10::$FOLLOW_argList_in_iriRefOrFunction2811 = new \Set(array(1));
Sparql10::$FOLLOW_string_in_rdfLiteral2838 = new \Set(array(1, 55, 82));
Sparql10::$FOLLOW_LANGTAG_in_rdfLiteral2852 = new \Set(array(1));
Sparql10::$FOLLOW_REFERENCE_in_rdfLiteral2869 = new \Set(array(46, 48, 50));
Sparql10::$FOLLOW_iriRef_in_rdfLiteral2871 = new \Set(array(1));
Sparql10::$FOLLOW_numericLiteralUnsigned_in_numericLiteral2904 = new \Set(array(1));
Sparql10::$FOLLOW_numericLiteralPositive_in_numericLiteral2912 = new \Set(array(1));
Sparql10::$FOLLOW_numericLiteralNegative_in_numericLiteral2920 = new \Set(array(1));
Sparql10::$FOLLOW_INTEGER_in_numericLiteralUnsigned2949 = new \Set(array(1));
Sparql10::$FOLLOW_DECIMAL_in_numericLiteralUnsigned2961 = new \Set(array(1));
Sparql10::$FOLLOW_DOUBLE_in_numericLiteralUnsigned2973 = new \Set(array(1));
Sparql10::$FOLLOW_INTEGER_POSITIVE_in_numericLiteralPositive3000 = new \Set(array(1));
Sparql10::$FOLLOW_DECIMAL_POSITIVE_in_numericLiteralPositive3012 = new \Set(array(1));
Sparql10::$FOLLOW_DOUBLE_POSITIVE_in_numericLiteralPositive3024 = new \Set(array(1));
Sparql10::$FOLLOW_INTEGER_NEGATIVE_in_numericLiteralNegative3051 = new \Set(array(1));
Sparql10::$FOLLOW_DECIMAL_NEGATIVE_in_numericLiteralNegative3063 = new \Set(array(1));
Sparql10::$FOLLOW_DOUBLE_NEGATIVE_in_numericLiteralNegative3075 = new \Set(array(1));
Sparql10::$FOLLOW_TRUE_in_booleanLiteral3108 = new \Set(array(1));
Sparql10::$FOLLOW_FALSE_in_booleanLiteral3118 = new \Set(array(1));
Sparql10::$FOLLOW_set_in_string0 = new \Set(array(1));
Sparql10::$FOLLOW_IRI_REF_in_iriRef3186 = new \Set(array(1));
Sparql10::$FOLLOW_prefixedName_in_iriRef3196 = new \Set(array(1));
Sparql10::$FOLLOW_PNAME_LN_in_prefixedName3230 = new \Set(array(1));
Sparql10::$FOLLOW_PNAME_NS_in_prefixedName3237 = new \Set(array(1));
Sparql10::$FOLLOW_BLANK_NODE_LABEL_in_blankNode3272 = new \Set(array(1));
Sparql10::$FOLLOW_OPEN_SQUARE_BRACE_in_blankNode3282 = new \Set(array(77, 99));
Sparql10::$FOLLOW_WS_in_blankNode3285 = new \Set(array(77, 99));
Sparql10::$FOLLOW_CLOSE_SQUARE_BRACE_in_blankNode3289 = new \Set(array(1));

?>