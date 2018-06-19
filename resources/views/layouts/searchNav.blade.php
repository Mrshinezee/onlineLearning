                       <div class="container ">
                                <div class="row">
                                	<div class="col-md-12 col-sm-12" > 
                                        <ul class="nav nav-tabs">
                                        
                                         <li role="presentation"
                                          @if(Request::path() === 'searchD' )
                                          class="active" 
                                           @endif
                                          ><a href="{{url('searchD')}}">Doc</a></li>
                                           
                                           
                                          <li role="presentation"
                                          @if(Request::path() === 'searchA' )
                                          class="active" 
                                           @endif
                                          ><a href="{{url('searchA')}}"  >Audio
                                         
                                          </a></li>
                                          <li role="presentation"
                                          @if(Request::path() === 'searchV' )
                                          class="active" 
                                           @endif
                                          ><a href="{{url('searchV')}}">Video</a></li>
                                      </ul>
                               </div>
                                </div>
                                 </div>


                                 