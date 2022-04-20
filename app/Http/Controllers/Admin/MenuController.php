<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        return view('backend.pages.menu.create',compact('menus','allMenus'));
    }

    public function store(Request $request)
    {
        $request->validate([
           'title' => 'required',
        ]);

        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        Menu::create($input);
        Toastr::success('Uploaded!','Success!');
        return redirect()->back();die;
    }

    public function show()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        return view('menu.dynamicMenu',compact('menus'));
    }
    public function delete($id)
    {
        Menu::where('parent_id', $id)->delete();
        Menu::where('id', $id)->delete();
        Toastr::success('Deleted Uploaded!','Success!');
        return redirect()->back();die;
    }
}
