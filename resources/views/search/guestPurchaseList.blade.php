 @extends ('layouts.master')


             @section ('content')
             @include ('layouts.searchBar')

                                @include ('layouts.searchNav')
             <div class="container">
             <div class="row">
             <div class="col-md-4">
             </div>

              <div class="col-md-8">
              <form>
             <div class="form-group">
		    <label class="control-label " for="location"><h2>Your Location:</h2></label>
		        <input type="email" class="form-control" id="email" placeholder=" ">
		    </div>

		    <div class="form-group">
		         <div class="row">
		          <div class="col-md-6">
		    <label class="control-label " for="name"><h5>Firstname:</h5></label>
		        <input type="email" class="form-control" id="Firstname" placeholder=" ">
                  </div>
                  <div class="col-md-6">
		        <label class="control-label " for="name"><h5>Lastname:</h5></label>
		        <input type="email" class="form-control" id="Lastname" placeholder=" ">
		         </div>
		        </div>
              </div>

              <div class="form-group">
		         <div class="row">
		          <div class="col-md-6">
		    <label class="control-label " for="Address"><h5>Street Address:</h5></label>
		        <input type="email" class="form-control" id="Address1" placeholder=" ">
                  </div>
                  <div class="col-md-6">
		        <label class="control-label " for="Address"><h5>Street Address (optional):</h5></label>
		        <input type="email" class="form-control" id="Address2" placeholder=" ">
		         </div>
		        </div>
              </div>

              <div class="form-group">
		         <div class="row">
		          <div class="col-md-6">
		    <label class="control-label " for="email"><h5>Email:</h5></label>
		        <input type="email" class="form-control" id="email" placeholder=" ">
                  </div>
                  <div class="col-md-6">
		        <label class="control-label " for="emailConfirm"><h5>Email Confirmation:</h5></label>
		        <input type="email" class="form-control" id="emailConfirm" placeholder=" ">
		         </div>
		        </div>
              </div>

              <div class="form-group">
              <button type="submit" class="btn btn-success pull-right">Search</button>
              </div>
              </form>
              <br>

             </div>
             </div>
             </div>
             @endsection