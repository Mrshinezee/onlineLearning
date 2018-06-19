@extends ('layouts.master')
$value = $request->session()->get('name');

@section ('content')
                              <div class="container"style="bor.der: 2px solid blue; padding-top: 20px">
          <div class="row">
                 <div class="col-md-12 col-sm-12">
                      <h3 class="page-title"> Search Results 
                            <small>sorted by relevance |<a> Date</a></small>
                        </h3></div></div></div>
                        

                        
                        <div class="container " style="bor.der: 2px solid red">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6"style="bor.der: 2px solid black; width: 70%;">
                                     <form method="GET", action="searchD" , role = "search">  
                                    
                                    {{ csrf_field() }}

                                            <input type="text" class="form-control" name="search" placeholder="$value"></div>
                                              <div class="col-md-2 col-sm-2"style="bor.der: 2px solid black;width: 10%;">
                                                <button class="btn btn-default btn-success btn-block search" type="submit">Search</button>
                                                </div>
                                       </form>
                                    <div class="col-md-4 col-sm-4" style="bor.der: 2px solid black;width: 20%;">
                                        <p><a href="{{url('advance')}}"> Advanced Search </a></p>

                                    </div>
                                </div>
                                </div>

                                @include ('layouts.searchNav')
                                 
                           
                            <div class="container ">
                            <div class="row">
                            <div class="col-md-4 col-sm-3">
                            	<h4>500 Related materials found</h4>
                            	<h5>Organize by</h5>
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

                                <div class="col-md-7 col-sm-8" >
         
                                        <ul class="list-unstyled">

                                            <li>
                                                
                                                <div class="search-content">
                                                        @empty($searchDocuments)
                                                          <h4> sorry, not found</h4>
                                                        @endempty

                                                   
                                                @forelse ($searchDocuments as $searchDocument)

                                                     <h4 class="search-title">
                                                        <a href="{{url('detailDoc')}}/{{ $searchDocument->id }}"> {{ $searchDocument->title }} <em>(Doc)</em></a>
                                                    </h4>
                                                    <h5 class="info">{{ $searchDocument->subTitle }}</h5>
                                                    <p class="Authors"> {{ $searchDocument->author }}</p>
                                                  </li>  
                                                   <br><br>
                                                 @empty
                                                <h5>Your search - ((  )) - did not match any documents.</h5>

                                                <p>Suggestions:<p>
                                                <ul>
                                                <li> Make sure that all words are spelled correctly.</li>
                                                <li>Try different keywords.</li>
                                                <li>Try more general keywords.</li>
                                                </ul>
                                                @endforelse

                                                

                                            </div>
                                            
                                            
                                            
                                        </ul>

                                        <div class="search-pagination">
                                            <ul class="pagination">
                                                <li class="page-active">
                                                    <a href="javascriptt:;"> 1 </a>
                                                </li>
                                                <li>
                                                    <a href="javascriptt:;"> 2 </a>
                                                </li>
                                                <li>
                                                    <a href="javascriptt:;"> 3 </a>
                                                </li>
                                                <li>
                                                    <a href="javascriptt:;"> 4 </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-md-1 col-sm-1"></div>
                                </div>
                                </div>
                    @endsection