$(document).ready(function () {
	// Login
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
	// Registration
	$(document).on('submit', '#formReg', function (e){
		e.preventDefault();
		var firstNamejs = $('#FirstNameReg').val();
		var lastNamejs = $('#LastNameReg').val();
		var coursejs = $('#CourseReg').val();
		var genderjs = $('#GenderReg').val();
		var agejs = $('#AgeReg').val();
		var regUsernamejs = $('#UserNameReg').val();
		var regPasswordjs = $('#PassWordReg').val();
		
		$.ajax({
			url: "Registration.php",
			type: "POST",
			data: {
				firstName: firstNamejs,
				lastName: lastNamejs,
				course: coursejs,
				gender: genderjs,
				age: agejs,
				userName: regUsernamejs,
				passWord: regPasswordjs
			},
			success: function(res) {
				window.location.replace(res)
			},
			error: function(xhr, resp, text) {
				console.log(xhr, resp, text);
			}
		});
	})
	// Search Data
	$('#submitSearch').click(function (e) {
		e.preventDefault();
		var fullName = $('#inputSearch').val();
		$.ajax({
			url: "Search.php",
			type: "POST",
			data: {
				searchFunction: "searchByName",
				fullName: fullName
			},
			success: function (res) {
				$("#populateTable").html("");
				$("#populateTable").append(res);
			},
			error: function (xhr, resp, text) {
				// show error to console
				console.log(xhr, resp, text);
			}
		});
	})
	// Search All Data
	$("#submitSearchAll").click(function (e) {
		e.preventDefault();
		$.ajax({
			url: "Search.php",
			type: "POST",
			data: {
				searchFunction: "searchAll"
			},
			success: function (res) {
				$("#populateTable").html("");
				$("#populateTable").append(res);
			},
			error: function (xhr, resp, text) {
				// show error to console
				console.log(xhr, resp, text);
			}
		});
	})
	// Search Data for Update
	$('#submitSearchUp').click(function (e) {
		e.preventDefault();
		var fullName = $('#inputSearchUp').val();
		$.ajax({
			url: "Search.php",
			dataType: 'json',
			type: "POST",
			data: {
				searchFunction: "searchByNameToUpdate",
				fullName: fullName
			},
			success: function (res) {
				$('#updateDiv').css('display', 'block');
				$('#UserIDUp').val(res.UserID);
				$('#FirstNameUp').val(res.FirstName);
				$('#LastNameUp').val(res.LastName);
				$('#AgeUp').val(res.Age);
				$('#GenderUp').val(res.Gender);
				$('#CourseUp').val(res.Course);
				$('#UserNameUp').val(res.UserName);
				$('#PassWordUp').val(res.UserPassword);
			},
			error: function (xhr, resp, text) {
				// show error to console
				console.log(xhr, resp, text);
			}
		});
	})
	// Update Information
	$(document).on('submit', '#formUpdate', function (e){
		e.preventDefault();
		var userID = $('#UserIDUp').val();
		var firstName = $('#FirstNameUp').val();
		var lastName = $('#LastNameUp').val();
		var age = $('#AgeUp').val();
		var gender = $('#GenderUp').val();
		var course = $('#CourseUp').val();
		var userName = $('#UserNameUp').val();
		var userPassword = $('#PassWordUp').val();
		$.ajax({
            url: 'Modify.php',
            type: 'POST',
            data: {
                userID: userID,
				firstName: firstName,
				lastName: lastName,
				age: age,
				gender: gender,
				course: course,
				userName: userName,
				userPassword: userPassword
            },
            success: function (res) {                
                window.location.replace(res);
			},
			error: function (xhr, resp, text) {
				// show error to console
				console.log(xhr, resp, text);
			}
        });
	})
});