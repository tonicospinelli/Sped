<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Ide;

/**
 * Indicador da forma de pagamento:<br />
 * 0 – pagamento à vista;<br />
 * 1 – pagamento à prazo;<br />
 * 2 – outros.
 * @name IndPag
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class IndPag extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}