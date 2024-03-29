<?php
session_start();    
if(isset($_SESSION['loggedIN'])) {
        $_SESSION['loggedIN'] = $_COOKIE['tokken']; 
          if($_COOKIE['role'] == 1){
            header("location: /startcall");
          }
}else {
   header("location: login.php");
}

  $bearer = $_COOKIE['tokken'];

?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
           <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="css/duplicate.css">
        <title> Full Database </title>
    </head>
    <!doctype html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

<link rel="stylesheet" type="text/css" href="css/duplicate.css">
    <body style="background-image: url(img/database.jpg);">
            <div class="mask-color">
                 <div id="preview-area">
                    <div class="spinner">
                       <div class="dot1"></div>
                       <div class="dot2"></div>
                    </div>
                 </div>
              </div>


    	<div class = "container">
    		<div class = "row">
    			<div class  = "container" id = "realtimedata">
                 <div class = "col-md-12"><a href = "database-view" class = "go-back-home"><h3 class="data-title">One Stop Filter!!</h3></a></div>
                 <div class = "col-md-4">
                   <div class = "dates_query">
                    <h4>Dates</h4>
                    <table  class = "date-filters" border="0" cellspacing="5" cellpadding="5">
                        <tbody>
                              <tr>
                                  <td>FROM DATE:</td>
                                  <td><input name="min" id="min" class="form-control" type="text"></td>
                              </tr>
                              <tr>
                                  <td>TO DATE:</td>
                                  <td><input name="max" id="max" class="form-control" type="text"></td>
                              </tr>
                          </tbody>
                          </table>
                   </div>
                 </div>
                  <div class = "col-md-4">
                    <div class = "all_query">
                       <h4>Group ID's</h4>
                       <input type="text" class="form-control" id="group-id" name="group-id">
              
                    </div>
                  </div>
                  <div class = "col-md-4">
                     <h4>Disposition</h4>
                           <select class="form-control" id="group-fdisp" name="fdisp">
                              <option></option>
                              <option value="01">01-Good Update</option>
                              <option value="03">03-Incomplete Update</option>
                              <option value="05">05-Already Answered</option>
                              <option value="06">06-No Manufacturing</option>
                              <option value="07">07-Out of Business</option>
                              <option value="08">08-Send Information</option>
                              <option value="09">09-Refusal/Unworkable</option>
                              <option value="10">10-Wrong Number</option>
                              <option value="11">11-Answering Machine</option>
                              <option value="12">12-Callback</option>
                              <option value="13">13-Other</option>
                              <option value="17">17-No Answer</option>
                              <option value="18">18-Busy</option>
                              <option value="22">22-Do Not Call</option>
                              <option value="19-Will Go Online">19-Will Go Online</option>
                              <option value="96">96-1st Pass Unworkable</option>
                              <option value="97">97-Callback requested</option>
                              <option value="98">98-2x No Answer (priority 7/8/9)</option>
                              <option value="99">99-AM 3x</option>
                           </select>

                           
                  </div>
                  <div class = "col-md-8"></div>
                 <div class = "col-md-12 custom-datatables">
                  <hr>
                   <table id="maintable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>compname</th>
                          <th>compname_d</th>
                          <th>akadba</th>
                          <th>physaddr</th>
                          <th>physaddr_d</th>
                          <th>physcity</th>
                          <th>physcity_d</th>
                          <th>physstate</th>
                          <th>physstat_d</th>
                          <th>physzip</th>
                          <th>physzip_d</th>
                          <th>vnumber</th>
                          <th>vnumber_d</th>
                          <th>loccount</th>
                          <th>loccount_d</th>
                          <th>products</th>
                          <th>products_d</th>
                          <th>exec1</th>
                          <th>exec1_d</th>
                          <th>gender1</th>
                          <th>gender1_d</th>
                          <th>officermail1</th>
                          <th>title1</th>
                          <th>title1_d</th>
                          <th>exec2</th>
                          <th>exec2_d</th>
                          <th>gender2</th>
                          <th>gender2_d</th>
                          <th>officermail2</th>
                          <th>title2</th>
                          <th>title2_d</th>
                          <th>fnumber</th>
                          <th>fnumber_d</th>
                          <th>nnumber</th>
                          <th>nnumber_d</th>
                          <th>web</th>
                          <th>web_d</th>
                          <th>email</th>
                          <th>mailaddr</th>
                          <th>mailaddr_d</th>
                          <th>mailcity</th>
                          <th>mailcity_d</th>
                          <th>mailstate</th>
                          <th>mailstat_d</th>
                          <th>mailzip</th>
                          <th>mailzip_d</th>
                          <th>yearestab</th>
                          <th>yearesta_d</th>
                          <th>distribtyp</th>
                          <th>distribty_d</th>
                          <th>ownertype</th>
                          <th>ownertyp_d</th>
                          <th>sales</th>
                          <th>sales_d</th>
                          <th>squarefeet</th>
                          <th>squarefe_d</th>
                          <th>imports</th>
                          <th>imports_d</th>
                          <th>exec3</th>
                          <th>exec3_d</th>
                          <th>gender3</th>
                          <th>gender3_d</th>
                          <th>officermail3</th>
                          <th>title3</th>
                          <th>title3_d</th>
                          <th>exec4</th>
                          <th>exec4_d</th>
                          <th>gender4</th>
                          <th>gender4_d</th>
                          <th>officermail4</th>
                          <th>title4</th>
                          <th>title4_d</th>
                          <th>exec5</th>
                          <th>exec5_d</th>
                          <th>gender5</th>
                          <th>gender5_d</th>
                          <th>officermail5</th>
                          <th>title5</th>
                          <th>title5_d</th>
                          <th>exec6</th>
                          <th>exec6_d</th>
                          <th>gender6</th>
                          <th>gender6_d</th>
                          <th>officermail6</th>
                          <th>title6</th>
                          <th>title6_d</th>
                          <th>exec7</th>
                          <th>exec7_d</th>
                          <th>gender7</th>
                          <th>gender7_d</th>
                          <th>officermail7</th>
                          <th>title7</th>
                          <th>title7_d</th>
                          <th>exec8</th>
                          <th>exec8_d</th>
                          <th>gender8</th>
                          <th>gender8_d</th>
                          <th>officermail8</th>
                          <th>title8</th>
                          <th>title8_d</th>
                          <th>exec9</th>
                          <th>exec9_d</th>
                          <th>gender9</th>
                          <th>gender9_d</th>
                          <th>officermail9</th>
                          <th>title9</th>
                          <th>title9_d</th>
                          <th>exec10</th>
                          <th>exec10_d</th>
                          <th>gender10</th>
                          <th>gender10_d</th>
                          <th>officermail10</th>
                          <th>title10</th>
                          <th>title10_d</th>
                          <th>parentname</th>
                          <th>parentna_d</th>
                          <th>parentcity</th>
                          <th>parentci_d</th>
                          <th>parentstat</th>
                          <th>parentst_d</th>
                          <th>onumber</th>
                          <th>onumber_d</th>
                          <th>header</th>
                          <th>advertiser</th>
                          <th>primarysic</th>
                          <th>sic2</th>
                          <th>companyid</th>
                          <th>datasource</th>
                          <th>contact</th>
                          <th>odatetime</th>
                          <th>ocommetns</th>
                          <th>tdatetime</th>
                          <th>tcomments</th>
                          <th>fcomments</th>
                          <th>fdatetime</th>
                          <th>operator</th>
                          <th>fdisp</th>
                          <th>confdate</th>
                          <th>bookid</th>
                          <th>newinyear</th>
                          <th>listnum</th>
                          <th>pdatetime</th>
                          <th>pcomments</th>
                          <th>email_d</th>
                          <th>akadba_d</th>
                          <th>qeflag</th>
                          <th>oagent</th>
                          <th>tagent</th>
                          <th>fagent</th>
                          <th>4datetime</th>
                          <th>4comments</th>
                          <th>4agent</th>
                          <th>5datetime</th>
                          <th>5comments</th>
                          <th>5agent</th>
                          <th>sysgencomments</th>
                          <th>priority</th>
                          <th>addresserror</th>
                          <th>dpvfootnote</th>
                          <th>altphone</th>
                          <th>altphone_d</th>
                          <th>paddress</th>
                          <th>paddress_d</th>
                          <th>pzip5</th>
                          <th>pzip5_d</th>
                          <th>addrchgreason</th>
                          <th>empchgreason</th>
                          <th>StartCall</th>
                          <th>EndCall</th>
                          <th>DataId</th>
                          <th>DateCall</th>
                          <th>Group ID</th>
                          <th>Notes</th>
                          <th>Status</th>
                          <th>uploadID</th>
                       
                        </tr>
                      </thead>
                      <tbody>
             <?php 
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                      CURLOPT_PORT => "8000",
                      CURLOPT_URL => "http://172.16.11.80:8000/api/auth/allduplicatedata",
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => "",
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 30,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => "GET",
                      CURLOPT_HTTPHEADER => array(
                        "authorization: Bearer  ".$bearer.""
                      ),
                    ));

                    $nrMniData = curl_exec($curl);
                    $err = curl_error($curl);

                    curl_close($curl);

                    if ($err) {
                      echo "cURL Error #:" . $err;
                    } else {
                      
                    }

                            $dataarrayDats = json_decode($nrMniData, true);                   
                            $dataId = 0;
                            if (is_array($dataarrayDats) || is_object($dataarrayDats))
                                { 
                                            foreach ($dataarrayDats as $key => $dataarrays) 
                              {
                                $datafilesusrl = $dataarrays['filesName'];
     
                                $dateformat  = new DateTime($dataarrays['created_at']);
                                $callstart = new DateTime($dataarrays['callstart']);
                                $advertiser = $dataarrays['advertiser'];
                                $odate = $dataarrays['odatetime'];
                                  // m/d/yy H:i
                         //     date_default_timezone_set('America/Chicago');
                              //$datetime = new DateTime($odate);
                              // $datetime->add(new DateInterval('P10D'));
                              //  $date = new DateTime('1:00:00');
                              // $date->add(new DateInterval('PT10H'));
                              // echo $date->format('H:i:s a'); //"prints" 11:00:00 a.m


                                if($advertiser == 'Yes') {
                                  $advertiser = 'Y';
                                }else{
                                  $advertiser = 'N';
                                }

                                echo '<tr data-src="#'.$dataarrays['id'].'" href="javascript:;" class = "data-fbox">'; 
                                       echo '<td>'.$dataarrays['compname'].'</td>';
                                       echo '<td>'.$dataarrays['compname_d'].'</td>';
                                       echo '<td>'.$dataarrays['akadba'].'</td>';
                                       echo '<td>'.$dataarrays['physaddr'].'</td>';
                                       echo '<td>'.$dataarrays['physaddr_d'].'</td>';
                                       echo '<td>'.$dataarrays['physcity'].'</td>';
                                       echo '<td>'.$dataarrays['physcity_d'].'</td>';
                                       echo '<td>'.$dataarrays['physstate'].'</td>';
                                       echo '<td>'.$dataarrays['physstate_d'].'</td>';
                                       echo '<td>'.$dataarrays['physzip'].'</td>';
                                       echo '<td>'.$dataarrays['physzip_d'].'</td>';
                                       echo '<td>'.$dataarrays['vnumber'].'</td>';
                                       echo '<td>'.$dataarrays['vnumber_d'].'</td>';
                                       echo '<td>'.$dataarrays['loccount'].'</td>';
                                       echo '<td>'.$dataarrays['loccount_d'].'</td>';
                                       echo '<td>'.$dataarrays['products'].'</td>';
                                       echo '<td>'.$dataarrays['products_d'].'</td>';
                                       echo '<td>'.$dataarrays['exec1'].'</td>';
                                       echo '<td>'.$dataarrays['exec1_d'].'</td>';
                                       echo '<td>'.$dataarrays['gender1'].'</td>';
                                       echo '<td>'.$dataarrays['gender1_d'].'</td>';
                                       echo '<td>'.$dataarrays['officermail1'].'</td>';
                                       echo '<td>'.$dataarrays['title1'].'</td>';
                                       echo '<td>'.$dataarrays['title1_d'].'</td>';
                                       echo '<td>'.$dataarrays['exec2'].'</td>';
                                       echo '<td>'.$dataarrays['exec2_d'].'</td>';
                                       echo '<td>'.$dataarrays['gender2'].'</td>';
                                       echo '<td>'.$dataarrays['gender2_d'].'</td>';
                                       echo '<td>'.$dataarrays['officermail2'].'</td>';
                                       echo '<td>'.$dataarrays['title2'].'</td>';
                                       echo '<td>'.$dataarrays['title2_d'].'</td>';
                                       echo '<td>'.$dataarrays['fnumber'].'</td>';
                                       echo '<td>'.$dataarrays['fnumber_d'].'</td>';
                                       echo '<td>'.$dataarrays['nnumber'].'</td>';
                                       echo '<td>'.$dataarrays['nnumber_d'].'</td>';
                                       echo '<td>'.$dataarrays['web'].'</td>';
                                       echo '<td>'.$dataarrays['web_d'].'</td>';
                                       echo '<td>'.$dataarrays['email'].'</td>';
                                       echo '<td>'.$dataarrays['mailaddr'].'</td>';
                                       echo '<td>'.$dataarrays['mailaddr_d'].'</td>';
                                       echo '<td>'.$dataarrays['mailcity'].'</td>';
                                       echo '<td>'.$dataarrays['mailcity_d'].'</td>';
                                       echo '<td>'.$dataarrays['mailstate'].'</td>';
                                       echo '<td>'.$dataarrays['mailstate_d'].'</td>';
                                       echo '<td>'.$dataarrays['mailzip'].'</td>';
                                       echo '<td>'.$dataarrays['mailzip_d'].'</td>';
                                       echo '<td>'.$dataarrays['yearestab'].'</td>';
                                       echo '<td>'.$dataarrays['yearestab_d'].'</td>';
                                       echo '<td>'.$dataarrays['distribtyp'].'</td>';
                                       echo '<td>'.$dataarrays['distribtyp_d'].'</td>';
                                       echo '<td>'.$dataarrays['ownertype'].'</td>';
                                       echo '<td>'.$dataarrays['ownertype_d'].'</td>';
                                       echo '<td>'.$dataarrays['sales'].'</td>';
                                       echo '<td>'.$dataarrays['sales_d'].'</td>';
                                       echo '<td>'.$dataarrays['squarefeet'].'</td>';
                                       echo '<td>'.$dataarrays['squarefeet_d'].'</td>';
                                       echo '<td>'.$dataarrays['imports'].'</td>';
                                       echo '<td>'.$dataarrays['imports_d'].'</td>';
                                       echo '<td>'.$dataarrays['exec3'].'</td>';
                                       echo '<td>'.$dataarrays['exec3_d'].'</td>';
                                       echo '<td>'.$dataarrays['gender3'].'</td>';
                                       echo '<td>'.$dataarrays['gender3_d'].'</td>';
                                       echo '<td>'.$dataarrays['officermail3'].'</td>';
                                       echo '<td>'.$dataarrays['title3'].'</td>';
                                       echo '<td>'.$dataarrays['title3_d'].'</td>';
                                       echo '<td>'.$dataarrays['exec4'].'</td>';
                                       echo '<td>'.$dataarrays['exec4_d'].'</td>';
                                       echo '<td>'.$dataarrays['gender4'].'</td>';
                                       echo '<td>'.$dataarrays['gender4_d'].'</td>';
                                       echo '<td>'.$dataarrays['officermail4'].'</td>';
                                       echo '<td>'.$dataarrays['title4'].'</td>';
                                       echo '<td>'.$dataarrays['title4_d'].'</td>';
                                       echo '<td>'.$dataarrays['exec5'].'</td>';
                                       echo '<td>'.$dataarrays['exec5_d'].'</td>';
                                       echo '<td>'.$dataarrays['gender5'].'</td>';
                                       echo '<td>'.$dataarrays['gender5_d'].'</td>';
                                       echo '<td>'.$dataarrays['officermail5'].'</td>';
                                       echo '<td>'.$dataarrays['title5'].'</td>';
                                       echo '<td>'.$dataarrays['title5_d'].'</td>';
                                       echo '<td>'.$dataarrays['exec6'].'</td>';
                                       echo '<td>'.$dataarrays['exec6_d'].'</td>';
                                       echo '<td>'.$dataarrays['gender6'].'</td>';
                                       echo '<td>'.$dataarrays['gender6_d'].'</td>';
                                       echo '<td>'.$dataarrays['officermail6'].'</td>';
                                       echo '<td>'.$dataarrays['title6'].'</td>';
                                       echo '<td>'.$dataarrays['title6_d'].'</td>';
                                       echo '<td>'.$dataarrays['exec7'].'</td>';
                                       echo '<td>'.$dataarrays['exec7_d'].'</td>';
                                       echo '<td>'.$dataarrays['gender7'].'</td>';
                                       echo '<td>'.$dataarrays['gender7_d'].'</td>';
                                       echo '<td>'.$dataarrays['officermail7'].'</td>';
                                       echo '<td>'.$dataarrays['title7'].'</td>';
                                       echo '<td>'.$dataarrays['title7_d'].'</td>';
                                       echo '<td>'.$dataarrays['exec8'].'</td>';
                                       echo '<td>'.$dataarrays['exec8_d'].'</td>';
                                       echo '<td>'.$dataarrays['gender8'].'</td>';
                                       echo '<td>'.$dataarrays['gender8_d'].'</td>';
                                       echo '<td>'.$dataarrays['officermail8'].'</td>';
                                       echo '<td>'.$dataarrays['title8'].'</td>';
                                       echo '<td>'.$dataarrays['title8_d'].'</td>';
                                       echo '<td>'.$dataarrays['exec9'].'</td>';
                                       echo '<td>'.$dataarrays['exec9_d'].'</td>';
                                       echo '<td>'.$dataarrays['gender9'].'</td>';
                                       echo '<td>'.$dataarrays['gender9_d'].'</td>';
                                       echo '<td>'.$dataarrays['officermail9'].'</td>';
                                       echo '<td>'.$dataarrays['title9'].'</td>';
                                       echo '<td>'.$dataarrays['title9_d'].'</td>';
                                       echo '<td>'.$dataarrays['exec10'].'</td>';
                                       echo '<td>'.$dataarrays['exec10_d'].'</td>';
                                       echo '<td>'.$dataarrays['gender10'].'</td>';
                                       echo '<td>'.$dataarrays['gender10_d'].'</td>';
                                       echo '<td>'.$dataarrays['officermail10'].'</td>';
                                       echo '<td>'.$dataarrays['title10'].'</td>';
                                       echo '<td>'.$dataarrays['title10_d'].'</td>';
                                       echo '<td>'.$dataarrays['parentname'].'</td>';
                                       echo '<td>'.$dataarrays['parentname_d'].'</td>';
                                       echo '<td>'.$dataarrays['parentcity'].'</td>';
                                       echo '<td>'.$dataarrays['parentcity_d'].'</td>';
                                       echo '<td>'.$dataarrays['parentstat'].'</td>';
                                       echo '<td>'.$dataarrays['parentstat_d'].'</td>';
                                       echo '<td>'.$dataarrays['onumber'].'</td>';
                                       echo '<td>'.$dataarrays['onumber_d'].'</td>';
                                       echo '<td>'.$dataarrays['header'].'</td>';
                                       echo '<td>'.$advertiser.'</td>';
                                       echo '<td>'.$dataarrays['primarysic'].'</td>';
                                       echo '<td>'.$dataarrays['sic2'].'</td>';
                                       echo '<td>'.$dataarrays['companyid'].'</td>';
                                       echo '<td>'.$dataarrays['datasource'].'</td>';
                                       echo '<td>'.$dataarrays['contact'].'</td>';
                                       echo '<td>'.$odate.'</td>';
                                       echo '<td>'.$dataarrays['ocommetns'].'</td>';
                                       echo '<td>'.$dataarrays['tdatetime'].'</td>';
                                       echo '<td>'.$dataarrays['tcomments'].'</td>';
                                       echo '<td>'.$dataarrays['fcomments'].'</td>';
                                       echo '<td>'.$dataarrays['fdatetime'].'</td>';
                                       echo '<td>'.$dataarrays['operator'].'</td>';
                                       echo '<td>'.$dataarrays['fdisp'].'</td>';
                                       echo '<td>'.$dataarrays['confdate'].'</td>';
                                       echo '<td>'.$dataarrays['bookid'].'</td>';
                                       echo '<td>'.$dataarrays['newinyear'].'</td>';
                                       echo '<td>'.$dataarrays['listnum'].'</td>';
                                       echo '<td>'.$dataarrays['pdatetime'].'</td>';
                                       echo '<td>'.$dataarrays['pcomments'].'</td>';
                                       echo '<td>'.$dataarrays['email_d'].'</td>';
                                       echo '<td>'.$dataarrays['akadba_d'].'</td>';
                                       echo '<td>'.$dataarrays['qeflag'].'</td>';
                                       echo '<td>'.$dataarrays['oagent'].'</td>';
                                       echo '<td>'.$dataarrays['tagent'].'</td>';
                                       echo '<td>'.$dataarrays['fagent'].'</td>';
                                       echo '<td>'.$dataarrays['datetime4'].'</td>';
                                       echo '<td>'.$dataarrays['comments4'].'</td>';
                                       echo '<td>'.$dataarrays['agent4'].'</td>';
                                       echo '<td>'.$dataarrays['datetime5'].'</td>';
                                       echo '<td>'.$dataarrays['comments5'].'</td>';
                                       echo '<td>'.$dataarrays['agent5'].'</td>';
                                       echo '<td>'.$dataarrays['sysgencomments'].'</td>';
                                       echo '<td>'.$dataarrays['priority'].'</td>';
                                       echo '<td>'.$dataarrays['addresserror'].'</td>';
                                       echo '<td>'.$dataarrays['dpvfootnote'].'</td>';
                                       echo '<td>'.$dataarrays['altphone'].'</td>';
                                       echo '<td>'.$dataarrays['altphone_d'].'</td>';
                                       echo '<td>'.$dataarrays['paddress'].'</td>';
                                       echo '<td>'.$dataarrays['paddress_d'].'</td>';
                                       echo '<td>'.$dataarrays['pzip5'].'</td>';
                                       echo '<td>'.$dataarrays['pzip5_d'].'</td>';
                                       echo '<td>'.$dataarrays['addrchgreason'].'</td>';
                                       echo '<td>'.$dataarrays['empchgreason'].'</td>';
                                        echo '<td>'.$callstart->format('Y-m-d h:i:s').'</td>';
                                       echo '<td>'.$dateformat->format('Y-m-d h:i:s').'</td>';
                                       echo '<td>'.$dataarrays['id'].'</td>';
                                       echo '<td>'.$dateformat->format('Y/m/d').'</td>';
                                       echo '<td>'.rtrim($datafilesusrl,".csv").'</td>';
                                       echo '<td>'.$dataarrays['agentsnotes'].'</td>';
                                       echo '<td>'.$dataarrays['diliver_status'].'</td>';
                                       echo '<td>'.$dataarrays['nr_mni_data_id'].'</td>';
                                  echo '</tr>';
                    
                            $dataId++;

                            flush();
                             ob_flush();
                              }

                                }
                    
                         
                         ?>
                
                       </tbody>
                     </table>
                   </div>
     
    		</div>
    	</div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script>
            window.jQuery || document.write('<script src="http://localhost/mniv2/js/jquery.min.js"><\/script>')
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
            <script type="text/javascript" src="js/duplicate.js"></script>
    </body>
    </html>

