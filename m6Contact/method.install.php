<?php
#-------------------------------------------------------------------------
# Module: m6Contact
# Method: Install
#-------------------------------------------------------------------------

if (!isset($gCms)) exit;

$this->CreateEvent('m6Contact Email Received');
$this->CreateStaticRoutes();
$this->RegisterModulePlugin(TRUE);
$this->RegisterSmartyPlugin('m6Contact','function','function_plugin');
$this->Audit( 0,$this->Lang('friendlyname'),$this->Lang('installed', $this->GetVersion()) );
	      
?>