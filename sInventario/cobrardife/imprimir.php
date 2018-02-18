<?php

    include 'WebClientPrint.php';
    use Neodynamic\SDK\Web\WebClientPrint;
    use Neodynamic\SDK\Web\Utils; 


	echo WebClientPrint::createScript(Utils::getRoot().'/CRM-SATEC/sInventario/cobrar/control/ctrl_imprimir.php');

    require './control/ctrl_imprimir.php';

?>
