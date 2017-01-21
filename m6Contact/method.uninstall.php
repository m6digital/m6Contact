<?php
if (!isset($gCms)) exit;

$db = $this->GetDb();
$this->DeleteTemplate('display');
$this->DeleteTemplate('confirmation');


$this->RemovePreference();
$this->DeleteTemplate();
$this->RemoveEvent('m6Contact Email Received');
$this->RemoveSmartyPlugin();



cms_route_manager::del_static('',$this->GetName());

// remove templates
// and template types.
try {
  $types = CmsLayoutTemplateType::load_all_by_originator($this->GetName());
  if( is_array($types) && count($types) ) {
    foreach( $types as $type ) {
      $templates = $type->get_template_list();
      if( is_array($templates) && count($templates) ) {
	foreach( $templates as $template ) {
	  $template->delete();
	}
      }
      $type->delete();
    }
  }
}
catch( Exception $e ) {
  // log it
  audit('',$this->GetName(),'Uninstall Error: '.$e->GetMessage());
}




$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));

?>