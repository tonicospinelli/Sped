<?php

namespace Sped\Schemas\V200;

/**
 * 
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name DocumentSignature
 */
class DocumentSignature extends \Sped\Components\Xml\Document  {

    const SIGNATURE = 'Signature';

    /**
     * 
     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function getSignature(){
        $this->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\SignatureType');
        return $this->getElementsByTagName(self::SIGNATURE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\SignatureType 
     * @param type $value 
     * @param type $namespaceURI 
     */
    public function addSignature($value = NULL, $namespaceURI = 'http://www.portalfiscal.inf.br/nfe'){
        return $this->appendChild(new \Sped\Schemas\V200\SignatureType(self::SIGNATURE, $value, $namespaceURI), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\SignatureType $paramSignature 
     * @return \Sped\Schemas\V200\DocumentSignature 
     */
    public function setSignature(\Sped\Schemas\V200\SignatureType $paramSignature){
        $this->removeElementsByTagName(self::SIGNATURE);
        $this->appendChild($paramSignature, false);
        return $this;
    }

}