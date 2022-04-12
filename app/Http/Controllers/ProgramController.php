<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Program;

use App\Http\ProgramStoreRequests;

class ProgramController extends Controller
{
    public function index() {
 $progamok = Program::all();
return $progamok;
    }

    public function show($id) {
       return $progamok = Program::findOrFail($id);
        
            }
public function comment() {

}

            public function store(ProgramStoreRequests $request) {
 
                $data = $request->validated();
               Program::create($data);

            }

}
