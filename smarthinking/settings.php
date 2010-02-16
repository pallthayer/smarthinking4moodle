<?php

$settings->add(new admin_setting_configtext('block_smarthinking_partnerid', "Partner ID", get_string('clientpartnerid', 'block_smarthinking'), '', PARAM_TEXT)); 

$settings->add(new admin_setting_configtext('block_smarthinking_partnerpass', "Partner password", get_string('clientpartnerpass', 'block_smarthinking'), '', PARAM_TEXT));

$settings->add(new admin_setting_configtext('block_smarthinking_partnerzip', "Zipcode", get_string('clientpartnerzip', 'block_smarthinking'), '', PARAM_INT));

?>
