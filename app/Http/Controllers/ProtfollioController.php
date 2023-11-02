<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\storage;
use Illuminate\Http\Request;
use App\models\Protfollio;

class ProtfollioController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function protfolliocreate(){
        return view('pages.protfollio.create');
    }
    public function protfolliosubmit(Request $request){
       $request->validate([
        'title'=> 'required',
        'subtitle'=> 'required',
        'big_image'=> 'required',
        'small_image'=> 'required',
        'client'=> 'required',
        'catagory'=> 'required',
        'description'=> 'required',
       ]);

       $protifollio=new Protfollio();
       $protifollio->title=$request->title;
       $protifollio->subtitle=$request->subtitle;
       $protifollio->client=$request->client;
       $protifollio->catagory=$request->catagory;
       $protifollio->description=$request->description;
      
       $big_image=$request->big_image;
        $imagename=time().'.'.$big_image->getClientOriginalExtension();
        $request->big_image->move('img',$imagename);
        $protifollio->big_image=$imagename;

        $small_image=$request->small_image;
        $imagename=time().'.'.$small_image->getClientOriginalExtension();
        $request->small_image->move('img',$imagename);
        $protifollio->small_image=$imagename;
    

         $protifollio->save();
         return redirect()->back()->with('success','product upload sucessfully');

    }   

    public function protfolliolist(){
        $protfollio= protfollio::all();
        return  view('pages.protfollio.list',compact('protfollio'));
    }

      public function editprotfollio($id){
        $protfollio=protfollio::find($id);
        return view('pages.protfollio.edit',compact('protfollio'));
      }



    public function updateprotfollio(Request $request,$id){
        $request->validate([
         'title'=> 'required',
         'subtitle'=> 'required',
         'client'=> 'required',
         'catagory'=> 'required',
         'description'=> 'required',
        ]);
 
        $protifollio= protfollio::find($id);
        $protifollio->title=$request->title;
        $protifollio->subtitle=$request->subtitle;
        $protifollio->client=$request->client;
        $protifollio->catagory=$request->catagory;
        $protifollio->description=$request->description;


       if($request->big_image){
        $big_image=$request->big_image;
         $imagename=time().'.'.$big_image->getClientOriginalExtension();
         $request->big_image->move('img',$imagename);
         $protifollio->big_image=$imagename;
    }
         if($request->small_image){
         $small_image=$request->small_image;
         $imagename=time().'.'.$small_image->getClientOriginalExtension();
         $request->small_image->move('img',$imagename);
         $protifollio->small_image=$imagename;
         }
 
          $protifollio->save();
          return redirect()->back()->with('success','product upload sucessfully');
 
     }   


     public function deleteprotfollio($id){
        $protifollio= protfollio::findorFail($id);
            $protifollio->delete();
            return redirect()->back()->with('success','product upload sucessfully');
     }


}         









    

