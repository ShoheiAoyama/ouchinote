<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index(){
        $values = test::all();

//        $tests = BD::table('tests')->get();
//        $collection = collect([1,2,3,4,5,6,7]);
//        $chunks = $collection->chunk(4);
//        $chunks->toArray();
        dd($values);
        return view('tests.test',compact('values'));
    }
}
