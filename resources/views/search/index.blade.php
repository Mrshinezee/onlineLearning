
 @extends ('layouts.master')

Session::put('name', $search);
@section ('content')
 <div id="container" style="width: 100%; bor.der: 3px solid blue">

 <div class="bgimage" style="background-image: url(assets/images/Bookshelves.jpg); background-position: center center;background-size: cover; height: 500px">
   <div id="form-cont" style="width: 60%; bo.rder: 2px solid red; height: 200px; margin-left: auto; margin-right: auto; position: relative; top: 100px; background-color: rgba(25, 25, 25, 0.5); opacity: 90">
       <div class="search-input" style="width: 60%; height: 40px; position: relative; top: 80px; bor.der: 2px solid green; mar.gin-left: auto; margi.n-right: auto; float: left; margin-left: 100px">
   {!! Form::open(['method'=>'GET','url'=>'searchD','role'=>'search'])  !!}

    {{ csrf_field() }}
   <div class="col-md-14 col-sm-14 col-xs-14" >
  <input id="search" type="text" class="col-md- form-control" name="search" placeholder="Explore subjects, topics">
   </div>
       </div>
       <div class="search-button" style="width: 20%; height: 40px; position: relative; top: 80px; bor.der: 2px solid blue; float: left">
         <div class="col-md-8 col-sm-8 col-xs-8">
  <button type="submit" style="position: relative; bottom: 5px" id="searchbut" class="btn btn-default btn-success btn-block search"> search </button>
  {!! Form::close() !!}
  </div>
       </div>

        <div id="advanced" style="width: 50%; height: 40px; position: relative; top: 80px; bor.der: 2px solid green; mar.gin-left: auto; margi.n-right: auto; float: left; margin-left: 100px">
                <a href="{{url('advance')}}"><h4>Advanced Search</h4></a>
        </div>
   </div>
 </div>
   

 </div>

@endsection