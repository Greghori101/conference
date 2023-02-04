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
    <div class="container">
        <div class="row">
          <div class="col">
            <section class="dashboard">
                <div class="top">
                    <div class="search-box">
                        <i class="uil uil-search"></i>
                        <input type="text" placeholder="Search here...">
                    </div>
                    
                    <div class="bvb">
                        <i class="uil uil-bell"></i>
                    </div>
                    <img src={{ URL::asset('vb.jpg') }} alt=""> 
                </div>
        
        
            </section>
          </div>
          <div class="col">
            <div> 
                <nav>
                    <div class="logo-name">
                        <div class="logo-image">
                            <img src="{{ URL::asset('untitled-1.png') }}" alt="">
                        </div>
                    </div>
            
                    <div class="menu-items">
                        <ul class="nav-links">
                            <li><a  href="{{route('home')}}">
                                <i class="uil uil-estate"></i>
                                <span class="link-name">Dahsboard</span>
                            </a></li>
                            <li><a href="{{route('conferences')}}">
                                <i class="uil uil-files-landscapes"></i>
                                <span class="link-name">Conferences</span>
                            </a></li>
                            <li><a href="#">
                                <i class="uil uil-chart"></i>
                                <span class="link-name">My papers</span>
                            </a></li>
                            <li><a href="#">
                                <i class="uil uil-thumbs-up"></i>
                                <span class="link-name">paper for review</span>
                            </a></li>
                        </ul>
                    </div>
                </nav>  
            </div>
        </div>
        
     </div>
     <div class="container " >
        <div class="row" style="margin-left: 210px;margin-top: 40px;">
            <div class="col">
                <h1>Edit event</h1>
            </div>     
        </div>
        
           <div class="row" style="margin-left:220px;">
            <div class="col" >
                <form action="{{route('conference.update',['id'=>$conference->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (count($errors)>0)
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>
                                    {{$item}}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    <div>
                        <p class="ti">Conference details</P>
                    </div>
                    <div class="container">
                        <div class="row ">
                            <div class="col host">
                                <img src={{ URL::asset('vb.jpg') }} >
                              </div>
                          <div class="col user">
                            <p>Host -- username</p>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="cvv">
                            <div class="ww">
                                <input type="text" placeholder="event name" required name="title" value="{{$conference->title}}">
                                <i class="uil uil-user"></i>
                            </div>
                            <div class="ww">
                                <input type="text" placeholder=" theme de l'event" value="{{$conference->theme}}" required name="theme">
                                <i class="uil uil-user"></i>
                            </div>
                            <div class="ww">
                                <input type="text" placeholder="le sub theme" required value="{{$conference->subtheme}}"  name="subtheme">
                                <i class="uil uil-envelope icon" ></i>
                            </div>
                            <div class="ww">
                                <input type="text" placeholder="lieu de conference" required value="{{$conference->lieu}}" name="lieu">
                                <i class="uil uil-envelope icon" ></i>
                            </div>
                            <div class="ww">
                                <input type="tewt" placeholder="lien de conference" required value="{{$conference->link}}" name="link">
                                <i class="uil uil-envelope icon" ></i>
                            </div>
                        </div>
                        <div class="op">
                            <div >
                                <h5>Time:</h5>
                                <label for="birthday">Start day</label>
                                <input type="date"  name="date" class="start" id="birthday" value="{{$conference->date}}">
                                <label for="time" class="time">Start time</label>
                                <input type="time"  name="time" step="2" id="time" value="{{$conference->time}}" >
                            </div>
                            <div>
                                <h5 id="des">Desreption:</h5>
                                <div class="col-11" style="margin-top: 10px;" >
                                    <textarea class="form-control"  rows="14" name="descreption" >{{$conference->descreption}}</textarea>
                                  </div>
                            </div>
                            <div >
                                <div class="col-11">
                                    <label for="formFile" class="form-label cover">Cover photo</label>
                                    <input class="form-control" type="file" id="formFile" name="image" >
                                  </div>
                            </div>
                            <div class="der">
                                <h4 >deroulement de conference</h4>
                                <h5>reception des article</h5>
                                <label for="birthday">Start day</label>
                                <input type="date"  name="d_reception" value="{{$conference->d_reception}}">
                                <label for="birthday" class="lab" >end day</label>
                                <input type="date"  name="f_reception" value="{{$conference->f_reception}}">
                            </div>
                            <div class="der">
                                <h5>article reviewing</h5>
                                <label for="birthday">Start day</label>
                                <input type="date" name="d_reviewing" value="{{$conference->d_reviewing}}">
                                <label for="birthday" class="lab">end day</label>
                                <input type="date"  name="f_reviewing" value="{{$conference->f_reviewing}}">
                            </div>
                            <div class="der">
                                <h5>envoyer les resultats</h5>
                                <label for="birthday">Start day</label>
                                <input type="date"  name="d_results" value="{{$conference->d_results}}">
                                <label for="birthday" class="lab">end day</label>
                                <input type="date"  name="f_results" value="{{$conference->f_results}}">
                            </div>
                            <div >
                                <button class="btn btn-primary mt-4" type="submit">update details</button>
                            </div>
                        </div>           
                      </div>
            </div>
        </div>
       </form>
     </div>
    </div>
    <script src="bb.js"></script>
</body>
</html>