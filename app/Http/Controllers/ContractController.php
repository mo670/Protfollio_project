<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContractForMail;
use Illuminate\Support\Facades\Mail;

class ContractController extends Controller
{
    public function store(){
        $contract_form_data = request()->all();
        Mail::to('moutusiislam70@gmail.com')->send(new ContractForMail($contract_form_data));
        return redirect()->route('main')->with('success','Your message has been submitted successfully');
      }
}
