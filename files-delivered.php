     <?php

    $curl = curl_init();
     $bearer = $_COOKIE['tokken'];
    curl_setopt_array($curl, array(
      CURLOPT_PORT => "8000",
      //CURLOPT_URL => "https://mniapi.openlookeasydata.com/api/auth/datadelivered",
      CURLOPT_URL => "http://172.16.11.120:8000/api/auth/datadelivered/",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
      "authorization: Bearer  ".$bearer."",
        "cache-control: no-cache",
        "postman-token: 8411bfd9-e5f1-1730-fd04-8e5e1d2b4ff5"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
       $dataarray = json_decode($response, true);
         
 

?>

      <div style="display: none; width: 980px; height: auto;" class = " files-delivered" id = "files-delivered">
        <h3 class="data-title">Already Export</h3>
              <table id="delivertable" class="table table-striped table-bordered" style="width:100%">
                        
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
                          <th>Restore</th>
                        </tr>
                      </thead>
                      <tbody>
                          
                            <?php 

                      if ($err) {
                          echo "cURL Error #:" . $err;
                        } else  {
                           // $dataarray = json_decode($response, true);
                         // $dataResponse = $response['nrMniData'];
                            $dataarray = json_decode($response, true);
                      

                            // $dataarraydeliverd = $dataarrayD['nrMniData'];
                        if (is_array($dataarray) || is_object($dataarray))
                          {
                              foreach ($dataarray as $key => $dataarraydeliverds) 
                              {
                            
                                $datafilesusrl = $dataarraydeliverds['filesName'];

                                $dateformat  = new DateTime($dataarraydeliverds['created_at']);
                                   $callstart = new DateTime($dataarraydeliverds['callstart']);
                               echo '<tr>'; 
                                       echo '<td>'.$dataarraydeliverds['compname'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['compname_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['akadba'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['physaddr'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['physaddr_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['physcity'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['physcity_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['physstate'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['physstate_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['physzip'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['physzip_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['vnumber'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['vnumber_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['loccount'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['loccount_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['products'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['products_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec1'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec1_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender1'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender1_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['officermail1'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title1'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title1_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec2'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec2_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender2'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender2_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['officermail2'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title2'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title2_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['fnumber'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['fnumber_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['nnumber'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['nnumber_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['web'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['web_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['email'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['mailaddr'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['mailaddr_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['mailcity'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['mailcity_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['mailstate'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['mailstate_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['mailzip'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['mailzip_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['yearestab'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['yearestab_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['distribtyp'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['distribtyp_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['ownertype'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['ownertype_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['sales'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['sales_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['squarefeet'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['squarefeet_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['imports'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['imports_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec3'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec3_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender3'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender3_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['officermail3'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title3'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title3_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec4'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec4_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender4'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender4_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['officermail4'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title4'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title4_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec5'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec5_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender5'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender5_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['officermail5'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title5'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title5_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec6'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec6_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender6'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender6_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['officermail6'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title6'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title6_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec7'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec7_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender7'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender7_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['officermail7'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title7'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title7_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec8'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec8_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender8'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender8_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['officermail8'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title8'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title8_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec9'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec9_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender9'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender9_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['officermail9'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title9'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title9_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec10'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['exec10_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender10'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['gender10_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['officermail10'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title10'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['title10_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['parentname'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['parentname_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['parentcity'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['parentcity_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['parentstat'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['parentstat_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['onumber'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['onumber_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['header'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['advertiser'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['primarysic'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['sic2'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['companyid'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['datasource'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['contact'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['odatetime'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['ocommetns'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['tdatetime'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['tcomments'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['fcomments'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['fdatetime'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['operator'].'</td>';
                                       echo '<td>\''.$dataarraydeliverds['fdisp'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['confdate'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['bookid'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['newinyear'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['listnum'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['pdatetime'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['pcomments'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['email_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['akadba_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['qeflag'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['oagent'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['tagent'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['fagent'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['datetime4'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['comments4'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['agent4'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['datetime5'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['comments5'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['agent5'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['sysgencomments'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['priority'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['addresserror'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['dpvfootnote'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['altphone'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['altphone_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['paddress'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['paddress_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['pzip5'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['pzip5_d'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['addrchgreason'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['empchgreason'].'</td>';
                                       echo '<td>'.$callstart->format('Y-m-d h:i:s').'</td>';
                                       echo '<td>'.$dateformat->format('Y-m-d h:i:s').'</td>';
                                       echo '<td>'.$dataarraydeliverds['id'].'</td>';
                                       echo '<td>'.$dateformat->format('Y/m/d').'</td>';
                                       echo '<td>'.rtrim($datafilesusrl,".csv").'</td>';
                                       echo '<td>'.$dataarraydeliverds['agentsnotes'].'</td>';
                                       echo '<td>'.$dataarraydeliverds['diliver_status'].'</td>';
                                        echo '<td><button id = "'.$dataarraydeliverds['id'].'" data-nrId = "'.$dataarraydeliverds['nr_mni_data_id'].'" data-status = "pending" class = "btn btn btn-danger restore-btn"><i class="fa fa-trash-restore"></i> Restore</button></td>';
                                                              echo '</tr>';
                          }
                            
                    
                          
                           }
                         
                        } ?>
                
                       </tbody>
                     </table>
      </div>

