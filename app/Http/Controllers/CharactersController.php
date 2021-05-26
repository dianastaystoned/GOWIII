<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Characters;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $characters = Characters::all();
        return view ('characters',['characters'=>$characters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $characters = Characters::find($id);
        return view('characters',['characters'=>$characters]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $characters = Characters::find($id);
        return view ("characters",["characters" => $characters]);
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
        $characters = Characters::find($id);
        $characters->imagen = $request->imagen;
        $characters->title = $request->title;
        $characters->description = $request->description;
        if($characters->save())
        {
            return redirect('/');
        }
        else
        {
            return view('characters',['characters' => $characters]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Characters::destroy($id);
        return redirect("/");
    }
}
