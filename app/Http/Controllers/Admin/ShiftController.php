<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shifts=Shift::all();
        return view('admin.shift.index', compact('shifts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shift.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    return dd($request->all());
        $shift=new Shift();
        $shift->name=$request->name;
        $shift->start_time=$request->start_time;
        $shift->end_time=$request->end_time;
        $shift->created_by=Auth::user()->id;
        $shift->save();
        return redirect()->route('admin.shift.index');
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
        $shift=Shift::findOrFail($id);
        return view('admin.shift.edit', compact('shift'));
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
        $shift=Shift::findOrFail($id);
        $shift->name=$request->name;
        $shift->start_time=$request->start_time;
        $shift->end_time=$request->end_time;
        // $shift->created_by=Auth::user()->id;
        $shift->save();
        return redirect()->route('admin.shift.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shift=Shift::findOrFail($id);
        $shift->delete();
        return redirect()->route('admin.shift.index');
    }
}
