<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Informações adicionais da NF-e
 * @name InfAdic
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class InfAdic extends \Sped\Components\Xml\Element  {

    const INFADFISCO = 'infAdFisco';

    const INFCPL = 'infCpl';

    const OBSCONT = 'obsCont';

    const OBSFISCO = 'obsFisco';

    const PROCREF = 'procRef';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco 
     * @param int $index 
     */
    public function getInfAdFisco(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco');
        return $this->getElementsByTagName(self::INFADFISCO)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco 
     */
    public function addInfAdFisco(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco $paramInfAdFisco 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     */
    public function setInfAdFisco(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco $paramInfAdFisco){
        $this->removeElementsByTagName(self::INFADFISCO);
        $this->appendChild($paramInfAdFisco, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl 
     * @param int $index 
     */
    public function getInfCpl(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl');
        return $this->getElementsByTagName(self::INFCPL)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl 
     */
    public function addInfCpl(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl $paramInfCpl 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     */
    public function setInfCpl(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl $paramInfCpl){
        $this->removeElementsByTagName(self::INFCPL);
        $this->appendChild($paramInfCpl, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont 
     * @param int $index 
     */
    public function getObsCont(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont');
        return $this->getElementsByTagName(self::OBSCONT)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont 
     */
    public function addObsCont(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont $paramObsCont 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     */
    public function setObsCont(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont $paramObsCont){
        $this->removeElementsByTagName(self::OBSCONT);
        $this->appendChild($paramObsCont, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco 
     * @param int $index 
     */
    public function getObsFisco(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco');
        return $this->getElementsByTagName(self::OBSFISCO)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco 
     */
    public function addObsFisco(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco $paramObsFisco 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     */
    public function setObsFisco(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco $paramObsFisco){
        $this->removeElementsByTagName(self::OBSFISCO);
        $this->appendChild($paramObsFisco, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef 
     * @param int $index 
     */
    public function getProcRef(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef');
        return $this->getElementsByTagName(self::PROCREF)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef 
     */
    public function addProcRef(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef $paramProcRef 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     */
    public function setProcRef(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef $paramProcRef){
        $this->removeElementsByTagName(self::PROCREF);
        $this->appendChild($paramProcRef, false);
        return $this;
    }

}