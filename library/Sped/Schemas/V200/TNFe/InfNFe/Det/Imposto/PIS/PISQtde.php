<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS;

/**
 * Código de Situação Tributária do PIS.<br />
 * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
 * @name PISQtde
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class PISQtde extends \Sped\Components\Xml\Element  {

    const CST = 'CST';

    const QBCPROD = 'qBCProd';

    const VALIQPROD = 'vAliqProd';

    const VPIS = 'vPIS';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST 
     */
    public function getCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST 
     * @param type $value 
     */
    public function addCST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST(self::CST, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST $paramCST){
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1204 
     */
    public function getQBCProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1204');
        return $this->getElementsByTagName(self::QBCPROD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1204 
     * @param type $value 
     */
    public function addQBCProd($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1204(self::QBCPROD, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1204 $paramQBCProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde 
     */
    public function setQBCProd(\Sped\Schemas\V200\TDec_1204 $paramQBCProd){
        $this->removeElementsByTagName(self::QBCPROD);
        $this->appendChild($paramQBCProd, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function getVAliqProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104v');
        return $this->getElementsByTagName(self::VALIQPROD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1104v 
     * @param type $value 
     */
    public function addVAliqProd($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104v(self::VALIQPROD, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1104v $paramVAliqProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde 
     */
    public function setVAliqProd(\Sped\Schemas\V200\TDec_1104v $paramVAliqProd){
        $this->removeElementsByTagName(self::VALIQPROD);
        $this->appendChild($paramVAliqProd, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVPIS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VPIS)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVPIS($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VPIS, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde 
     */
    public function setVPIS(\Sped\Schemas\V200\TDec_1302 $paramVPIS){
        $this->removeElementsByTagName(self::VPIS);
        $this->appendChild($paramVPIS, false);
        return $this;
    }

}