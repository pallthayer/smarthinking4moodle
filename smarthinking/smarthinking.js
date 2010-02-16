/* This file contains the AJAX function for the SmarThinking plugin
   for Moodle. It handles the login as an asynchronous process and
   sends the user's Moodle credentials as their SmarThinking login
   credentials.

   (C) 2010 Pall Thayer and SUNY Purchase College, Purchase, NY
   license http://www.gnu.org/licenses/gpl.html GNU Public License
*/

function get_st_url(partnerid, partnerpass, userid, useremail, firstname, lastname, zipcode, wwwroot) {
	
	var data = '?partnerid='+partnerid+'&partnerpass='+partnerpass+'&userid='+userid+'&useremail='+useremail+'&firstname='+firstname+'&lastname='+lastname+'&zipcode='+zipcode;
	var url = wwwroot+'/blocks/smarthinking/st_login.php'+data;
	
	var AjaxObject = {

		handleSuccess:function (data) {
			if(data.responseText !== undefined) {
				var response = eval('('+data.responseText+')');
				if(response.status == 'ok'){
					//window.location = response.msg[0];
                    window.open(response.msg[0], 'SmarThinking');
				}else{
					alert(response.msg);
				}
			}
		},

		handleFailure:function (data) {
			if(data.responseText !== undefined) {
				alert(data.statusText);
			}
		},

		startRequest:function () {
			YAHOO.util.Connect.asyncRequest('GET', url, callback, null);
		}
	};

	var callback = {
		success:AjaxObject.handleSuccess,
		failure:AjaxObject.handleFailure,
		scope: AjaxObject
	};

	AjaxObject.startRequest();
}
