<?php

namespace App\Http\Controllers;

use App\Models\Ouchi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OuchiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //クエリビルダ
        $contacts = DB::table('ouchis')->select('id','company_name','company_number','company_email','url','sns','person_name','financing_plan')->get();

        return view('ouchi.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ouchi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Ouchi;
        $contact->company_name = $request->input('company_name');

        $contact->company_address = $request->input('company_address');
        $contact->company_number = $request->input('company_number');
        $contact->company_email = $request->input('company_email');
        $contact->url = $request->input('url');
        $contact->sns = $request->input('sns');
        $contact->person_name = $request->input('person_name');
        $contact->person_number = $request->input('person_number');
        $contact->person_email = $request->input('person_email');
        $contact->ua = $request->input('ua');
        $contact->insulation = $request->input('insulation');
        $contact->construct = $request->input('construct');
        $contact->tusbo_price = $request->input('tusbo_price');
        $contact->financing_plan = $request->input('financing_plan');
        $contact->standard = $request->input('standard');
        $contact->option = $request->input('option');

//        dd($contact);
//        exit;

        $contact->save();

//        dd($contact);
//        exit;
        return redirect('ouchi/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Ouchi::find($id);
        return view('ouchi.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Ouchi::find($id);
        return view('ouchi.edit',compact('contact'));
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
        $contact = Ouchi::find($id);
//        $contact = Ouchi::find($id)->first();
        $contact->company_name = $request->input('company_name');
        $contact->company_address = $request->input('company_address');
        $contact->company_number = $request->input('company_number');
        $contact->company_email = $request->input('company_email');
        $contact->url = $request->input('url');
        $contact->sns = $request->input('sns');
        $contact->person_name = $request->input('person_name');
        $contact->person_number = $request->input('person_number');
        $contact->person_email = $request->input('person_email');
        $contact->ua = $request->input('ua');
        $contact->insulation = $request->input('insulation');
        $contact->construct = $request->input('construct');
        $contact->tusbo_price = $request->input('tusbo_price');
        $contact->financing_plan = $request->input('financing_plan');
        $contact->standard = $request->input('standard');
        $contact->option = $request->input('option');

        $contact->save();
//        dd($id);
//        exit;
        return redirect('ouchi/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Ouchi::find($id);
        $contact->delete();

        return redirect('ouchi/index');
    }
}
