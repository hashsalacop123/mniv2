<label class="col-sm-2 control-label">COMPNAME</label>
<input type="hidden" id="callstart"  name="callstart" value="<?php echo $_COOKIE['callstartCaptured']; ?>" />
 <input type="hidden" id="userid" name="userid" value="" />
 <input type="hidden"  id="agentName" name="agentName" value=""/>
<input id = "datacounting" name = "datacounting" value="" type="hidden">
<input id="nrmnidataid" name="nrdataidhide"  class="form-control"  value="" type="hidden" >
<div class="col-sm-8 inputGroupContainer">
   <div class="input-group">
      <input id="compname" name="compname"  data-compare = "" class="form-control compname required-right"  value="" type="text" >
      <input type="hidden" name="filesName" id="filesName" value=""/>
   </div>
</div>
<div class="col-sm-2 inputGroupContainer">
   <div class="input-group">
      <input  name="compname_d"  class="form-control"  value="false" type="hidden">
      <input id="compname_d"  name="compname_d"  class="form-control goodcall"  value="true" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label">AKADBA</label>
<div class="col-sm-8 inputGroupContainer">
   <div class="input-group">
      <input id="akadba" name="akadba"   class="form-control akadba"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer">
   <div class="input-group">
       <input name="akadba_d"  class="form-control"  value="false" type="hidden">
      <input id="akadba_d" name="akadba_d"  class="form-control"  value="true" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label">PHYSADDR</label>
<div class="col-sm-8 inputGroupContainer">
   <div class="input-group">
      <input id="physaddr" name="physaddr" data-compare = "" class="form-control physaddr required-right"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer">
   <div class="input-group">
      <input name="physaddr_d"  class="form-control"  value="false" type="hidden">
      <input id="physaddr_d" name="physaddr_d"  class="form-control goodcall"  value="true" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label">CITY/ST/ZIP</label>
<div class="col-sm-3 inputGroupContainer">
   <div class="input-group">
      <input id="physcity" name="physcity" placeholder="City"  class="form-control physcity required-right"  value="" type="text" >
   </div>
</div>
<div class="col-sm-3 inputGroupContainer">
   <div class="input-group">
      <input id="physstate" name="physstate" placeholder="State" class="form-control  physstate required-right"  value="" type="text" >
   </div>
</div>
<div class="col-sm-3 inputGroupContainer">
   <div class="input-group">
      <input id="physzip" name="physzip" placeholder="Zip" class="form-control physzip required-right"  value="" type="text" >
   </div>
</div>

<div class="col-sm-1 inputGroupContainer test">
   <div class="input-group">

   </div>
</div>
<div class="col-sm-2 inputGroupContainer test">
   <div class="input-group">
       <label class="control-label">CHECKBOX</label>
   </div>
</div>
<div class="col-sm-3 inputGroupContainer">
   <div class="input-group">
      <input   name="physcity_d"  class="form-control"  value="false" type="hidden">
      <input id="physcity_d"  name="physcity_d"  class="form-control physcity goodcall"  value="" type="checkbox">
   </div>
</div>


<div class="col-sm-3 inputGroupContainer">
   <div class="input-group">
      <input  name="physstate_d"  class="form-control"  value="false" type="hidden">
      <input id="physstate_d" name="physstate_d"  class="form-control physstate goodcall"  value="" type="checkbox">
   </div>
</div>
<div class="col-sm-2 inputGroupContainer">
   <div class="input-group">
        <input  name="physzip_d"  class="form-control"  value="false" type="hidden">
      <input id="physzip_d" name="physzip_d"  class="form-control goodcall"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-3 control-label "  >ADDRCHGREASON</label>
<div class="col-sm-7 inputGroupContainer " >
   <div class="input-group">
      <input id="addrchgreason" name="addrchgreason"  class="form-control addrchgreason"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<label class="col-sm-2 control-label "  >MAILADDR</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="mailaddr" name="mailaddr"  class="form-control mailaddr"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="mailaddr_d"  class="form-control"  value="false" type="hidden">
      <input id="mailaddr_d" name="mailaddr_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >CITY/ST/ZIP</label>
<div class="col-sm-3 inputGroupContainer " >
   <div class="input-group">
      <input id="mailcity" name="mailcity" placeholder="City" class="form-control mailcity"  value="" type="text" >
   </div>
</div>
<div class="col-sm-3 inputGroupContainer" >
   <div class="input-group">
      <input id="mailstate" name="mailstate" placeholder="State" class="form-control mailstate"  value="" type="text" >
   </div>
</div>
<div class="col-sm-3 inputGroupContainer " >
   <div class="input-group">
      <input id="mailzip" name="mailzip" placeholder="Zip" class="form-control mailzip"  value="" type="text" >
   </div>
</div>
<label class="col-sm-1 control-label "><div></div></label>

<label class="col-sm-2 control-label "><div></div>CHECKBOX</label>

<div class="col-sm-3 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="mailcity_d"  class="form-control"  value="false" type="hidden">
      <input id="mailcity_d" name="mailcity_d"  class="form-control mailcity"  value="" type="checkbox">
   </div>
</div>
<div class="col-sm-3 inputGroupContainer  ">
   <div class="input-group">
        <input  name="mailstate_d"  class="form-control"  value="false" type="hidden">
      <input id="mailstate_d" name="mailstate_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="mailzip_d"  class="form-control"  value="false" type="hidden">
      <input id="mailzip_d" name="mailzip_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "><div></div></label>

<label class="col-sm-2 control-label">VNUMBER</label>
<div class="col-sm-8 inputGroupContainer">
   <div class="input-group">
      <input id="vnumber" name="vnumber"  class="form-control vnumber required-right"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer">
   <div class="input-group">
        <input  name="vnumber_d"  class="form-control"  value="false" type="hidden">
      <input id="vnumber_d" name="vnumber_d"  class="form-control goodcall"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >ALTPHONE</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="altphone" name="altphone"  class="form-control altphone"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="altphone_d"  class="form-control"  value="false" type="hidden">
      <input id="altphone_d" name="altphone_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >FNUMBER</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="fnumber" name="fnumber"  class="form-control fnumber"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="fnumber_d"  class="form-control"  value="false" type="hidden">
      <input id="fnumber_d" name="fnumber_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >NNUMBER</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="nnumber" name="nnumber"  class="form-control nnumber"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="nnumber_d"  class="form-control"  value="false" type="hidden">
      <input id="nnumber_d" name="nnumber_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >WEB</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="web" name="web"  class="form-control web"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="web_d"  class="form-control"  value="false" type="hidden">
      <input id="web_d" name="web_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >EMAIL</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="email" name="email"  class="form-control email"  value="" type="email" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="email_d"  class="form-control"  value="false" type="hidden">
      <input id="email_d" name="email_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label">EXEC1</label>
<div class="col-sm-8 inputGroupContainer">
   <div class="input-group">
      <input id="exec1" name="exec1"  class="form-control exec1 required-right"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer">
   <div class="input-group">
        <input  name="exec1_d"  class="form-control"  value="false" type="hidden">
      <input id="exec1_d" name="exec1_d"  class="form-control goodcall"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label">OFFICERMAIL1</label>
<div class="col-sm-4 inputGroupContainer">
   <div class="input-group">
      <input id="officermail1" name="officermail1"  class="form-control officermail1"  value="" type="text" >
   </div>
</div>

<label class="col-sm-1 control-label">SEX</label>
<div class="col-sm-3 inputGroupContainer">
   <select class="form-control gender1" id="gender1" name="gender1">
      <option></option>
      <option value="M">Male</option>
      <option value="F">Female</option>
      <option value="Dr">Dr</option>
   </select>
</div>
<div class="col-sm-2 inputGroupContainer">
   <div class="input-group">
      <input  name="gender1_d"  class="form-control"  value="false" type="hidden">
      <input id="gender1_d" name="gender1_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label">TITLE1</label>
<div class="col-sm-8 inputGroupContainer">
   <div class="input-group">
      <input id="title1" name="title1"  class="form-control title1 required-right"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer">
   <div class="input-group">
        <input  name="title1_d"  class="form-control"  value="false" type="hidden">
      <input id="title1_d" name="title1_d"  class="form-control goodcall"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >EXEC2</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="exec2" name="exec2"  class="form-control exec2"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="exec2_d"  class="form-control"  value="false" type="hidden">
      <input id="exec2_d" name="exec2_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >OFFICERMAIL2</label>
<div class="col-sm-4 inputGroupContainer " >
   <div class="input-group">
      <input id="officermail2" name="officermail2"  class="form-control officermail2"  value="" type="text" >
   </div>
</div>
<label class="col-sm-1 control-label "  >SEX</label>
<div class="col-sm-3 inputGroupContainer " >
   <select class="form-control gender2" id="gender2" name="gender2">
      <option></option>
      <option value="M">Male</option>
      <option value="F">Female</option>
      <option value="Dr">Dr</option>
   </select>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <input  name="gender2_d"  class="form-control"  value="false" type="hidden">
      <input id="gender2_d" name="gender2_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >TITLE2</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="title2" name="title2"  class="form-control title2"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="title2_d"  class="form-control"  value="false" type="hidden">
      <input id="title2_d" name="title2_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >EXEC3</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="exec3" name="exec3"  class="form-control exec3"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="exec3_d"  class="form-control"  value="false" type="hidden">
      <input id="exec3_d" name="exec3_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >OFFICERMAIL3</label>
<div class="col-sm-4 inputGroupContainer " >
   <div class="input-group">
      <input id="officermail3" name="officermail3"  class="form-control officermail3"  value="" type="text" >
   </div>
</div>
<label class="col-sm-1 control-label "  >SEX</label>
<div class="col-sm-3 inputGroupContainer " >
   <select class="form-control gender3" id="gender3" name="gender3">
      <option></option>
      <option value="M">Male</option>
      <option value="F">Female</option>
      <option value="Dr">Dr</option>
   </select>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <input  name="gender3_d"  class="form-control"  value="false" type="hidden">
      <input id="gender3_d" name="gender3_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >TITLE3</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="title3" name="title3"  class="form-control title3"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="title3_d"  class="form-control"  value="false" type="hidden">
      <input id="title3_d" name="title3_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >EXEC4</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="exec4" name="exec4"  class="form-control exec4"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="exec4_d"  class="form-control"  value="false" type="hidden">
      <input id="exec4_d" name="exec4_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >OFFICERMAIL4</label>
<div class="col-sm-4 inputGroupContainer " >
   <div class="input-group">
      <input id="officermail4" name="officermail4"  class="form-control officermail4"  value="" type="text" >
   </div>
</div>
<label class="col-sm-1 control-label "  >SEX</label>
<div class="col-sm-3 inputGroupContainer " >
   <select class="form-control gender4" id="gender4" name="gender4">
      <option></option>
      <option value="M">Male</option>
      <option value="F">Female</option>
      <option value="Dr">Dr</option>
   </select>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="gender4_d"  class="form-control"  value="false" type="hidden">
      <input id="gender4_d" name="gender4_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >TITLE4</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="title4" name="title4"  class="form-control title4"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="title4_d"  class="form-control"  value="false" type="hidden">
      <input id="title4_d" name="title4_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >EXEC5</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="exec5" name="exec5"  class="form-control exec5"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="exec5_d"  class="form-control"  value="false" type="hidden">
      <input id="exec5_d" name="exec5_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label " >OFFICERMAIL5</label>
<div class="col-sm-4 inputGroupContainer" >
   <div class="input-group">
      <input id="officermail5" name="officermail5"  class="form-control officermail5"  value="" type="text" >
   </div>
</div>
<label class="col-sm-1 control-label "  >SEX</label>
<div class="col-sm-3 inputGroupContainer " >
   <select class="form-control gender5" id="gender5" name="gender5">
      <option></option>
      <option value="M">Male</option>
      <option value="F">Female</option>
      <option value="Dr">Dr</option>
   </select>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="gender5_d"  class="form-control"  value="false" type="hidden">
      <input id="gender5_d" name="gender5_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >TITLE5</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="title5" name="title5"  class="form-control title5"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="title5_d"  class="form-control"  value="false" type="hidden">
      <input id="title5_d" name="title5_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >EXEC6</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="exec6" name="exec6"  class="form-control exec6"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="exec6_d"  class="form-control"  value="false" type="hidden">
      <input id="exec6_d" name="exec6_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >OFFICERMAIL6</label>
<div class="col-sm-4 inputGroupContainer " >
   <div class="input-group">
      <input id="officermail6" name="officermail6"  class="form-control officermail6"  value="" type="text" >
   </div>
</div>
<label class="col-sm-1 control-label "  >SEX</label>
<div class="col-sm-3 inputGroupContainer " >
   <select class="form-control gender6" id="gender6" name="gender6">
     <option></option>
      <option value="M">Male</option>
      <option value="F">Female</option>
      <option value="Dr">Dr</option>
   </select>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group">
      <input  name="gender6_d"  class="form-control"  value="false" type="hidden">
      <input id="gender6_d" name="gender6_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label " >TITLE6</label>
<div class="col-sm-8 inputGroupContainer" >
   <div class="input-group">
      <input id="title6" name="title6"  class="form-control title6"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="title6_d"  class="form-control"  value="false" type="hidden">
      <input id="title6_d" name="title6_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >EXEC7</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="exec7" name="exec7"  class="form-control exec7"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="exec7_d"  class="form-control"  value="false" type="hidden">
      <input id="exec7_d" name="exec7_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >OFFICERMAIL7</label>
<div class="col-sm-4 inputGroupContainer " >
   <div class="input-group">
      <input id="officermail7" name="officermail7"  class="form-control officermail7"  value="" type="text" >
   </div>
</div>
<label class="col-sm-1 control-label "  >SEX</label>
<div class="col-sm-3 inputGroupContainer " >
   <select class="form-control gender7" id="gender7" name="gender7">
      <option></option>
      <option value="M">Male</option>
      <option value="F">Female</option>
      <option value="Dr">Dr</option>
   </select>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
       <input  name="gender7_d"  class="form-control"  value="false" type="hidden">
      <input id="gender7_d" name="gender7_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >TITLE7</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="title7" name="title7"  class="form-control title7"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="title7_d"  class="form-control"  value="false" type="hidden">
      <input id="title7_d" name="title7_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >EXEC8</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="exec8" name="exec8"  class="form-control exec8"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="exec8_d"  class="form-control"  value="false" type="hidden">
      <input id="exec8_d" name="exec8_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >OFFICERMAIL8</label>
<div class="col-sm-4 inputGroupContainer " >
   <div class="input-group">
      <input id="officermail8" name="officermail8"  class="form-control officermail8"  value="" type="text" >
   </div>
</div>
<label class="col-sm-1 control-label "  >SEX</label>
<div class="col-sm-3 inputGroupContainer " >
   <select class="form-control gender8" id="gender8" name="gender8">
      <option></option>
      <option value="M">Male</option>
      <option value="F">Female</option>
      <option value="Dr">Dr</option>
   </select>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <input  name="gender8_d"  class="form-control"  value="false" type="hidden">
      <input id="gender8_d" name="gender8_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >TITLE8</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="title8" name="title8"  class="form-control title8"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="title8_d"  class="form-control"  value="false" type="hidden">
      <input id="title8_d" name="title8_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >EXEC9</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="exec9" name="exec9"  class="form-control exec9"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="exec9_d"  class="form-control"  value="false" type="hidden">
      <input id="exec9_d" name="exec9_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >OFFICERMAIL9</label>
<div class="col-sm-4 inputGroupContainer " >
   <div class="input-group">
      <input id="officermail9" name="officermail9"  class="form-control officermail9"  value="" type="text" >
   </div>
</div>
<label class="col-sm-1 control-label "  >SEX</label>
<div class="col-sm-3 inputGroupContainer " >
   <select class="form-control gender9" id="gender9" name="gender9">
      <option></option>
      <option value="M">Male</option>
      <option value="F">Female</option>
      <option value="Dr">Dr</option>
   </select>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <input  name="gender9_d"  class="form-control"  value="false" type="hidden">
      <input id="gender9_d" name="gender9_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >TITLE9</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="title9" name="title9"  class="form-control title9"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="title9_d"  class="form-control"  value="false" type="hidden">
      <input id="title9_d" name="title9_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >EXEC10</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="exec10" name="exec10"  class="form-control exec10"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="exec10_d"  class="form-control"  value="false" type="hidden">
      <input id="exec10_d" name="exec10_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<label class="col-sm-2 control-label "  >OFFICERMAIL10</label>
<div class="col-sm-4 inputGroupContainer " >
   <div class="input-group">
      <input id="officermail10" name="officermail10"  class="form-control officermail10"  value="" type="text" >
   </div>
</div>
<label class="col-sm-1 control-label "  >SEX</label>
<div class="col-sm-3 inputGroupContainer " >
   <select class="form-control gender10" id="gender10" name="gender10">
      <option></option>
      <option value="M">Male</option>
      <option value="F">Female</option>
      <option value="Dr">Dr</option>
   </select>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <input  name="gender10_d"  class="form-control"  value="false" type="hidden">
      <input id="gender10_d" name="gender10_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >TITLE10</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="title10" name="title10"  class="form-control title10"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="title10_d"  class="form-control"  value="false" type="hidden">
      <input id="title10_d" name="title10_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>


<label class="col-sm-2 control-label">PRODUCTS</label>
<div class="col-sm-8 inputGroupContainer">
   <div class="input-group">
      <textarea id="products" name="products"  class="form-control md-textarea products required-right"  value="" rows="3" ></textarea>
   </div>
</div>
<div class="col-sm-2 inputGroupContainer">
   <div class="input-group">
        <input  name="products_d"  class="form-control"  value="false" type="hidden">
      <input id="products_d" name="products_d"  class="form-control goodcall"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label">LOCCOUNT</label>
<div class="col-sm-8 inputGroupContainer">
   <div class="input-group">
      <input id="loccount" name="loccount"  class="form-control loccount required-right"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer">
   <div class="input-group">
        <input  name="loccount_d"  class="form-control"  value="false" type="hidden">
      <input id="loccount_d" name="loccount_d"  class="form-control goodcall"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-3 control-label "  >EMPCHGREASON</label>
<div class="col-sm-7 inputGroupContainer " >
   <div class="input-group">
      <input id="empchgreason" name="empchgreason"  class="form-control empchgreason"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<label class="col-sm-2 control-label "  >YEARESTAB</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="yearestab" name="yearestab"  class="form-control yearestab"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="yearestab_d"  class="form-control"  value="false" type="hidden">
      <input id="yearestab_d" name="yearestab_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >DISTRIBTYPE</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="distribtyp" name="distribtyp"  class="form-control distribty distribtyp"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="distribtyp_d"  class="form-control"  value="false" type="hidden">
      <input id="distribtyp_d" name="distribtyp_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >OWNERTYPE</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="ownertype" name="ownertype"  class="form-control  ownertype"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="ownertype_d"  class="form-control"  value="false" type="hidden">
      <input id="ownertype_d" name="ownertype_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >SALES</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="sales" name="sales"  class="form-control   sales"  value="" type="text" >
      </select>
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="sales_d"  class="form-control"  value="false" type="hidden">
      <input id="sales_d" name="sales_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >SQUAREFEET</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="squarefeet" name="squarefeet"  class="form-control   squarefeet"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="squarefeet_d"  class="form-control"  value="false" type="hidden">
      <input id="squarefeet_d" name="squarefeet_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >IMPORTS</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="imports" name="imports"  class="form-control imports"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="imports_d"  class="form-control"  value="false" type="hidden">
      <input id="imports_d" name="imports_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >PARENTNAME</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="parentname" name="parentname"  class="form-control parentname"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="parentname_d"  class="form-control"  value="false" type="hidden">
      <input id="parentname_d" name="parentname_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >PADDRESS</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="paddress" name="paddress"  class="form-control paddress"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="paddress_d"  class="form-control"  value="false" type="hidden">
      <input id="paddress_d" name="paddress_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >CITY/ST/ZIP</label>
<div class="col-sm-3 inputGroupContainer " >
   <div class="input-group">
      <input id="parentcity" name="parentcity" placeholder="City"  class="form-control  parentcity"  value="" type="text" >
   </div>
</div>
<div class="col-sm-3 inputGroupContainer " >
   <div class="input-group">
      <input id="parentstat" name="parentstat" placeholder="State"  class="form-control  parentstat"  value="" type="text" >
   </div>
</div>
<div class="col-sm-3 inputGroupContainer " >
   <div class="input-group">
      <input id="pzip5" name="pzip5"  placeholder="Zip" class="form-control pzip5"  value="" type="text" >
   </div>
</div>
<label class="col-sm-1 control-label"><div></div></label>

<label class="col-sm-2 control-label"><div></div>CHECKBOX</label>

<div class="col-sm-3 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="parentcity_d"  class="form-control"  value="false" type="hidden">
      <input id="parentcity_d" name="parentcity_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>

<div class="col-sm-3 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="parentstat_d"  class="form-control"  value="false" type="hidden">
      <input id="parentstat_d" name="parentstat_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>


<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="pzip5_d"  class="form-control"  value="false" type="hidden">
      <input id="pzip5_d" name="pzip5_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label"><div></div></label>
<!-- ONUMBER CHANGE TO PARENT PHONE LABEL -->
<label class="col-sm-3 control-label "  >PARENT PHONE</label>
<div class="col-sm-7 inputGroupContainer " >
   <div class="input-group">
      <input id="onumber" name="onumber"  class="form-control onumber"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
        <input  name="onumber_d"  class="form-control"  value="false" type="hidden">
      <input id="onumber_d" name="onumber_d"  class="form-control"  value="" type="checkbox">
   </div>
</div>
<label class="col-sm-2 control-label "  >ADVERTISER</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
 <!--      <input id="advertiser" name="advertiser"  class="form-control advertiser"  value="" type="text" > -->
      <!-- <input id="advertiser_" name="advertiser_"  class="form-control advertiser_"  value="" type="text" > -->
         <select class="form-control advertiser" id="advertiser" name="advertiser">
            <option></option>
            <option value="No">No</option>
            <option value="Yes">Yes</option>
         </select>
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<label class="col-sm-2 control-label "  >COMPANYID</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="companyid" name="companyid"  class="form-control companyid"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<div class = "hidden-fields">
   <label class="col-sm-2 control-label "  >HEADER</label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <input id="header" name="header"  class="form-control header"  value="" type="text" >
      </div>
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
   <label class="col-sm-2 control-label "  >PRIMARYSIC</label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <input id="primarysic" name="primarysic"  class="form-control primarysic"  value="" type="text" >
      </div>
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
   <label class="col-sm-2 control-label "  >SIC2</label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <input id="sic2" name="sic2"  class="form-control sic2"  value="" type="text" >
      </div>
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
   <label class="col-sm-2 control-label "  >DATASOURCE</label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <input id="datasource" name="datasource"  class="form-control datasource"  value="" type="text" >
      </div>
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
</div>


<label class="col-sm-2 control-label "  >CONTACT</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="contact" name="contact"  class="form-control contact"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<div class = "hidden-fields">
   <label class="col-sm-2 control-label"  ></label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <input id="odatetime" name="odatetime"  class="form-control odatetime"  value="" type="hidden" >
      </div>
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
   <label class="col-sm-2 control-label "  ></label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <!-- <input id="ocommetns" name="ocommetns"  class="form-control ocommetns"  value="" type="hidden" > -->
      </div>
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
   <label class="col-sm-2 control-label ">tdatetime</label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
          <input id="tdatetime" name="tdatetime"  class="form-control tdatetime"  value="" type="hidden" >
      </div>
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
  <!--  <label class="col-sm-2 control-label">tcomments</label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <input id="tcomments" name="tcomments"  class="form-control tcomments"  value="" type="text" >
      </div>
   </div> -->
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
   <label class="col-sm-2 control-labe"></label>
<!--    <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <input id="fcomments" name="fcomments"  class="form-control fcomments"  value="" type="text" >
      </div>
   </div> -->
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
   <label class="col-sm-2 control-label">fdatetime</label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <input id="fdatetime" name="fdatetime"  class="form-control fdatetimes"  value="" type="hidden">
      </div>
   </div>
</div>
<div class = "hidden-fields">
   <label class="col-sm-2 control-label "  >OPERATOR</label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <input id="operator" name="operator"  class="form-control operator"  value="" type="text" >
      </div>
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
   <label class="col-sm-2 control-label "  >CONFDATE</label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <input id="confdate" name="confdate"  class="form-control confdate"  value="" type="date" >
      </div>
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
   <label class="col-sm-2 control-label "  >LISTNUM</label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <input id="listnum" name="listnum"  class="form-control listnum"  value="" type="text" >
      </div>
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
   <label class="col-sm-2 control-label "  >QEFLAG</label>
   <div class="col-sm-8 inputGroupContainer " >
    <!--   <div class="input-group">
         <input id="qeflag" name="qeflag"  class="form-control qeflag"  value="" type="text" >
      </div> -->
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
</div>
<label class="col-sm-2 control-label "  >BOOKID</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="bookid" name="bookid"  class="form-control bookid"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<label class="col-sm-2 control-label "  >NEWINYEAR</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="newinyear" name="newinyear"  class="form-control newinyear"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<div class="hidden-fields">
   <label class="col-sm-2 control-label "  >PDATETIME</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="pdatetime" name="pdatetime"  class="form-control pdatetime"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<label class="col-sm-2 control-label "  >PCOMMENTS</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="pcomments" name="pcomments"  class="form-control pcomments"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<label class="col-sm-2 control-label ">OAGENT</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">

      <input id="oagent" name="oagent"  class="form-control oagent"  value="" type="hidden" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<label class="col-sm-2 control-label "  >TAGENT</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="tagent" name="tagent"  class="form-control tagent"  value="test" type="hidden" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<label class="col-sm-2 control-label "  >FAGENT</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="fagent" name="fagent"  class="form-control fagent"  value="" type="hidden" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<label class="col-sm-2 control-label "  >4DATETIME</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="datetime4" name="datetime4"  class="form-control datetime4"  value="" type="hidden" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>

<label class="col-sm-2 control-label "  >4AGENT</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="agent4" name="agent4"  class="form-control agent4"  value="" type="hidden" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<label class="col-sm-2 control-label "  >5DATETIME</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="datetime5" name="datetime5"  class="form-control datetime5"  value="" type="hidden" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>

<label class="col-sm-2 control-label "  >5AGENT</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="agent5" name="agent5"  class="form-control agent5"  value="" type="hidden" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
<label class="col-sm-2 control-label "  >PRIORITY</label>
<div class="col-sm-8 inputGroupContainer " >
   <div class="input-group">
      <input id="priority" name="priority"  class="form-control priority"  value="" type="text" >
   </div>
</div>
<div class="col-sm-2 inputGroupContainer  ">
   <div class="input-group  ">
      <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
   </div>
</div>
   <label class="col-sm-3 control-label "  >SYSGENCOMMENTS</label>
   <div class="col-sm-7 inputGroupContainer " >
      <div class="input-group">
         <input id="sysgencomments" name="sysgencomments"  class="form-control sysgencomments"  value="" type="text" >
      </div>
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
   <label class="col-sm-2 control-label "  >ADDRESSERROR</label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <input id="addresserror" name="addresserror"  class="form-control addresserror"  value="" type="text" >
      </div>
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
   <label class="col-sm-2 control-label "  >DPVFOOTNOTE</label>
   <div class="col-sm-8 inputGroupContainer " >
      <div class="input-group">
         <input id="dpvfootnote" name="dpvfootnote"  class="form-control dpvfootnote"  value="" type="text" >
      </div>
   </div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
</div>
<label class="col-sm-2 control-label">COMMENTS</label> 
<div class="inputGroupContainer col-sm-8">
   <div id = "prevcomment"></div>

</div>
   <div class="col-sm-2 inputGroupContainer  ">
      <div class="input-group  ">
         <!-- <input id="compname" name="compname"  class="form-control"  value="" type="checkbox"> -->
      </div>
   </div>
   
<!-- Disposition -->


<label class="col-sm-2 control-label">FDISP</label> 
<div class="inputGroupContainer col-sm-8">
   <select class="form-control" id="fdisp" name="fdisp">
      <option></option>
      <option id = "good-update" disabled="disabled" value="01-Good update">01-Good Update</option>
      <option value="03-Incomplete Update">03-Incomplete Update</option>
      <option value="05-Already Answered">05-Already Answered</option>
      <option value="06-No Manufacturing">06-No Manufacturing</option>
      <option value="07-Out of Business">07-Out of Business</option>
      <option value="08-Send Information">08-Send Information</option>
      <option value="09-Refusal/Unworkable">09-Refusal/Unworkable</option>
      <option value="10-Wrong Number">10-Wrong Number</option>
      <option value="11-Answering Machine">11-Answering Machine</option>
      <option value="12-Callback">12-Callback</option>
      <option value="13-Other">13-Other</option>
      <option value="17-No Answer">17-No Answer</option>
      <option value="18-Busy">18-Busy</option>
      <option value="22-Do Not Call">22-Do Not Call</option>
      <option value="19-Will Go Online">19-Will Go Online</option>
      <option value="96-1st Pass Unworkable">96-1st Pass Unworkable</option>
      <option value="97-Callback requested">97-Callback requested</option>
      <option value="98-2x No Answer (priority 7/8/9)">98-2x No Answer (priority 7/8/9)</option>
      <option value="99-AM 3x">99-AM 3x</option>
   </select>
</div>