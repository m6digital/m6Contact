<?PHP

if (!isset($gCms)) exit;

//if an of the fields are blank send them back.

$isError=false;
$module_message="";
$sendTo=$this->GetPreference('sendTo');;
$senderName=$params['name'];
$email=$params['email'];
$subject=$params['subject'];
$message=$params['message'];
$website=$params['website'];

$module_message=$params['module_message'];

$website=$params['website'];

$smarty->assign('params',$params);
$smarty->assign('returnLink',$this->create_url($id,'default',$returnid));

if($sendTo=="" || $senderName== "" || $email=="" || $subject=="" || $message==""){
	$params['module_message']="All Fields are Required!...";
	$this->RedirectForFrontEnd($id, $returnid, 'default', array($params));
}


if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$module_message="The email you entered is not valid...";
	$this->RedirectForFrontEnd($id, $returnid, 'default', array('module_message'=>$module_message));
}

if($website != ""){
	$this->Audit( 7,'m6Contact','Spam Submission Received' );
	echo $this->ProcessTemplate('confirmation.tpl');
	return;
}

$cmsmailer= new \cms_mailer;	
$cmsmailer->AddAddress($sendTo,$sendTo);
$cmsmailer->SetBody($message);
$cmsmailer->IsHTML(true);
$cmsmailer->SetSubject($subject);
$cmsmailer->SetFrom($email);
$cmsmailer->SetFromName($senderName);
$cmsmailer->SetReplyTo($email);
$cmsmailer->Send();


echo $this->ProcessTemplate('confirmation.tpl');

?>