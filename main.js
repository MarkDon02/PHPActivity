$(document).ready(function () {
	$(document).on('submit', '#formLogin', function (e) {
		e.preventDefault();
		var userNamejs = $('#UsernameHT').val();
		var userPassjs = $('#PasswordHT').val();

		$.ajax({
			url: "Login.php",
			type: "POST",
			data: {
				userName: userNamejs,	
				userPass: userPassjs
			},
			success: function (res) {
				window.location.replace(res)
			},
			error: function (xhr, resp, text) {
				// show error to console
				console.log(xhr, resp, text);
			}
		});
	})
});