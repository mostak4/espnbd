<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function sliderImage () {
        return view('admin.slider.slider');
    }
    public function saveSliderImage (Request $request) {
        //return $request->all();
        $sliderImage= $request->file('slider_image');

        $imageName = $sliderImage->getClientOriginalName();
        //return $imageName;
        $directory= 'slider-images/';
        $sliderImage->move($directory,$imageName);
        $imageUrl = $directory.$imageName;
        //return $imageUrl;
        $slider = new Slider ();
        $slider->slider_image = $imageUrl;
        $slider->publication_status = $request->publication_status;
        $slider->save();
        return redirect('/slider/image/add')->with('message' ,'Slider Image Save Success');


    }
    public function manageSliderImage () {
        $sliders= Slider::all();
        //return $sliders;
        return view('admin.slider.manage-slider-image',['sliders'=>$sliders]);

    }

    public function unpublishedSliderInfo ($id) {

        $slierById= Slider::find($id);
        $slierById->publication_status=0;
        $slierById->save();
        return redirect('/manage/slider/image');
    }
    public function publishedSliderInfo ($id) {

        $slierById= Slider::find($id);
        $slierById->publication_status=1;
        $slierById->save();
        return redirect('/manage/slider/image');
    }

    public function deleteSliderInfo($id){
        $slierById= Slider::find($id);
        $slierById->delete();
        return redirect('/manage/slider/image');
    }
}
