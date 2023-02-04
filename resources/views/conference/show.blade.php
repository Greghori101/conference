<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{ URL::asset('diplay.css') }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <link rel="stylesheet" href="{{ URL::asset('diplay.css') }}">

     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Admin Dashboard Panel</title>--> 
</head>
<body>
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
                            <img src={{ URL::asset('untitled-1.png') }} alt="">
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
        <div class="row" style="margin-left: 210px;margin-top: 0px;">
            <div class="col" >
                <img src="{{ URL::asset($conference->image) }}" style="width: 100% ;height: 400px;" >
            </div>   
        </div>
        <div class="row"  style="margin-top: 240px;">
            <div class="col xxx" >
                <p><span>{{$conference->date}}</span>, AT <span>{{$conference->time}}</p>
            </div>
        </div> 
        <div class="row">
            <div class="col xx">
                <p>{{$conference->title}}</p>
            </div>
        </div> 
        <div class="row">
            <div class="col x">
                <p>{{$conference->lieu}} </p>
            </div>
        </div> 
    
        <div class="row" style="margin-left:220px;">
            <div class="col" >
                <div class="form">
                    <div>
                        <p class="ti">Details</P>
                    </div>
                      
                        <div class="cvv">
                            <div class="ww">
                                <p > 122  chercheur sont interessé </p>
                                <i class="uil uil-user" ></i>
                            </div>
                            <div class="ww">
                                <p>Event created by {{$conference->user->name}}</p>
                                <i class="uil uil-user"></i>
                            </div>
                            <div class="ww">
                                <p>theme:<span>{{$conference->theme}}</span>--<span>{{$conference->subtheme}}</p>
                                <i class="uil uil-envelope icon" ></i>
                            </div>
                            <div style="margin-left: 15px; margin-top: 25px;" class="enh">
                                <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                      show Descreption
                                    </button>
                                  </p>
                                  <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        {{$conference->descreption}}
                                    </div>
                                  </div>
                            </div>
                            <div class="container">
                                <div class="row ">
                                  <div class="col tx">
                                    <p>Deroulemnt de conference</p>
                                  </div>
                                </div>
                                <div class="row ql">
                                  <div class="col-4 ">
                                    <p>{{$conference->d_reception}}</p> 
                                  </div>
                                  <div class="col-4 "  >
                                    <p>{{$conference->f_reception}}</p>
                                  </div>
                                  <div class="col-4">
                                    <p>articles reception</p>
                                  </div>
                                </div>
                                <div class="row ql">
                                    <div class="col-4">
                                        <p>{{$conference->d_reviewing}} </p>
                                    </div>
                                    <div class="col-4">
                                        <p>{{$conference->f_reviewing}}  </p>
                                    </div>
                                    <div class="col-4">
                                        <p>articles reviewing</p>
                                    </div>
                                  </div>
                                  <div class="row ql">
                                    <div class="col-4">
                                        <p>{{$conference->d_results}} </p>
                                    </div>
                                    <div class="col-4">
                                        <p>{{$conference->f_results}} </p>
                                    </div>
                                    <div class="col-4">
                                        <p>show resultats</p>
                                    </div>
                                  </div>
                                  <div class="row ql">
                                    <div class="col-4">
                                        <p>{{$conference->date}} </p>
                                    </div>
                                    <div class="col-4">
                                        <p>conference day</p>
                                    </div>
                                  </div>
                              </div>
                              <div class="container">
                                <div class="row">
                                    <div class="col tx">
                                        <p>reviewers Caummunity</p>
                                      </div>
                                </div>
                                <div class="row">
                                    @if (count($members)<1)
                          <div class="row " style="margin-left:0px; margin-top:20px;" >
                          <div class="alert alert-danger" role="alert">
                                     there is no conference created yet
                          </div>
                          </div>
                    @endif
                                  <div class="col">
                                    <ul>
                                        @foreach ($members as $member)
                                             <li>{{$member->name}}</li>
                                        @endforeach
                                        
                                    </ul>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="container">
                            <div class="row">
                              <div class="col fs-3 fw-bold">
                                <p>Upload your article</p>
                              </div>
                              
                            </div>
                            <div class="row">
                              <div class="col">
                                <p>vous pouvez maintenant partagez votre article dans cette conference.
                                    votre article soit noté par plusieurs reviewers.
                                    si votre article est choisi on va envoyez un email pour .....ex</p>
                              </div>   
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div  class="enh">
                                           <p>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEx" aria-expanded="false" aria-controls="collapseEx">
                                              Upload
                                            </button>
                                           </p>
                                          <div class="collapse" id="collapseEx">
                                            <div class="card card-body">
                                                <div>
                                                    <div class="cvv" id="cvv">
                                                        <div class="col fs-3 mt-4" >
                                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                                <option selected>Open this select menu</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                              </select>

                                                        <div class="toba">
                                                            <div>
                                                                <h2>Author 1</h2>
                                                            </div>
                                                            <div class="ww">
                                                                <input type="text" placeholder="first name" required >
                                                                <i class="uil uil-user"></i>
                                                            </div>
                                                            
                                                            <div class="ww">
                                                                <input type="text" placeholder="last name" required >
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
                                                            <div>
                                                                <h2>Author 2</h2>
                                                            </div>
                                                            <div class="ww">
                                                                <input type="text" placeholder="first name" required >
                                                                <i class="uil uil-user"></i>
                                                            </div>
                                                            <div class="ww">
                                                                <input type="text" placeholder="last name" required >
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
                                                            <div>
                                                                <h2>Author 3</h2>

                                                            </div>
                                                            <div class="ww">
                                                                <input type="text" placeholder="first name" required >
                                                                <i class="uil uil-user"></i>
                                                            </div>
                                                            <div class="ww">
                                                                <input type="text" placeholder="last name" required >
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

                                                        <button class="btn btn-primary mt-4" id="btnn" onclick="extra()">add author</button>
                                                        
                                                            <div class="col fs-3 fw-bold mt-4">
                                                                <p>title & resumé </p>
                                                           </div>
                                                           <div class="ww">
                                                            <input type="text" placeholder="Title" required >
                                                            <i class="uil uil-user"></i>
                                                        </div>
                                                        <div>
                                                            <h5 id="desc">Desreption:</h5>
                                                            <div class="col-11" style="margin-top: 10px;">
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
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                  </div>
                                                  <button class="btn btn-primary mt-3"> save</button>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                                
                              </div>
                          </div>
                        
                        
                    
                    </div>
              
            </div>
            
        </div>
    </div>
    <script src="{{ URL::asset('bb.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
     crossorigin="anonymous"></script>
     <script>
        
             
                 
         
        
     </script>
</body>
</html>