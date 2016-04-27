<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\Provider;
use App\Http\Requests\ProviderFormRequest;
use App\Http\Controllers\Backend\BackendController;

class ProvidersController extends BackendController {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $providers = Provider::where('id', '>', 0)->paginate(10);

        return view('backend.providers.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProviderFormRequest $request) {
        $name = $request->input('name');
        $short_name = $request->input('short_name');
        $brand_website = $request->input('brand_website');
        $brand_email = $request->input('brand_email');
        $brand_name = $request->input('brand_name');
        
//        dd($name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $provider = Provider::find($id);

        return view('backend.providers.show')->with('provider', $provider);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = null) {
        if($id != null){
            $provider = Provider::find($id);
        }else{
            $provider = new Provider();
        }
        
        return view('backend.providers.edit')->with('provider', $provider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
    }
}
