jQuery(document).ready(function($) {
     jQuery('.mask-color').fadeOut('slow');
    var updateCookie = Cookies.get('tokken');
    var countcheck = $('.goodcall').length;
     // console.log(countcheck);
    // GOOD UPDATE CONDITIONS
    $('input:checkbox').change(
        function() {
                if($('input.goodcall').not(':checked').length > 0) {
                     $('#good-update').attr('disabled', 'disabled');
                }else {
                     $('#good-update').removeAttr("disabled");
                }
        });

    $(document).on('click', '.resetStatus', function() {

        var idBtn = (this.id);
        var settings = {
            "async": true,
            "crossDomain": true,
            //"url": "https://mniapi.openlookeasydata.com/api/auth/statusupdate/" + idBtn,
            "url": "http://172.16.11.120:8000/api/auth/statusupdate/" + idBtn,
            "method": "PUT",
            "headers": {
                "authorization": "Bearer  " + updateCookie,
                "content-type": "application/x-www-form-urlencoded",
                "cache-control": "no-cache",
                "postman-token": "f1878a66-09ec-1c2b-dee1-954acf7082b9"
            }
        }
        $.ajax(settings).done(function(response) {
            // console.log(response);
            Swal.fire({
                position: 'center',
                type: 'success',
                title: 'The Call Status Successfully Reset',
                showConfirmButton: false,
                timer: 1500
            })
            setTimeout(function() {
                location.reload();
            }, 2000);
        });

        return false;
    });

    $(document).on('click', '#upload-data', function() {
        $('#gif').css('visibility', 'visible');
        var dataUpload = $('#filesName').length ? $('#filesName')[0].files[0] : null;
        var datafilename = $('#filesNamePath').val();

        var form = new FormData();
        form.append("filesName", dataUpload);
        form.append("filesNamePath", datafilename);
        var settings = {
            "async": true,
            "crossDomain": true,
            //"url": "https://mniapi.openlookeasydata.com/api/auth/importdata",
            "url": "http://172.16.11.120:8000/api/auth/importdata",
            "method": "POST",
            "headers": {
                "authorization": "Bearer  " + updateCookie,
                "postman-token": "bf6c34eb-329c-41bf-844a-89ed5d060b13"
            },
            "processData": false,
            "contentType": false,
            "enctype": "multipart/form-data",
            "data": form
        }
        $.ajax(settings).done(function(response) {
            // console.log(response['header']);
            if (response == 'Files Should Be CSV') {
                Swal.fire({
                    type: 'error',
                    title: 'The File Should Be CSV',
                    text: 'Please Upload Another Files'
                })
                $('#gif').css('visibility', 'hidden');
            } else if (response == 'success') {
                let timerInterval
                Swal.fire({
                    title: 'Files is Now Uploading',
                    html: 'I will close in <strong></strong> seconds.',
                    timer: 1000,
                    onBeforeOpen: () => {
                        Swal.showLoading()
                        timerInterval = setInterval(() => {
                            Swal.getContent().querySelector('strong')
                                .textContent = Swal.getTimerLeft()
                        }, 100)
                    },
                    onClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    if (
                        // Read more about handling dismissals
                        result.dismiss === Swal.DismissReason.timer
                    ) {
                        Swal.fire({
                            position: 'top',
                            type: 'success',
                            title: 'Your File Successfully Import',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                })
                $('#gif').css('visibility', 'hidden');
                 setTimeout(function() {
                    location.reload(true);
                }, 2000);
            } else if(response == 'Filename'){
                    Swal.fire({
                            type: 'error',
                            title: 'File Path ',
                            text: 'Please Dont Forget the first Fields'
                })

            }else {
                var headers = response['Headers'];
                var Invalid = response['Invalid'];
                Swal.fire({

                    title: '<strong>Correct Header of CSV</strong>',
                    type: 'info',
                    html: '<b>Correct Header of the CSV is the Following</b><br>' +
                        '' + headers + '<br>' +
                        '<b>Please Copy And Paste The Header</b>',
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                    confirmButtonAriaLabel: 'Thumbs up, great!',

                })
                $('#gif').css('visibility', 'hidden');
            }


        });

        return false;
    });



    $(document).on('click', '#register', function() {

        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password_confirmation = $('#password_confirmation').val();
        var role = $('#role').val();

        if (name == '' || email == '' || password == '') {

            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Missing Fields On your Users'
            })


        } else if (password != password_confirmation) {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Your Password is Not Desame'
            })
        } else {
            var settings = {
                "async": true,
                "crossDomain": true,
                //"url": "https://mniapi.openlookeasydata.com/api/auth/signup",
                "url": "http://172.16.11.120:8000/api/auth/signup",
                "method": "POST",
                "headers": {
                    "content-type": "application/x-www-form-urlencoded",
                    "cache-control": "no-cache",
                    "postman-token": "8f7e45cb-69e0-8830-89a3-1e7a2bfdac73"
                },
                "data": {
                    "name": name,
                    "email": email,
                    "password": password,
                    "password_confirmation": password_confirmation,
                    "role": role
                }
            }

            $.ajax(settings).done(function(response) {
                Swal.fire({
                    position: 'top',
                    type: 'success',
                    title: 'Success Fully Added New User',
                    showConfirmButton: false,
                    timer: 1500
                })

                setTimeout(function() {
                    location.reload();
                }, 2000);

            });
        }

        return false;
    });



});