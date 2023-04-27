<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\region;
use Illuminate\Http\Request;

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
        try{
            \DB::beginTransaction();
            $region = Region::create([
                'label' => $request -> label,
            ]);
            \DB::commit();
            return response()->json(region,201);
        } catch(Throwable $th){
            return response()->json ('{"error":"impossible de sauvegarder"}'.$th, 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(region $region)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, region $region)
    {
        //
        try{
            $region=region::find($id);
            $region->update($request->all());
            response()->json("{'Modification Reussie'}",200);
            return $region();
        } catch(Throwable $th){
            return response()->json ('{"error":"impossible de sauvegarder"}'.$th, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(region $region)
    {
        //
        try{
            $region = region::find($id);
            $region->delete();
            return response()->json(['message'=>'Region supprimee avec succes§']);
        } catch(Throwable $th){
            return response()->json ('{"error":"impossible de sauvegarder"}'.$th, 404);
        }
    }
}
