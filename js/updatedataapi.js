jQuery(document).ready(function($) {
     var updateCookie = Cookies.get('tokken');

    $(document).on('click', '#update-btn', function() {
    

        var dataCounting = $('#datacounting').val();
        var mniDataId = $('#id').val();
        var updatedata = $('#dataform').serializeArray();

        var formattedData = {};
        updatedata.forEach(function(updated) {
            console.log(updated);
            var str = updated['name'];
            if (str.indexOf('_d') == -1) {
                formattedData[updated['name']] = updated['value'];
            } else {
                switch (dataCounting) {
                    case '0':
                        var dataCheking = updated['value'];
                        var dataValue = updated['name'];
                        var newString = dataValue.substr(0, dataValue.length - 2);
                        var dataValueleft = '#' + newString;
                        var dataClassRight = '.' + newString;
                        var valueLeft = $(dataValueleft).val();
                        var valueRight = $(dataClassRight).val();
                        if (valueLeft != valueRight) {
                            formattedData[updated['name']] = 'M1';
                        } else if (dataCheking == 'false') {
                            formattedData[updated['name']] = 'U1';
                        } else {
                            formattedData[updated['name']] = 'V1';
                        }
                        break;
                    case '1':
                        var dataValue = updated['name'];
                        var dataValueCheckbox = '#' + dataValue;
                        var dataFill = $(dataValueCheckbox).val();
                        // console.log(dataFill);

                        switch (dataFill) {
                            case 'V1':
                                formattedData[updated['name']] = 'V1';
                                break;
                            case 'M1':
                                formattedData[updated['name']] = 'M1';
                                break;
                            case 'U1':
                                var dataCheking = updated['value'];
                                var dataValue = updated['name'];
                                var newString = dataValue.substr(0, dataValue.length - 2);
                                var dataValueleft = '#' + newString;
                                var dataClassRight = '.' + newString;
                                var valueLeft = $(dataValueleft).val();
                                var valueRight = $(dataClassRight).val();
                                if (valueLeft != valueRight) {
                                    formattedData[updated['name']] = 'M2';
                                } else if (dataCheking == 'false') {
                                    formattedData[updated['name']] = 'U2';
                                } else {
                                    formattedData[updated['name']] = 'V2';
                                }
                                break;
                        }
                        break;
                    case '2':
                        var dataValue = updated['name'];
                        var dataValueCheckbox = '#' + dataValue;
                        var dataFill = $(dataValueCheckbox).val();
                        // console.log(dataFill);

                        switch (dataFill) {
                            case 'V1':
                                formattedData[updated['name']] = 'V1';
                                break;
                            case 'V2':
                                formattedData[updated['name']] = 'V2';
                                break;
                            case 'M1':
                                formattedData[updated['name']] = 'M1';
                                break;
                            case 'M2':
                                formattedData[updated['name']] = 'M2';
                                break;
                            case 'U2':
                                var dataCheking = updated['value'];
                                var dataValue = updated['name'];
                                var newString = dataValue.substr(0, dataValue.length - 2);
                                var dataValueleft = '#' + newString;
                                var dataClassRight = '.' + newString;
                                var valueLeft = $(dataValueleft).val();
                                var valueRight = $(dataClassRight).val();
                                if (valueLeft != valueRight) {
                                    formattedData[updated['name']] = 'M3';
                                } else if (dataCheking == 'false') {
                                    formattedData[updated['name']] = 'U3';
                                } else {
                                    formattedData[updated['name']] = 'V3';
                                }
                                break;
                        }
                        break;
                    case '3':
                        var dataValue = updated['name'];
                        var dataValueCheckbox = '#' + dataValue;
                        var dataFill = $(dataValueCheckbox).val();
                        switch (dataFill) {
                            case 'V1':
                                formattedData[updated['name']] = 'V1';
                                break;
                            case 'V2':
                                formattedData[updated['name']] = 'V2';
                                break;
                            case 'V3':
                                formattedData[updated['name']] = 'V3';
                                break;
                            case 'M1':
                                formattedData[updated['name']] = 'M1';
                                break;
                            case 'M2':
                                formattedData[updated['name']] = 'M2';
                                break;
                            case 'M3':
                                formattedData[updated['name']] = 'M3';
                                break;
                            case 'U3':
                                var dataCheking = updated['value'];
                                var dataValue = updated['name'];
                                var newString = dataValue.substr(0, dataValue.length - 2);
                                var dataValueleft = '#' + newString;
                                var dataClassRight = '.' + newString;
                                var valueLeft = $(dataValueleft).val();
                                var valueRight = $(dataClassRight).val();
                                if (valueLeft != valueRight) {
                                    formattedData[updated['name']] = 'M4';
                                } else if (dataCheking == 'false') {
                                    formattedData[updated['name']] = 'U4';
                                } else {
                                    formattedData[updated['name']] = 'V4';
                                }
                                break;
                        }
                        break;
                    case '4':
                        var dataValue = updated['name'];
                        var dataValueCheckbox = '#' + dataValue;
                        var dataFill = $(dataValueCheckbox).val();
                        switch (dataFill) {
                            case 'V1':
                                formattedData[updated['name']] = 'V1';
                                break;
                            case 'V2':
                                formattedData[updated['name']] = 'V2';
                                break;
                            case 'V3':
                                formattedData[updated['name']] = 'V3';
                                break;
                            case 'V4':
                                formattedData[updated['name']] = 'V4';
                                break;
                            case 'M1':
                                formattedData[updated['name']] = 'M1';
                                break;
                            case 'M2':
                                formattedData[updated['name']] = 'M2';
                                break;
                              case 'M3':
                                formattedData[updated['name']] = 'M3';
                                break;
                            case 'M4':
                                formattedData[updated['name']] = 'M4';
                                break;
                            case 'U4':
                                var dataCheking = updated['value'];
                                var dataValue = updated['name'];
                                var newString = dataValue.substr(0, dataValue.length - 2);
                                var dataValueleft = '#' + newString;
                                var dataClassRight = '.' + newString;
                                var valueLeft = $(dataValueleft).val();
                                var valueRight = $(dataClassRight).val();
                                if (valueLeft != valueRight) {
                                    formattedData[updated['name']] = 'M5';
                                } else if (dataCheking == 'false') {
                                    formattedData[updated['name']] = 'U5';
                                } else {
                                    formattedData[updated['name']] = 'V5';
                                }
                                break;
                        }
                        break;
                    case '5':
                        var dataValue = updated['name'];
                        var dataValueCheckbox = '#' + dataValue;
                        var dataFill = $(dataValueCheckbox).val();
                        switch (dataFill) {
                            case 'V1':
                                formattedData[updated['name']] = 'V1';
                                break;
                            case 'V2':
                                formattedData[updated['name']] = 'V2';
                                break;
                            case 'V3':
                                formattedData[updated['name']] = 'V3';
                                break;
                            case 'V4':
                                formattedData[updated['name']] = 'V4';
                                break;
                            case 'V5':
                                formattedData[updated['name']] = 'V5';
                                break;
                            case 'M1':
                                formattedData[updated['name']] = 'M1';
                                break;
                            case 'M2':
                                formattedData[updated['name']] = 'M2';
                                break;
                            case 'M3':
                                formattedData[updated['name']] = 'M3';
                                break;
                            case 'M4':
                                formattedData[updated['name']] = 'M4';
                                break;
                            case 'M5':
                                formattedData[updated['name']] = 'M5';
                                break;
                            case 'U5':
                                var dataCheking = updated['value'];
                                var dataValue = updated['name'];
                                var newString = dataValue.substr(0, dataValue.length - 2);
                                var dataValueleft = '#' + newString;
                                var dataClassRight = '.' + newString;
                                var valueLeft = $(dataValueleft).val();
                                var valueRight = $(dataClassRight).val();
                                if (valueLeft != valueRight) {
                                    formattedData[updated['name']] = 'M6';
                                } else if (dataCheking == 'false') {
                                    formattedData[updated['name']] = 'U6';
                                } else {
                                    formattedData[updated['name']] = 'V6';
                                }
                                break;
                        }
                        break;
                    case '6':
                        var dataValue = updated['name'];
                        var dataValueCheckbox = '#' + dataValue;
                        var dataFill = $(dataValueCheckbox).val();
                        switch (dataFill) {
                            case 'V1':
                                formattedData[updated['name']] = 'V1';
                                break;
                            case 'V2':
                                formattedData[updated['name']] = 'V2';
                                break;
                            case 'V3':
                                formattedData[updated['name']] = 'V3';
                                break;
                            case 'V4':
                                formattedData[updated['name']] = 'V4';
                                break;
                            case 'V5':
                                formattedData[updated['name']] = 'V5';
                                break;
                            case 'V6':
                                formattedData[updated['name']] = 'V6';
                                break;
                            case 'M1':
                                formattedData[updated['name']] = 'M1';
                                break;
                            case 'M2':
                                formattedData[updated['name']] = 'M2';
                                break;
                            case 'M3':
                                formattedData[updated['name']] = 'M3';
                                break;
                            case 'M4':
                                formattedData[updated['name']] = 'M4';
                                break;
                            case 'M5':
                                formattedData[updated['name']] = 'M5';
                                break;
                            case 'M6':
                                formattedData[updated['name']] = 'M6';
                                break;
                            case 'U6':
                                var dataCheking = updated['value'];
                                var dataValue = updated['name'];
                                var newString = dataValue.substr(0, dataValue.length - 2);
                                var dataValueleft = '#' + newString;
                                var dataClassRight = '.' + newString;
                                var valueLeft = $(dataValueleft).val();
                                var valueRight = $(dataClassRight).val();
                                if (valueLeft != valueRight) {
                                    formattedData[updated['name']] = 'M7';
                                } else if (dataCheking == 'false') {
                                    formattedData[updated['name']] = 'U7';
                                } else {
                                    formattedData[updated['name']] = 'V7';
                                }
                                break;
                        }
                        break;
                    default:
                        alert('its beyond the call');
                }

            }
        });
        
        var required = $('.required-comments').val();
 
        if (!fdisp || !required) {
            Swal.fire({
                type: 'error',
                title: 'COMMENTS and FDSP',
                text: 'Please dont forget the required fields'
            })

        } else 
        {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false,
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, save it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    swalWithBootstrapButtons.fire(
                        'Saved!',
                        'Your file has been Saved.',
                        'success'
                    )
                    var settings = {
                        "async": true,
                        "crossDomain": true,
                        "url": "http://127.0.0.1:8000/api/auth/duplicate/",
                        "method": "POST",
                        "headers": {
                            "content-type": "application/x-www-form-urlencoded",
                            "authorization": "Bearer  " + updateCookie,
                        },
                        "data": formattedData
                    }
                    $.ajax(settings).done(function(response) {
                       
                 
                    });
                      // console.log(response);
                    Cookies.remove('startcall');
                    Cookies.remove('callstartCaptured');
                         setTimeout(function() {
                             window.location.replace('startcall')
                         },2000)
                    // location.reload('startcall');    
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Its Safe Not Yet Save :)',
                        'error'
                    )
                }
            })
        }
    });
});