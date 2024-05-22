<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SessionType;
use App\Models\ScheduledSession;

class ScheduledSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sessionType = SessionType::all();
       return view('applicant.schedule')->with('sessionType',$sessionType);
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(Request $request)
{
    $date_time = $request->input('date') . " " . $request->input('time');

    $request->merge([
        'date_time' => $date_time,
        'doc_id' => auth()->user()->id,
    ]);

    $validate = $request->validate([
        'session_type_id' => 'required', 
        'date_time' => 'required|unique:scheduled_sessions,date_time|after:now',
        'doc_id' => 'required',
    ]);

    ScheduledSession::create($validate);
}


    /**
    
    
    
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
