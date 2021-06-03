<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shift;
use App\Models\TrainerShift;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainerShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainerShift = TrainerShift::all();
        return view('admin.trainer-shift.index',compact('trainerShift'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $shifts = Shift::all();
        return view('admin.trainer-shift.create',compact('users','shifts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

           'trainer'=>'required' ,
           'shiftname'=>'required'

        ]);
        $shift = new TrainerShift();
        $shift->user_id = $request->trainer;
        $shift->shift_id = $request->shiftname;
        $shift->status = 1 ;
        $shift->created_by = Auth::id();
        $shift->save();
        return redirect()->route('admin.trainer-shift.index');
    
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrainerShift  $trainerShift
     * @return \Illuminate\Http\Response
     */
    public function show(TrainerShift $trainerShift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrainerShift  $trainerShift
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainerShift $trainerShift)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrainerShift  $trainerShift
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainerShift $trainerShift)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrainerShift  $trainerShift
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainerShift $trainerShift)
    {
        //
    }
}
