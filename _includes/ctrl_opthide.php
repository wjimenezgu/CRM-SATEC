<?php
    $infoOptHide = $model->getAllOptHide($inSession);  
    $mvc->assign("LIST_OPT_HIDE", $infoOptHide);  
	$optHide = $mvc->fetch("listOptHide.tpl");
    $mvc->assign("OPT_HIDE", $optHide);
?> 