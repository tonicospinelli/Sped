<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF;

/**
 * Código do modelo do Documento Fiscal. Utilizar 01 para NF modelo 1/1A
 * @name Mod
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Mod extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}