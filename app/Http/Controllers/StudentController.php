<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request){
            $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect()->back();
    }
}
