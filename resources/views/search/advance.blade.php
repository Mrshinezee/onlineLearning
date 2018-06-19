           @extends ('layouts.master')


             @section ('content')
                               @include ('layouts.searchBar')

                                @include ('layouts.searchNav')
                                <div class="container ">
                            <div class="row">
                            <div class="col-md-3 col-sm-2">

                              <h4>Organize by</h4>
                              <h5>Months</h5>
                                 <div class="checkbox">
                             <label><input type="checkbox" value="">July(20)</label>
                                </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="">June(93)</label>
                             </div>
                            <div class="checkbox disabled">
                           <label><input type="checkbox" value="" >May(143)</label>
                           </div> 
                            </div>
                                <div class="col-md-9 col-sm-10">
                                 
                                  <form class="form-horizontal"  >
  <div class="form-group">
    <label class="control-label " for="email"><h2>Search for:</h2></label>
        <input type="email" class="form-control" id="email" placeholder=" ">
  </div>

  <div class="form-group">
        <select class="custom-select">
  			<option selected>All Classes</option>
  			<option value="1">Jss1</option>
  			<option value="2">Jss2</option>
  			<option value="3">Jss3</option>
  			<option value="4">Sss1</option>
  			<option value="5">Sss2</option>
  			<option value="6">Sss3</option>
		</select>
  </div>
 
  <div class="form-group" style="padding:2px ">
  <label class="control-label " for="check"><h5><b>sort by:</b></h5></label>
      <div class="checkbox">
        <div><label><input type="checkbox"> Art</label></div>
        <div><label><input type="checkbox"> Science</label></div>
        
      </div>
    
<br>
<div class=" form-group">
<select name="srcSel" multiple="" size="6">
<option value="1" selected=""> - All Courses -</option>
<option value="2"> Agricultural </option>
<option value="3"> Basic Elect</option>
<option value="4"> Basic Science</option>
<option value="5"> Basic Tech</option>
<option value="6"> Biology</option>
<option value="7"> Book keeping</option>
<option value="8"> Arts </option>
<option value="9"> Chemistry</option>
<option value="10"> Computer Studies</option>
<option value="11"> Civic</option>
<option value="12"> Christain Religous Studies</option>
<option value="13"> Data processing</option>
<option value="14"> Departmatal Courses</option>
<option value="15"> Economics</option>
<option value="16"> English</option>
<option value="17"> Financial Accounting</option>
<option value="18"> Food and Nutrition</option>
<option value="19"> French</option>
<option value="20"> Futhermaths</option>
<option value="21"> Geography</option>
<option value="22"> History</option>
<option value="23"> Literature in English</option>
<option value="24"> Mathematics</option>
<option value="25"> Nigerian Languages</option>
<option value="26"> Physical Health education</option>
<option value="27"> Physics </option>
<option value="28"> Social Sciences</option>
<option value="29"> Tech Drawing</option>
</select>
</div>

  <div class="form-group">
      <button type="submit" class="btn btn-success">Search</button>
    </div>
  </div>
</form> 
                                </div>
                                </div>
                                </div>
                                </div>
              @endsection
                                 