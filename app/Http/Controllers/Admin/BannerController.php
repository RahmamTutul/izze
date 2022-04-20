<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class BannerController extends Controller
{
    public function index(){
        $banners= Product::get();
        return view('backend.pages.banner.index')->with(compact('banners'));
    }
    public function create(){
        return view('backend.pages.banner.add');
    }
    public function store(Request $request){
        $data=new Banner;
        $request->validate([
            'image'=>'required|mimes:png,jpg,jpeg|max:5000',
            'alt'=>'required',
        ]);
        if($request->hasFile('image'))
        {

        $image=$request->file('image');
        $currentDate=Carbon::now()->toDateString();
        $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
        if(!Storage::disk('public')->exists('images/admin/banner/'.$data->image))
        {
           Storage::disk('public')->makeDirectory('images/admin/banner/'.$data->image);
        }
        $bannerImage = Image::make($image)->resize(1500,1000)->stream();
        Storage::disk('public')->put('images/admin/banner/'.$imageName,$bannerImage);
        $data->image=$imageName;
        }else{
            $imageName= "default.png";
        }
        $data->alt=$request->alt;
        $data->save();
        Toastr::success('Banner Uploaded!','Success!');
        return redirect('admin/banner/index');die;
    }

    public function edit($id){
        $banner=Banner::find($id);
        return view('backend.pages.banner.edit')->with(compact('banner'));
    }

    public function update(Request $request ,$id){
        $data=Banner::find($id);
        $request->validate([
           'alt'=>'required',
        ]);
        if($request->hasFile('image'))
        {

        $image=$request->file('image');
        $currentDate=Carbon::now()->toDateString();
        $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
        if(Storage::disk('public')->exists('images/admin/banner'))
        {
           Storage::disk('public')->makeDirectory('images/admin/banner');
        }
        if(Storage::disk('public')->exists('images/admin/banner/'.$data->image))
        {
           Storage::disk('public')->delete('images/admin/banner/'.$data->image);
        }
        $bannerImage = Image::make($image)->resize(1500,1000)->stream();
        Storage::disk('public')->put('images/admin/banner/'.$imageName,$bannerImage);
        $data->image=$imageName;
        }
        $data->alt=$request->alt;
        $data->save();
        Toastr::success('Banner Uploaded!','Success!');
        return redirect()->route('admin.banner.index');die;
    }
    public function delete($id){
        $data= Banner::find($id);
        if(Storage::disk('public')->exists('images/admin/banner/'.$data->image))
        {
           Storage::disk('public')->delete('images/admin/banner/'.$data->image);
        }
        $data->delete();
        Toastr::success('Banner Deleted!','Success!');
      return redirect()->back();die;
    }
}
