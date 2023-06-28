<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Event;
use App\Models\Project;
use App\Models\User;

class AdminController extends Controller
{
    public function index() {
        $events = Event::all();
        $projects = Project::all();
        $users = User::all();
        $unapproved_projects = Project::where('approved', false)->get();

        return view('adminDashboard', compact('events', 'projects', 'users', 'unapproved_projects'));
    }

    public function events() {
        $events = Event::all();

        return view('adminEvents', compact('events'));
    }

    public function users() {
        $users = User::all();

        return view('adminUsers', compact('users'));
    }

    public function unapproved_projects() {
        $unapproved_projects = Project::where('approved', false)->get();

        return view('adminApproval', compact('unapproved_projects'));
    }

    public function projects() {
        $approved_projects = Project::where('approved', true)->paginate(2);

        return view('adminProjects', compact('approved_projects'));
    }

    public function approval_toggle($id) {
        $project = Project::findOrFail($id);
        $project->approved = !$project->approved;

        $project->save();
        return back();
    }

    public function store(Request $request) {
        $event = New Event;
        $event->event_name = $request->event_name;
        $event->description = $request->description;
        $event->status_event = "submission";
        $event->event_picture = $request->file('event_picture')->store('images', 'public');
        $event->submission_start = $request->submission_start;
        $event->submission_end = $request->submission_end;
        $event->vote_start = $request->vote_start;
        $event->vote_end = $request->vote_end;

        $event->save();
        return redirect()->back();
    }

    public function showLoginForm()
    {
        return view('adminLogin');
    }

    public function handleForm(Request $request)
    {
        // $password = $request->input('password');

        // // Ganti 'password_rahasia' dengan password yang Anda inginkan
        // if ($password === '123') {
        //     Auth::loginUsingId(1);
        //     return redirect()->intended('/adminDashboard');
        // }

        // return redirect()->back()->withErrors(['password' => 'Password salah!']);

        $password = $request->input('password'); // Mendapatkan kata sandi dari inputan pengguna
    
        // Periksa apakah kata sandi benar, misalnya dengan membandingkannya dengan kata sandi yang disimpan di database atau variabel yang ditentukan sebelumnya.
        if ($password === 'aa') {
            // Jika kata sandi benar, arahkan pengguna ke halaman adminDashboard
            return redirect('/adminDashboard');
        } else {
            // Jika kata sandi salah, arahkan pengguna kembali ke halaman loginAdmin dengan pesan kesalahan
            return redirect('/loginAdmin')->with('error', 'Kata sandi salah.');
        }
    }
}
