<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    public function store(Request $request)
    {
        Course::create([
           'title'=> $request->title,
           'seats'=> $request->seats,
           'class_time'=> $request->class_time,
           'desc'=> $request->desc,
           'fees'=> $request->fees,
        ]);

        return "course saved succefully";
    }
    public function classes(Request $request)
    {
        $courses=Course::get();
/*         dd($courses);
 */        return view('class',compact('courses'));
    }

}
