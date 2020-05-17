$(document).ready(function () {
	$(document).on('submit', '#formLogin', function (e) {
		e.preventDefault();
		var userName = $('#userName').val();
		var userPass = $('#userPass').val();

		$.ajax({
			url: "Login.php",
			type: "POST",
			contentType: 'application/json',
			data: {
				userName: userName,
				userPass: userPass
			},
			success: function (result) {
				// product was created, go back to products list

			},
			error: function (xhr, resp, text) {
				// show error to console
				console.log(xhr, resp, text);
			}
		});
	})
});