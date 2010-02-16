<?php

$settings->add(new admin_setting_configtext('block_smarthinking_partnerid', "Partner ID", "Your institution's partner ID as supplied by SmarThinking.", '', PARAM_TEXT)); 

$settings->add(new admin_setting_configtext('block_smarthinking_partnerpass', "Partner password", "Your institution's password as supplied by SmarThinking", '', PARAM_TEXT));

$settings->add(new admin_setting_configtext('block_smarthinking_partnerzip', "Zipcode", "Your institution's zip code.", '', PARAM_INT));

?>
