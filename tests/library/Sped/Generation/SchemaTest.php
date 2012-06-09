<?php

namespace Sped\Generation;

require_once dirname(__FILE__) . '/../../../../library/Sped/Generation/Schema.php';

/**
 * Test class for Schema.
 * Generated by PHPUnit on 2012-06-07 at 15:03:30.
 */
class SchemaTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Schema
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Schema;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    public function testLoadXmlSchema() {
        $this->object->loadXmlSchema('../xmlschemas/nfe_v2.00.xsd');
    }

    public function testReadChildren() {
        $this->object->loadXmlSchema('../xmlschemas/nfe_v2.00.xsd');
        $this->object->createClassFromNode(null, '\Sped\Schemas\V200');
    }

    /**
     * @todo Implement testGenerate().
     */
    public function testGenerate() {
//        $param = array(
//            'name' => 'Ide',
//            'tagName' => 'ide',
//            'namespace' => '\Sped\Schemas\V200\TNFe\InfNFe',
//            'description' => 'TEste',
//            'value' => null,
//            'children' => array(
//                'CodigoUF',
//                'CodigoNF',
//                'natOp',
//                'indPag',
//                'mod',
//                'serie',
//                'NumeroNF',
//                'DataEmi',
//                'DataSaiEnt',
//                'HoraSaiEnt',
//                'tpNF',
//                'CodigoMunFG',
//                'NFref',
//                'tpImp',
//                'tpEmis',
//                'CodigoDV',
//                'tpAmb',
//                'finNFe',
//                'procEmi',
//                'verProc',
//                'DataHoraCont',
//                'Justificativa'
//            )
//        );
//
//        $this->object->generate('../generetad', $param);
    }

    public function testRead() {
        
    }

}

?>
