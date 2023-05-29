<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use Carbon\Carbonx;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.home');
    }

    public function login(){
        return view('login');
    }

    public function data()
    {
        $project = Project::all();
        return view ('dashboard.data', compact('project'));
    }

    public function auth(Request $request){
        
        // {//dd($request->all()); // }

         $request->validate([
          'username'=>'required|exists:users,username',
          'password'=>'required',
         ],[
            'username.exists'=>
            'username ini belum tersedia',
            'username.required'=>
            'username ini harus diisi',
            'password.required'=>
            'password ini harus diisi',
         ]);
         }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = Project::all();
        return view ('dashboard.create', compact('project'));
    }

    public function done(Request $request, $id)
    {
        $project = Project::where('id', $id)->update([
            'retdate' => \Carbon\Carbon::now()
        ]);
           return redirect()->back()->with('done', 'a');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      

        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'region' => 'required',
            'purposes' => 'required',
            'ket' => 'required',
            'date' => 'required',
            'teacher' => 'required',
        ]);

        Project::create([
            'nis' => $request->nis,
            'name'=> $request->name,
            'region' => $request->region,
            'purposes' =>$request->purposes,
            'ket'=>$request->ket,
            'date' => $request->date,
            'teacher' =>$request->teacher,
        ]);
        return redirect('/data')->with('ppp', 'pppppp');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $Project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $Project)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $Project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $Project, $id)
    {
        Project::where('id', $id)->delete();
        return redirect()->back();
    }
}