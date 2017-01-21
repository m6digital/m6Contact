<?php

if (!isset($gCms)) exit;

$sendTo=$params['sendTo'];

//set a module preference so we don't have to expose email in form.
$this->SetPreference('sendTo',$sendTo);

$smarty->assign('actionID',$id);


if (isset($params['message'])){
   	$smarty->assign('message',$params['message']);
	}
	else
	{
	$smarty->assign('message','');
	}


echo $this->ProcessTemplate("display.tpl");


?>