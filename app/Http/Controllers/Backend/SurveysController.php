<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Survey;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;

class SurveysController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveys = Survey::where('id', '>', 0)->paginate(10);

        return view('backend.surveys.index', compact('surveys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $survey = new Survey();
        return view('backend.surveys.create')->with('survey', $survey);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = null)
    {
        if($id != null){
            $survey = Survey::find($id);
        }else{
            $survey = new Survey();
        }
        
        return view('backend.surveys.edit')->with('survey', $survey);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $short_name = $request->input('short_name');
        $brand_website = $request->input('brand_website');
        $brand_email = $request->input('brand_email');
        $brand_name = $request->input('brand_name');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
