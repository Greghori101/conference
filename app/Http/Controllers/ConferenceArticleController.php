<?php

namespace App\Http\Controllers;

use App\Models\conference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ConferenceArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(conference $conference)
    {
        return view('conference.articles.create',compact('conference'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,conference $conference)
    {
        $this->validate($request,[
            'title'=>'required',
            'subtheme'=>'required',
            'descreption'=>'required',
            'file'=>'required|mimetypes:application/pdf|max:10000',
            
        ]);
        $file =$request->file;
        $newfile=time().$file->getClientOriginalName();
        $file->move('uploads/conference',$newfile);
        $conference =conference::create([
            'user_id' => Auth::user()->id,
            'title'=>$request->title,
            'subtheme'=>$request->subtheme,
            'descreption'=>$request->descreption,
            'file'=>'uploads/conference/'.$newfile,
            'd_reception'=>$request->d_reception,
            'f_reception'=>$request->f_reception,
            'd_reviewing'=>$request->d_reviewing,
            'f_reviewing'=>$request->f_reviewing,
            'd_results'=>$request->d_results,
            'f_results'=>$request->f_results,

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
