<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);

        return view('contacts.index',compact('contacts'))
            ->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $request->validate([
            'naam' => 'required',
            'adres' => 'required',
            'postcode' => 'required',
            'gemeente' => 'required',
            'email' => 'required',
            'telefoon' => 'required',
        ]);

        $contact = Contact::create($request->all());

        return redirect()->route('contacts.index')
                        ->with('success','Contact (ID: '. $contact->id .') werd aangemaakt.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'naam' => 'required',
            'adres' => 'required',
            'postcode' => 'required',
            'gemeente' => 'required',
            'email' => 'required',
            'telefoon' => 'required',
        ]);

        $contact->update($request->all());

        return redirect()->route('contacts.index')
                        ->with('success','Contact (ID: '. $contact->id .') werd bijgewerkt.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {            
        $contact->delete();
        return redirect()->route('contacts.index')
                        ->with('success','Contact (ID:'. $contact->id .') werd verwijderd.');
    }
}