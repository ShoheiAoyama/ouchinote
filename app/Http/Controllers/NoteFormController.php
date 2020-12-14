<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Note;

class NoteFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = DB::table('note_forms')->select('company_name','company_number','company_email','url','sns','person_name')->get();

        return view('note.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contact = new Note;
        $contact->company_name = $request->input('company_name');

//        $contact->company_address = $request->input('company_address');
//        $contact->company_number = $request->input('company_number');
//        $contact->company_email = $request->input('company_email');
//        $contact->url = $request->input('url');
//        $contact->sns = $request->input('sns');
//        $contact->person_name = $request->input('person_name');
//        $contact->person_number = $request->input('person_number');
//        $contact->person_email = $request->input('person_email');
//        $contact->ua = $request->input('ua');
//        $contact->insulation = $request->input('insulation');
////        $contact->contact = $request->input('contact');
//        $contact->tusbo_price = $request->input('tusbo_price');
//        $contact->financing_plan = $request->input('financing_plan');
//        $contact->standard = $request->input('standard');
//        $contact->option = $request->input('option');

//        dd($contact);
//        exit;

        $contact->save();

        dd($contact);
        exit;
        return redirect('note/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$contact = Note::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
