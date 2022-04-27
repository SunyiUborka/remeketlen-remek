<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Program;

use App\Http\Requests\ProgramStoreRequests;
use Illuminate\Support\Facades\Gate;
use App\Providers\AuthServiceProvider;

class ProgramController extends Controller
{
    public function index() {
      
        return Program::all();
    }

    public function show($id) {
        Gate::authorize("create-belep");
        return Program::findOrFail($id);
    }

    public function comment($id) {
        return Program::findOrFail($id);
    }

    public function store(ProgramStoreRequests $request) {
        Gate::authorize("create-belep");
        $adat = $request->validated();

        $filename =  $adat['program_file']->store('program_file');
        $fileimage = $adat['program_image']->store('program_image');

        $adat['program_file'] = $filename;
        $adat['program_image'] = $fileimage;

        Program::create($adat);
    }

    public function update(ProgramStoreRequests $request , $id) {
        Gate::authorize("admin-role");
        Program::update($request->validated());
    }


    public function destroy($id) {
        Gate::authorize("admin-role");
        Program::delete($id);
    }
}
