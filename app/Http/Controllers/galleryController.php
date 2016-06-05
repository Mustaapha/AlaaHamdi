<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\Gallery;
use Session;
class galleryController extends Controller
{
    //
    public function getGallery()
    {
        //$galleries=Gallery::all();

        $galleries=Gallery::orderBy('id','desc')->paginate(15,['gallery_img','gallery_desc','gallery_owner']);

    	return view('site.gallery.index',compact('galleries'));
    }

    public function showFormAddGallery()
    {
    	return view('admin.gallery.add_gallery');
    }
    public function store(Request $request)
    {
        //

        //el kaen Request Lestrga3 el bianaat mn el form
        $gallery_desc=$request->gallery_desc;
        $gallery_owner=$request->gallery_owner;
        $file=$request->file('gallery_img');
        $destinationPath='images/gallery';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destinationPath,$filename);



        

        $add=DB::table('galleries')->insert([

            "gallery_img"=>$filename,
            "gallery_desc"=>$gallery_desc,
            "gallery_owner"=>$gallery_owner


            ]);

        

        //return Redirect('/adminpanel')->withFlashMessage('تم اضافة التصميم بنجاح');

        Session()->put('flash_message','تم اضافة التصميم بنجاح');

        return Redirect('/adminpanel');


    }


}
