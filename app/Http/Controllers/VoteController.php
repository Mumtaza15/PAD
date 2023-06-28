<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class VoteController extends Controller
{
    public function vote(Project $project, Request $request) {
        $user = $request->user();
        $user->votes()->attach($project->id);

        $project->increment('votes');

        // $event = $project->events;
        // if (Auth::user()->votes->where('event_id', $event->id)->isNotEmpty()) {
        //     return redirect()->back();
        // }

        return back();
    }

    public function unvote(Project $project, Request $request) {
        $user = $request->user();
        $user->votes()->detach($project->id);

        $project->decrement('votes');

        return back();
    }
}
