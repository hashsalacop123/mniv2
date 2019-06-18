jQuery(document).ready(function($) { 

var cookiesTokken = Cookies.get('tokken');

$(document).on('click','#savesettings', function(){

            var radioValue = $("input[name='calls_set']:checked").val();
            var selection = $("#selectiondata").val();

                // alert(selection);
            var settings = {
              "async": true,
              "crossDomain": true,
              "url": "http://172.16.11.120:8000/api/auth/callset",
              "method": "PUT",
              "headers": {
               "authorization": "Bearer  " + cookiesTokken,
                "content-type": "application/x-www-form-urlencoded",
                "cache-control": "no-cache",
                "postman-token": "26d17657-e6c7-516e-60ad-268a0796017d"
              },
              "data": {
                "calls_set": radioValue,
                "filenameId": selection

              }
            }

            $.ajax(settings).done(function (response) {
            //  console.log(response);
              Swal.fire({
                      position: 'center',
                      type: 'success',
                      title: 'You Set The Call to ' + radioValue,
                      showConfirmButton: false,
                      timer: 1500
                    })
                    setTimeout(function() {
                         location.reload();
                    }, 2000);
            });

});


$(document).on('click','#settpopup',function(){
              swal("Enter your Authorized Code", {
                  content: "input",
                })
                .then((value) => {
                     if(value != '123') {
                          Swal.fire('Sorry, you are not authorized');
                        }else {
                           $.fancybox.open({
                                    src  : callsettings,
                                    type : 'inline',
                                    opts : {
                                        beforeShow : function( instance, current ) {
                                        // the last of the 
                                      }
                                    }
                                });
                        }
                });

         
   
});

$(document).on('click','.data-fbox',function(){
     var dataid = $(this).attr("data-src");
      swal("Enter your Authorized Code", {
          content: "input",
        })
        .then((value) => {
             if(value != '123') {
                  Swal.fire('Sorry, you are not authorized');
                }else {
                   $.fancybox.open({
                            src  : dataid,
                            type : 'inline',
                            opts : {
                                beforeShow : function( instance, current ) {
                                // the last of the 
                              }
                            }
                        });
                }
        });

             
});
    var d = new Date();
    var month = d.getMonth() + 1;
    var day = d.getDate();
    var currentDate = d.getFullYear() + '-' +
        (('' + month).length < 2 ? '0' : '') + month + '-' +
        (('' + day).length < 2 ? '0' : '') + day;

        var dateFilename = 'mni-project-' + currentDate;
        var resolved = 'resolved-' + currentDate;

$('#userdata').dataTable();
   jQuery('.mask-color').fadeOut('slow');
    $.fn.dataTable.ext.search.push(
        function(settings, data, dataIndex) {
            var min = $('#min').datepicker("getDate");
            var max = $('#max').datepicker("getDate");
            var salesValue = $('#fdisp').val();
            var qastatusValue = $('#qastatus').val();
            var dataresolved = $('#sendresolves').val();
      
            var startDate = new Date(data[168]);
            //fdisp
            var sales = data[136];
            //qeflag
            var qastatus = data[145];

            if (dataresolved == null) {
    
              return true;
            }
            if( sales == null && qastatus == null) {
                return true;
            }

            if(salesValue == sales && qastatusValue == qastatus) {
                return true;
            }


            if (min == null && max == null) {
                return true;
            }
            if (min == null && startDate <= max) {
                return true;
            }
            if (max == null && startDate >= min) {
                return true;
            }
            if (startDate <= max && startDate >= min) {
                return true;
            }
            return false;
        });
            // ALL CUSTOM SEARCH 

            $('#sendresolves').on('change',function(){
               // var that = $(this)
                  var dataCondition  = this.value; 
                    
                    if(dataCondition == 'resolve') {
                      table.columns(136).search("01|03|06|07|22|09|98|99|05",true,false).draw();
                    }else{
                      table.columns(136).search(this.value).draw();
                    }
              
                
            });




            $('#fdisp').on('change', function () {
                 table.columns(136).search( this.value ).draw();
            } );
            $('#qastatus').on('change', function () {
                 table.columns(145).search( this.value ).draw();
            } );

    $("#min").datepicker({
        onSelect: function() {
            table.draw();
        },
        changeMonth: true,
        changeYear: true
    });
    $("#max").datepicker({
        onSelect: function() {
            table.draw();
        },
        changeMonth: true,
        changeYear: true
    });
    //var table = $('#example').DataTable();

    var table = $('#example').DataTable({
        responsive: true,
        "scrollX": true,
        dom: 'lBfrtip',
        buttons: [{
            extend: 'csv',
            title: dateFilename,
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168]
            },
            action: function(e, dt, button, config) {
              var updateCookie = Cookies.get('tokken');
                swal("Enter your Authorized Code", {
                    content: "input",
                  })
                  .then((value) => {
                       if(value != '123') {
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
                                      var table = $('#example').DataTable();
                                      var data = table.buttons.exportData();
                                      var databody = data['body'];
                                      $.each(databody, function(databodyUpdate, databodyValue) {
                                          rowdataId = databodyValue['169'];
                                          uploadId = databodyValue['174']
                                          // console.log(databodyValue);
                                          var settings = {
                                                    "async": true,
                                                    "crossDomain": true,
                                                    "url": "http://172.16.11.120:8000/api/auth/delivered2",
                                                    "method": "PUT",
                                                    "headers": {
                                                      "authorization": "Bearer  " + updateCookie,
                                                      "content-type": "application/x-www-form-urlencoded",
                                                      "cache-control": "no-cache",
                                                      "postman-token": "a0a44736-e938-b0e1-11b1-5135dad951cf"
                                                    },
                                                    "data": {}
                                                  }

                                                  $.ajax(settings).done(function (response) {
                                                    console.log(response);
                                                  });

                                              });
                                             var that = this;
                                                setTimeout(function() {
                                                    $.fn.dataTable.ext.buttons.csvHtml5.action.call(that, e, dt, button, config);
                                                    $('.loading').fadeOut();
                                                }, 2000);
                                  }
                              })
                             
                          }
                  });


                 


            }

        }]
    });

      
      new $.fn.dataTable.Buttons( table, {
          buttons: [
            {
                extend: 'csv',
                text: 'RESOLVED',
                title: resolved,
                header:false,
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166]
                },
                action: function ( e, dt, button, config ) {
                            var that = this;
                                setTimeout(function() {
                                    var dataquery = $.fn.dataTable.ext.buttons.csvHtml5.action.call(that, e, dt, button, config);

                                    $('.loading').fadeOut();
                                }, 2000);
                }
            }]
        } ).container().appendTo('#dataresolves');

      $('#min, #max').change(function() {
          table.draw();
      });

    // SELECTION CONDTIONS AND DATES

   
    $('#idsSearch').DataTable();
     $('#history').DataTable({
            "scrollX": true,
                  dom: 'lBfrtip',
                  buttons: [{
                    extend: 'csv',
                    title: dateFilename
                }]
     });





    $('#delivertable').DataTable( {
        "scrollX": true,
          dom: 'lBfrtip',
         buttons: [{
            extend: 'csv',
            title: dateFilename,
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168]
                }
            }]
    } );
});
    