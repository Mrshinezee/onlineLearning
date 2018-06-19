<div class="bgcolour">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:green;"><span class="glyphicon glyphicon-lock text-center"></span> Please login to purchase the item</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="#">
          {{ csrf_field() }}
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
			  <input type="email" class="col-md-6 form-control" name="email" id="email" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
              <label for="pwd"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
			  <input type="password"  class="col-md-6 form-control" name="password" id="pwd" placeholder="Enter Your password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Sign In</button>
          </form>
        </div>
        <div class="modal-footer">
         <!-- <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> -->
          <p><small>Not a member? <a href="#">Sign Up</a></small></p>
        </div>
      </div>

    </div>
  
  

{{Html::script('assets/js/jquery-2.1.4.min.js')}}
{{Html::script('assets/js/bootstrap.min.js')}}