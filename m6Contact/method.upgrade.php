<?php
#-------------------------------------------------------------------------
# Module: m6Contact
# Method: Upgrade
#-------------------------------------------------------------------------


if (!isset($gCms)) exit;


$current_version = $oldversion;
switch($current_version)
{
  // we are now 1.0 and want to upgrade to latest
 case "1.0":
   //do magic
}

// put mention into the admin log
$this->Audit( 0,$this->Lang('friendlyname'),$this->Lang('upgraded', $this->GetVersion()));

?>