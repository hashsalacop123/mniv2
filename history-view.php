<div style="display: none; width: 980px; height: auto;" class = " files-delivered" id = "historycalls">
<h3 class="data-title">Calls History</h3>

    <table id="history" class="table table-striped table-bordered" style="width:100%">
      <?php
        $token = $_COOKIE['tokken'];
          $curl = curl_init();
          curl_setopt_array($curl, array(
            CURLOPT_PORT => "8000",
            //CURLOPT_URL => "https://mniapi.openlookeasydata.com/api/auth/historycalls",
            CURLOPT_URL => "http://172.16.11.120:8000/api/auth/historycalls",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
             "authorization: Bearer  ".$token.""
            ),
          ));
          $historydata = curl_exec($curl);
          $historydataerr = curl_error($curl);
          curl_close($curl);

?>          
                      <thead>
                          <tr>
                             <th>id</th>
                            <th>Agent</th>
                            <th>compname</th>
                            <th>compname_d</th>
                            <th>akadba</th>
                            <th>akadba_d</th>
                            <th>physaddr</th>
                            <th>physaddr_d</th>
                            <th>physcity</th>
                            <th>physcity_d</th>
                            <th>physstate</th>
                            <th>physstat_d</th>
                            <th>physzip</th>
                            <th>physzip_d</th>
                            <th>addrchgreason</th>
                            <th>mailaddr</th>
                            <th>mailaddr_d</th>
                            <th>mailcity</th>
                            <th>mailcity_d</th>
                            <th>mailstate</th>
                            <th>mailstat_d</th>
                            <th>mailzip</th>
                            <th>mailzip_d</th>
                            <th>vnumber</th>
                            <th>vnumber_d</th>
                            <th>altphone</th>
                            <th>altphone_d</th>
                            <th>fnumber</th>
                            <th>fnumber_d</th>
                            <th>nnumber</th>
                            <th>nnumber_d</th>
                            <th>web</th>
                            <th>web_d</th>
                            <th>email</th>
                            <th>email_d</th>
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
                            <th>loccount</th>
                            <th>loccount_d</th>
                            <th>empchgreason</th>
                            <th>products</th>
                            <th>products_d</th>
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
                            <th>parentname</th>
                            <th>parentna_d</th>
                            <th>paddress</th>
                            <th>paddress_d</th>
                            <th>parentcity</th>
                            <th>parentci_d</th>
                            <th>parentstat</th>
                            <th>parentst_d</th>
                            <th>pzip5</th>
                            <th>pzip5_d</th>
                            <th>onumber</th>
                            <th>onumber_d</th>
                            <th>advertiser</th> 
                            <th>companyid</th>
                            <th>contact</th>
                            <th>bookid</th>
                            <th>newinyear</th>
                            <th>pdatetime</th>
                            <th>pcomments</th>
                            <th>oagent</th>
                            <th>tagent</th>
                            <th>fagent</th>
                            <th>4datetime</th>
                            <th>4comments</th>
                            <th>4agent</th>
                            <th>5datetime</th>
                            <th>5comments</th>
                            <th>5agent</th>
                            <th>priority</th>
                            <th>header</th> 
                            <th>primarysic</th>
                            <th>sic2</th>
                            <th>datasource</th>
                            <th>odatetime</th>
                            <th>ocommetns</th>
                            <th>tdatetime</th>
                            <th>tcomments</th>
                            <th>fcomments</th>
                            <th>fdatetime</th>
                            <th>operator</th>
                            <th>fdisp</th>
                            <th>confdate</th>
                            <th>listnum</th>
                            <th>qeflag</th>
                            <th>sysgencomments</th>
                            <th>addresserror</th>
                            <th>dpvfootnote</th>
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
                      if ($historydataerr) {
                          echo "cURL Error #:" . $historydataerr;
                        } else {
                        
                           $history = json_decode($historydata, true);
                             if (is_array($history) || is_object($history))
                            {
                                        foreach ($history as $key => $histories) 
                              {

                                $dateformat  = new DateTime($histories['created_at']);
                                 $callstart = new DateTime($histories['callstart']);
  
                                  echo '<tr>'; 
                                     echo '<td>'.$histories['id'].'</td>';
                                    echo '<td>'.$histories['user']['name'].'</td>';
                                    echo '<td>'.$histories['compname'].'</td>';
                                    echo '<td>'.$histories['compname_d'].'</td>';
                                    echo '<td>'.$histories['akadba'].'</td>';
                                    echo '<td>'.$histories['akadba_d'].'</td>';
                                    echo '<td>'.$histories['physaddr'].'</td>';
                                    echo '<td>'.$histories['physaddr_d'].'</td>';
                                    echo '<td>'.$histories['physcity'].'</td>';
                                    echo '<td>'.$histories['physcity_d'].'</td>';
                                    echo '<td>'.$histories['physstate'].'</td>';
                                    echo '<td>'.$histories['physstate_d'].'</td>';
                                    echo '<td>'.$histories['physzip'].'</td>';
                                    echo '<td>'.$histories['physzip_d'].'</td>';
                                    echo '<td>'.$histories['addrchgreason'].'</td>';
                                    echo '<td>'.$histories['mailaddr'].'</td>';
                                    echo '<td>'.$histories['mailaddr_d'].'</td>';
                                    echo '<td>'.$histories['mailcity'].'</td>';
                                    echo '<td>'.$histories['mailcity_d'].'</td>';
                                    echo '<td>'.$histories['mailstate'].'</td>';
                                    echo '<td>'.$histories['mailstate_d'].'</td>';
                                    echo '<td>'.$histories['mailzip'].'</td>';
                                    echo '<td>'.$histories['mailzip_d'].'</td>';
                                    echo '<td>'.$histories['vnumber'].'</td>';
                                    echo '<td>'.$histories['vnumber_d'].'</td>';
                                    echo '<td>'.$histories['altphone'].'</td>';
                                    echo '<td>'.$histories['altphone_d'].'</td>';
                                    echo '<td>'.$histories['fnumber'].'</td>';
                                    echo '<td>'.$histories['fnumber_d'].'</td>';
                                    echo '<td>'.$histories['nnumber'].'</td>';
                                    echo '<td>'.$histories['nnumber_d'].'</td>';
                                    echo '<td>'.$histories['web'].'</td>';
                                    echo '<td>'.$histories['web_d'].'</td>';
                                    echo '<td>'.$histories['email'].'</td>';
                                    echo '<td>'.$histories['email_d'].'</td>';
                                    echo '<td>'.$histories['exec1'].'</td>';
                                    echo '<td>'.$histories['exec1_d'].'</td>';
                                    echo '<td>'.$histories['gender1'].'</td>';
                                    echo '<td>'.$histories['gender1_d'].'</td>';
                                    echo '<td>'.$histories['officermail1'].'</td>';
                                    echo '<td>'.$histories['title1'].'</td>';
                                    echo '<td>'.$histories['title1_d'].'</td>';
                                    echo '<td>'.$histories['exec2'].'</td>';
                                    echo '<td>'.$histories['exec2_d'].'</td>';
                                    echo '<td>'.$histories['gender2'].'</td>';
                                    echo '<td>'.$histories['gender2_d'].'</td>';
                                    echo '<td>'.$histories['officermail2'].'</td>';
                                    echo '<td>'.$histories['title2'].'</td>';
                                    echo '<td>'.$histories['title2_d'].'</td>'; 
                                    echo '<td>'.$histories['exec3'].'</td>';
                                    echo '<td>'.$histories['exec3_d'].'</td>';
                                    echo '<td>'.$histories['gender3'].'</td>';
                                    echo '<td>'.$histories['gender3_d'].'</td>';
                                    echo '<td>'.$histories['officermail3'].'</td>';
                                    echo '<td>'.$histories['title3'].'</td>';
                                    echo '<td>'.$histories['title3_d'].'</td>';
                                    echo '<td>'.$histories['exec4'].'</td>';
                                    echo '<td>'.$histories['exec4_d'].'</td>';
                                    echo '<td>'.$histories['gender4'].'</td>';
                                    echo '<td>'.$histories['gender4_d'].'</td>';
                                    echo '<td>'.$histories['officermail4'].'</td>';
                                    echo '<td>'.$histories['title4'].'</td>';
                                    echo '<td>'.$histories['title4_d'].'</td>';
                                    echo '<td>'.$histories['exec5'].'</td>';
                                    echo '<td>'.$histories['exec5_d'].'</td>';
                                    echo '<td>'.$histories['gender5'].'</td>';
                                    echo '<td>'.$histories['gender5_d'].'</td>';
                                    echo '<td>'.$histories['officermail5'].'</td>';
                                    echo '<td>'.$histories['title5'].'</td>';
                                    echo '<td>'.$histories['title5_d'].'</td>';
                                    echo '<td>'.$histories['exec6'].'</td>';
                                    echo '<td>'.$histories['exec6_d'].'</td>';
                                    echo '<td>'.$histories['gender6'].'</td>';
                                    echo '<td>'.$histories['gender6_d'].'</td>';
                                    echo '<td>'.$histories['officermail6'].'</td>';
                                    echo '<td>'.$histories['title6'].'</td>';
                                    echo '<td>'.$histories['title6_d'].'</td>';
                                    echo '<td>'.$histories['exec7'].'</td>';
                                    echo '<td>'.$histories['exec7_d'].'</td>';
                                    echo '<td>'.$histories['gender7'].'</td>';
                                    echo '<td>'.$histories['gender7_d'].'</td>';
                                    echo '<td>'.$histories['officermail7'].'</td>';
                                    echo '<td>'.$histories['title7'].'</td>';
                                    echo '<td>'.$histories['title7_d'].'</td>';
                                    echo '<td>'.$histories['exec8'].'</td>';
                                    echo '<td>'.$histories['exec8_d'].'</td>';
                                    echo '<td>'.$histories['gender8'].'</td>';
                                    echo '<td>'.$histories['gender8_d'].'</td>';
                                    echo '<td>'.$histories['officermail8'].'</td>';
                                    echo '<td>'.$histories['title8'].'</td>';
                                    echo '<td>'.$histories['title8_d'].'</td>';
                                    echo '<td>'.$histories['exec9'].'</td>';
                                    echo '<td>'.$histories['exec9_d'].'</td>';
                                    echo '<td>'.$histories['gender9'].'</td>';
                                    echo '<td>'.$histories['gender9_d'].'</td>';
                                    echo '<td>'.$histories['officermail9'].'</td>';
                                    echo '<td>'.$histories['title9'].'</td>';
                                    echo '<td>'.$histories['title9_d'].'</td>';
                                    echo '<td>'.$histories['exec10'].'</td>';
                                    echo '<td>'.$histories['exec10_d'].'</td>';
                                    echo '<td>'.$histories['gender10'].'</td>';
                                    echo '<td>'.$histories['gender10_d'].'</td>';
                                    echo '<td>'.$histories['officermail10'].'</td>';
                                    echo '<td>'.$histories['title10'].'</td>';
                                    echo '<td>'.$histories['title10_d'].'</td>';
                                    echo '<td>'.$histories['loccount'].'</td>';
                                    echo '<td>'.$histories['loccount_d'].'</td>';
                                    echo '<td>'.$histories['empchgreason'].'</td>';
                                    echo '<td>'.$histories['products'].'</td>';
                                    echo '<td>'.$histories['products_d'].'</td>';
                                    echo '<td>'.$histories['yearestab'].'</td>';
                                    echo '<td>'.$histories['yearestab_d'].'</td>';
                                    echo '<td>'.$histories['distribtyp'].'</td>';
                                    echo '<td>'.$histories['distribtyp_d'].'</td>';
                                    echo '<td>'.$histories['ownertype'].'</td>';
                                    echo '<td>'.$histories['ownertype_d'].'</td>';
                                    echo '<td>'.$histories['sales'].'</td>';
                                    echo '<td>'.$histories['sales_d'].'</td>';
                                    echo '<td>'.$histories['squarefeet'].'</td>';
                                    echo '<td>'.$histories['squarefeet_d'].'</td>';
                                    echo '<td>'.$histories['imports'].'</td>';
                                    echo '<td>'.$histories['imports_d'].'</td>';
                                    echo '<td>'.$histories['parentname'].'</td>';
                                    echo '<td>'.$histories['parentname_d'].'</td>';
                                    echo '<td>'.$histories['paddress'].'</td>';
                                    echo '<td>'.$histories['paddress_d'].'</td>';
                                    echo '<td>'.$histories['parentcity'].'</td>';
                                    echo '<td>'.$histories['parentcity_d'].'</td>';
                                    echo '<td>'.$histories['parentstat'].'</td>';
                                    echo '<td>'.$histories['parentstat_d'].'</td>';
                                    echo '<td>'.$histories['pzip5'].'</td>';
                                    echo '<td>'.$histories['pzip5_d'].'</td>';
                                    echo '<td>'.$histories['onumber'].'</td>';
                                    echo '<td>'.$histories['onumber_d'].'</td>';
                                    echo '<td>'.$histories['advertiser'].'</td>'; 
                                    echo '<td>'.$histories['companyid'].'</td>';
                                    echo '<td>'.$histories['contact'].'</td>';
                                    echo '<td>'.$histories['bookid'].'</td>';
                                    echo '<td>'.$histories['newinyear'].'</td>';
                                    echo '<td>'.$histories['pdatetime'].'</td>';
                                    echo '<td>'.$histories['pcomments'].'</td>';
                                    echo '<td>'.$histories['oagent'].'</td>';
                                    echo '<td>'.$histories['tagent'].'</td>';
                                    echo '<td>'.$histories['fagent'].'</td>';
                                    echo '<td>'.$histories['datetime4'].'</td>';
                                    echo '<td>'.$histories['comments4'].'</td>';
                                    echo '<td>'.$histories['agent4'].'</td>';
                                    echo '<td>'.$histories['datetime5'].'</td>';
                                    echo '<td>'.$histories['comments5'].'</td>';
                                    echo '<td>'.$histories['agent5'].'</td>';
                                    echo '<td>'.$histories['priority'].'</td>';
                                    echo '<td>'.$histories['header'].'</td>'; 
                                    echo '<td>'.$histories['primarysic'].'</td>';
                                    echo '<td>'.$histories['sic2'].'</td>';
                                    echo '<td>'.$histories['datasource'].'</td>';
                                    echo '<td>'.$histories['odatetime'].'</td>';
                                    echo '<td>'.$histories['ocommetns'].'</td>';
                                    echo '<td>'.$histories['tdatetime'].'</td>';
                                    echo '<td>'.$histories['tcomments'].'</td>';
                                    echo '<td>'.$histories['fcomments'].'</td>';
                                    echo '<td>'.$histories['fdatetime'].'</td>';
                                    echo '<td>'.$histories['operator'].'</td>';
                                    echo '<td>'.$histories['fdisp'].'</td>';
                                    echo '<td>'.$histories['confdate'].'</td>';
                                    echo '<td>'.$histories['listnum'].'</td>';
                                    echo '<td>'.$histories['qeflag'].'</td>';
                                    echo '<td>'.$histories['sysgencomments'].'</td>';
                                    echo '<td>'.$histories['addresserror'].'</td>';
                                    echo '<td>'.$histories['dpvfootnote'].'</td>';
                                    echo '<td>'.$callstart->format('Y-m-d h:i:s').'</td>';
                                    echo '<td>'.$dateformat->format('Y-m-d h:i:s').'</td>';
                                     echo '<td>'.$histories['id'].'</td>';
                                    echo '<td>'.$dateformat->format('Y/m/d').'</td>';
                                    echo '<td>'.rtrim($datafilesusrl,".csv").'</td>';
                                     echo '<td>'.$histories['agentsnotes'].'</td>';
                                     echo '<td>'.$histories['diliver_status'].'</td>';
                                     echo '<td>'.$histories['nr_mni_data_id'].'</td>';

                                echo '</tr>';

                      
    
                                }
                            }
                    
                         
                        } ?>
                
                       </tbody>
                     </table>
</div>

