<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    //this furnction to return view 

    public function show()
    {   

        return view('gallery');
    }
    public function create()
    {   

        return view('gallery.create');
    }
    public function store(Request $request)
    {   
        $file_ext = $request->image->getClientOriginalExtension();
        $file_name = time().".".$file_ext;
        $path="uploads";
        $request->image->move($path,$file_name);

   
        Gallery::create(
            [
                'action'=>$request->action,
                'img'=>$file_name
            ]
            );
            return back();  
        }
}
