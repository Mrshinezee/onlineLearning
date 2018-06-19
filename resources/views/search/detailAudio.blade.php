@extends ('layouts.master')


@section ('content')
                               @include ('layouts.searchBar')

                                @include ('layouts.searchNav')
                                 
                           
                            <div class="container ">
                            <div class="row">

                            <div class="col-md-4 col-sm-3">
                            	 <button type="submit" class="btn btn-success">Add to bookshelf</button>
                                 <br>
                                 <h5>Related textbooks</h5>
                                 <a>Engineering Priniciples</a>
                           </div> 

                            

                                <div class="col-md-7 col-sm-8" >
                                                <div class="search-content">
                                                <img  src="{{url('assets/images/mp3.png')}}" alt="Educare Document" class="img-responsive center-block">

                                                <button type="button" class="btn btn-success btn-block " id="myBtn" data-toggle="modal" data-target="#myModal">PURCHASE AUDIO</button>
                                                 
                                                





                                                    <h4 class="search-title text-center text-uppercase">
                                                        <a href="{{url('detailAudio')}}"> {{$searchDetail->title}} <em> (Mp3) </em></a>
                                                    </h4>
                                                    <h5 class="info">{{$searchDetail->subTitle}}</h5>
                                                    <p class="Authors"> {{$searchDetail->author}} </p>
                                                    <hr>
                                                    <h4><em>Description</em></h4>

                                                     <p><small>{{$searchDetail->description}}</small></p>
                                                </div>
                                               </div> 


                                      </div>
                                       </div>
                                       @include ('layouts.modal')
                                    </div>
                                    
                    @endsection