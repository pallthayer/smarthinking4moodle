<?php

$settings->add(new admin_setting_configtext('block_smarthinking_partnerid', "Partner ID", 'clientpartnerid', '', PARAM_TEXT)); 

$settings->add(new admin_setting_configtext('block_smarthinking_partnerpass', "Partner password", 'clientpartnerpass', '', PARAM_TEXT));

$settings->add(new admin_setting_configtext('block_smarthinking_partnerzip', "Zipcode", 'clientpartnerzip', '', PARAM_INT));

?>
