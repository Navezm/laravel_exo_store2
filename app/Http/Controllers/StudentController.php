<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $DBstudent = Student::all();
        return view('welcome', compact('DBstudent'));
    }
    public function create(){
        return view('formulaire');
    }
    public function store(Request $request){
        $newEntry = new Student;
        $newEntry->nom = $request->nom;
        $newEntry->genre = $request->genre;
        $newEntry->email = $request->email;
        $newEntry->age = $request->age;
        $newEntry->save();
        return redirect()->back();
    }
}