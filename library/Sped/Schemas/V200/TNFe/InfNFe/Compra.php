<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Informações de compras  (Nota de Empenho, Pedido e Contrato)
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Compra
 * @package Sped
 */
class Compra extends \Sped\Components\Xml\Element 
{

    const XNEMP = 'xNEmp';

    const XPED = 'xPed';

    const XCONT = 'xCont';

    /**
     * Retorna Informação da Nota de Empenho de compras públicas (NT2011/004)
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp 
     */
    public function getXNEmp($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp');
        return $this->getElementsByTagName(self::XNEMP)->item($index);
    }

    /**
     * Adiciona Informação da Nota de Empenho de compras públicas (NT2011/004)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp 
     */
    public function addXNEmp($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp(self::XNEMP, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Informação da Nota de Empenho de compras públicas (NT2011/004)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp $paramXNEmp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra 
     */
    public function setXNEmp(\Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp $paramXNEmp)
    {
        $this->removeElementsByTagName(self::XNEMP);
        $this->appendChild($paramXNEmp, false);
        return $this;
    }

    /**
     * Retorna Informação do pedido
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed 
     */
    public function getXPed($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed');
        return $this->getElementsByTagName(self::XPED)->item($index);
    }

    /**
     * Adiciona Informação do pedido
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed 
     */
    public function addXPed($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed(self::XPED, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Informação do pedido
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed $paramXPed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra 
     */
    public function setXPed(\Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed $paramXPed)
    {
        $this->removeElementsByTagName(self::XPED);
        $this->appendChild($paramXPed, false);
        return $this;
    }

    /**
     * Retorna Informação do contrato
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont 
     */
    public function getXCont($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont');
        return $this->getElementsByTagName(self::XCONT)->item($index);
    }

    /**
     * Adiciona Informação do contrato
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont 
     */
    public function addXCont($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont(self::XCONT, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Informação do contrato
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont $paramXCont 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra 
     */
    public function setXCont(\Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont $paramXCont)
    {
        $this->removeElementsByTagName(self::XCONT);
        $this->appendChild($paramXCont, false);
        return $this;
    }

}