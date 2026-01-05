<?php

namespace App\Http\Controllers;

use App\Models\Apropos;
use App\Models\Contact;
use App\Models\Formation;
use App\Models\Inscription;
use App\Models\Partenaire;
use App\Models\Service;
use App\Models\Testimony;
use Illuminate\Http\Request;

class RouteController
{

    private $contacts;

    public function __construct()
    {
        $this->contacts = Contact::all();
    }

    public function index()
    {
        $formationAll =  Formation::all();
        $formations =  Formation::limit(6)->orderBy('created_at', 'desc')->get();
        $about = Apropos::first();
        $testimonies = Testimony::all();
        $parteners = Partenaire::all();
        $contacts = $this->contacts;

        return view('index', compact('formations', 'about', 'testimonies', 'formationAll', 'parteners', 'contacts'));
    }

    public function about()
    {
        $about = Apropos::first();
        $parteners = Partenaire::all();
        $contacts = $this->contacts;
        $formationAll =  Formation::all();

        return view('about', compact('about', 'parteners', 'contacts', 'formationAll'));
    }

    public function formations()
    {
        $contacts = $this->contacts;
        $formations =  Formation::orderBy('created_at', 'desc')->paginate(9);
        $formationAll =  Formation::all();

        return view('formation', compact('formations', 'contacts', 'formationAll'));
    }
    public function formationShow($id)
    {
        $contacts = $this->contacts;
        $formation = Formation::findOrFail($id);
        $formationAll =  Formation::all();

        return view('formation-show', compact('formation', 'contacts', 'formationAll'));
    }

    public function services()
    {
        $contacts = $this->contacts;
        $services =  Service::paginate(9);
        $formationAll =  Formation::all();

        return view('service', compact('services', 'contacts', 'formationAll'));
    }

    public function contacts()
    {
        $contacts = $this->contacts;
        $formationAll =  Formation::all();

        return view('contact', compact('contacts', 'contacts', 'formationAll'));
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

    public function inscription(Request $request)
    {
        try {
            $request->validate([
                'full_name' => 'required',
                'email' => 'nullable|email',
                'phone' => 'required',
                'formation_id' => 'required',
                'note' => 'nullable',
            ]);

            Inscription::create($request->all());

            return back()->with('success', 'Inscription envoyé avec success!');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

}
