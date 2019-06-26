jQuery(document).ready(function($) {
    // 06/07/19 13:45
         

     var updateCookie = Cookies.get('tokken');

    $(document).on('click', '#update-btn', function() {


        if($('#fdisp').find(':selected').prop('disabled')==true){
            alert('You select good update. But you uncheck important fields');
        }else
            {

                    var d = new Date();
                    var month = d.getMonth() + 1;
                    var day = d.getDate();
                    var output = d.getFullYear() + '-' +
                        (('' + month).length < 2 ? '0' : '') + month + '-' +
                        (('' + day).length < 2 ? '0' : '') + day;

                    var date = new Date();
                    var newtimedates = (date.getMonth()<9?'0':'') + (date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear().toString().substr(-2) + ' ' + (date.getHours()<10?'0':'') + date.getHours() +':'+ (date.getMinutes()<10?'0':'') + date.getMinutes();

                    
                     var agentName = $('#agentName').val(); 
                     var datacounting = $('#datacounting').val();


                      switch(datacounting)  
                           {
                            case '0':

                                     $('.oagent').val(agentName);
                                     $('.odatetime').val(newtimedates);
                                     $('.operator').val(agentName);
                                break;
                            case '1':
                                     $('.tagent').val(agentName);
                                     $('.tdatetime').val(newtimedates);
                                     $('.operator').val(agentName);
                                break;
                            case '2':
                                      $('.fagent').val(agentName);
                                      $('.fdatetimes').val(newtimedates);
                                      $('.operator').val(agentName);
                                break;
                            case '3':
                                    $('.agent4').val(agentName);
                                    $('.fdatetimes').val(newtimedates);
                                    $('.operator').val(agentName);
                                break;
                            case '4':
                                     $('.agent5').val(agentName);
                                     $('.fdatetimes').val(newtimedates);
                                break;
                            case '5':
                                     $('.agent5').val(agentName);
                                     $('.fdatetimes').val(newtimedates);
                                     $('.operator').val(agentName);
                                break;
                            case '6':
                                     $('.agent5').val(agentName);
                                     $('.fdatetimes').val(newtimedates);
                                     $('.operator').val(agentName);
                                break;
                        }
                    var dataCounting = $('#datacounting').val();
                    var mniDataId = $('#id').val();
                    var updatedata = $('#dataform').serializeArray();

                    var formattedData = {};
                    updatedata.forEach(function(updated) {
                        // console.log(updated); to check all the data
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
                                    //"url": "https://mniapi.openlookeasydata.com/api/auth/duplicate",
                                    "url": "http://172.16.11.80:8000/api/auth/duplicate/",
                                    "method": "POST",
                                    "headers": {
                                        "content-type": "application/x-www-form-urlencoded",
                                        "authorization": "Bearer  " + updateCookie,
                                    },
                                    "data": formattedData
                                }
                                $.ajax(settings).done(function(response) {
                                    var datastatus = $('#nrmnidataid').val();
                                            var settings = {
                                                  "async": true,
                                                  "crossDomain": true,
                                                  "url": "http://172.16.11.80:8000/api/auth/statusupdate",
                                                  "method": "PUT",
                                                  "headers": {
                                                    "content-type": "application/x-www-form-urlencoded",
                                                    "authorization": "Bearer  " + updateCookie,
                                                  },
                                                  "data": {
                                                    "nr_mni_data_id": datastatus
                                                  }
                                                }

                                                $.ajax(settings).done(function (response) {
                                                  console.log(response);
                                                });
                                   
                             
                                });
                                  // console.log(response);
                                Cookies.remove('startcall');
                                Cookies.remove('countcall');
                                Cookies.remove('callstartCaptured');
                                     setTimeout(function() {
                                         window.location.replace('startcall')
                                     },3000)
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

            }

        return false;
    });
});