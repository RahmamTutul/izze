<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\About;
use App\Models\Front;
use App\Models\News;
use App\Models\Service;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function index(){
        $services=Service::latest()->take(8)->get();
        $about=About::first();
        $newses=News::latest()->take(6)->get()->toArray();
       return view('frontend.pages.index')->with(compact('services','about','newses'));
    }
    public function subscription(Request $request){
        if($request->isMethod('post')){
            // dd($request->all());
            $data= $request->all();
            $subs= new Front;
            $subs->name=$data['name'];
            $subs->organization=$data['organization'];
            $subs->service="Some";
            $subs->email=$data['email'];
            $subs->phone=$data['phone'];
            $subs->massage=$data['massage'];
            $subs->save();
            Toastr::success("We will response you soon!",'Massage sent!');
            $SendData=[
                'title'=>"Enquiry",
                'name'=>$data['name'],
                'massage'=>$data['massage'],
                'phone'=>$data['phone'],
                'email'=>$data['email'],
            ];
            Mail::to('rahmantutul50@gmail.com')->send(new  SendMail($SendData));
            dd('Okay');
            // return redirect()->back();die;
    }
}
}
