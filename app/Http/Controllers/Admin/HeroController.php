<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class HeroController extends Controller
{
    public function index(Request $request){
        
        $data=Hero::get()->first();
        if($request->isMethod("post")){
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,svg|max:1024',
            ]);
            if($request->hasFile('image'))
            {
            $image=$request->file('image');
            $currentDate=Carbon::now()->toDateString();
            $imageName=$currentDate.uniqId().'.'.$image->getClientOriginalExtension();
            if(Storage::disk('public')->exists('images/admin/hero'))
            {
               Storage::disk('public')->makeDirectory('images/admin/hero');
            }
            if(Storage::disk('public')->exists('images/admin/hero/'.$data->image))
            {
               Storage::disk('public')->delete('images/admin/hero/'.$data->image);
            }
            $heroImage = Image::make($image)->resize(1500,700)->stream();
            
            Storage::disk('public')->put('images/admin/hero/'.$imageName,$heroImage);
            $data->image=$imageName;
            }else{
                $data->image='default.jpg';
            }
            $data->name=$request->name;
            $data->title=$request->title;
            $data->background=$request->background;
            $data->fb=$request->fb;
            $data->tw=$request->tw;
            $data->yt=$request->yt;
            $data->li=$request->li;
            $data->save();
            Toastr::success('Hero Updated!','Success!');
            return redirect()->back();die;
        }
        return view('backend.pages.hero.add',compact('data'));
    }
}
