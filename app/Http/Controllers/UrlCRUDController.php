<?php

namespace App\Http\Controllers;
use App\Models\Urls;
use Illuminate\Http\Request;


class UrlCRUDController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    $data['urls'] = Urls::orderBy('id','desc')->paginate(5);
    //print_r($data['urls']);
    return view('urls.index', $data);
    
    }


    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    return view('urls.create');
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
    'url' => 'required',
    'price' => 'required',
    ]);
    $url = new Urls;
    $url->url = $request->url;
    $url->price = $request->price;
    $url->save();
    return redirect()->route('urls.index')
    ->with('success','Url has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\url  $url
    * @return \Illuminate\Http\Response
    */
    public function show(Urls $url)
    {
    return view('urls.show',compact('url'));
    } 

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Url  $url
    * @return \Illuminate\Http\Response
    */
    public function edit(Urls $url)
    {
    return view('urls.edit',compact('url'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\url $url
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
    $request->validate([
    'url' => 'required',
    'price' => 'required',
    ]);
    $url = Urls::find($id);
    $url->url = $request->url;
    $url->price = $request->price;
    $url->save();
    return redirect()->route('urls.index')
    ->with('success','Url Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Url  $url
    * @return \Illuminate\Http\Response
    */
    public function destroy(Urls $url)
    {
    $url->delete();
    return redirect()->route('urls.index')
    ->with('success','Url has been deleted successfully');
    }



}
