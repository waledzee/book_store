<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

class CourseController extends Controller
{

    public function show_add()
    {
        return view ('classes.create');
    }
    public function store(Request $request)
    {
        Course::create([
           'title'=> $request->title,
           'seats'=> $request->seats,
           'class_time'=> $request->class_time,
           'desc'=> $request->desc,
           'fees'=> $request->fees,
        ]);

        return redirect(route('dashboard'));

        
    }
    public function classes(Request $request)
    {
        $courses=Course::get();
/*         dd($courses);
 */        return view('class',compact('courses'));
    }


    public function delete_form()
    {
        $courses=Course::get();
        return view('classes.delete',compact('courses'));
    }

    public function delete_class(Request $request)
    {
       $title=$request->title;
      
        Course::where('title',$title)->delete();
        
       return back();     
    }

    public function update_form()
    {
        $courses=Course::get();
        return view('classes.update',compact('courses'));
    }

    public function update_class(Request $request)
    {
       $title=$request->name;
      
      Course::where('title','=',$title)->update(
        [
           'title'=>$request->title,

            'desc'=>$request->desc,
            'seats'=>$request->seats,
            'fees'=>$request->fees,
            'class_time'=>$request->class_time,
            
        ]
        );
    

        
       return back();     
    }
}
