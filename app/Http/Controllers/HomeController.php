<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function resources()
    {
        return view('resources');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        auth()->user()->update(['google_form_link' => $request->link]);
        return redirect()->route('form');
    }
}
