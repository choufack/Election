<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\region;
use Illuminate\Support\Facades\DB;


class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nom ="CHOUFACK";
        return view("formulaire_region");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $liste = region::all();
        return view("liste_region",compact('liste'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        //$validated = $request->validated();
        $query = DB::table('region')->insert([
            'Label' => $request->input('label'),
            
        ]);
        return view('formulaire_region')->with('success', "Account successfully registered.");
        
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

        try {
            DB::beginTransaction();
            $reg = region::find($id);
            DB::commit();
        return view("update_region" , compact("reg"));
        } catch (\Throwable $th) {
            dd($th);
            return back();
        }
        
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
        try{
            DB::beginTransaction();
            region::find($id)-> delete();
            DB::commit();
            return view("liste-region");
        } catch(\Throwable $th){
            return back();
        }

    }
}
