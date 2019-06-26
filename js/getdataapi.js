jQuery(document).ready(function($) {
    
    var cookiesTokken = Cookies.get('tokken');

    $('#update-btn').prop('disabled', true);
   var updateCookie = Cookies.get('tokken');
    $(window).on('load', function() {

        var idcalling = Cookies.get('idcalling');
        // alert(idcalling);
        var dataId = $('#lead_id').val();
        var settings = {
            "async": true,
            "crossDomain": true,
            //"url": "https://mniapi.openlookeasydata.com/api/auth/nrdata/" + idcalling,
            "url": "http://172.16.11.80:8000/api/auth/nrdata/" + idcalling,
            "method": "GET",
            "headers": {
                "authorization": "Bearer  " + cookiesTokken,
                "cache-control": "no-cache",
                "postman-token": "3e822d70-3945-2df2-d70d-d9cef6537c52"
            }
        }
        $.ajax(settings).done(function(response) {

            // console.log(response['countcall']);

            $('#testid').val(idcalling)
            $('#nrmnidataid').val(idcalling);
            let timerInterval
            Swal.fire({
                title: 'Calling Now',
                html: 'Wait For A moment  <strong></strong> seconds.',
                 timer: 300,
                 onBeforeOpen: () => {
                            Swal.showLoading()
         
                          },
                  onClose: () => {
                    clearInterval(timerInterval)
                  }

               }).then((result) => {
                if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.timer
                ) {
                     // console.log(response);
                    if (response == 'Error') {
                    } else {
                        $('#update-btn').prop('disabled', false);
                        dataResponse = response['dataupdated'];
                        dataChecking = response['dataChecking'];
                        // console.log(dataChecking);
                        var findId = $('#findId').remove();
                        var searthInput = $('#lead_id').prop('disabled', true);
                        var countValue = $('#datacounting').val(response['countcall']);

                        var CountData = $('#datacounting').val();

                        if (CountData == '7') {
                            Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Its Beyod 7 Calls You cannot Dial This Number Anymore.',
                            });
                            $('#update-btn').prop('disabled', true);
                        }
                        var dataPlus1 = response['countcall'] + 1;
                        var datacounting = $('#datacounting').val();
                        var dataCallNumber = dataResponse['callPriority'];
                        
                        $(".thenumber").append("  <div class = 'call-number'>Number of Call <span class='number'>" + dataCallNumber + "</span></div>");

                         if(dataPlus1 == '1') {
                       
                            $("#iccomments1").css("display", "none");
                            $("#tccomments1").css("display", "none");
                            $("#fccomments1").css("display", "none");

                            $("#prevcomment").append("<input id='ocommetns' name='ocommetns'  class='form-control ocommetns required-comments' valu type='text'>");
                            $("#prevcomment").append("<input id='tcomments' name='tcomments'  class='form-control tcomments' type='hidden'>");
                            $("#prevcomment").append("<input id='fcomments' name='fcomments'  class='form-control fcomments' type='hidden'>");
                            $("#prevcomment").append("<input id='comments4' name='comments4'  class='form-control comments4' type='hidden'>");
                            $("#prevcomment").append("<input id='comments5' name='comments5'  class='form-control comments5' type='hidden'>");
                      
                        }else if(dataPlus1 == '2') {
                            $("#iccomments1").css("display", "inheret");
                            $("#tccomments1").css("display", "none");
                            $("#fccomments1").css("display", "none");

                           $("#prevcomment").append("<input id='ocommetns' name='ocommetns'  class='form-control ocommetns' type='hidden'>");
                            $("#prevcomment").append("<input id='tcomments' name='tcomments'  class='form-control tcomments required-comments' type='text'>");
                            $("#prevcomment").append("<input id='fcomments' name='fcomments'  class='form-control fomments4' type='hidden'>");
                            $("#prevcomment").append("<input id='comments4' name='comments4'  class='form-control comments4' type='hidden'>");
                            $("#prevcomment").append("<input id='comments5' name='comments5'  class='form-control comments5' type='hidden'>");
                        
                        }else if(dataPlus1 == '3') {
                            $("#iccomments1").css("display", "inheret");
                            $("#tccomments1").css("display", "inheret");
                            $("#fccomments1").css("display", "none");

                            $("#prevcomment").append("<input id='ocommetns' name='ocommetns'  class='form-control ocommetns' type='hidden'>");
                            $("#prevcomment").append("<input id='tcomments' name='tcomments'  class='form-control tcomments' type='hidden'>");
                            $("#prevcomment").append("<input id='fcomments' name='fcomments'  class='form-control fcomments required-comments' type='text'>");
                            $("#prevcomment").append("<input id='comments4' name='comments4'  class='form-control comments4' type='hidden'>");
                            $("#prevcomment").append("<input id='comments4' name='comments5'  class='form-control comments5' type='hidden'>");
                       
                        }else if(dataPlus1 == '4'){
                            $("#iccomments1").css("display", "inheret");
                            $("#tccomments1").css("display", "inheret");
                            $("#fccomments1").css("display", "inheret");

                            $("#prevcomment").append("<input id='ocommetns' name='ocommetns'  class='form-control ocommetns' type='hidden'>");
                            $("#prevcomment").append("<input id='tcomments' name='tcomments'  class='form-control tcomments' type='hidden'>");
                            $("#prevcomment").append("<input id='fcomments' name='fcomments'  class='form-control fcomments' type='hidden'>");
                            $("#prevcomment").append("<input id='comments4' name='comments4'  class='form-control comments4 required-comments' type='text'>");
                            $("#prevcomment").append("<input id='comments5' name='comments5'  class='form-control comments5' type='hidden'>");
                           
                        }else {
                            $("#prevcomment").append("<input id='ocommetns' name='ocommetns'  class='form-control ocommetns' type='hidden'>");
                            $("#prevcomment").append("<input id='tcomments' name='tcomments'  class='form-control tcomments' type='hidden'>");
                            $("#prevcomment").append("<input id='fcomments' name='fcomments'  class='form-control fcomments' type='hidden'>");
                            $("#prevcomment").append("<input id='comments4' name='comments4'  class='form-control comments4' type='hidden'>");
                            $("#prevcomment").append("<input id='comments5' name='comments5'  class='form-control comments5 required-comments' type='text'>")
                        }
                        $(function() {
                            $.each(dataResponse, function(headers, value) {
                                // console.log(value);  
                                var dataid = '#' + headers;
                                var dataClass = '.' + headers;
                                var leftForm = $(dataid).val(value);
                                var rightForm = $(dataClass).val(value);
                                var classAddition = dataClass + '_d';
                                // console.log(datacounting);
                                // DATA CONDITIONS OF SAVING THE COMMENTS  
                                                           
                            });
                         
                            $.each(dataChecking, function(dataUpdated, valueUpdated) {
                               
                                // console.log('#agentsnotes').val();
                      
                                if (dataUpdated.indexOf('_d') == -1) {
                                    var selectData = '.' + dataUpdated;
                                    $(selectData).val(valueUpdated);
                                     // console.log(selectData);
                                } else {
                                    var checkboxId = '#' + dataUpdated;
                                    var checkboxValue = $(checkboxId).val(valueUpdated);
                                    // console.log(valueUpdated);
                                    switch (datacounting) {
                                        case '0':
                                            break;
                                        case '1':
                                            var selectData = '#' + dataUpdated;
                                            if ((valueUpdated == 'V1' || valueUpdated == 'M1')) {
                                                $(selectData).prop("checked", true);
                                                $(selectData).attr("disabled", true);
                                                // console.log(selectData);
                                                var nameToClass = dataUpdated.substr(0, dataUpdated.length - 2);
                                                var classToDot = '.' + nameToClass;
                                                var inputDisabled = $(classToDot).attr("readonly", true);
                                                $(classToDot).css('pointer-events','none');
                                                   

                                            }
                                            break;
                                        case '2':
                                            var selectData = '#' + dataUpdated;
                                            if (valueUpdated != 'U2') {
                                                $(selectData).prop("checked", true);
                                                $(selectData).attr("disabled", true);
                                                var nameToClass = dataUpdated.substr(0, dataUpdated.length - 2);
                                                var classToDot = '.' + nameToClass;
                                                var inputDisabled = $(classToDot).attr("readonly", true);
                                                $(classToDot).css('pointer-events','none');
                                             

                                            }
                                            break;
                                        case '3':
                                            var selectData = '#' + dataUpdated;
                                            if (valueUpdated != 'U3') {
                                                $(selectData).prop("checked", true);
                                                $(selectData).attr("disabled", true);
                                                var nameToClass = dataUpdated.substr(0, dataUpdated.length - 2);
                                                var classToDot = '.' + nameToClass;
                                                var inputDisabled = $(classToDot).attr("readonly", true);
                                                $(classToDot).css('pointer-events','none');
                                            }
                                            break;
                                        case '4':
                                            var selectData = '#' + dataUpdated;
                                            if (valueUpdated != 'U4') {
                                                $(selectData).prop("checked", true);
                                                $(selectData).attr("disabled", true);
                                                var nameToClass = dataUpdated.substr(0, dataUpdated.length - 2);
                                                var classToDot = '.' + nameToClass;
                                                var inputDisabled = $(classToDot).attr("readonly", true);
                                                $(classToDot).css('pointer-events','none');
                                            }
                                            break;
                                        case '5':
                                            var selectData = '#' + dataUpdated;
                                            if (valueUpdated != 'U5') {
                                                $(selectData).prop("checked", true);
                                                $(selectData).attr("disabled", true);
                                                var nameToClass = dataUpdated.substr(0, dataUpdated.length - 2);
                                                var classToDot = '.' + nameToClass;
                                                var inputDisabled = $(classToDot).attr("readonly", true);
                                                $(classToDot).css('pointer-events','none');
                                            }
                                            break;
                                        case '6':
                                            var selectData = '#' + dataUpdated;

                                            if (valueUpdated != 'U6') {
                                                $(selectData).prop("checked", true);
                                                $(selectData).attr("disabled", true);

                                                var nameToClass = dataUpdated.substr(0, dataUpdated.length - 2);
                                                var classToDot = '.' + nameToClass;
                                                var inputDisabled = $(classToDot).attr("readonly", true);
                                                $(classToDot).css('pointer-events','none');
                                            }

                                            break;
                                    }

                                }
                            });                         


                        });
                             

                    }
                }
             }); 
      
        });
                           
    });

}(jQuery));