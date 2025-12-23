<?php

namespace App\Http\Controllers;

use App\Models\Apropos;
use App\Models\Contact;
use App\Models\Formation;
use App\Models\Galery;
use App\Models\Partenaire;
use App\Models\Testimony;
use Illuminate\Http\Request;

class RouteController
{
    public function index()
    {
        $formationAll =  Formation::all();
        $formations =  Formation::limit(6)->orderBy('created_at', 'desc')->get();
        $about = Apropos::first();
        $testimonies = Testimony::all();
        $parteners = Partenaire::all();

        return view('index', compact('formations', 'about', 'testimonies', 'formationAll', 'parteners'));
    }

    public function about()
    {
        $about = Apropos::first();
        $parteners = Partenaire::all();

        return view('about', compact('about', 'parteners'));
    }

    public function formations()
    {
        $formations =  Formation::orderBy('created_at', 'desc')->paginate(9);
        return view('formation', compact('formations'));
    }
    public function formationShow($id)
    {
        $formation = Formation::findOrFail($id);
        return view('formation-show', compact('formation'));
    }

    public function galerie()
    {
        $galeries =  Galery::paginate(9);
        return view('galerie', compact('galeries'));
    }

    public function contacts()
    {
        $contacts =  Contact::all();
        return view('contact', compact('contacts'));
    }

    public function message(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);

            //Contact::create($request->all());

            return back()->with('success', 'Message envoyé avec success!');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

}
