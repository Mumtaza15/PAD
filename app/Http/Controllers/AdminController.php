<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Project;
use App\Models\User;

class AdminController extends Controller
{
    public function index() {
        $events = Event::all();
        $projects = Project::all();
        $users = User::all();

        return view('adminDashboard', compact('events', 'projects', 'users'));
    }

    public function events() {
        $events = Event::all();

        return view('adminEvents', compact('events'));
    }
}
