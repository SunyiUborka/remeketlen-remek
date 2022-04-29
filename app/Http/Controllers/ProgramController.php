<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Program;

use App\Http\Requests\ProgramStoreRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Providers\AuthServiceProvider;

class ProgramController extends Controller
{
    public function index() {
        return Program::all();
    }

    public function show($id) {
        //Gate::authorize("admin-role");
        return Program::findOrFail($id);
    }

    public function comment($id) {
        return Program::findOrFail($id);
    }

    public function store(ProgramStoreRequests $request) {
        Gate::authorize("create-belep");

        $data = $request->validated();

        $filename =  $data['program_file']->store('program_file');
        $fileimage = $data['program_image']->store('program_image');

        $data['user_id'] = Auth::user()->id;
        $data['program_file'] = $filename;
        $data['program_image'] = $fileimage;

        Program::create($data);

        return redirect()->back();
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
