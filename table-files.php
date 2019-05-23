                 <div class = "col-md-12">
                     <div style="display: none;" id="dataids">
                      <h3 class="data-title">Uploaded Data and Activity</h3>
                        <table id="idsSearch" class="ids-excel display compact" style="width:100%">
                            <thead>
                                <tr>
                                  <th>ID's</th>
                                  <th>Compname</th>
                                  <th>Status Call</th>
                                  <th>Uploaded Date</th>
                                  <th>Group ID</th>
                                  <th>Number Of Call</th>
                                  <th>Reset Call Status</th>
                                </tr>
                              </thead>
                               <tbody>
                          <?php 
                                 $dataUploaded = json_decode($response, true);
                                  $dataId = $dataUploaded['dataUploaded'];
                                  foreach ($dataId as $key => $dataIds) {
                                    $callStatus = $dataIds['status_call'];
                                    $numberCalls = $dataIds['callPriority'] - 1;

                                    $dateuploaded = new DateTime ($dataIds['created_at']);
                                    $filesGroup = $dataIds['filesName'];
                                    $idrow = $dataIds['id'];
                                      echo '<tr>';
                                        echo '<td>'.$idrow.'</td>';
                                        echo '<td>'.$dataIds['compname'].'</td>';
                                        echo '<td>'; 
                                          if($callStatus == '2'){
                                           echo  '<p class = "on-call">On-Call</p>';
                                          }else {
                                            echo '<p class = "free-to-class">Free</p>';
                                          }
                                        echo '</td>';
                                        echo '<td>'.$dateuploaded->format('Y/m/d').'</td>';
                                        echo '<td class = "different"><input type = "text"  readonly="readonly" value = "'.rtrim($filesGroup,".csv").'" ></td>';
                                        echo '<td>'.$numberCalls.'</td>';
                                        echo '<td>';

                                          if($callStatus == '2') {
                                            echo   '<button id = '.$idrow.' class = "btn btn-danger resetStatus">Reset Status <i class="fa fa-phone" aria-hidden="true"></i></button>';
                                          }

                                       echo '</td>';
                                     
                                      echo "</tr>";
                                  }
                            ?>
                           </tbody>
                        </table>
                       </div>
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                        
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
                      if ($err) {
                          echo "cURL Error #:" . $err;
                        } else {
                           // $dataarray = json_decode($response, true);
                         // $dataResponse = $response['nrMniData'];
                            $dataarrayDats = json_decode($response, true);
                            $dataarray = $dataarrayDats['nrMniData'];

                            $dataId = 0;
                              foreach ($dataarray as $key => $dataarrays) 
                              {
                                $datafilesusrl = $dataarrays['filesName'];
     
                                $dateformat  = new DateTime($dataarrays['created_at']);
                                $callstart = new DateTime($dataarrays['callstart']);


                                  echo '<tr data-fancybox data-src="#'.$dataarrays['id'].'" href="javascript:;">'; 
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
                                       echo '<td>'.$dataarrays['advertiser'].'</td>';
                                       echo '<td>'.$dataarrays['primarysic'].'</td>';
                                       echo '<td>'.$dataarrays['sic2'].'</td>';
                                       echo '<td>'.$dataarrays['companyid'].'</td>';
                                       echo '<td>'.$dataarrays['datasource'].'</td>';
                                       echo '<td>'.$dataarrays['contact'].'</td>';
                                       echo '<td>'.$dataarrays['odatetime'].'</td>';
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
                              }
                         
                        } ?>
                
                       </tbody>
                     </table>
                 </div>
              </div>
        </div>
   <?php 
      if ($err) {
          echo "cURL Error #:" . $err;
        } else { 
            $dataValue = 0;
      foreach ($dataarray as $key => $dataarrays) {



           echo '<div style="display: none;" id="'.$dataarrays['id'].'" class = "wrapper-'.$dataarrays['id'].'">'; ?>
               <table class="table">
                  <tbody>
                    <tr>
                        <th>Group ID</th>
                          <td><?php
                              $dataGroup =  $dataarrays['filesName'];
                              echo rtrim($dataGroup,".csv"); ?></td>
                      </tr>
                           <tr>
                        <th>Agent Notes</th>
                          <td><?php echo $dataarrays['agentsnotes']; ?></td>
                      </tr>
                     <tr>
                        <th>ID Number</th>
                          <td><?php echo $dataarrays['nr_mni_data_id']; ?></td>
                      </tr>

                    <tr>
                        <th>compname</th>
                          <td><?php echo $dataarrays['compname']; ?></td>
                      </tr>

                      <tr>
                        <th>compname_d</th>
                          <td><?php echo $dataarrays['compname_d']; ?></td>
                      </tr>
                      <tr>
                        <th>akadba</th>
                          <td><?php echo $dataarrays['akadba']; ?></td>
                      </tr>
                      <tr>
                        <th>akadba_d</th>
                          <td><?php echo $dataarrays['akadba_d']; ?></td>
                      </tr>
                      <tr>
                        <th>physaddr</th>
                        <td><?php echo $dataarrays['physaddr']; ?></td>
                      </tr>
                           <tr>
                        <th>physaddr_d</th>
                          <td><?php echo $dataarrays['physaddr_d']; ?></td>
                      </tr>
                      <tr>
                        <th>physcity</th>
                          <td><?php echo $dataarrays['physcity']; ?></td>
                      </tr>
                      <tr>
                        <th>physcity_d</th>
                          <td><?php echo $dataarrays['physcity_d']; ?></td>
                      </tr>
                      <tr>
                        <th>physstate</th>
                        <td><?php echo $dataarrays['physstate']; ?></td>
                      </tr>
                           <tr>
                        <th>physstat_d</th>
                          <td><?php echo $dataarrays['physstate_d']; ?></td>
                      </tr>
                      <tr>
                        <th>physzip</th>
                          <td><?php echo $dataarrays['physzip']; ?></td>
                      </tr>
                      <tr>
                        <th>physzip_d</th>
                          <td><?php echo $dataarrays['physzip_d']; ?></td>
                      </tr>
                      <tr>
                        <th>addrchgreason</th>
                          <td><?php echo $dataarrays['addrchgreason']; ?></td>
                      </tr>
                      <tr>
                        <th>mailaddr</th>
                          <td><?php echo $dataarrays['mailaddr']; ?></td>
                      </tr>
                      <tr>
                        <th>mailaddr_d</th>
                        <td><?php echo $dataarrays['mailaddr_d']; ?></td>
                      </tr>
                           <tr>
                        <th>mailcity</th>
                          <td><?php echo $dataarrays['mailcity']; ?></td>
                      </tr>
                      <tr>
                        <th>mailcity_d</th>
                          <td><?php echo $dataarrays['mailcity_d']; ?></td>
                      </tr>
                      <tr>
                        <th>mailstate</th>
                          <td><?php echo $dataarrays['mailstate']; ?></td>
                      </tr>
                      <tr>
                        <th>mailstat_d</th>
                        <td><?php echo $dataarrays['mailstate_d']; ?></td>
                      </tr>
                           <tr>
                        <th>mailzip</th>
                          <td><?php echo $dataarrays['mailzip']; ?></td>
                      </tr>
                      <tr>
                        <th>mailzip_d</th>
                          <td><?php echo $dataarrays['mailzip_d']; ?></td>
                      </tr>
                      <tr>
                        <th>vnumber</th>
                        <td><?php echo $dataarrays['vnumber']; ?></td>
                      </tr>
                           <tr>
                        <th>vnumber_d</th>
                          <td><?php echo $dataarrays['vnumber_d']; ?></td>
                      </tr>
                       <tr>
                        <th>altphone</th>
                          <td><?php echo $dataarrays['altphone']; ?></td>
                      </tr>
                      <tr>
                        <th>altphone_d</th>
                        <td><?php echo $dataarrays['altphone_d']; ?></td>
                      </tr>
                      <tr>
                        <th>fnumber</th>
                          <td><?php echo $dataarrays['fnumber']; ?></td>
                      </tr>
                      <tr>
                        <th>fnumber_d</th>
                        <td><?php echo $dataarrays['fnumber_d']; ?></td>
                      </tr>
                           <tr>
                        <th>nnumber</th>
                          <td><?php echo $dataarrays['nnumber']; ?></td>
                      </tr>
                      <tr>
                        <th>nnumber_d</th>
                          <td><?php echo $dataarrays['nnumber_d']; ?></td>
                      </tr>
                      <tr>
                        <th>web</th>
                          <td><?php echo $dataarrays['web']; ?></td>
                      </tr>
                      <tr>
                        <th>web_d</th>
                        <td><?php echo $dataarrays['web_d']; ?></td>
                      </tr>
                           <tr>
                        <th>email</th>
                          <td><?php echo $dataarrays['email']; ?></td>
                      </tr>
                      <tr>
                        <th>email_d</th>
                          <td><?php echo $dataarrays['email_d']; ?></td>
                      </tr>
                      <tr>
                        <th>exec1</th>
                          <td><?php echo $dataarrays['exec1']; ?></td>
                      </tr>
                      <tr>
                        <th>exec1_d</th>
                          <td><?php echo $dataarrays['exec1_d']; ?></td>
                      </tr>
                      <tr>
                        <th>gender1_d</th>
                        <td><?php echo $dataarrays['gender1_d']; ?></td>
                      </tr>
                           <tr>
                        <th>officermail1</th>
                          <td><?php echo $dataarrays['officermail1']; ?></td>
                      </tr>
                      <tr>
                        <th>title1</th>
                          <td><?php echo $dataarrays['title1']; ?></td>
                      </tr>
                      <tr>
                        <th>title1_d</th>
                          <td><?php echo $dataarrays['title1_d']; ?></td>
                      </tr>
                      <tr>
                        <th>exec2</th>
                        <td><?php echo $dataarrays['exec2']; ?></td>
                      </tr>
                           <tr>
                        <th>exec2_d</th>
                          <td><?php echo $dataarrays['exec2_d']; ?></td>
                      </tr>
                      <tr>
                        <th>gender2</th>
                          <td><?php echo $dataarrays['gender2']; ?></td>
                      </tr>
                      <tr>
                        <th>gender2_d</th>
                          <td><?php echo $dataarrays['gender2_d']; ?></td>
                      </tr>
                      <tr>
                        <th>officermail2</th>
                        <td><?php echo $dataarrays['officermail2']; ?></td>
                      </tr>
                           <tr>
                        <th>title2</th>
                          <td><?php echo $dataarrays['title2']; ?></td>
                      </tr>
                      <tr>
                        <th>title2_d</th>
                          <td><?php echo $dataarrays['title2_d']; ?></td>
                      </tr>
                      <tr>
                        <th>exec3</th>
                          <td><?php echo $dataarrays['exec3']; ?></td>
                      </tr>
                      <tr>
                        <th>exec3_d</th>
                        <td><?php echo $dataarrays['exec3_d']; ?></td>
                      </tr>
                        <tr>
                        <th>gender3</th>
                          <td><?php echo $dataarrays['gender3']; ?></td>
                      </tr>

                      <tr>
                        <th>gender3_d</th>
                          <td><?php echo $dataarrays['gender3_d']; ?></td>
                      </tr>
                      <tr>
                        <th>officermail3</th>
                          <td><?php echo $dataarrays['officermail3']; ?></td>
                      </tr>
                      <tr>
                        <th>title3</th>
                          <td><?php echo $dataarrays['title3']; ?></td>
                      </tr>
                      <tr>
                        <th>title3_d</th>
                        <td><?php echo $dataarrays['title3_d']; ?></td>
                      </tr>
                           <tr>
                        <th>exec4</th>
                          <td><?php echo $dataarrays['exec4']; ?></td>
                      </tr>
                      <tr>
                        <th>exec4_d</th>
                          <td><?php echo $dataarrays['exec4_d']; ?></td>
                      </tr>
                      <tr>
                        <th>gender4</th>
                          <td><?php echo $dataarrays['gender4']; ?></td>
                      </tr>
                      <tr>
                        <th>gender4_d</th>
                        <td><?php echo $dataarrays['gender4_d']; ?></td>
                      </tr>
                           <tr>
                        <th>officermail4</th>
                          <td><?php echo $dataarrays['officermail4']; ?></td>
                      </tr>
                      <tr>
                        <th>title4</th>
                          <td><?php echo $dataarrays['title4']; ?></td>
                      </tr>
                      <tr>
                        <th>title4_d</th>
                          <td><?php echo $dataarrays['title4_d']; ?></td>
                      </tr>
                      <tr>
                        <th>exec5</th>
                        <td><?php echo $dataarrays['exec5']; ?></td>
                      </tr>
                           <tr>
                        <th>exec5_d</th>
                          <td><?php echo $dataarrays['exec5_d']; ?></td>
                      </tr>
                      <tr>
                        <th>gender5</th>
                          <td><?php echo $dataarrays['gender5']; ?></td>
                      </tr>
                      <tr>
                        <th>gender5_d</th>
                          <td><?php echo $dataarrays['gender5_d']; ?></td>
                      </tr>
                      <tr>
                        <th>officermail5</th>
                        <td><?php echo $dataarrays['officermail5']; ?></td>
                      </tr>
                           <tr>
                        <th>title5</th>
                          <td><?php echo $dataarrays['title5']; ?></td>
                      </tr>
                      <tr>
                        <th>title5_d</th>
                          <td><?php echo $dataarrays['title5_d']; ?></td>
                      </tr>
                      <tr>
                        <th>exec6</th>
                          <td><?php echo $dataarrays['exec6']; ?></td>
                      </tr>
                      <tr>
                        <th>exec6_d</th>
                        <td><?php echo $dataarrays['exec6_d']; ?></td>
                      </tr>
                           <tr>
                        <th>gender6</th>
                          <td><?php echo $dataarrays['gender6']; ?></td>
                      </tr>
                      <tr>
                        <th>gender6_d</th>
                          <td><?php echo $dataarrays['gender6_d']; ?></td>
                      </tr>
                      <tr>
                        <th>officermail6</th>
                          <td><?php echo $dataarrays['officermail6']; ?></td>
                      </tr>
                      <tr>
                        <th>title6</th>
                        <td><?php echo $dataarrays['title6']; ?></td>
                      </tr>
                           <tr>
                        <th>title6_d</th>
                          <td><?php echo $dataarrays['title6_d']; ?></td>
                      </tr>
                      <tr>
                        <th>exec7</th>
                          <td><?php echo $dataarrays['exec7']; ?></td>
                      </tr>
                      <tr>
                        <th>exec7_d</th>
                          <td><?php echo $dataarrays['exec7_d']; ?></td>
                      </tr>
                      <tr>
                        <th>gender7</th>
                        <td><?php echo $dataarrays['gender7']; ?></td>
                      </tr>
                           <tr>
                        <th>gender7_d</th>
                          <td><?php echo $dataarrays['gender7_d']; ?></td>
                      </tr>
                      <tr>
                        <th>officermail7</th>
                          <td><?php echo $dataarrays['officermail7']; ?></td>
                      </tr>
                      <tr>
                        <th>title7</th>
                          <td><?php echo $dataarrays['title7']; ?></td>
                      </tr>
                      <tr>
                        <th>title7_d</th>
                        <td><?php echo $dataarrays['title7_d']; ?></td>
                      </tr>
                           <tr>
                        <th>exec8</th>
                          <td><?php echo $dataarrays['exec8']; ?></td>
                      </tr>
                      <tr>
                        <th>exec8_d</th>
                          <td><?php echo $dataarrays['exec8_d']; ?></td>
                      </tr>
                      <tr>
                        <th>gender8</th>
                          <td><?php echo $dataarrays['gender8']; ?></td>
                      </tr>
                      <tr>
                        <th>gender8_d</th>
                        <td><?php echo $dataarrays['gender8_d']; ?></td>
                      </tr>
                           <tr>
                        <th>officermail8</th>
                          <td><?php echo $dataarrays['officermail8']; ?></td>
                      </tr>
                      <tr>
                        <th>title8</th>
                          <td><?php echo $dataarrays['title8']; ?></td>
                      </tr>
                      <tr>
                        <th>title8_d</th>
                          <td><?php echo $dataarrays['title8_d']; ?></td>
                      </tr>
                      <tr>
                        <th>exec9</th>
                        <td><?php echo $dataarrays['exec9']; ?></td>
                      </tr>
                           <tr>
                        <th>exec9_d</th>
                          <td><?php echo $dataarrays['exec9_d']; ?></td>
                      </tr>
                      <tr>
                        <th>gender9</th>
                          <td><?php echo $dataarrays['gender9']; ?></td>
                      </tr>
                      <tr>
                        <th>gender9_d</th>
                          <td><?php echo $dataarrays['gender9_d']; ?></td>
                      </tr>
                      <tr>
                        <th>officermail9</th>
                        <td><?php echo $dataarrays['officermail9']; ?></td>
                      </tr>
                           <tr>
                        <th>title9</th>
                          <td><?php echo $dataarrays['title9']; ?></td>
                      </tr>
                      <tr>
                        <th>title9_d</th>
                          <td><?php echo $dataarrays['title9_d']; ?></td>
                      </tr>
                      <tr>
                        <th>exec10</th>
                          <td><?php echo $dataarrays['exec10']; ?></td>
                      </tr>
                      <tr>
                        <th>gender10</th>
                        <td><?php echo $dataarrays['gender10']; ?></td>
                      </tr>
                           <tr>
                        <th>gender10_d</th>
                          <td><?php echo $dataarrays['gender10_d']; ?></td>
                      </tr>
                      <tr>
                        <th>officermail10</th>
                          <td><?php echo $dataarrays['officermail10']; ?></td>
                      </tr>
                      <tr>
                        <th>title10</th>
                          <td><?php echo $dataarrays['title10']; ?></td>
                      </tr>
                      <tr>
                        <th>title10_d</th>
                        <td><?php echo $dataarrays['title10_d']; ?></td>
                      </tr>
                      <tr>
                        <th>loccount</th>
                          <td><?php echo $dataarrays['loccount']; ?></td>
                      </tr>
                      <tr>
                        <th>loccount_d</th>
                          <td><?php echo $dataarrays['loccount_d']; ?></td>
                      </tr>
                      <tr>
                        <th>empchgreason</th>
                          <td><?php echo $dataarrays['empchgreason']; ?></td>
                      </tr>
                      <tr>
                        <th>products</th>
                        <td><?php echo $dataarrays['products']; ?></td>
                      </tr>
                           <tr>
                        <th>products_d</th>
                          <td><?php echo $dataarrays['products_d']; ?></td>
                      </tr>
                      <tr>
                        <th>yearestab</th>
                          <td><?php echo $dataarrays['yearestab']; ?></td>
                      </tr>
                      <tr>
                        <th>yearesta_d</th>
                        <td><?php echo $dataarrays['yearestab_d']; ?></td>
                      </tr>
                           <tr>
                        <th>distribtyp</th>
                          <td><?php echo $dataarrays['distribtyp']; ?></td>
                      </tr>
                      <tr>
                        <th>distribty_d</th>
                          <td><?php echo $dataarrays['distribtyp_d']; ?></td>
                      </tr>
                      <tr>
                        <th>ownertype</th>
                          <td><?php echo $dataarrays['ownertype']; ?></td>
                      </tr>
                      <tr>
                        <th>ownertyp_d</th>
                        <td><?php echo $dataarrays['ownertype_d']; ?></td>
                      </tr>
                           <tr>
                        <th>sales</th>
                          <td><?php echo $dataarrays['sales']; ?></td>
                      </tr>
                      <tr>
                        <th>sales_d</th>
                          <td><?php echo $dataarrays['sales_d']; ?></td>
                      </tr>
                      <tr>
                        <th>squarefeet</th>
                          <td><?php echo $dataarrays['squarefeet']; ?></td>
                      </tr>
                      <tr>
                        <th>squarefe_d</th>
                        <td><?php echo $dataarrays['squarefeet_d']; ?></td>
                      </tr>
                           <tr>
                        <th>imports</th>
                          <td><?php echo $dataarrays['imports']; ?></td>
                      </tr>
                      <tr>
                        <th>imports_d</th>
                          <td><?php echo $dataarrays['imports_d']; ?></td>
                      </tr>
                           <tr>
                        <th>parentname</th>
                          <td><?php echo $dataarrays['parentname']; ?></td>
                      </tr>
                      <tr>
                        <th>parentna_d</th>
                          <td><?php echo $dataarrays['parentname_d']; ?></td>
                      </tr>
                           <tr>
                        <th>paddress</th>
                          <td><?php echo $dataarrays['paddress']; ?></td>
                      </tr>
                      <tr>
                        <th>paddress_d</th>
                          <td><?php echo $dataarrays['paddress_d']; ?></td>
                      </tr>
                      <tr>
                        <th>parentcity</th>
                          <td><?php echo $dataarrays['parentcity']; ?></td>
                      </tr>
                      <tr>
                        <th>parentci_d</th>
                        <td><?php echo $dataarrays['parentcity_d']; ?></td>
                      </tr>
                           <tr>
                        <th>parentstat</th>
                          <td><?php echo $dataarrays['parentstat']; ?></td>
                      </tr>
                      <tr>
                        <th>parentst_d</th>
                          <td><?php echo $dataarrays['parentstat_d']; ?></td>
                      </tr>
                      <tr>
                        <th>pzip5</th>
                          <td><?php echo $dataarrays['pzip5']; ?></td>
                      </tr>
                      <tr>
                        <th>pzip5_d</th>
                        <td><?php echo $dataarrays['pzip5_d']; ?></td>
                      </tr>
                      <tr>
                        <th>onumber</th>
                          <td><?php echo $dataarrays['onumber']; ?></td>
                      </tr>
                      <tr>
                        <th>onumber_d</th>
                        <td><?php echo $dataarrays['onumber_d']; ?></td>
                      </tr>
                       <tr>
                        <th>advertiser</th>
                          <td><?php echo $dataarrays['advertiser']; ?></td>
                      </tr>
                      <tr>
                        <th>companyid</th>
                        <td><?php echo $dataarrays['companyid']; ?></td>
                      </tr>
                      <tr>
                        <th>contact</th>
                          <td><?php echo $dataarrays['contact']; ?></td>
                      </tr>
                       <tr>
                        <th>bookid</th>
                        <td><?php echo $dataarrays['bookid']; ?></td>
                      </tr>
                           <tr>
                        <th>newinyear</th>
                          <td><?php echo $dataarrays['newinyear']; ?></td>
                      </tr>
                      <tr>
                        <th>pdatetime</th>
                          <td><?php echo $dataarrays['pdatetime']; ?></td>
                      </tr>
                      <tr>
                        <th>pcomments</th>
                        <td><?php echo $dataarrays['pcomments']; ?></td>
                      </tr>
                      <tr>
                        <th>oagent</th>
                          <td><?php echo $dataarrays['oagent']; ?></td>
                      </tr>
                      <tr>
                        <th>tagent</th>
                          <td><?php echo $dataarrays['tagent']; ?></td>
                      </tr>
                      <tr>
                        <th>fagent</th>
                        <td><?php echo $dataarrays['fagent']; ?></td>
                      </tr>
                          <tr>
                        <th>datetime4</th>
                          <td><?php echo $dataarrays['datetime4']; ?></td>
                      </tr>
                      <tr>
                        <th>comments4</th>
                          <td><?php echo $dataarrays['comments4']; ?></td>
                      </tr>
                      <tr>
                        <th>agent4</th>
                          <td><?php echo $dataarrays['agent4']; ?></td>
                      </tr>
                      <tr>
                        <th>datetime5</th>
                        <td><?php echo $dataarrays['datetime5']; ?></td>
                      </tr>
                           <tr>
                        <th>comments5</th>
                          <td><?php echo $dataarrays['comments5']; ?></td>
                      </tr>
                      <tr>
                        <th>agent5</th>
                          <td><?php echo $dataarrays['agent5']; ?></td>
                      </tr>
                      <tr>
                        <th>priority</th>
                        <td><?php echo $dataarrays['priority']; ?></td>
                      </tr>
                       <tr>
                        <th>header</th>
                          <td><?php echo $dataarrays['header']; ?></td>
                      </tr>
                      <tr>
                        <th>primarysic</th>
                          <td><?php echo $dataarrays['primarysic']; ?></td>
                      </tr>
                      <tr>
                        <th>sic2</th>
                          <td><?php echo $dataarrays['sic2']; ?></td>
                      </tr>
                           <tr>
                        <th>datasource</th>
                          <td><?php echo $dataarrays['datasource']; ?></td>
                      </tr>
                      <tr>
                        <th>odatetime</th>
                          <td><?php echo $dataarrays['odatetime']; ?></td>
                      </tr>
                      <tr>
                        <th>ocommetns</th>
                        <td><?php echo $dataarrays['ocommetns']; ?></td>
                      </tr>
                           <tr>
                        <th>tdatetime</th>
                          <td><?php echo $dataarrays['tdatetime']; ?></td>
                      </tr>
                      <tr>
                        <th>tcomments</th>
                          <td><?php echo $dataarrays['tcomments']; ?></td>
                      </tr>
                      <tr>
                        <th>fcomments</th>
                          <td><?php echo $dataarrays['fcomments']; ?></td>
                      </tr>
                      <tr>
                        <th>fdatetime</th>
                        <td><?php echo $dataarrays['fdatetime']; ?></td>
                      </tr>
                           <tr>
                        <th>operator</th>
                          <td><?php echo $dataarrays['operator']; ?></td>
                      </tr>
                      <tr>
                        <th>fdisp</th>
                          <td><?php echo $dataarrays['fdisp']; ?></td>
                      </tr>
                      <tr>
                        <th>confdate</th>
                          <td><?php echo $dataarrays['confdate']; ?></td>
                      </tr>
                      <tr>
                        <th>listnum</th>
                          <td><?php echo $dataarrays['listnum']; ?></td>
                      </tr>
                           <tr>
                        <th>qeflag</th>
                          <td> 
                           <div class = "qadata">
                          <ul class = "qa-data">
                              <li>
                                <?php $datavalue =  $dataarrays['qeflag']; 
                                 $options = array('Draft','Pass','Kill');    ?>
                                 <select id="qeflag" name="qeflag"  class="form-control qeflag">
                                      <?php 
                                           if($datavalue == 'Draft') {
                                                echo '<option value = "Draft" selected="selected">Draft</option>';
                                                echo '<option value = "Pass">Pass</option>';
                                                echo '<option value = "Kill">Kill</option>';
                                              }elseif($datavalue == 'Pass'){
                                                echo '<option value = "Pass" selected="selected">Pass</option>';
                                                echo '<option value = "Draft">Draft</option>';
                                                echo '<option value = "Kill">Kill</option>';
                                              }else {
                                                echo '<option value = "Kill" selected="selected">Kill</option>';
                                                echo '<option value = "Draft">Draft</option>';
                                                echo '<option value = "Pass">Pass</option>';
                                              } ?>
                                  </select>
                              </li>
                              <li> <button id = "qeflagbtn"  data-idcurrent = "<?php echo $dataarrays['id']; ?>" class="form-control btn-success"> Save </button></li>
                          </ul>
                        </div>
                        </td>
                      </tr>
                       
                      <tr>
                        <th>sysgencomments</th>
                          <td><?php echo $dataarrays['sysgencomments']; ?></td>
                      </tr>
                      
                           <tr>
                        <th>addresserror</th>
                          <td><?php echo $dataarrays['addresserror']; ?></td>
                      </tr>
                      <tr>
                        <th>dpvfootnote</th>
                          <td><?php echo $dataarrays['dpvfootnote']; ?></td>
                      </tr>
                        <tr>
                        <th>Number Of Call</th>
                          <td><?php
                                $number = $dataarrays['callcount'] + 1;
                           echo $number; ?></td>
                      </tr>
                  
                  </tbody>
              </table>
                        <?php   echo '</div>';

           $dataValue++;
      }
  
        }
  ?>