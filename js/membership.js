jQuery(document).ready(function($) { 

	$(document).on('click','#logout',function(){
		 // console.log(data);
			Swal.fire({
				  title: 'Are you sure?',
				  text: "You want to logout!",
				  type: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Yes!'
				}).then((result) => {

				  if (result.value) {
				    Swal.fire(
				      'Thank You!!',
				      'You are now Successfully Logout',
				      'success'

				    )
				   	// Cookies.removeCookie('tokken'); 
				   	setTimeout(function() {
							 window.location.href = "logout.php";
					}, 2000);
					
				   	Cookies.remove('idcalling');
					Cookies.remove('tokken');
					Cookies.remove('role');
					Cookies.remove('startcall');
			
				  }

				})
	});

	$(document).on('click','#submit', function(){
		var emailaddress = $('#email').val();
		var password = $('#password').val();
		if(emailaddress == '' || password == '') {
			    Swal.fire({
					  type: 'error',
					  title: 'Oops...',
					  text: 'Your Password Or Email Is Empty!',
					  footer: 'Ask for assistant with your supervisor!!'
					})
		}else{
			var settings = {
				  "async": true,
				  "crossDomain": true,
				  //"url": "https://mniapi.openlookeasydata.com/api/auth/login",
				  "url": "http://127.0.0.1:8000/api/auth/login",
				  "method": "POST",
				  "headers": {
				    "content-type": "application/x-www-form-urlencoded",
				    "cache-control": "no-cache",
				    "postman-token": "e203da11-5515-30e1-42c4-b1856000f918"
				  },
				  "data": {
				    "email": emailaddress,
				    "password": password
				  }
				}

				$.ajax(settings).done(function (response) {
					console.log(response);
				  var tooken = response['access_token'];
				  var role = response['role'];
				    $('#tokken').val(tooken);
				   cookiesData =  Cookies.set('tokken', tooken,{ expires: 7});
				   cookiesData =  Cookies.set('role', role,{ expires: 7});
					window.location.href = "validation.php";
					
				});
	      		
	      		 $.ajax(settings).fail(function (response) {
	      		 	console.log(response);
            	      Swal.fire({
						  type: 'error',
						  title: 'Oops...',
						  text: 'Your Password Or Email Is invalid!',
						  footer: 'Ask for assistant with your supervisor!!'
						})

            });


		}

			

	});
});