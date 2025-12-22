<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class RouteController
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function formation()
    {
        return view('formation');
    }

    public function galerie()
    {
        return view('galerie');
    }

    public function contacts()
    {
        return view('contact');
    }

    public function contact(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);

            Contact::create($request->all());

            return back()->with('success', 'Message envoyé avec success!');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

}
