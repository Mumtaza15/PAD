<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Event;

class ProjectController extends Controller
{
    public function home()
    {
        $latest_events = Event::latest()->take(4)->get();
        $latest_projects = Project::latest()->take(4)->get();

        return view('homeRev', compact('latest_events', 'latest_projects'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Projects::all();

        return view('project', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::all();

        return view('upload', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = New Project;
        $project->project_name = $request->project_name;
        $project->event_id = $request->event_id;
        // $project->votes = $request->votes;
        $project->description = $request->description;
        $project->category = $request->category;
        $project->video_link = $request->video_link;
        $project->dosen_pembimbing = $request->dosen_pembimbing;
        // $project->event_name = $request->event_name;
        $project->demo_link = $request->demo_link;
        $project->team_name = $request->team_name;
        $project->member1_name = $request->member1_name;
        $project->member2_name = $request->member2_name;
        $project->member3_name = $request->member3_name;
        $project->member4_name = $request->member4_name;
        $project->member5_name = $request->member5_name;
        $project->member1_role = $request->member1_role;
        $project->member2_role = $request->member2_role;
        $project->member3_role = $request->member3_role;
        $project->member4_role = $request->member4_role;
        $project->member5_role = $request->member5_role;
        $project->member1_photo = $request->file('member1_photo')->store('images', 'public');
        // $project->member2_photo = $request->file('member2_photo')->store('images', 'public');
        // $project->member3_photo = $request->file('member3_photo')->store('images', 'public');
        // $project->member4_photo = $request->file('member4_photo')->store('images', 'public');
        // $project->member5_photo = $request->file('member5_photo')->store('images', 'public');
        $project->project_picture1 = $request->file('project_picture1')->store('images', 'public');
        // $project->project_picture2 = $request->file('project_picture2')->store('images', 'public');
        // $project->project_picture3 = $request->file('project_picture3')->store('images', 'public');
        // $project->approved = $request->approved;
        $project->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
