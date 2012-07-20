<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Informações de compras  (Nota de Empenho, Pedido e Contrato)
 * @name Compra
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Compra extends \Sped\Components\Xml\Element  {

    const XNEMP = 'xNEmp';

    const XPED = 'xPed';

    const XCONT = 'xCont';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp 
     * @param int $index 
     */
    public function getXNEmp(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp');
        return $this->getElementsByTagName(self::XNEMP)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp 
     */
    public function addXNEmp(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp $paramXNEmp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra 
     */
    public function setXNEmp(\Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp $paramXNEmp){
        $this->removeElementsByTagName(self::XNEMP);
        $this->appendChild($paramXNEmp, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed 
     * @param int $index 
     */
    public function getXPed(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed');
        return $this->getElementsByTagName(self::XPED)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed 
     */
    public function addXPed(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed $paramXPed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra 
     */
    public function setXPed(\Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed $paramXPed){
        $this->removeElementsByTagName(self::XPED);
        $this->appendChild($paramXPed, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont 
     * @param int $index 
     */
    public function getXCont(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont');
        return $this->getElementsByTagName(self::XCONT)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont 
     */
    public function addXCont(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont $paramXCont 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra 
     */
    public function setXCont(\Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont $paramXCont){
        $this->removeElementsByTagName(self::XCONT);
        $this->appendChild($paramXCont, false);
        return $this;
    }

}