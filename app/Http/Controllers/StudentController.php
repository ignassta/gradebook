<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudent()
    {
        $students = Student::all()->sortBy("surname");

        return view('student', ['students' => $students]);
    }

    public function storeStudent(Request $request)
    {
        $student = new student;
        $student->name = request('nameI');
        $student->surname = request('surnameI');
        $student->email = request('emailI');
        $student->phone = request('phoneI');
        $student->save();

        return redirect(route('student'));
    }

    public function GetUpdateStudent($id)
    {
        $student = Student::find($id);
        return view('update-student', ['student' => $student, 'id' => $id]);
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->get('nameI');
        $student->surname = $request->get('surnameI');
        $student->email = $request->get('emailI');
        $student->phone = $request->get('phoneI');
        $student->save();

        return redirect(route('student'));
    }

    public function destroyStudent($id)
    {
        Student::find($id)->delete();

        return redirect(route('student'));
    }
}
