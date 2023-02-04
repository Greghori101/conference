<!DOCTYPE html>
<link rel="stylesheet" href="{{ URL::asset('in.css') }}">
<html>
<head>
    <link rel="stylesheet" href="{{ URL::asset('in.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--<title>Admin Dashboard Panel</title>--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
        <div class="row">
            <div class="col" style="margin-left: 260px;margin-top:60px;">
                <h1>Upload Article</h1>
            </div>
        </div>
           <div class="row" style="margin-left:220px;">
            <div class="col" >
                <form action="{{route('conferences.articles.store',$conference)}}" method="POST" enctype="multipart/form-data">
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
                    <div class="row">
                        <div class="col">
                                        <div class="cvv" id="cvv">
                                                <div class="col-10   mb-2" >
                                                    <div class="col fs-3 fw-bold mt-4">
                                                        <p> subtheme:</p>
                                                    </div>
                                                    <select class="form-select form-select-sm mt-3" aria-label=".form-select-sm example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                      </select>

                                                <div class="toba">
                                                    <div class="col fs-3 fw-bold mt-4">
                                                        <p>Author 1</p>
                                                    </div>
                                                    
                                                    
                                                    <div class="ww">
                                                        <input type="text" placeholder="full name" required >
                                                        <i class="uil uil-user"></i>
                                                    </div>
                                                    <div class="ww">
                                                        <input type="email" placeholder="email" required >
                                                        <i class="uil uil-envelope icon" ></i>
                                                    </div>
                                                    <div class="ww">
                                                        <input type="email" placeholder="country" required >
                                                        <i class="uil uil-envelope icon" ></i>
                                                    </div>
                                                </div>
                                                <div class="toba">
                                                    <div class="col fs-3 fw-bold mt-4"> 
                                                        <p>Author 2</p>
                                                    </div>
                                                    
                                                    <div class="ww">
                                                        <input type="text" placeholder="full name" required >
                                                        <i class="uil uil-user"></i>
                                                    </div>
                                                    <div class="ww">
                                                        <input type="email" placeholder="email" required >
                                                        <i class="uil uil-envelope icon" ></i>
                                                    </div>
                                                    <div class="ww">
                                                        <input type="email" placeholder="country" required >
                                                        <i class="uil uil-envelope icon" ></i>
                                                    </div>
                                                </div>
                                                <div class="toba">
                                                    <div class="col fs-3 fw-bold mt-4">
                                                        <p>Author 3</p>

                                                    </div>
                                                   
                                                    <div class="ww">
                                                        <input type="text" placeholder="full name" required >
                                                        <i class="uil uil-user"></i>
                                                    </div>
                                                    <div class="ww">
                                                        <input type="email" placeholder="email" required >
                                                        <i class="uil uil-envelope icon" ></i>
                                                    </div>
                                                    <div class="ww">
                                                        <input type="email" placeholder="country" required >
                                                        <i class="uil uil-envelope icon" ></i>
                                                    </div>
                                                </div>

                                                
                                                    <div class="col fs-3 fw-bold mt-4">
                                                        <p>title & resumé </p>
                                                   </div>
                                                   <div class="ww">
                                                    <input type="text" placeholder="Title" required >
                                                    <i class="uil uil-user"></i>
                                                </div>
                                                <div>
                                                    <h4 class="mt-4" id="desc">Desreption:</h4>
                                                    <div class="col-12" style="margin-top: 10px;">
                                                        <textarea class="form-control"  rows="14"></textarea>
                                                      </div>
                                                </div>
                                                <div class="col fs-3 fw-bold mt-4">
                                                    <p>Article </p>
                                               </div>
                                               <div class="ccc">
                                                <p>Apload votre article.l’article est obligé d’etait en format .pdf </p>
                                           </div>
                                           <div class="input-group mb-3">
                                            <input type="file" class="form-control" id="inputGroupFile02" name="file">
                                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                          </div>
                                          <button class="btn btn-primary mt-3"> save</button>
                                    
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