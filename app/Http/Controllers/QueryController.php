<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    //
    public function index(){
        return view('query.test');
    }

    public function get(Request $request){
        $request->validate([
            'id' => 'required',        
        ]);

        $results = DB::select('SELECT * from fetchD WHERE id = ? ' , [$request->id]); //WHERE id > ?    , [$request->id]

        print_r($results);
    }
}
