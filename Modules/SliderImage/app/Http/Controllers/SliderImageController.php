<?php

namespace Modules\SliderImage\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Modules\SliderImage\Models\SliderImage;
use Illuminate\Support\Str;

class SliderImageController extends Controller
{

    public function createSliderImage(Request $request){

        $data = $request->all();

        $request->validate([
            'slider_type' => 'required',
            'image' => 'required',
        ]);

        $slider = SliderImage::create([
            'slider_type' => $request->slider_type,
            'heading' => $request->heading,
            'content' => $request->content,
        ] );

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() . '_' . Str::random(18) .'.' . $file->getClientOriginalExtension();
            $filepath = $file->storeAs('sliders', $filename, 'public');

            Media::create([
                'mediable_type'=> SliderImage::class,
                'mediable_id'=> $slider->id,
                'file_name'=>   $filename,
                'file_path'=>    $filepath,
                'file_type'=>    $request->slider_type,
            ]);
        }

        notify()->success('Slider image uploaded successfully');
        return redirect()->back();

    }

    public function getSliderImage(){

        $data['slides'] = SliderImage::with('media')->latest()->get();

        return view('sliderimage::index', $data);

    }

    public function destroySliderImage(Request $request, $id){
    }

}
 