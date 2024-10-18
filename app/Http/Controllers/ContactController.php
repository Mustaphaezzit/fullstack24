<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts=Contact::all();
        // dd($contacts);
        return view("contacts.index",compact("contacts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("contacts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "last_name"=>"string|required",
            "first_name"=>"string|nullable",
            "phone_number"=>"string|required",
            "email"=>"email|required",
            "age"=>"string|nullable"
        ]);

        Contact::create($validated);
        return redirect()->route("contacts.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view("contacts.show",compact("contact"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            "last_name"=>"string|required",
            "first_name"=>"string|nullable",
            "phone_number"=>"string|required",
            "email"=>"email|required",
            "age"=>"string|nullable"
        ]);

        $contact->update($validated);

        return redirect()->route('contacts.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index');
        //
    }
}
