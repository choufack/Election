<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $participant = Participant::all();
       return response()->json($participant,200);
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
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(participant $participant)
    {
        //
    }

    public function onOff($id)
    {
        try{
            \DB:: beginTransaction();
            $part= participant::find($id);
            $part-> etat=! ($part->etat);
            $part-> update();

            \DB::commit();
            return response()->json("Operation reussie");
        }catch(Throwable $th){
            return response()->json("echec de l'operation");
        }
    }

}
