<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="in.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Admin Dashboard Panel</title>--> 
</head>
<body style="background-color: #F0F2F5;">
    <div class="container" >
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
                    <div>
                        
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                
            </div>
                </div>
        
        
            </section>
          </div>
          <div class="col">
            <div> 
                <nav>
                    <div class="logo-name">
                        <div class="logo-image">
                            <img src="untitled-1.png" alt="">
                        </div>
                    </div>
            
                    <div class="menu-items">
                        <ul class="nav-links">
                            
                            <li><a href="{{route('home')}}">
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
        <div class="container " >
            <div class="row" style="margin-left: 210px;margin-top: 40px;">
                <div class="col">
                    <h1>Dashboard</h1>
                </div>  
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
            </div>
            @if (count($conferences)<1)
            <div class="row " style="margin-left:220px; margin-top:30px;" >
            <div class="alert alert-danger" role="alert">
                there is no conference
              </div>
            </div>
              @else
              <div class="row " style="margin-left:220px;" >
                @foreach ($conferences as $item)
                    <div class="col-lg-4 mt-4">
                      <div class="card home" style="width: 18rem;height:250px" >
                          <img src="{{ URL::asset($item->image) }}" class="img-fluid" alt="..." style="width: 100%;height: 125px;">
                          <div class="card-body">
                            <p class="card-title" style="font-size: 12px;">{{$item->date}},AT {{$item->time}}<P>
                            <h5 class="card-text" style="font-size: 16px; margin-top:-7px;">{{$item->title}}</h5>
                            <p class="card-text" style="font-size: 16px; margin-top:16px;">{{$item->lieu}}</p>
                            <a href="{{route('conference.show',['slug'=> $item->slug])}}" class="stretched-link"></a>
                          </div>
                        </div>
                    </div>  
                    @endforeach   
                  </div>
            @endif
            
           
            
          </div>
      </div>
    </div>
          
    <script src="bb.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
