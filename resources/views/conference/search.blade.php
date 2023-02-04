<!DOCTYPE html>
<link rel="stylesheet" href="{{ URL::asset('in.css') }}">
<html>
<head>
    <link rel="stylesheet" href="{{ URL::asset('in.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--<title>Admin Dashboard Panel</title>--> 
</head>
<body style="background-color: #F0F2F5;">
    
                            <form action="{{route('conference.search')}}" method="GET" role="search">
                                @csrf
                                <div class="topp">
                                    <h4 >Caumunté de reviewers</h4>
                                    <div class="search-box">
                                        <i class="uil uil-search"></i>
                                        <input type="text" name="search" placeholder="Search here..." >
                                        
                                    </div>
                                  </div>
                                  <button class="btn btn-primary" type="submit">Search</button>
                            </form>
                            @if(isset($Title))
                            @if (count($Title)>1)
                          <div class="row " style="margin-left:0px; margin-top:20px;" >
                          <div class="alert alert-danger" role="alert">
                                     there is no conference created yet
                          </div>
                          </div>
                    @endif
                    @endif

                              
                            
                            <div style="margin-left: 20px; width: 405px; margin-top: 20px;">
                                <div class="card card-body " id="destination" style="overflow: auto;overflow-y: scroll;height: 250px;">
                                    <div class="container">
                                        <div class="row ">
                                            @if(isset($pesakit))
                                            @foreach ($pesakit as $gg)
                                            <div class="col ">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="margin-left:-20px;margin-bottom: 15px;">
                                                <label for="vehicle1"> {{$gg->name}}</label>
                                                <i class="uil uil-envelope icon" style="margin-left:150px;"></i>
                                            </div>
                                            @endforeach  
                                            @endif                                          
                                </div>
                              </div>
                        </div>
                            
                          </div>
                          
                            
    <script src="bb.js"></script>
</body>
</html>