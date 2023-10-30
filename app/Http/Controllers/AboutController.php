<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\About;

class AboutController extends Controller
{
    public function aboutcreate(){
        return view('pages.About.create');
    }
    public function aboutsubmit(Request $request){
       $request->validate([
        'title1'=> 'required',
        'title2'=> 'required',
        'image'=> 'required',
        'description'=>'required',
       ]);

       $about=new About();
       $about->title1=$request->title1;
       $about->title2=$request->title2;
       
       $about->description=$request->description;
      
       $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('img',$imagename);
        $about->image=$imagename;

        

         $about->save();
         return redirect()->back()->with('success','product upload sucessfully');

    }   

    public function aboutlist(){
        $about= about::all();
        return  view('pages.About.list',compact('about'));
    }

      public function editabout($id){
        $about=about::find($id);
        return view('pages.about.edit',compact('about'));
      }



    public function updateabout(Request $request,$id){
        
      
    
           $about=about::find($id);
           $about->title1=$request->title1;
           $about->title2=$request->title2;
           
           $about->description=$request->description;


          if($request->image){
           $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('img',$imagename);
            $about->image=$imagename;
          }
            
    
             $about->save();
             return redirect()->back()->with('message', 'service deleted successfully!');

        }

     public function deleteabout($id){
        $about= about::findorFail($id);
            $about->delete();
            return redirect()->back()->with('success','product upload sucessfully');
     }
}
