<?php

namespace App\Http\Controllers;

use App\Models\Caumunite;
use Dotenv\Validator;
use App\Models\Conference;
use App\Models\depote;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
Use \Carbon\Carbon;
use GuzzleHttp\Psr7\Query;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $output=""; 
        $search = $request->get('search');
        $pesakit =  DB::table('users')
        ->where('name', 'like', '%'.$search. '%')->get();
        foreach($pesakit as $test){
            $output.=
            '<div class=""row >
            <div class="col " >
                <div class="container">
                    <div class="row">
                         <div class="col">
                         <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" value="{{$item->id}}"style="margin-left:-20px;margin-bottom: 15px;">

                         </div>
                        <div class="col-6">
                                <label style="margin-left:-70px;" id="source"> '.$test->name.'</label>
                        </div>
                        <div class="col">
                                <button class="btn btn-primary btn-sm" style="margin-left:10px;" onclick="myFunction()">add</button>
                        </div>
                    </div>
                 </div>
            </div>
            </div>';
        }
        return response($output);
   
   
    }
    public function index()
    {
        $id = Auth::user()->id;
        $conferences = conference::where('user_id',$id)->get();
        return view('conference.index')->with('conferences',$conferences);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = User::all();
        $log = Auth::user()->name;
        return view('conference.create',compact('log','users'));
    
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'theme'=>'required',
            'subtheme'=>'required',
            'lieu'=>'required',
            'link'=>'required',
            'date'=>'required',
            'time'=>'nullable',
            'descreption'=>'required',
            'image'=>'required|image',
            'd_reception'=>'required',
            'f_reception'=>'required',
            'd_reviewing'=>'required',
            'f_reviewing'=>'required',
            'd_results'=>'required',
            'f_results'=>'required',
            'users'=>'required',
        ]);
        $image =$request->image;
        $newimage=time().$image->getClientOriginalName();
        $image->move('uploads/conference',$newimage);
        $conference =conference::create([
            'user_id' => Auth::user()->id,
            'title'=>$request->title,
            'theme'=>$request->theme,
            'subtheme'=>$request->subtheme,
            'lieu'=>$request->lieu,
            'link'=>$request->link,
            'date'=>$request->date,
            'time'=>$request->time,
            'descreption'=>$request->descreption,
            'slug'=>Str::slug($request->title),
            'image'=>'uploads/conference/'.$newimage,
            'd_reception'=>$request->d_reception,
            'f_reception'=>$request->f_reception,
            'd_reviewing'=>$request->d_reviewing,
            'f_reviewing'=>$request->f_reviewing,
            'd_results'=>$request->d_results,
            'f_results'=>$request->f_results,

        ]);
        $Caumunite =Caumunite::create([
            'conference_id'=>$conference->id,
        ]);
        $depote =depote::create([
            'conference_id'=>$conference->id,
        ]);
        $Caumunite->user()->attach($request->users);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\conference  $conference
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $conference = conference::where('slug',$slug)->first();
         $members=DB::table('caumunite_user')
         ->join('users', 'caumunite_user.user_id', '=', 'users.id')
         ->join('caumunites', 'caumunite_user.caumunite_id', '=', 'caumunites.id')
         ->where('users.id',$conference->id )
         ->get();
        return view('conference.show')->with('conference',$conference)->with('members',$members); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\conference  $conference
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $conference = conference::find($id);
        return view('conference.edit')->with('conference',$conference);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\conference  $conference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $conference = conference::find($id);
        $this->validate($request,[
            'title'=>'required',
            'theme'=>'required',
            'subtheme'=>'required',
            'lieu'=>'required',
            'link'=>'required',
            'date'=>'required',
            'time'=>'required',
            'descreption'=>'required',
            'd_reception'=>'required',
            'f_reception'=>'required',
            'd_reviewing'=>'required',
            'f_reviewing'=>'required',
            'd_results'=>'required',
            'f_results'=>'required',
        ]);
        if ($request->has('image')) {
            $image =$request->image;
            $newimage=time().$image->getClientOriginalName();
            $image->move('uploads/conference',$newimage);
            $conference->image='uploads/conference/'.$newimage;
        }
            $conference->title=$request->title;
            $conference->subtheme=$request->subtheme;
            $conference->lieu=$request->lieu;
            $conference->link=$request->link;
            $conference->date=$request->date;
            $conference->time=$request->time;
            $conference->descreption=$request->descreption;
            $conference->d_reception=$request->d_reception;
            $conference->f_reception=$request->f_reception;
            $conference->d_reviewing=$request->d_reviewing;
            $conference->f_reviewing=$request->f_reviewing;
            $conference->d_results=$request->d_results;
            $conference->f_results=$request->f_results;

            $conference->save();
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\conference  $conference
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $conference = conference::find($id);
        $conference->delete();
        return redirect()->back();
    }
}
