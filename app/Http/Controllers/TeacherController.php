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
        $course_id=course::select('id')->where('title','=', $request->lass)->first()->id;
        Teacher::create(
            [
                
                'name' =>$request->name,
                'Course_id'=>$course_id
            ]
            );

            return back();
    }  
    
    

    public function delete()
    {
        $teachers=Teacher::get()->all();
        //dd($courses);
        return view('teachers.delete',compact('teachers'));
    }

    public function handle_Tdelete(Request $request)
    {
        Teacher::where('name',$request->name)->delete();
        return back();
    }

    public function update()
    {
        $teachers=Teacher::get()->all();
        $courses=Course::get()->all();

        return view('teachers.update',compact('teachers','courses'));
    }

    public function handle_update(Request $request)
    {
        $course_id=course::select('id')->where('title','=', $request->title)->first()->id;

        Teacher::where('name','=',$request->tname)->update(
            [
               'name'=>$request->name,
               'Course_id'=>$course_id
              
                
            ]
            );

            return back();
    }
}
