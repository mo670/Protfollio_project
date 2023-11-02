<?php

namespace App\Http\Controllers;
use App\Models\main;
use Illuminate\Http\Request;
use App\Models\service;
use App\Models\protfollio;
use App\Models\About;

use Illuminate\Support\Facades\storage;

class pageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home ()
    {
        return view('pages.admin');
    }

    public function main ()
    {
        $main=main::first();
        $service= service::all();
        $protfollio=protfollio::all();
        $about=about::all();

        return view('pages.main' ,compact('main','service','protfollio','about'));
    }

    public function adminmain()
    {
        $main= main::first();
        
        return view('pages.admin_main',compact('main',));
    }

    public function submitmain(Request $request){
    
        $this->validate($request, [
            'title' => 'required|string',
            'subtitle' => 'required|string', 
        ]);

        $main = main::first();
        $main->title = $request->title;
        $main->subtitle = $request->subtitle;

        if($request->file('bc_img')){
            $img_file = $request->file('bc_img');
            $img_file->storeAs('public/img/','bc_img.' . $img_file->getClientOriginalExtension());
            $main->bc_img = 'storage/img/bc_img.' . $img_file->getClientOriginalExtension();
        }

        if($request->file('resume')){
            $pdf_file = $request->file('resume');
            $pdf_file->storeAs('public/pdf/','resume.' . $pdf_file->getClientOriginalExtension());
            $main->resume = 'storage/pdf/resume.' . $pdf_file->getClientOriginalExtension();
        }

        $main->save();
      

         
        
}

}