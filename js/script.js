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
		console.log("hello");
		$('a').click(function () {
			alert('Hello from your script file');
			console.log("hello");
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

})(jQuery, OC);
