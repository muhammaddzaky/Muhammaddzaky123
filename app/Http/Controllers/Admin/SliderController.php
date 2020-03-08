<?php

namespace App\Http\Controllers\Admin;

use App\Notification;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider', compact('notification'));
    }

    public function destroy($id, Request $request)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect('/admin/slider')->with('status', 'با موفقیت حذف شد');
    }
}
