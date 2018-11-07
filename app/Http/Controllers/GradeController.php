<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Lecture;
use App\Student;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function getGrade($id)
    {
        $lectures = Lecture::all();
        $student = Student::find($id);

        return view('grade', ['student' => $student, 'id' => $id, 'lectures' => $lectures]);
    }

    public function storeGrade($id)
    {
        $student = Student::find($id);
        $grade = new Grade;
        $grade->lecture_id = request('lectureIdI');
        $grade->student_id = $student->id;
        $grade->comment = request('commentI');
        $grade->grade = request('gradeI');
        $grade->save();

        return back();
    }
}
