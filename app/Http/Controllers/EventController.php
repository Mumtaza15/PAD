<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Project;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::where('status_event', 'active')->orWhere('status_event', 'finished')->get();

        return view('event', compact('events'));
    }

    public function search_event(Request $request) {
        $keyword = $request->keyword;
        $events = Event::where('event_name', 'LIKE', "%$keyword%")->where(function ($query) {$query->where('status_event', 'active')->orWhere('status_event', 'finished');})->get();

        return view('event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $event = Event::find($id);
        $projects = Project::where('event_id', $id)->where('approved', true)->get();

        return view('detailEvent', compact('event', 'projects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
