<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Teacher;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    // this function to return the view 

    public function show()
    {
     $teachers=  Teacher::get();
        return view('teachers',compact('teachers'));
    }

    public function create()
    {
        $courses=Course::get()->all();
        //dd($courses);
        return view('teachers.create',compact('courses'));
    }
    public function store(Request $request)
    {
        $course_id=course::select('id')->where('title','=', $request->class)->first()->id;
        Teacher::create(
            [
                
                'name' =>$request->name,
                'Course_id'=>$course_id
            ]
            );

            return back();
    }   
}
