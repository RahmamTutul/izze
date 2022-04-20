<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class ServiceController extends Controller
{
    public function index(){
        $services= Service::get();
        return view('backend.pages.services.index')->with(compact('services'));
    }
    public function create(Request $request){
        if($request->isMethod('post')){
            $data=new Service;
            $request->validate([
                'name'=>'required',
                'details'=>'required',
            ]);
            $data->name=$request->name;
            $data->details=$request->details;
            $data->status=1;
            $data->save();
            Toastr::success('Uploaded!','Success!');
            return redirect('admin/services/index');die;
        }
        
        $items= Service::get();
        return view('backend.pages.services.add')->with(compact('items'));

    }

    public function Edit(Request $request, $id){
      $service= Service::find($id);
      if($request->isMethod('post')){
        $request->validate([
            'name'=>'required',
            'details'=>'required',
        ]);
       
        $service->name=$request->name;
        $service->details=$request->details;
        $service->status=1;
        $service->save();
       Toastr::success("Updated successfully!" ,'Success!');
       return redirect('admin/services/index');die;
      }
    return view('backend.pages.services.edit')->with(compact('service'));
    }
    public function updateServiceStatus(Request $request){
        if($request->ajax()){
            $data= $request->all();
            if($data['status']=='Active'){
                $status=0;
            }else{
                $status=1;
            }
            Service::where('id',$data['service_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'id'=>$data['service_id']]);
        }

    }
    public function delete($id){
        // Services::where('parent_id',$id)->delete();
        Service::find($id)->delete();
        Toastr::success("Deleted!",'Success!');
        return redirect('admin/services/index');die;
    }
}
