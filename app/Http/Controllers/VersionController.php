<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramStoreRequests;
use App\Http\Requests\StoreProgramVersion;
use App\Models\Type;
use App\Models\Version;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Providers\AuthServiceProvider;

class VersionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Version::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize("create-belep");
        Version::create($request->validated());


    }

    public function programcreate(){
        return view('dosarch.filestore');
    }

    public function programstore(StoreProgramVersion $requests){

           $adat = $requests->validated();

         $filename =  $adat['program_file']->store('program_files');

        $adat['program_file'] = $filename;

          Version::create($adat);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Version::findOrFail($id);
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
        Gate::authorize("admin-author");
        Version::update($request->validate());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize("admin-author");
       Version::destroy($id);
    }
}
