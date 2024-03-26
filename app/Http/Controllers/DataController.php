<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $temp['dataview'] = Data::all();
        return view('form',$temp);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = new Data();
        // dd($data);
        $data->nickname = $request->db_name;
        $data->birthday = $request->db_birthday;
        $data->ig = $request->db_ig;
        $data->picture = $request->db_picture;

        $data->save();

        return Redirect('/form');

        // dd($data);

    }

    /**
     * Display the specified resource.
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
       $data = Data::find($id);
       $data->delete();
       return Redirect('/form');
    }
}
