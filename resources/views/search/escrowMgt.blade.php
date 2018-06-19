@extends ('layouts.master')

@section ('content')
  @include ('layouts.searchBar')
   <div class="container">
    <div class="row">
    <div class="col-md-3">
    <h1>Dashboard</h1>
    <div id="nav" class="list-group">
    <a href="#content1" class="list-group-item">Profile<span class="badge">Click</span></a>
    <a href="#content2" class="list-group-item">Account<span class="badge">Click</span></a>
    <a href="#content3" class="list-group-item">Notification<span class="badge">Click</span></a>
    <a href="#content4" class="list-group-item">My Stuffs<span class="badge">Click</span></a>
    <a href="#content5" class="list-group-item">Add New Files<span class="badge">Click</span> </a>
    <a href="#content6" class="list-group-item">Withdrawal <span class="badge">Click</span></a>
    <a href="#content7" class="list-group-item">Logout  <span class="badge">Click</span></a>
</div>
   
    </div>
    <div class="col-md-9">
    <h1 class="text-center">Hey there! Welcome to Resource Centre!</h1>
    <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-9" style="bo.rder: 3px solid black">
    <div id="mydiv" class="toggle"  style="display:none">
    <h5 class="text-uppercase"> lets work together to acheive great things</h5>
    </div>
    <div id="content1" class="toggle" style="display:none">@include('search.profile')</div> 
    <div id="content2" class="toggle" style="display:none">@include('search.account')</div>
    <div id="content3" class="toggle" style="display:none"><p>Hi (username) , Eze onyekachi puchased your book (Bookname)<small>On the 16th of july 2017</small></p></div>
    <div id="content4" class="toggle" style="display:none">show the stuff4</div>
    <div id="content5" class="toggle" style="display:none">show the stuff5</div>
    <div id="content6" class="toggle" style="display:none">show the stuff6</div>
    <div id="content7" class="toggle" style="display:none">show the stuff7</div>
    
      
    </div>   
   </div> 	
    </div>
    	
    </div>
   	
   </div>
{{Html::script("assets/js/jquery-2.1.4.min.js")}};
{{Html::script("assets/js/style.js")}};

@endsection