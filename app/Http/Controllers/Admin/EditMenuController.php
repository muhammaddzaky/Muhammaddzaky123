<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditMenuController extends Controller
{

    public function edit($id){
        $menu = Menu::whereId($id)->firstOrFail();
        dd($menu);
        $parents = Menu::all()->where('parent','=','0');
        return view('admin.edit-menu',compact('parents','menu'));
    }

    public function update($id,Request $request){

    }
}
