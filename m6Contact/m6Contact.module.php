<?php
#-------------------------------------------------------------------------
# Module: m6Contact
# Version: 1.0
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2010 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
#-------------------------------------------------------------------------

class m6Contact extends CMSModule
{
  function GetName() {return 'm6Contact';}
  function GetFriendlyName(){return $this->Lang('friendlyname');}
  function GetVersion(){return '1.0';}
  function GetHelp(){return $this->Lang('help');}
  function GetAuthor(){return 'm6Digital';}
  function GetAuthorEmail(){return 'jeff@m6digital'; }
  function GetChangeLog(){return $this->Lang('changelog');}
  function IsPluginModule(){return true;}
  function HasAdmin(){return false;}
  function GetAdminSection(){return 'extensions';}
  function GetAdminDescription(){return $this->Lang('moddescription');}
  function VisibleToAdminUser(){return $this->CheckPermission('Use QuickContact');}
  function MinimumCMSVersion(){return "1.11";}
  function InstallPostMessage(){return $this->Lang('postinstall');}
  function UninstallPostMessage(){return $this->Lang('postuninstall');}
  function UninstallPreMessage(){return $this->Lang('really_uninstall');}
  
  function InitializeFrontend(){
	$this->RegisterModulePlugin();
	$this->RestrictUnknownParams();
	$this->SetParameterType('sendTo',CLEAN_STRING);
	$this->SetParameterType('emailTo',CLEAN_STRING);
   	$this->SetParameterType('name',CLEAN_STRING);
   	$this->SetParameterType('email',CLEAN_STRING);
   	$this->SetParameterType('subject',CLEAN_STRING);
   	$this->SetParameterType('message',CLEAN_STRING);
   	$this->SetParameterType('website',CLEAN_STRING);
   	$this->SetParameterType('module_message',CLEAN_STRING);
   	$this->SetParameterType('success',CLEAN_STRING);
   	$this->SetParameterType('submit',CLEAN_STRING);
	}


 function InitializeAdmin(){
	$this->CreateParameter('sendTo','email@email.com', $this->lang('helpSendTo'),false);
  	}
 
  
}

?>
