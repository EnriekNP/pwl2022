<?php

namespace App\Http\Controllers;

use App\Models\schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedule = schedule::all();
        return view('schedule.index', ['schedules' => $schedule]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        schedule::create([
            'event_title'=>$request->event_title,
            'start_date_time'=>$request->event_date_time,
            'duration'=>$request->duration,
            'room'=>$request->room,
            'add_info'=>$request->additional_info,
            'pic_name'=>$request->pic,
            'pic_contact_number'=>$request->number_telp
        ]);
        return route('schedule.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, schedule $schedule)
    {
        schedule::findOrFail($schedule->id)->updates([
            'event_title'=>$request->event_title,
            'start_date_time'=>$request->event_date_time,
            'duration'=>$request->duration,
            'room'=>$request->room,
            'add_info'=>$request->additional_info,
            'pic_name'=>$request->pic,
            'pic_contact_number'=>$request->number_telp
        ]);
        return route('schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(schedule $schedule)
    {
        schedule::destroy($schedule->id);
    }
}