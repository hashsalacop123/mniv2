jQuery(document).ready(function($) {


var updateCookie = Cookies.get('tokken');

$(document).on('click','.restore-btn', function(){
   swal("Enter your Authorized Code", {
                  content: "input",
                })
                .then((value) => {
                     if(value != '1') {
                          Swal.fire('Sorry, you are not authorized');
                        }else {
                          Swal.fire('Correct');
                              Swal.fire({
                                title: 'Are you sure?',
                                text: "Please be reminded this will be mark as delivered",
                                type: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, Mark as devlivered!'
                            }).then((result) => {
                                if (result.value) {
                                    Swal.fire(
                                        'Data is mark as delivered!',
                                        'Data status is delivered.',
                                        'success'
                                    )
                                		var restoreId = $(this).attr('id');
										var nr_mni_data_id = $(this).data('nrid');
										var diliver_status = $(this).data('status');
										var settings = {
											  "async": true,
											  "crossDomain": true,
											 // "url": "https://mniapi.openlookeasydata.com/api/auth/restoredelivered",
											  "url": "http://172.16.11.120:8000/api/auth/restoredelivered/",
											  "method": "PUT",
											  "headers": {
											     "authorization": "Bearer  " + updateCookie,
											    "content-type": "application/x-www-form-urlencoded",
											    "cache-control": "no-cache",
											    "postman-token": "2f94c22e-2a98-2e9b-9ecb-8dadec2a85bb"
											  },
											   "data": {
													    "nr_mni_data_id": nr_mni_data_id,
													    "id": restoreId,
													    "diliver_status": diliver_status
													  }
											}
											$.ajax(settings).done(function (response) {
													  Swal.fire({
														  position: 'top',
														  type: 'success',
														  title: 'The data is successfully restored',
														  showConfirmButton: false,
														  timer: 1500
														})
														setTimeout(function() { 
																location.reload(true);	
														},2000);
											});
                                }
                            })
                           
                        }
                });

	
  	
  });


	$(document).on('click', '#refreshdata', function(){
				 			location.reload(true);			
	});
	$(document).on('click','#qeflagbtn', function(){
			var dataId = $(this).data('idcurrent'); 
			var conceptName = $('.wrapper-'+dataId+' .qeflag').find(":selected").text();
	        var settings = {
				  "async": true,
				  "crossDomain": true,
				  //"url": "https://mniapi.openlookeasydata.com/api/auth/qeflag/" + dataId,
				  "url": "http://172.16.11.120:8000/api/auth/qeflag/" + dataId,
				  "method": "POST",
				  "headers": {
				   "authorization": "Bearer  " + updateCookie,
				    "content-type": "application/x-www-form-urlencoded",
				    "cache-control": "no-cache",
				    "postman-token": "03baa0e2-ab19-38e0-0d6e-963e5219b997"
				  },
				  "data": {
				    "qeflag": conceptName
				  }
				}
				$.ajax(settings).done(function (response) {

					Swal.fire({
					  position: 'top',
					  type: 'success',
					  title: 'QeFlag has updated to' + response,
					  showConfirmButton: false,
					  timer: 1500
					})
					 	setTimeout(function() { 
					 			location.reload(true);	
					 	},1000);
				  					
				});

	})
});