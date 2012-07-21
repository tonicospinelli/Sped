<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det;

/**
 * Dados dos produtos e serviços da NF-e
 * @name Prod
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Prod extends \Sped\Components\Xml\Element  {

    const CPROD = 'cProd';

    const CEAN = 'cEAN';

    const XPROD = 'xProd';

    const NCM = 'NCM';

    const EXTIPI = 'EXTIPI';

    const CFOP = 'CFOP';

    const UCOM = 'uCom';

    const QCOM = 'qCom';

    const VUNCOM = 'vUnCom';

    const VPROD = 'vProd';

    const CEANTRIB = 'cEANTrib';

    const UTRIB = 'uTrib';

    const QTRIB = 'qTrib';

    const VUNTRIB = 'vUnTrib';

    const VFRETE = 'vFrete';

    const VSEG = 'vSeg';

    const VDESC = 'vDesc';

    const VOUTRO = 'vOutro';

    const INDTOT = 'indTot';

    const DI = 'DI';

    const XPED = 'xPed';

    const NITEMPED = 'nItemPed';

    const VEICPROD = 'veicProd';

    const MED = 'med';

    const ARMA = 'arma';

    const COMB = 'comb';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd 
     */
    public function getCProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd');
        return $this->getElementsByTagName(self::CPROD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd 
     * @param type $value 
     */
    public function addCProd($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd(self::CPROD, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd $paramCProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setCProd(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd $paramCProd){
        $this->removeElementsByTagName(self::CPROD);
        $this->appendChild($paramCProd, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN 
     */
    public function getCEAN(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN');
        return $this->getElementsByTagName(self::CEAN)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN 
     * @param type $value 
     */
    public function addCEAN($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN(self::CEAN, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN $paramCEAN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setCEAN(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN $paramCEAN){
        $this->removeElementsByTagName(self::CEAN);
        $this->appendChild($paramCEAN, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd 
     */
    public function getXProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd');
        return $this->getElementsByTagName(self::XPROD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd 
     * @param type $value 
     */
    public function addXProd($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd(self::XPROD, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd $paramXProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setXProd(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd $paramXProd){
        $this->removeElementsByTagName(self::XPROD);
        $this->appendChild($paramXProd, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM 
     */
    public function getNCM(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM');
        return $this->getElementsByTagName(self::NCM)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM 
     * @param type $value 
     */
    public function addNCM($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM(self::NCM, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM $paramNCM 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setNCM(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM $paramNCM){
        $this->removeElementsByTagName(self::NCM);
        $this->appendChild($paramNCM, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI 
     * @param type $index 
     */
    public function getEXTIPI($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI');
        return $this->getElementsByTagName(self::EXTIPI)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI 
     * @param type $value 
     */
    public function addEXTIPI($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI(self::EXTIPI, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI $paramEXTIPI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setEXTIPI(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI $paramEXTIPI){
        $this->removeElementsByTagName(self::EXTIPI);
        $this->appendChild($paramEXTIPI, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCfop 
     */
    public function getCFOP(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCfop');
        return $this->getElementsByTagName(self::CFOP)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCfop 
     * @param type $value 
     */
    public function addCFOP($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCfop(self::CFOP, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCfop $paramCFOP 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setCFOP(\Sped\Schemas\V200\TCfop $paramCFOP){
        $this->removeElementsByTagName(self::CFOP);
        $this->appendChild($paramCFOP, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom 
     */
    public function getUCom(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom');
        return $this->getElementsByTagName(self::UCOM)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom 
     * @param type $value 
     */
    public function addUCom($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom(self::UCOM, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom $paramUCom 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setUCom(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom $paramUCom){
        $this->removeElementsByTagName(self::UCOM);
        $this->appendChild($paramUCom, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function getQCom(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104v');
        return $this->getElementsByTagName(self::QCOM)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1104v 
     * @param type $value 
     */
    public function addQCom($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104v(self::QCOM, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1104v $paramQCom 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setQCom(\Sped\Schemas\V200\TDec_1104v $paramQCom){
        $this->removeElementsByTagName(self::QCOM);
        $this->appendChild($paramQCom, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function getVUnCom(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1110');
        return $this->getElementsByTagName(self::VUNCOM)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1110 
     * @param type $value 
     */
    public function addVUnCom($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1110(self::VUNCOM, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1110 $paramVUnCom 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVUnCom(\Sped\Schemas\V200\TDec_1110 $paramVUnCom){
        $this->removeElementsByTagName(self::VUNCOM);
        $this->appendChild($paramVUnCom, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VPROD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVProd($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VPROD, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVProd(\Sped\Schemas\V200\TDec_1302 $paramVProd){
        $this->removeElementsByTagName(self::VPROD);
        $this->appendChild($paramVProd, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib 
     */
    public function getCEANTrib(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib');
        return $this->getElementsByTagName(self::CEANTRIB)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib 
     * @param type $value 
     */
    public function addCEANTrib($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib(self::CEANTRIB, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib $paramCEANTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setCEANTrib(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib $paramCEANTrib){
        $this->removeElementsByTagName(self::CEANTRIB);
        $this->appendChild($paramCEANTrib, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib 
     */
    public function getUTrib(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib');
        return $this->getElementsByTagName(self::UTRIB)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib 
     * @param type $value 
     */
    public function addUTrib($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib(self::UTRIB, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib $paramUTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setUTrib(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib $paramUTrib){
        $this->removeElementsByTagName(self::UTRIB);
        $this->appendChild($paramUTrib, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function getQTrib(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104v');
        return $this->getElementsByTagName(self::QTRIB)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1104v 
     * @param type $value 
     */
    public function addQTrib($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104v(self::QTRIB, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1104v $paramQTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setQTrib(\Sped\Schemas\V200\TDec_1104v $paramQTrib){
        $this->removeElementsByTagName(self::QTRIB);
        $this->appendChild($paramQTrib, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function getVUnTrib(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1110');
        return $this->getElementsByTagName(self::VUNTRIB)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1110 
     * @param type $value 
     */
    public function addVUnTrib($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1110(self::VUNTRIB, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1110 $paramVUnTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVUnTrib(\Sped\Schemas\V200\TDec_1110 $paramVUnTrib){
        $this->removeElementsByTagName(self::VUNTRIB);
        $this->appendChild($paramVUnTrib, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $index 
     */
    public function getVFrete($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VFRETE)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVFrete($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VFRETE, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVFrete 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVFrete(\Sped\Schemas\V200\TDec_1302Opc $paramVFrete){
        $this->removeElementsByTagName(self::VFRETE);
        $this->appendChild($paramVFrete, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $index 
     */
    public function getVSeg($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VSEG)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVSeg($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VSEG, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVSeg 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVSeg(\Sped\Schemas\V200\TDec_1302Opc $paramVSeg){
        $this->removeElementsByTagName(self::VSEG);
        $this->appendChild($paramVSeg, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $index 
     */
    public function getVDesc($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VDESC)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVDesc($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VDESC, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVDesc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVDesc(\Sped\Schemas\V200\TDec_1302Opc $paramVDesc){
        $this->removeElementsByTagName(self::VDESC);
        $this->appendChild($paramVDesc, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $index 
     */
    public function getVOutro($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VOUTRO)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVOutro($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VOUTRO, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVOutro 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVOutro(\Sped\Schemas\V200\TDec_1302Opc $paramVOutro){
        $this->removeElementsByTagName(self::VOUTRO);
        $this->appendChild($paramVOutro, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot 
     */
    public function getIndTot(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot');
        return $this->getElementsByTagName(self::INDTOT)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot 
     * @param type $value 
     */
    public function addIndTot($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot(self::INDTOT, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot $paramIndTot 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setIndTot(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot $paramIndTot){
        $this->removeElementsByTagName(self::INDTOT);
        $this->appendChild($paramIndTot, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     * @param type $index 
     */
    public function getDI($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI');
        return $this->getElementsByTagName(self::DI)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function addDI(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI(self::DI), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI $paramDI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setDI(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI $paramDI){
        $this->removeElementsByTagName(self::DI);
        $this->appendChild($paramDI, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed 
     * @param type $index 
     */
    public function getXPed($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed');
        return $this->getElementsByTagName(self::XPED)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed 
     * @param type $value 
     */
    public function addXPed($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed(self::XPED, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed $paramXPed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setXPed(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed $paramXPed){
        $this->removeElementsByTagName(self::XPED);
        $this->appendChild($paramXPed, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed 
     * @param type $index 
     */
    public function getNItemPed($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed');
        return $this->getElementsByTagName(self::NITEMPED)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed 
     * @param type $value 
     */
    public function addNItemPed($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed(self::NITEMPED, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed $paramNItemPed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setNItemPed(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed $paramNItemPed){
        $this->removeElementsByTagName(self::NITEMPED);
        $this->appendChild($paramNItemPed, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function getVeicProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd');
        return $this->getElementsByTagName(self::VEICPROD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function addVeicProd(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd(self::VEICPROD), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd $paramVeicProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVeicProd(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd $paramVeicProd){
        $this->removeElementsByTagName(self::VEICPROD);
        $this->appendChild($paramVeicProd, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function getMed(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med');
        return $this->getElementsByTagName(self::MED)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function addMed(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med(self::MED), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med $paramMed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setMed(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med $paramMed){
        $this->removeElementsByTagName(self::MED);
        $this->appendChild($paramMed, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma 
     */
    public function getArma(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma');
        return $this->getElementsByTagName(self::ARMA)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma 
     */
    public function addArma(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma(self::ARMA), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma $paramArma 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setArma(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma $paramArma){
        $this->removeElementsByTagName(self::ARMA);
        $this->appendChild($paramArma, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function getComb(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb');
        return $this->getElementsByTagName(self::COMB)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function addComb(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb(self::COMB), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb $paramComb 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setComb(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb $paramComb){
        $this->removeElementsByTagName(self::COMB);
        $this->appendChild($paramComb, false);
        return $this;
    }

}