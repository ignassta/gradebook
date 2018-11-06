<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function getLecture()
    {
        $lectures = Lecture::all()->sortBy("title");

        return view('lecture', ['lectures' => $lectures]);
    }

    public function storeLecture(Request $request)
    {
        $lecture = new lecture;
        $lecture->title = request('titleI');
        $lecture->description = request('descriptionI');
        $lecture->save();

        return redirect(route('lecture'));
    }

    public function GetUpdateLecture($id)
    {
        $lecture = Lecture::find($id);

        return view('update-lecture', ['lecture' => $lecture, 'id' => $id]);
    }

    public function updateLecture(Request $request, $id)
    {
        $lecture = Lecture::find($id);
        $lecture->title = $request->get('titleU');
        $lecture->description = $request->get('descriptionU');
        $lecture->save();

        return redirect(route('lecture'));
    }

    public function destroyLecture($id)
    {
        Lecture::find($id)->delete();

        return redirect('lecture');
    }
}
