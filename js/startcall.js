jQuery(document).ready(function($) {

    var updateCookie = Cookies.get('tokken');


    $(window).ready(function() {

        var settings = {
            "async": true,
            "crossDomain": true,
            //"url": "https://mniapi.openlookeasydata.com/api/auth/userinfo",
            "url": "http://172.16.11.120:8000/api/auth/userinfo",
            "method": "GET",
            "headers": {
                "authorization": "Bearer  " + updateCookie,
                "cache-control": "no-cache",
                "postman-token": "bb72ce4d-56b1-de76-3c6a-41a6cc9840f6"
            }
        }
        $.ajax(settings).done(function(response) {
            // console.log(response);
                var name = response['name'];
                var userId = response['id'];
                // console.log(response);
                $('#agentName').val(name);
                $('#userid').val(userId);
                $('.agent-name').append('<b>Agent Name: </b>' + name);
                $('.agent-id').append('<b>Agent ID: </b>' + userId);
                $('#userid').val(userId);
            });

        });
    $(document).on('click', '#startcall', function() {
         $(".submit").css('display', 'none');
        var settings = {
            "async": true,
            "crossDomain": true,
            //"url": "https://mniapi.openlookeasydata.com/api/auth/startcall",
            "url": "http://172.16.11.120:8000/api/auth/startcall",
            "method": "POST",
            "headers": {
                "authorization": "Bearer  " + updateCookie,
                "cache-control": "no-cache",
                "postman-token": "21f345b9-9355-ba56-7ed5-8e443c62b27d"
            }
        }
        $.ajax(settings).done(function(response) {

                console.log(response);

            var d = new Date();
            var month = d.getMonth() + 1;
            var day = d.getDate();
            var hours = d.getHours();
            var mins = d.getMinutes();
            var sec = d.getSeconds();
            var capturedDate = d.getFullYear() + '-' +
                (('' + month).length < 2 ? '0' : '') + month + '-' +
                (('' + day).length < 2 ? '0' : '') + day;
            var capturedTime = (('' + hours).length < 2 ? '0' : '') + hours + '-' +
                              (('' + mins).length < 2 ? '0' : '') + mins + '-' + 
                               (('' + sec).length < 2 ? '0' : '') + sec;
            Cookies.set('callstartCaptured', capturedDate + " " +capturedTime, { expires: 1});
 

                    if(response == 'queCall') {
                            Swal.fire(
                              'All Data has been completed.',
                              'Please inform your supervisor.'
                            )
                    }else{

                        cookiesData = Cookies.set('idcalling', response, {expires: 1 }, { path: '/mniv2' });
                        Cookies.set('startcall', true, { expires: 1});
                         $(".submit").addClass("loading");
                            setTimeout(function() {
                                $(".submit").addClass("hide-loading");
                                $(".done").addClass("finish");
                             }, 1000);
                
                            setTimeout(function() {
                              $(".submit").removeClass("loading");
                              $(".submit").removeClass("hide-loading");
                              $(".done").removeClass("finish");
                              $(".failed").removeClass("finish");

                                window.location.replace('/mniv2')
                            }, 3000);

                    }



        });

        return false;
    });


});