/**
 * ownCloud - readlater
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Ruchita <ruchita@berkeley.edu>
 * @copyright Ruchita 2014
 */

(function ($, OC) {

	$(document).ready(function () {


		$("div#addContent").hide();
		console.log("hello");
		$('a').click(function () {
			alert('Hello from your script file');

			$("div#addContent").show();
			console.log("hello");
		});
		//Save Content
		$('#addUrlBtn').click(function(){
		alert("Add button clicked");
		alert($('#url').val());
		saveData();

		});

		$('#echo').click(function () {
			var url = OC.generateUrl('/apps/readlater/echo');
			var data = {
				echo: $('#echo-content').val()
			};

			$.post(url, data).success(function (response) {
				$('#echo-result').text(response.echo);
			});

		});
	});

//Function to save Content
function saveData(){  
var formData = {
	'url':  $('#url').val(),
	'title': '',
	'description': ''
}
$.ajax({
	type: "POST",
  	url: OC.generateUrl('/apps/readlater/add/url'),
  	data: formDate
    }).done(function( msg ) {
	
 alert( "Your content was saved: " + msg );
    });
}

})(jQuery, OC);
