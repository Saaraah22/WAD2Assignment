<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Students;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function showStudentsForm (Request $request){
        return view ('registration-form');
    }

    public function processRegistration(Request $request){
        $full_name = $request->full_name;
        $course = $request->course;
        $student_number = $request->student_number;

        $student = new students; 
        $student->full_name = $full_name;
        $student->course = $course;
        $student->student_number = $student_number;
        $student->save();

        return view('registration-complete');

    }

    

    public function showList(){
        $users = students::all();
        return view('show-students', compact('users'));
    }


    public function editStudent(Request $request, $id){
        $student = students::find($id);
        return view('/edit-student', compact('student'));
    }
    public function saveEdit(Request $request){
        $id = $request->id;
        $full_name = $request->full_name;
        $course = $request->course;
        $student_number = $request->student_number;

        $student = Students::find($id);
        $student->id = $id;
        $student->full_name = $full_name;
        $student->course = $course;
        $student->student_number = $student_number;
        $student->save();

        return redirect('/show-list');
    }

    public function toDelete(Request $request, $id){
        $student = Students::find($id);
        $student->delete();
        return redirect('/show-list');
        
    }
}

