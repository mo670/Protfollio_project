<?php

namespace App\Http\Controllers;
use App\Models\service;
use Illuminate\Http\Request;
use PhpParser\Builder\FunctionLike;

class AdminController extends Controller
{
  
    public function servicecreate(){
        return view('pages.services.create');
    }
    public function submitsevice(Request $request){
       $service= new service;
       $service->icon = $request->icon;
       $service->title = $request->title;
       $service->description = $request->description;
        $service->save();
        return redirect()->back()->with('message','services added successfully');
    }

        public function servicelist(){
            $service= service::all();

            return view('pages.services.list',compact('service'));
        }

        public function editservice($id) {
            $service=service::find($id);
            return view('pages.services.edit',compact('service'));
        }
        public Function updateservice(Request $request,$id){
            $service=service::find($id);
            $service->icon = $request->icon;
            $service->title = $request->title;
            $service->description = $request->description;
             $service->save();
             return redirect('servicelist');

        }

        public function deleteservice($id){
            $service= service::findorFail($id);
            $service->delete();
            return redirect()->back()->with('message', 'service deleted successfully!');
        }


}
