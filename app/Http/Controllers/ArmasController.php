<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cards;

class ArmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $arma = Cards::all();
        return view ('armas.index',['armas'=>$arma]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('armas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arma = new Cards();
        $arma->id = $request->id;
        $arma->imagen = $request->imagen;
        $arma->title = $request->title;
        $arma->description = $request->description;
        if($arma->save())
        {
            return redirect('/armas');
        }
        else
        {
            return view('armas.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arma = Cards::find($id);
        return view('armas.show',['armas'=>$arma]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arma = Cards::find($id);
        return view ('armas.edit',['arma' => $arma]);
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
        $arma = Cards::find($id);
        $arma->imagen = $request->imagen;
        $arma->title = $request->title;
        $arma->description = $request->description;
        if($arma->save())
        {
            return redirect('/armas');
        }
        else
        {
            return view('armas.edit',['arma' => $arma]);
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
        Cards::destroy($id);
        return redirect("/armas");
    }
}
