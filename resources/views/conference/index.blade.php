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
     <div class="container " >
        <div class="row" style="margin-left: 210px;margin-top: 40px;">
            <div class="col">
                <h1>My conferences</h1>
            </div>  
            <div class="col">
                <a class="btn btn-primary" href="{{route('conference.create')}}" style="margin-left: 210px;margin-top: 10px;">create conference</a>
            </div>     
        </div>
        
           <div class="row" style="margin-left:210px;">
                
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
                    @if (count($conferences)<1)
                          <div class="row " style="margin-left:0px; margin-top:20px;" >
                          <div class="alert alert-danger" role="alert">
                                     there is no conference created yet
                          </div>
                          </div>
                    @else
                    <div class="col mt-4" >
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col " style="width: 250px">name</th>
                            <th scope="col" style="width: 200px">etat</th>
                            <th scope="col">N° article</th>
                            <th scope="col">Depot</th>
                            <th scope="col">actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($conferences as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->title}}</td>
                                @if ($item->d_reception < Carbon\Carbon::now() & $item->f_reception > Carbon\Carbon::now())
                                <td> articles recepion</td>
                                  @else
                                    @if ($item->d_reviewing < Carbon\Carbon::now() & $item->f_reviewing > Carbon\Carbon::now())
                                    <td> articles reviewing</td>
                                    @else
                                        @if ($item->d_results < Carbon\Carbon::now() & $item->f_results > Carbon\Carbon::now())
                                        <td>final results</td>
                                        @else
                                        @if ($item->date = Carbon\Carbon::now())
                                        <td>conference day</td>
                                        @else
                                        <td>conference terminé</td>
                                        @endif
                                        @endif
                                    @endif
                    
                           @endif
                                <td>120</td>
                                <td><a href="#" class="btn btn-primary btn-sm " tabindex="-1" role="button" aria-disabled="true">consulter</a> </td>
                                <td >
                                    <a href="{{route('conference.show',['slug'=> $item->slug])}}" style="font-size:24px;"><i class="uil uil-eye" ></i></a>
                                    <a href="{{route('conference.destroy',['id'=>$item->id])}}" style="font-size:24px;margin-left:10px;"><i class="uil uil-trash-alt text-danger"></i></a>
                                    <a href="{{route('conference.edit',['id'=> $item->id])}}"style="font-size:24px;margin-left:10px;color:"><i class="uil uil-edit "></i></a>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                      @endif
            </div>
        </div>
   </div>
    <script src="bb.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>