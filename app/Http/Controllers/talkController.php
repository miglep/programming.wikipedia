<?php

namespace App\Http\Controllers;

use App\talk;
use Illuminate\Http\Request;

class talkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['talks'] = Talk::all();
        
        return view('talk', $data);
        
        //return view('talk_create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['talks'] = talk::all();
         return view('talk_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $talk = new Talk();
 
        $talk->description = $request->description;
    
     
        $talk->save();
 
        return redirect()->route('talk.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function show(talk $talk)
    {
         $data['talk'] = $talk;
 
        return view('statistic_create', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function edit(talk $talk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talk $talk)
    {
         $talk->description = $request->usertalk;
         $talk->save();
        
 
        return redirect()->route('talk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function destroy(talk $talk)
    {
        $talk->delete();
        return redirect()->route('talk_create');
    }
}
