<?php

namespace Sped\Schemas\V200\TNFe;

/**
 * Informações da Nota Fiscal eletrônica
 * @name InfNFe
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class InfNFe extends \Sped\Components\Xml\Element  {

    const IDE = 'ide';

    const EMIT = 'emit';

    const AVULSA = 'avulsa';

    const DEST = 'dest';

    const RETIRADA = 'retirada';

    const ENTREGA = 'entrega';

    const DET = 'det';

    const TOTAL = 'total';

    const TRANSP = 'transp';

    const COBR = 'cobr';

    const INFADIC = 'infAdic';

    const EXPORTA = 'exporta';

    const COMPRA = 'compra';

    const CANA = 'cana';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function getIde(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide');
        return $this->getElementsByTagName(self::IDE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function addIde(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide $paramIde 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setIde(\Sped\Schemas\V200\TNFe\InfNFe\Ide $paramIde){
        $this->removeElementsByTagName(self::IDE);
        $this->appendChild($paramIde, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function getEmit(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Emit');
        return $this->getElementsByTagName(self::EMIT)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function addEmit(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Emit(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit $paramEmit 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setEmit(\Sped\Schemas\V200\TNFe\InfNFe\Emit $paramEmit){
        $this->removeElementsByTagName(self::EMIT);
        $this->appendChild($paramEmit, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     * @param int $index 
     */
    public function getAvulsa(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa');
        return $this->getElementsByTagName(self::AVULSA)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function addAvulsa(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa $paramAvulsa 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setAvulsa(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa $paramAvulsa){
        $this->removeElementsByTagName(self::AVULSA);
        $this->appendChild($paramAvulsa, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest 
     */
    public function getDest(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Dest');
        return $this->getElementsByTagName(self::DEST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest 
     */
    public function addDest(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Dest(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Dest $paramDest 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setDest(\Sped\Schemas\V200\TNFe\InfNFe\Dest $paramDest){
        $this->removeElementsByTagName(self::DEST);
        $this->appendChild($paramDest, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal 
     * @param int $index 
     */
    public function getRetirada(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal');
        return $this->getElementsByTagName(self::RETIRADA)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function addRetirada(){
        return $this->appendChild(new \Sped\Schemas\V200\TLocal(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TLocal $paramRetirada 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setRetirada(\Sped\Schemas\V200\TLocal $paramRetirada){
        $this->removeElementsByTagName(self::RETIRADA);
        $this->appendChild($paramRetirada, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal 
     * @param int $index 
     */
    public function getEntrega(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal');
        return $this->getElementsByTagName(self::ENTREGA)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function addEntrega(){
        return $this->appendChild(new \Sped\Schemas\V200\TLocal(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TLocal $paramEntrega 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setEntrega(\Sped\Schemas\V200\TLocal $paramEntrega){
        $this->removeElementsByTagName(self::ENTREGA);
        $this->appendChild($paramEntrega, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det 
     */
    public function getDet(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det');
        return $this->getElementsByTagName(self::DET)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det 
     */
    public function addDet(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det $paramDet 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setDet(\Sped\Schemas\V200\TNFe\InfNFe\Det $paramDet){
        $this->removeElementsByTagName(self::DET);
        $this->appendChild($paramDet, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total 
     */
    public function getTotal(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Total');
        return $this->getElementsByTagName(self::TOTAL)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total 
     */
    public function addTotal(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Total(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Total $paramTotal 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setTotal(\Sped\Schemas\V200\TNFe\InfNFe\Total $paramTotal){
        $this->removeElementsByTagName(self::TOTAL);
        $this->appendChild($paramTotal, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp 
     */
    public function getTransp(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp');
        return $this->getElementsByTagName(self::TRANSP)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp 
     */
    public function addTransp(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp $paramTransp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setTransp(\Sped\Schemas\V200\TNFe\InfNFe\Transp $paramTransp){
        $this->removeElementsByTagName(self::TRANSP);
        $this->appendChild($paramTransp, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr 
     * @param int $index 
     */
    public function getCobr(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr');
        return $this->getElementsByTagName(self::COBR)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr 
     */
    public function addCobr(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cobr(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cobr $paramCobr 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setCobr(\Sped\Schemas\V200\TNFe\InfNFe\Cobr $paramCobr){
        $this->removeElementsByTagName(self::COBR);
        $this->appendChild($paramCobr, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     * @param int $index 
     */
    public function getInfAdic(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic');
        return $this->getElementsByTagName(self::INFADIC)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     */
    public function addInfAdic(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic $paramInfAdic 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setInfAdic(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic $paramInfAdic){
        $this->removeElementsByTagName(self::INFADIC);
        $this->appendChild($paramInfAdic, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Exporta 
     * @param int $index 
     */
    public function getExporta(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Exporta');
        return $this->getElementsByTagName(self::EXPORTA)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Exporta 
     */
    public function addExporta(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Exporta(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Exporta $paramExporta 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setExporta(\Sped\Schemas\V200\TNFe\InfNFe\Exporta $paramExporta){
        $this->removeElementsByTagName(self::EXPORTA);
        $this->appendChild($paramExporta, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra 
     * @param int $index 
     */
    public function getCompra(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Compra');
        return $this->getElementsByTagName(self::COMPRA)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra 
     */
    public function addCompra(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Compra(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Compra $paramCompra 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setCompra(\Sped\Schemas\V200\TNFe\InfNFe\Compra $paramCompra){
        $this->removeElementsByTagName(self::COMPRA);
        $this->appendChild($paramCompra, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     * @param int $index 
     */
    public function getCana(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cana');
        return $this->getElementsByTagName(self::CANA)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     */
    public function addCana(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cana(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cana $paramCana 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setCana(\Sped\Schemas\V200\TNFe\InfNFe\Cana $paramCana){
        $this->removeElementsByTagName(self::CANA);
        $this->appendChild($paramCana, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getVersao(){
        return $this->getAttribute('versao');
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setVersao(string $value){
        $this->setAttribute('versao', $value);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getId(){
        return $this->getAttribute('Id');
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setId(string $value){
        $this->setAttribute('Id', $value);
        return $this;
    }

}