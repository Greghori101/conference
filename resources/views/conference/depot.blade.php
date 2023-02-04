<!DOCTYPE html>
<link rel="stylesheet" href="{{ URL::asset('in.css') }}">
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                    <div>
                        
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
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
                            <img src="{{ URL::asset('untitled-1.png') }}" alt="">
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
        
     </div>
    
        <div class="row" style="margin-left: 210px;margin-top: 40px;">
            <div class="col">
                <h1>Depot</h1>
            </div>  
            <div class="col">
                <a class="btn btn-primary" href="{{route('conference.create')}}" style="margin-left: 210px;margin-top: 10px;">create conference</a>
            </div>     
        </div>
        <div class="row">
            <div class="col mt-4 " style="margin-left: 215px">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" >ID</th>
                        <th scope="col" style="width: 230px;margin-left:-10px">Title</th>
                        <th scope="col" style="width: 40px">info</th>
                        <th scope="col" style="width: 40px">file</th>
                        <th scope="col" style="width: 30px">update</th>
                        <th scope="col">assignement</th>
                        <th scope="col">status</th>
                        <th scope="col">average</th>
                        <th scope="col">decision</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" >3</th>
                        <th scope="row" >3</th>
                        <th scope="row" style="text-align:center"><i class="uil uil-info-circle" style="font-size: 20px;color:#00C1FF;"></i></th>
                        <th scope="row" style="text-align:center"><i class="uil uil-file" style="font-size: 20px;color:#00C1FF"></i></th>
                        <th scope="row" style="text-align:center"><i class="uil uil-folder-upload" style="font-size: 20px;color:#00C1FF"></i></th>
                        <th scope="row">3</th>
                        <th scope="row">3</th>
                        <th scope="row">3</th>
                        <th scope="row">3</th>
                        
                      </tr>
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>
            
        </div>
   </div>
    <script src="bb.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>