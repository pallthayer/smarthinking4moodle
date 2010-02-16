<?php

/* This file contains one class which defines a block that allows
   the user to connect to SmarThinking using their Moodle credentials.
   Login occurs as an asynchronous process so the Yahoo yui libraries
   are required.
   Before using this block, the Moodle Admin must set the Partner ID,
   Partner Password and zipcode as required by SmarThinking.

   (C) 2010 Pall Thayer and SUNY Purchase College, Purchase, NY
   @license http://www.gnu.org/licenses/gpl.html GNU Public License
*/

require_js(array('yui_yahoo', 'yui_dom', 'yui_event', 'yui_connection'));

class block_smarthinking extends block_base {
    function init() {
		$this->title = "SmarThinking";
		$this->version = 2010110201;
	}

	function has_config() {
		return true;
	}

	function get_content() {
		global $CFG, $USER;
		if ($this->content !== NULL) {
			return $this->content;
		}
		$this->content = new stdClass;
		$this->content->text = "
			<script type=\"text/javascript\" src=\"".$CFG->wwwroot."/blocks/".$this->name()."/smarthinking.js\"></script>
			<div style=\"font-size:12px;font-family:sans-serif;text-align:center;\"><a href=\"#\" onclick=\"get_st_url('$CFG->block_smarthinking_partnerid', '$CFG->block_smarthinking_partnerpass', '$USER->username', '$USER->email', '$USER->firstname', '$USER->lastname', '$CFG->block_smarthinking_partnerzip', '$CFG->wwwroot'); return false;\">Connect to SmarThinking</a></div>";
		return $this->content;
	}
}
?>
