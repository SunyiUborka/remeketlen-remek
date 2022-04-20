<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Program;

use App\Http\Requests\ProgramStoreRequests;

class ProgramController extends Controller
{
    public function index() {
      
        return Program::all();
    }

    public function show($id) {
       return Program::findOrFail($id);
    }

    public function comment($id) {
 return Program::findOrFail($id);
    }

    public function store(ProgramStoreRequests $request) {
        Program::create($request->validated());
    }

    public function destroy($id) {
        Program::delete($id);
    }


}
