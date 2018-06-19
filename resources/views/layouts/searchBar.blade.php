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
                                            <input type="text" class="form-control" name="search" placeholder="Search for..."></div>
                                              <div class="col-md-2 col-sm-2"style="bor.der: 2px solid black;width: 10%;">
                                                <button class="btn btn-default btn-success btn-block search" type="submit">Search</button>
                                                </div>
                                       </form>
                                    <div class="col-md-4 col-sm-4" style="bor.der: 2px solid black;width: 20%;">
                                        <p><a href="{{url('advance')}}"> Advanced Search </a></p>

                                    </div>
                                </div>
                                </div>

